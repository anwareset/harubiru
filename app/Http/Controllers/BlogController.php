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
        $widgets =  Posts::orderBy('hits', 'desc')->take(5)->get();
    	$categories = Categories::get();
    	$tags = Tags::get();
        return view('front.blog.articles', compact('articles', 'widgets', 'categories', 'tags'));
    }

    public function show($slug)
    {
    	$articles =  Posts::latest()->paginate(3);
        $widgets =  Posts::orderBy('hits', 'desc')->take(5)->get();
        $categories = Categories::get();
        $tags = Tags::get();
    	$contents = Posts::where('slug', $slug)->get();
        $previousPost = Posts::where('id', '<', $contents[0]->id)->orderBy('id','desc')->first();
        $nextPost = Posts::where('id', '>', $contents[0]->id)->orderBy('id','asc')->first();
        Posts::where('slug', $slug)->increment('hits');
        return view('front.blog.article-details', compact('contents', 'widgets', 'articles', 'categories', 'tags', 'nextPost', 'previousPost'));
    }

    public function search(Request $request)
    {
        $searchQuery = strtolower($request->search);
        $articles =  Posts::whereRaw('lower(title) like (?)', ["%{$searchQuery}%"])->latest()->paginate(3);
        $widgets =  Posts::orderBy('hits', 'desc')->take(5)->get();
        $categories = Categories::get();
        $tags = Tags::get();
        return view('front.blog.articles', compact('articles', 'widgets', 'categories', 'tags'));
    }

    public function category($slug)
    {
        $categoryId = Categories::where('slug', $slug)->get();
        $articles =  Posts::where('category_id', $categoryId[0]->id)->latest()->paginate(3);
        $widgets =  Posts::orderBy('hits', 'desc')->take(5)->get();
        $categories = Categories::get();
        $tags = Tags::get();
        return view('front.blog.articles', compact('articles', 'widgets', 'categories', 'tags'));
    }
}
