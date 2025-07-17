<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\Slideshow;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    // Tampilkan halaman index gabungan slideshow + gallery
    public function index()
    {
        $slideshows = Slideshow::latest()->get();
        $gallery = Gallery::latest()->get();
        return view('admin.galleries.index', compact('slideshows', 'gallery'));
    }

    // Tampilkan form tambah galeri
    public function create()
    {
        return view('admin.galleries.gallery.create');
    }

    // Simpan data galeri baru
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $imagePath = $request->file('image')->store('gallery', 'public');

        Gallery::create([
            'title' => $request->title,
            'image' => $imagePath,
        ]);

        return redirect()->route('admin.galleries.index')->with('success', 'Galeri berhasil ditambahkan.');
    }

    // Tampilkan form edit galeri
    public function edit(Gallery $gallery)
    {
        return view('admin.galleries.gallery.edit', compact('gallery'));
    }

    // Update data galeri
    public function update(Request $request, Gallery $gallery)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $imagePath = $gallery->image;

        if ($request->hasFile('image')) {
            if ($imagePath && file_exists(storage_path('app/public/' . $imagePath))) {
                unlink(storage_path('app/public/' . $imagePath));
            }

            $imagePath = $request->file('image')->store('gallery', 'public');
        }

        $gallery->update([
            'title' => $request->title,
            'image' => $imagePath,
        ]);

        return redirect()->route('admin.galleries.index')->with('success', 'Galeri berhasil diperbarui.');
    }

    // Hapus data galeri
    public function destroy(Gallery $gallery)
    {
        if ($gallery->image && file_exists(storage_path('app/public/' . $gallery->image))) {
            unlink(storage_path('app/public/' . $gallery->image));
        }

        $gallery->delete();

        return redirect()->route('admin.galleries.index')->with('success', 'Galeri berhasil dihapus.');
    }
}
