<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use App\Models\Category;

class BeritaController extends Controller
{
    public function index(Request $request)
    {
        $categories = Category::all();

        // Ambil berita terbaru (berita utama)
        $beritaUtama = News::latest()->first();

        // Ambil berita lainnya
        $beritaLainnya = News::latest();

        // Kalau ada filter kategori
        if ($request->has('category')) {
            $beritaLainnya = $beritaLainnya->where('category_id', $request->category);
        } else {
            // Hanya skip berita utama kalau tidak sedang filter
            $beritaLainnya = $beritaLainnya->where('id', '!=', $beritaUtama->id);
        }

        $beritaLainnya = $beritaLainnya->get();

        return view('berita', compact('beritaUtama', 'beritaLainnya', 'categories'));
    }
}
