@extends('layouts.template')
@section('content')
    <section id="page-berita" class="page-section">
        <div class="bg-gradient-to-r from-brand-900 to-slate-900 text-white py-12">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <h1 class="text-3xl font-bold">Berita Kegiatan Sekolah</h1>
                <p class="text-indigo-200 text-sm mt-1">Publikasi artikel berita, liputan acara, dan pengumuman (`berita` schema)</p>
            </div>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <!-- Search Filter Bar -->
            <div class="bg-white p-4 rounded-2xl shadow-sm border border-slate-200 mb-8 flex flex-col md:flex-row gap-4 items-center justify-between">
                <div class="relative w-full md:w-96">
                    <i class="fa-solid fa-magnifying-glass absolute left-3.5 top-1/2 -translate-y-1/2 text-slate-400"></i>
                    <input type="text" id="news-search-input" onkeyup="filterBerita()" placeholder="Cari judul berita..." class="w-full pl-10 pr-4 py-2.5 rounded-xl border border-slate-200 text-sm focus:outline-none focus:border-brand-500">
                </div>
                <div class="text-xs text-slate-500 font-medium">
                    Menampilkan <span id="news-count" class="font-bold text-slate-800">0</span> Artikel Berita
                </div>
            </div>

            <!-- News Grid Container -->
            <div id="berita-grid-container" class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Dynamic News Items Injection -->
            </div>
        </div>
    </section>
@endsection