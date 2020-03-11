<?php

namespace App\Http\Controllers;

use App\Posts;
use App\Categories;
use App\Tags;
use App\User;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Input;

class PostsController extends Controller
{

    public function index()
    {
        if (Auth::user()->level == 1) {
            $posts =  Posts::latest()->paginate();
        } else {
            $posts =  Posts::where('users_id', '=', Auth::id())->latest()->paginate();
        }
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
            'title'     => 'required|min:13',
            'content'   => 'required',
            'thumbnail' => 'required|image|mimes:jpeg,png,jpg',
            'category'  => 'required'
        ]);

        $tmp_thumbnail =  time().$request->thumbnail->getClientOriginalName();
        
        Posts::create([
            'title' => $request->title,
            'content' => $request->content,
            'hits' => '1',
            'thumbnail' => 'upload/img/thumb/'.$tmp_thumbnail,
            'category_id' => $request->category,
            'slug' => Str::slug($request->title),
            'users_id' => Auth::id()
        ])->tags()->attach($request->tags);

        $request->thumbnail->move(public_path('upload/img/thumb/'), $tmp_thumbnail);

        return redirect()->route('webmanager.posts.index')->with('status', 'New Post Saved!');
    }

    public function edit($id)
    {
        $posts = Posts::findorfail($id);
        $categories =  Categories::all();
        $tags = Tags::all();

        return view('admin.posts.edit', compact('posts', 'categories','tags'));
    }


    public function update(Request $request, $id)
    {
        $posts = Posts::findorfail($id);

        $request->validate([
            'title'     => 'required|min:13',
            'content'   => 'required',
            'category'  => 'required'
        ]);

        if($request->has('thumbnail')){
            $tmp_thumbnail =  time().$request->thumbnail->getClientOriginalName();
            $request->thumbnail->move(public_path('upload/img/thumb/'), $tmp_thumbnail);

            $posts_data = [
                'title' => $request->title,
                'content' => $request->content,
                'thumbnail' => 'upload/img/thumb/'.$tmp_thumbnail,
                'category_id' => $request->category,
                'slug' => Str::slug($request->title)
            ];
        } else {
            $posts_data = [
                'title' => $request->title,
                'content' => $request->content,
                'category_id' => $request->category,
                'slug' => Str::slug($request->title)
            ];
        }
        $posts->tags()->sync($request->tags);
        $posts->update($posts_data);

        return redirect()->route('webmanager.posts.index')->with('status', 'Post Updated!');
    }


    public function destroy($id)
    {
        Posts::findorfail($id)->delete();

        return redirect()->back()->with('status', 'Post Archived!');
    }

    public function archived()
    {
        $posts = Posts::onlyTrashed()->paginate();

        return view('admin.posts.archived', compact('posts'));
    }

    public function restore($id)
    {
        Posts::withTrashed()->where('id', $id)->first()->restore();

        return redirect()->back()->with('status', 'Post Restored!');
    }

    public function clean($id)
    {
        Posts::withTrashed()->where('id', $id)->first()->forceDelete();

        return redirect()->back()->with('status', 'Post Permanently Cleaned!');
    }

    public function massclean()
    {
        Posts::withTrashed()->forceDelete();
        
        return redirect()->back()->with('status', 'Archive Cleaned!');

        //return redirect()->back()->with('status', 'Archive Cleaned!');
    }

}
