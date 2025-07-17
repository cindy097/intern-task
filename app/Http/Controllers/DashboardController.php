<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Gallery;
use App\Models\Slideshow;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $totalNews = News::count();
        $totalGallery = Gallery::count();
        $totalSlideshow = Slideshow::count();
        $totalMedia = $totalGallery + $totalSlideshow;

        return view('admin.dashboard', compact(
            'totalNews',
            'totalGallery',
            'totalSlideshow',
            'totalMedia'
        ));
    }
}
