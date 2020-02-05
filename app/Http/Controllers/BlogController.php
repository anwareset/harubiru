<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Posts;
use App\Categories;
use App\Tags;

class BlogController extends Controller
{
    public function index()
    {
    	$articles =  Posts::latest()->paginate(5);
    	$categories = Categories::get();
    	$tags = Tags::get();
        return view('front.blog.articles', compact('articles', 'categories', 'tags'));
    }
    public function show($slug)
    {
    	$articles =  Posts::latest()->paginate(5);
    	$contents = Posts::where('slug', $slug)->get();
    	$categories = Categories::get();
    	$tags = Tags::get();
        return view('front.blog.article-details', compact('contents', 'articles', 'categories', 'tags'));
    }
}
