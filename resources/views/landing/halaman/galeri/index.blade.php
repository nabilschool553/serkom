@extends('layouts.landing')

@section('content')
<div class="bg-light py-5">
    <div class="container py-4">
        <nav aria-label="breadcrumb" class="mb-4">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="{{ route('landing') }}" class="text-decoration-none">Beranda</a></li>
                <li class="breadcrumb-item active" aria-current="page">Galeri Sekolah</li>
            </ol>
        </nav>

        <h2 class="fw-bold text-primary mb-3">Daftar Lengkap Galeri</h2>
        <hr class="mb-4">

        <div class="row g-4">
            @forelse($galeris as $galeri)
                <div class="col-md-4 col-sm-6">
                    <a href="{{ route('landing.halaman.galeri.detail', $galeri->id_galeri ) }}" class="text-decoration-none">
                        <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden p-2">
                            <div class="rounded-4 overflow-hidden" style="height: 280px;">
                                @if($galeri->kategori == 'foto' && $galeri->file)
                                    <img class="w-100 h-100 object-fit-cover" src="{{ asset('storage/' . $galeri->file) }}" alt="{{ $galeri->judul }}">
                                @elseif($galeri->kategori == 'video' && $galeri->file)
                                    <video class="w-100 h-100 object-fit-cover" controls>
                                        <source src="{{ asset('storage/' . $galeri->file) }}" type="video/mp4">
                                        Your browser does not support the video tag.
                                    </video>
                                @else
                                    <img class="w-100 h-100 object-fit-cover" src="{{ asset('assets/img/default-galeri.png') }}" alt="{{ $galeri->judul }}">
                                @endif
                            </div>

                            <div class="card-body d-flex flex-column justify-content-between text-center px-2 pt-3 pb-2">
                                <h5 class="card-title fw-bold text-dark mb-1" style="font-size: 1rem;">
                                    {{ $galeri->judul }}
                                </h5>
                                <p class="card-text text-muted mb-0" style="font-size: 0.85rem;">
                                    {{ $galeri->keterangan }}
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
            @empty
                <div class="col-12 text-center py-5">
                    <p class="text-muted mb-0">Belum ada data galeri.</p>
                </div>
            @endforelse
        </div>

        <div class="mt-5">
            <a href="{{ route('landing') }}" class="btn btn-outline-secondary rounded-pill px-4">
                &larr; Kembali ke Beranda
            </a>
        </div>
    </div>
</div>
@endsection
