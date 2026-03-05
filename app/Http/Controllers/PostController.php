<?php

namespace App\Http\Controllers;

use App\Models\Post; 
use Illuminate\View\View;
use Illuminate\Http\Request;



class PostController extends Controller
{
    // Add this specific method!
    public function index()
    {
        $posts = Post::all();
        return view('post', compact('posts'));
    }

    // Your store method likely follows below...
    public function store(Request $request)
    {
        // ... storage logic
    }
}

