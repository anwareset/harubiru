<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gallery;

class GalleryController extends Controller
{
    public function index()
    {
        $gallery =  Gallery::latest()->paginate();
        return view('admin.gallery.index', compact('gallery'));
    }

    public function create()
    {
        return view('admin.gallery.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'photo' => 'required|image|mimes:jpeg,png,jpg',
            'caption'  => 'required|min:15'
        ]);

        $tmp_photo =  time().$request->photo->getClientOriginalName();
        
        Gallery::create([
            'url' => 'upload/img/gallery/'.$tmp_photo,
            'caption' => $request->caption,
        ]);

        $request->photo->move(public_path('upload/img/gallery/'), $tmp_photo);

        return redirect()->route('webmanager.gallery.index')->with('status', 'New Photo Saved!');
    }

    public function edit($id)
    {
        $gallery = Gallery::findorfail($id);

        return view('admin.gallery.edit', compact('gallery'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'caption' => 'required|min:15'
        ]);

        $photo_data = [
            'caption' => $request->gallery,
        ];

        Gallery::whereId($id)->update($photo_data);

        return redirect()->route('webmanager.gallery.index')->with('status', 'Caption Updated!');
    }

    public function destroy($id)
    {
        $gallery = Gallery::findorfail($id);
        $gallery->delete();
        return redirect()->route('webmanager.gallery.index')->with('status', 'Photo Deleted!');
    }
}