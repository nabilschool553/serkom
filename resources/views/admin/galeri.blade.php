@extends('layouts.template')
@section('content')
    <section id="page-galeri" class="page-section">
        <div class="bg-gradient-to-r from-slate-900 to-indigo-950 text-white py-12">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <h1 class="text-3xl font-bold">Galeri Foto & Video</h1>
                <p class="text-slate-300 text-sm mt-1">Koleksi dokumentasi visual kegiatan sekolah (`galeri` schema)</p>
            </div>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <!-- Filter Category Tabs -->
            <div class="flex justify-center mb-8">
                <div class="bg-slate-200/80 p-1.5 rounded-2xl flex space-x-2 text-sm">
                    <button onclick="filterGaleriCategory('Semua')" id="btn-gal-semua" class="gal-cat-btn px-5 py-2 rounded-xl font-medium transition bg-white text-slate-900 shadow-sm">Semua</button>
                    <button onclick="filterGaleriCategory('Foto')" id="btn-gal-foto" class="gal-cat-btn px-5 py-2 rounded-xl font-medium transition text-slate-600 hover:text-slate-900">Foto</button>
                    <button onclick="filterGaleriCategory('Video')" id="btn-gal-video" class="gal-cat-btn px-5 py-2 rounded-xl font-medium transition text-slate-600 hover:text-slate-900">Video</button>
                </div>
            </div>

            <!-- Gallery Grid -->
            <div id="galeri-grid-container" class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                <!-- Dynamic Gallery Injected -->
            </div>
        </div>
    </section>
@endsection