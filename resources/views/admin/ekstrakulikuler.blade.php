@extends('layouts.template')
@section('admin.profile')
    <section id="page-ekskul" class="page-section">
        <div class="bg-gradient-to-r from-purple-900 to-indigo-900 text-white py-12">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <h1 class="text-3xl font-bold">Ekstrakurikuler</h1>
                <p class="text-purple-200 text-sm mt-1">Wadah pengembangan minat, bakat, dan kepemimpinan siswa (`ekstrakurikuler` schema)</p>
            </div>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <div id="ekskul-grid-container" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Dynamic Ekskul Cards Injection -->
            </div>
        </div>
    </section>
@endsection