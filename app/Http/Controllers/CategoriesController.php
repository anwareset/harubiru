<?php

namespace App\Http\Controllers;

use App\Categories;
use App\Sites;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoriesController extends Controller
{

    public function index()
    {
        $categories =  Categories::paginate();
        $sites = Sites::first();
        return view('admin.categories.index', compact('categories', 'sites'));
    }


    public function create()
    {
        $sites = Sites::first();
        return view('admin.categories.create', 'sites');
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3'
        ]);
        
        Categories::create([
            'name' => $request->name,
            'slug' => Str::slug($request->name)
        ]);

        return redirect()->back()->with('success', 'New Category Saved!');
    }

    public function show(Categories $categories)
    {
        //
    }


    public function edit($id)
    {
        $sites = Sites::first();
        $category = Categories::findorfail($id);
        return view('admin.categories.edit', compact('category', 'sites'));
    }


    public function update(Request $request, $id)
    {
        $this->validate($request, [
        	'name' => 'required|min:3'
        ]);

        $category_data = [
        	'name' => $request->name,
        	'slug' => Str::slug($request->name)
        ];

        Categories::whereId($id)->update($category_data);

        return redirect()->route('categories.index')->with('status', 'Category Updated!');
    }


    public function destroy($id)
    {
    	$category = Categories::findorfail($id);
    	$category->delete();
        return redirect()->route('categories.index')->with('status', 'Category Deleted!');
    }
}
