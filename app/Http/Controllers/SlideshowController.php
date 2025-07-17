<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slideshow;

class SlideshowController extends Controller
{
    // Jika kamu ingin pakai index tersendiri (bisa dihapus kalau hanya gabung di galeri)
    public function index()
    {
        $slideshows = Slideshow::latest()->get();
        return view('admin.galleries.slideshow.index', compact('slideshows'));
    }

    // Menampilkan form tambah slideshow
    public function create()
    {
        return view('admin.galleries.slideshow.create');
    }

    // Simpan slideshow baru
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $imagePath = $request->file('image')->store('slideshows', 'public');

        Slideshow::create([
            'title' => $request->title,
            'image' => $imagePath,
        ]);

        return redirect()->route('admin.galleries.index')->with('success', 'Slideshow berhasil ditambahkan.');
    }

    // Menampilkan form edit
    public function edit(Slideshow $slideshow)
    {
        return view('admin.galleries.slideshow.edit', compact('slideshow'));
    }

    // Simpan perubahan slideshow
    public function update(Request $request, Slideshow $slideshow)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $imagePath = $slideshow->image;

        if ($request->hasFile('image')) {
            if ($imagePath && file_exists(storage_path('app/public/' . $imagePath))) {
                unlink(storage_path('app/public/' . $imagePath));
            }

            $imagePath = $request->file('image')->store('slideshows', 'public');
        }

        $slideshow->update([
            'title' => $request->title,
            'image' => $imagePath,
        ]);

        return redirect()->route('admin.galleries.index')->with('success', 'Slideshow berhasil diperbarui.');
    }

    // Hapus slideshow
    public function destroy(Slideshow $slideshow)
    {
        if ($slideshow->image && file_exists(storage_path('app/public/' . $slideshow->image))) {
            unlink(storage_path('app/public/' . $slideshow->image));
        }

        $slideshow->delete();

        return redirect()->route('admin.galleries.index')->with('success', 'Slideshow berhasil dihapus.');
    }
}
