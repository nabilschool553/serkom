@extends('layouts.landing')

@section('content')
    <div class="bg-light py-5">
        <div class="container py-4">
            <nav aria-label="breadcrumb" class="mb-4">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="{{ route('landing') }}#berita" class="text-decoration-none">Beranda</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('landing.berita.semua') }}" class="text-decoration-none">Berita Sekolah</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $beritas->judul }}</li>
                </ol>
            </nav>

            <div class="card border-0 shadow-sm rounded-4 p-4 p-md-5">
                <div class="row align-items-center g-4 mb-4">
                    <div class="col-md-5">
                        <div class="rounded-4 overflow-hidden shadow-sm" style="height: 320px;">
                            @if($beritas->gambar)
                                <img class="w-100 h-100 object-fit-cover" src="{{ asset('storage/' . $beritas->gambar) }}" alt="{{ $beritas->judul }}">
                            @else
                                <img class="w-100 h-100 object-fit-cover" src="{{ asset('assets/img/default-berita.png') }}" alt="{{ $beritas->judul }}">
                            @endif
                        </div>
                    </div>

                    <div class="col-md-7">
                        <h2 class="fw-bold text-dark mb-4">{{ $beritas->judul }}</h2>
                        <div class="row g-3">
                            <div class="col-sm-12">
                                <span class="text-muted d-block" style="font-size: 0.85rem;">Tanggal Terbit</span>
                                <span class="fw-semibold text-dark">{{ $beritas->tanggal ?? '.' }}</span>
                            </div>
                            <div class="col-sm-12">
                                <span class="text-muted d-block" style="font-size: 0.85rem;">Penulis</span>
                                <span class="fw-semibold text-dark">{{ $beritas->id_user ?? 'Admin' }}</span>
                            </div>
                        </div>
                    </div>
                </div>

                <hr class="my-4 text-muted opacity-25">

                <div class="lh-lg text-secondary">
                    {!! $beritas->konten !!}
                </div>
            </div>

            <div class="mt-5">
                <a href="{{ route('landing') }}#berita" class="btn btn-outline-secondary rounded-pill px-4">
                    &larr; Kembali ke Beranda
                </a>
            </div>
        </div>
    </div>
@endsection
