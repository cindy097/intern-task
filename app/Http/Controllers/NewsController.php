<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\News;
use App\Models\Category;
use Illuminate\Http\Request;

class NewsController extends Controller
{
public function index(Request $request)
{
    $isMobile = $request->header('User-Agent') && str_contains($request->header('User-Agent'), 'Mobile');

    // Tentukan jumlah item per halaman
    $perPage = $isMobile ? 5 : 10;

    $news = News::with('category')->latest()->paginate($perPage);

    return view('admin.news.index', compact('news'));
}
    public function create()
    {
        $categories = Category::all();
        return view('admin.news.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'category_id' => 'required|exists:categories,id',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $imagePath = null;
        if ($request->hasFile('image')) {
        $imagePath = $request->file('image')->store('news', 'public');
        }


        News::create([
            'title' => $request->title,
            'content' => $request->content,
            'category_id' => $request->category_id,
            'image' => $imagePath,
        ]);

        return redirect()->route('admin.news.index')->with('success', 'Berita berhasil ditambahkan.');
    }

    public function edit(News $news)
    {
        $categories = Category::all();
        return view('admin.news.edit', compact('news', 'categories'));
    }

    public function update(Request $request, News $news)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'category_id' => 'required|exists:categories,id',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $imagePath = $news->image;

        if ($request->hasFile('image')) {
            if ($imagePath && file_exists(storage_path('app/public/' . $imagePath))) {
                unlink(storage_path('app/public/' . $imagePath));
            }
            $imagePath = $request->file('image')->store('news', 'public');
        }

        $news->update([
            'title' => $request->title,
            'content' => $request->content,
            'category_id' => $request->category_id,
            'image' => $imagePath,
        ]);

        return redirect()->route('admin.news.index')->with('success', 'Berita berhasil diperbarui.');
    }
public function show($id)
{
    $news = News::with('category')->findOrFail($id); // Ambil berita berdasarkan ID + kategori
    return view('berita.show', compact('news')); // Kirim ke file show.blade.php
}
    public function destroy(News $news)
    {
        if ($news->image && file_exists(storage_path('app/public/' . $news->image))) {
            unlink(storage_path('app/public/' . $news->image));
        }

        $news->delete();
        return redirect()->route('admin.news.index')->with('success', 'Berita berhasil dihapus.');
    }
}
