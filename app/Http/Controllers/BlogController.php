<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Posts;
use App\Categories;
use App\Tags;

class BlogController extends Controller
{
    public function index()
    {
    	$articles =  Posts::latest()->paginate(3);
        $widgets =  Posts::latest()->take(5)->get();
    	$categories = Categories::get();
    	$tags = Tags::get();
        return view('front.blog.articles', compact('articles', 'widgets', 'categories', 'tags'));
    }
    public function show($slug)
    {
    	$articles =  Posts::latest()->paginate(3);
        $widgets =  Posts::latest()->take(5)->get();
        $categories = Categories::get();
        $tags = Tags::get();

    	$contents = Posts::where('slug', $slug)->get();
        //$idPost = Posts::select('id')->where('slug', $slug)->get();
    	
        $previousPost = Posts::where('id', '<', $contents[0]->id)->orderBy('id','desc')->first();
        $nextPost = Posts::where('id', '>', $contents[0]->id)->orderBy('id','asc')->first();

        return view('front.blog.article-details', compact('contents', 'widgets', 'articles', 'categories', 'tags', 'nextPost', 'previousPost'));
    }
}
