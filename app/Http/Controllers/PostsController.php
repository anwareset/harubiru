<?php

namespace App\Http\Controllers;

use App\Posts;
use App\Categories;
use App\Tags;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PostsController extends Controller
{

    public function index()
    {
        $posts =  Posts::paginate();
        return view('admin.posts.index', compact('posts'));
    }

    public function create()
    {
        $categories =  Categories::all();
        $tags = Tags::all();
        return view('admin.posts.create', compact('categories', 'tags'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title'     => 'required|min:15',
            'content'   => 'required',
            'thumbnail' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'category'  => 'required'
        ]);

        $tmp_thumbnail =  time().$request->thumbnail->getClientOriginalName();
        
        Posts::create([
            'title' => $request->title,
            'content' => $request->content,
            'thumbnail' => 'upload/img/thumb/'.$tmp_thumbnail,
            'category_id' => $request->category,
            'slug' => Str::slug($request->title)
        ])->tags()->attach($request->tags);

        $request->thumbnail->move(public_path('upload/img/thumb/'), $tmp_thumbnail);

        return redirect()->route('posts.index')->with('status', 'New Post Saved!');
    }


    public function show(Posts $posts)
    {
        //
    }


    public function edit(Posts $posts)
    {
        //
    }


    public function update(Request $request, Posts $posts)
    {
        //
    }


    public function destroy(Posts $posts)
    {
        //
    }
}
