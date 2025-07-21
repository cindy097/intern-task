<x-layout.detail-layout :title="$news->title">
  <div class="max-w-4xl mx-auto">

    {{-- Judul --}}
    <h1 class="text-3xl font-bold mb-4">{{ $news->title }}</h1>

    {{-- Tanggal dan Kategori --}}
    <div class="text-sm text-gray-500 mb-6">
      <span>{{ $news->created_at->translatedFormat('d F Y') }}</span> &bullet;
      <span class="text-amber-600 font-semibold">{{ $news->category->name }}</span>
    </div>

    {{-- Gambar Utama --}}
    @if($news->image)
      <img src="{{ asset('storage/' . $news->image) }}" alt="{{ $news->title }}"
           class="rounded-lg shadow-md mb-6 w-full max-h-[450px] object-cover">
    @endif

    {{-- Konten --}}
    <div class="prose max-w-none prose-img:rounded-lg prose-p:leading-relaxed">
      {!! nl2br(e($news->content)) !!}
    </div>

    {{-- Tombol Kembali --}}
    <div class="mt-10">
      <a href="{{ route('berita') }}"
         class="inline-block bg-gray-200 hover:bg-gray-300 text-gray-800 px-5 py-2 rounded-lg text-sm font-medium transition">
        ← Kembali ke Berita
      </a>
    </div>
  </div>
</x-layout.detail-layout>
