<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Agent;
use App\Models\Lead;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AgentController extends Controller
{
    public function register(Request $request)
    {
        $request->validate([
            'full_name'         => 'required|string|max:255',
            'phone_number'      => 'required|string|max:50',
            'email'             => 'required|email|max:255|unique:users,email',
            'occupation'        => 'required|string|max:255',
            'region'            => 'required|string|max:100',
            'district'          => 'required|string|max:100',
            'preferred_package' => 'required|string',
            'password'          => 'required|string|min:6',
        ]);

        $user = User::create([
            'name'     => $request->full_name,
            'email'    => $request->email,
            'password' => Hash::make($request->password),
            'role'     => 'agent',
        ]);

        Agent::create([
            'user_id'            => $user->id,
            'full_name'          => $request->full_name,
            'phone_number'       => $request->phone_number,
            'email'              => $request->email,
            'region'             => $request->region,
            'district'           => $request->district,
            'occupation'         => $request->occupation,
            'preferred_package'  => $request->preferred_package,
            'subscription_status' => 'pending',
        ]);

        // Auto-login so they can activate subscription
        Auth::login($user);

        return redirect()->route('agent.subscription')->with('success', 'Account created! Please complete the Mobile Money subscription payment below to activate your agent account.');
    }

    /*
    |--------------------------------------------------------------------------
    | Agent Dashboard (real DB)
    |--------------------------------------------------------------------------
    */
    public function dashboard()
    {
        $agent = auth()->user()->agent;

        if (!$agent) {
            Auth::logout();
            return redirect()->route('login')->with('error', 'Agent record not found.');
        }

        $leads         = $agent->leads()->latest()->get();
        $approvedLeads = $leads->where('status', 'Approved');
        $commissionEarned = $approvedLeads->count() * 35000;

        return view('agent.dashboard', [
            'agent'         => $agent,
            'total_leads'   => $leads->count(),
            'approved_leads' => $approvedLeads->count(),
            'commission'    => number_format($commissionEarned) . ' TZS',
            'leads'         => $leads->take(5),
        ]);
    }

    /*
    |--------------------------------------------------------------------------
    | Subscription Management
    |--------------------------------------------------------------------------
    */
    public function subscription()
    {
        $agent = auth()->user()->agent;
        return view('agent.subscription', compact('agent'));
    }

    public function activateSubscription(Request $request)
    {
        $agent = auth()->user()->agent;

        if (!$agent) {
            return back()->with('error', 'Agent not found.');
        }

        $days = match ($agent->preferred_package) {
            'weekly'     => 7,
            'six_months' => 180,
            'annual'     => 365,
            default      => 30,
        };

        $agent->update([
            'subscription_status'    => 'active',
            'subscription_expires_at' => now()->addDays($days),
        ]);

        return redirect()->route('agent.dashboard')->with('success', 'Mobile Money payment simulated successfully! Your Agent account is now Active.');
    }

    /*
    |--------------------------------------------------------------------------
    | Leads (real DB)
    |--------------------------------------------------------------------------
    */
    public function leads()
    {
        $agent = auth()->user()->agent;
        $leads = $agent->leads()->latest()->get();

        return view('agent.leads', compact('leads'));
    }

    public function storeLead(Request $request)
    {
        $request->validate([
            'business_name' => 'required|string|max:255',
            'owner_name'    => 'required|string|max:255',
            'phone'         => 'required|string|max:50',
            'category'      => 'required|string',
        ]);

        $agent = auth()->user()->agent;

        Lead::create([
            'agent_id'      => $agent->id,
            'business_name' => $request->business_name,
            'owner_name'    => $request->owner_name,
            'phone'         => $request->phone,
            'category'      => $request->category,
            'status'        => 'Pending',
        ]);

        return back()->with('success', 'Lead registered successfully. You will earn commission when admin approves this vendor.');
    }
}
