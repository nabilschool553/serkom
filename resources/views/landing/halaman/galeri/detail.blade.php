@extends('layouts.landing')

@section('content')
    <div class="bg-light py-5">
        <div class="container py-4">
            <nav aria-label="breadcrumb" class="mb-4">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="{{ route('landing') }}" class="text-decoration-none">Beranda</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('landing.galeri.semua') }}" class="text-decoration-none">Staf & Guru</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $galeris->judul }}</li>
                </ol>
            </nav>

            <div class="card border-0 shadow-sm rounded-4 p-4 p-md-5">
                <div class="row align-items-center g-4">
                    <div class="col-md-5">
                        <div class="rounded-4 overflow-hidden shadow-sm" style="height: 320px;">
                            @if($galeris->kategori == 'foto' && $galeris->file)
                                <img class="w-100 h-100 object-fit-cover" src="{{ asset('storage/' . $galeris->file) }}" alt="{{ $galeris->judul }}">
                            @elseif($galeris->kategori == 'video' && $galeris->file)
                                <video class="w-100 h-100 object-fit-cover" controls>
                                    <source src="{{ asset('storage/' . $galeris->file) }}" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                            @else
                                <img class="w-100 h-100 object-fit-cover" src="{{ asset('assets/img/default-galeri.png') }}" alt="{{ $galeris->judul }}">
                            @endif
                        </div>
                    </div>

                    <div class="col-md-7">
                        <h2 class="fw-bold text-dark mb-4">{{ $galeris->judul }}</h2>
                        <div class="row g-3">
                            <div class="col-sm-12">
                                <span class="text-muted d-block" style="font-size: 0.85rem;">keterangan</span>
                                <span class="fw-semibold text-dark">{{ $galeris->keterangan ?? '-' }}</span>
                            </div>
                            <div class="col-sm-6">
                                <span class="text-muted d-block" style="font-size: 0.85rem;">tanggal</span>
                                <span class="fw-semibold text-dark">{{ $galeris->tanggal ?? '' }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-5">
            <a href="{{ route('landing') }}" class="btn btn-outline-secondary rounded-pill px-4">
                &larr; Kembali ke Beranda
            </a>
        </div>
        </div>
    </div>
@endsection
