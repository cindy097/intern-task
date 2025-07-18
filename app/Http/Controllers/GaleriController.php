<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery;
use App\Models\Slideshow;

class GaleriController extends Controller
{
    public function index()
    {
        $slides = Slideshow::latest()->get(); // data slideshow
        $galeri = Gallery::latest()->get();   // data galeri biasa

        return view('galeri', compact('slides', 'galeri'));
    }
}
