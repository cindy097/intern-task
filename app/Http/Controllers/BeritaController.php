<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class BeritaController extends Controller
{
public function index()
    {
    $beritaUtama = News::latest()->first();
    $beritaLainnya = News::latest()->get()->skip(1); // FIXED: skip dipakai setelah get()

    return view('berita', compact('beritaUtama', 'beritaLainnya'));
    }
}
