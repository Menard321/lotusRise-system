<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Career;
use App\Models\Application;
use App\Models\Vendor;
use App\Models\Agent;
use Illuminate\Support\Facades\Storage;

class PagesController extends Controller
{
    public function home()
    {
        $projects = Project::take(4)->get();
        
        // Dynamic counts combined with baseline statistics from reference design
        $counts = [
            'customers' => '10,000+',
            'vendors' => (500 + Vendor::where('status', 'approved')->count()) . '+',
            'countries' => '50+',
            'deliveries' => (1000 + Vendor::count() * 12) . '+',
            'transactions' => 'TZS 1B+',
        ];

        return view('home', compact('projects', 'counts'));
    }

    public function about()
    {
        $faqs = [
            [
                'q' => 'What is LotusRise Global?',
                'a' => 'LotusRise Global is an integrated digital ecosystem in Tanzania connecting customers, wholesale vendors, logistics providers, and local agents to simplify trade, procurement, and deliveries.'
            ],
            [
                'q' => 'How does the Kariakoo Sourcing service work?',
                'a' => 'Customers select items or list procurement needs. Our local procurement specialists source the exact items from verified Kariakoo wholesalers, consolidate packages, and coordinate direct regional transport.'
            ],
            [
                'q' => 'Who are LotusRise Agents?',
                'a' => 'Agents are independent entrepreneurs across Tanzania who act as localized points of trust, helping customers place orders, validating local vendors, and earning commissions on completed transactions.'
            ],
            [
                'q' => 'Is my payment secure on the platform?',
                'a' => 'Yes, LotusRise utilizes secure Escrow transaction mechanisms. Payments are only released to vendors and delivery partners once the customer receives and verifies the ordered items.'
            ],
        ];

        $team = [
            ['name' => 'Menard L. Rose', 'role' => 'Chief Executive Officer', 'image' => 'https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?auto=format&fit=crop&q=80&w=300&h=300'],
            ['name' => 'Fatuma Bakari', 'role' => 'Director of Logistics & Operations', 'image' => 'https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?auto=format&fit=crop&q=80&w=300&h=300'],
            ['name' => 'Emmanuel Minja', 'role' => 'Head of Technology & Product', 'image' => 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&q=80&w=300&h=300'],
        ];

        return view('about', compact('faqs', 'team'));
    }

    public function services()
    {
        return view('services');
    }

    public function vendors()
    {
        return view('vendors');
    }

    public function agents()
    {
        $packages = [
            [
                'id' => 'weekly',
                'name' => 'Weekly Package',
                'price' => 'TZS 10,000',
                'period' => 'week',
                'features' => ['Access to Vendor Leads', 'Standard Support', 'Basic Earnings Reports']
            ],
            [
                'id' => 'monthly',
                'name' => 'Monthly Package',
                'price' => 'TZS 35,000',
                'period' => 'month',
                'features' => ['Access to All Leads', 'Priority Training Access', 'Standard Commission Rates', 'Basic Digital Tools']
            ],
            [
                'id' => 'six_months',
                'name' => 'Six Months Package',
                'price' => 'TZS 180,000',
                'period' => '6 months',
                'features' => ['All Lead Management Tools', 'Direct Support Hotline', 'Advanced Sales Training', 'Bonus Commission Tiers', 'Marketing Templates']
            ],
            [
                'id' => 'annual',
                'name' => 'Annual Package',
                'price' => 'TZS 320,000',
                'period' => 'year',
                'features' => ['Unlimited Features', 'Dedicated Partner Manager', 'VVIP Network Access', 'Maximum Commission Multipliers', 'Custom Co-branded Assets']
            ]
        ];

        return view('agents', compact('packages'));
    }

    public function portfolio()
    {
        $projects = Project::all();
        return view('portfolio', compact('projects'));
    }

    public function careers()
    {
        $careers = Career::where('status', 'open')->get();
        return view('careers', compact('careers'));
    }

    public function apply(Request $request)
    {
        $request->validate([
            'career_id' => 'required|exists:careers,id',
            'full_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'resume' => 'required|file|mimes:pdf,doc,docx|max:4096',
            'cover_letter' => 'required|string',
        ]);

        $resumePath = null;
        if ($request->hasFile('resume')) {
            $resumePath = $request->file('resume')->store('resumes', 'public');
        }

        Application::create([
            'career_id' => $request->career_id,
            'full_name' => $request->full_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'resume_path' => $resumePath,
            'cover_letter' => $request->cover_letter,
        ]);

        return back()->with('success', 'Your application has been submitted successfully. Our HR team will get in touch soon.');
    }

    public function contact()
    {
        return view('contact');
    }
}
