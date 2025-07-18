<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Gallery;
use App\Models\Slideshow;
use App\Models\Message; // ⬅️ tambahkan ini
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $totalNews = News::count();
        $totalGallery = Gallery::count();
        $totalSlideshow = Slideshow::count();
        $totalMedia = $totalGallery + $totalSlideshow;
        $totalMessages = Message::count();

        return view('admin.dashboard', compact(
            'totalNews',
            'totalGallery',
            'totalSlideshow',
            'totalMedia',
            'totalMessages'
        ));
    }
}
