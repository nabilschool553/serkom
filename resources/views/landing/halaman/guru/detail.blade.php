@extends('layouts.landing')

@section('content')
    <div class="bg-light py-5">
        <div class="container py-4">
            <nav aria-label="breadcrumb" class="mb-4">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="{{ route('landing') }}" class="text-decoration-none">Beranda</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('landing.guru.semua') }}" class="text-decoration-none">Staf & Guru</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $gurus->nama_guru }}</li>
                </ol>
            </nav>

            <div class="card border-0 shadow-sm rounded-4 p-4 p-md-5">
                <div class="row align-items-center g-4">

                    <div class="col-md-4 text-center">
                        <div class="rounded-4 overflow-hidden shadow-sm" style="height: 380px;">
                            @if($gurus->foto)
                                <img class="w-100 h-100 object-fit-cover" src="{{ asset('storage/' . $gurus->foto) }}" alt="{{ $gurus->nama_guru }}">
                            @else
                                <img class="w-100 h-100 object-fit-cover" src="{{ asset('assets/img/default-guru.png') }}" alt="{{ $gurus->nama_guru }}">
                            @endif
                        </div>
                    </div>

                    <div class="col-md-8">
                        <h2 class="fw-bold text-dark mb-4">{{ $gurus->nama_guru }}</h2>
                        <div class="row g-3">
                            <div class="col-sm-6">
                                <span class="text-muted d-block" style="font-size: 0.85rem;">NIP</span>
                                <span class="fw-semibold text-dark">{{ $gurus->nip ?? '-' }}</span>
                            </div>
                            <div class="col-sm-6">
                                <span class="text-muted d-block" style="font-size: 0.85rem;">Aktif</span>
                                <span class="fw-semibold text-dark">{{ $gurus->aktif ?? '2025 - Sekarang' }}</span>
                            </div>
                            <div class="col-sm-6">
                                <span class="text-muted d-block" style="font-size: 0.85rem;">Mata Pelajaran</span>
                                <span class="fw-semibold text-dark">{{ $gurus->mapel ?? '2025 - Sekarang' }}</span>
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
