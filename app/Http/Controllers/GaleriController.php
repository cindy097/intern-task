<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery;
use App\Models\Slideshow;

class GaleriController extends Controller
{
public function index(Request $request)
{
    $slides = Slideshow::latest()->get();

    // Deteksi mobile
    $isMobile = $request->header('User-Agent') && preg_match('/mobile/i', $request->header('User-Agent'));
    $initialLimit = $isMobile ? 6 : 8;

    $galeri = Gallery::latest()->take($initialLimit)->get();

    return view('galeri', compact('slides', 'galeri', 'initialLimit'));
}
public function json(Request $request)
{
    $offset = $request->get('offset', 0);
    $limit = $request->get('limit', 8); // default desktop

    $galeri = Gallery::latest()->skip($offset)->take($limit)->get();

    return response()->json($galeri);
}

}
