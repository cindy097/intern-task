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
    $beritaUtama = News::latest()->first();

    $beritaLainnya = News::latest();

    if ($request->has('category')) {
        $beritaLainnya = $beritaLainnya->where('category_id', $request->category);
    } else {
        $beritaLainnya = $beritaLainnya->where('id', '!=', $beritaUtama->id);
    }

    // Detect mobile
    $isMobile = $request->header('User-Agent') && preg_match('/mobile/i', $request->header('User-Agent'));
    $initialLimit = $isMobile ? 6 : 8;

    // ⬇️ Gunakan take($initialLimit)
    $beritaLainnya = $beritaLainnya->take($initialLimit)->get();

    return view('berita', compact('beritaUtama', 'beritaLainnya', 'categories', 'initialLimit'));
}
 public function json(Request $request)
{
    $offset = $request->get('offset', 0);
    $limit = $request->get('limit', 8);

    $query = News::latest();

    if ($request->has('category')) {
        $query->where('category_id', $request->category);
    } else {
        $utama = News::latest()->first();
        if ($utama) {
            $query->where('id', '!=', $utama->id);
        }
    }

    return response()->json($query->skip($offset)->take($limit)->get());
}
}
