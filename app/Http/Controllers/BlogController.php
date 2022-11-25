<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    public function index()
    {
        $Blog = Blog::orderBy('id', 'desc')->paginate(10);   
        return  view('blog.index', compact('Blog'));
    }

    public function show(Blog $Blog)
    {
        return view('blog.blogshow', compact('Blog'));
    }
    
}
