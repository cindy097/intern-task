<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use App\Models\Gallery;

class HomeController extends Controller
{
    public function index()
    {
    $berita = News::latest()->take(5)->get(); // Ambil 5 berita terbaru
    $galeri = Gallery::latest()->take(6)->get(); // Ambil 6 foto galeri terbaru

    return view('welcome', compact('berita', 'galeri'));
    }

}
