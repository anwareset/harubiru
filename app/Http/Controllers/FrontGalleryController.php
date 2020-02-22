<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gallery;

class FrontGalleryController extends Controller
{
    public function index()
    {
    	$gallery =  Gallery::latest()->paginate();
    	return view('front.galeri', compact('gallery'));
    }
}
