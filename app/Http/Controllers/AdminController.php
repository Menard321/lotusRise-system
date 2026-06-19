<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Vendor;
use App\Models\Agent;
use App\Models\Inquiry;
use App\Models\Project;
use App\Models\BlogPost;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    // Middleware is configured at the route level in routes/web.php

    public function dashboard()
    {
        $totalVendors = Vendor::count();
        $totalAgents = Agent::count();
        $totalInquiries = Inquiry::count();
        $totalUsers = User::count();
        
        $recentInquiries = Inquiry::latest()->take(5)->get();

        return view('admin.dashboard', [
            'total_vendors' => $totalVendors,
            'total_agents' => $totalAgents,
            'total_inquiries' => $totalInquiries,
            'total_users' => $totalUsers,
            'recent_inquiries' => $recentInquiries
        ]);
    }

    /*
    |--------------------------------------------------------------------------
    | Vendor Approvals
    |--------------------------------------------------------------------------
    */
    public function vendors()
    {
        $vendors = Vendor::latest()->get();
        return view('admin.vendors', compact('vendors'));
    }

    public function updateVendorStatus(Request $request, $id)
    {
        $request->validate(['status' => 'required|string']);
        $vendor = Vendor::findOrFail($id);
        $vendor->update(['status' => $request->status]);

        return back()->with('success', 'Vendor status updated to ' . $request->status);
    }

    /*
    |--------------------------------------------------------------------------
    | Agent Approvals & Subscriptions
    |--------------------------------------------------------------------------
    */
    public function agents()
    {
        $agents = Agent::latest()->get();
        return view('admin.agents', compact('agents'));
    }

    public function updateAgentSubscription(Request $request, $id)
    {
        $request->validate(['status' => 'required|string']);
        $agent = Agent::findOrFail($id);
        
        $expires = $request->status === 'active' ? now()->addMonth() : null;
        
        $agent->update([
            'subscription_status' => $request->status,
            'subscription_expires_at' => $expires
        ]);

        return back()->with('success', 'Agent subscription status updated to ' . $request->status);
    }

    /*
    |--------------------------------------------------------------------------
    | Inquiry Resolutions
    |--------------------------------------------------------------------------
    */
    public function inquiries()
    {
        $inquiries = Inquiry::latest()->get();
        return view('admin.inquiries', compact('inquiries'));
    }

    public function resolveInquiry(Request $request, $id)
    {
        $inquiry = Inquiry::findOrFail($id);
        $inquiry->update(['status' => 'resolved']);

        return back()->with('success', 'Inquiry marked as resolved.');
    }

    /*
    |--------------------------------------------------------------------------
    | CRUD Portfolio Management
    |--------------------------------------------------------------------------
    */
    public function portfolio()
    {
        $projects = Project::all();
        return view('admin.portfolio.index', compact('projects'));
    }

    public function portfolioCreate()
    {
        return view('admin.portfolio.create');
    }

    public function portfolioStore(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'category' => 'required|string',
            'description' => 'required|string',
            'case_study' => 'nullable|string',
        ]);

        Project::create([
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'category' => $request->category,
            'description' => $request->description,
            'case_study' => $request->case_study,
        ]);

        return redirect()->route('admin.portfolio')->with('success', 'Project created successfully.');
    }

    public function portfolioEdit($id)
    {
        $project = Project::findOrFail($id);
        return view('admin.portfolio.edit', compact('project'));
    }

    public function portfolioUpdate(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'category' => 'required|string',
            'description' => 'required|string',
            'case_study' => 'nullable|string',
        ]);

        $project = Project::findOrFail($id);
        $project->update([
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'category' => $request->category,
            'description' => $request->description,
            'case_study' => $request->case_study,
        ]);

        return redirect()->route('admin.portfolio')->with('success', 'Project updated successfully.');
    }

    public function portfolioDestroy(Request $request, $id)
    {
        $project = Project::findOrFail($id);
        $project->delete();

        return redirect()->route('admin.portfolio')->with('success', 'Project deleted successfully.');
    }

    /*
    |--------------------------------------------------------------------------
    | CRUD Blog Management
    |--------------------------------------------------------------------------
    */
    public function blog()
    {
        $posts = BlogPost::latest()->get();
        return view('admin.blog.index', compact('posts'));
    }

    public function blogCreate()
    {
        return view('admin.blog.create');
    }

    public function blogStore(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'category' => 'required|string',
            'excerpt' => 'required|string|max:500',
            'content' => 'required|string',
            'seo_title' => 'nullable|string',
            'seo_description' => 'nullable|string',
        ]);

        BlogPost::create([
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'category' => $request->category,
            'excerpt' => $request->excerpt,
            'content' => $request->content,
            'seo_title' => $request->seo_title,
            'seo_description' => $request->seo_description,
            'status' => 'published',
        ]);

        return redirect()->route('admin.blog')->with('success', 'Blog article published successfully.');
    }

    public function blogEdit($id)
    {
        $post = BlogPost::findOrFail($id);
        return view('admin.blog.edit', compact('post'));
    }

    public function blogUpdate(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'category' => 'required|string',
            'excerpt' => 'required|string|max:500',
            'content' => 'required|string',
            'seo_title' => 'nullable|string',
            'seo_description' => 'nullable|string',
        ]);

        $post = BlogPost::findOrFail($id);
        $post->update([
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'category' => $request->category,
            'excerpt' => $request->excerpt,
            'content' => $request->content,
            'seo_title' => $request->seo_title,
            'seo_description' => $request->seo_description,
        ]);

        return redirect()->route('admin.blog')->with('success', 'Blog article updated successfully.');
    }

    public function blogDestroy(Request $request, $id)
    {
        $post = BlogPost::findOrFail($id);
        $post->delete();

        return redirect()->route('admin.blog')->with('success', 'Blog article deleted successfully.');
    }
}
