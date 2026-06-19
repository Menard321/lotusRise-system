<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BlogPost;

class BlogController extends Controller
{
    public function index(Request $request)
    {
        $category = $request->query('category');
        
        $query = BlogPost::where('status', 'published');
        
        if ($category) {
            $query->where('category', $category);
        }
        
        $posts = $query->latest()->get();
        
        $categories = BlogPost::where('status', 'published')
            ->distinct()
            ->pluck('category');

        return view('blog.index', compact('posts', 'categories', 'category'));
    }

    public function show($slug)
    {
        $post = BlogPost::where('slug', $slug)->where('status', 'published')->firstOrFail();
        
        $related = BlogPost::where('slug', '!=', $slug)
            ->where('category', $post->category)
            ->where('status', 'published')
            ->take(3)
            ->get();

        return view('blog.show', compact('post', 'related'));
    }
}
