@extends('layouts.landing')

@section('content')
    <div class="bg-light py-5">
        <div class="container py-4">
            <nav aria-label="breadcrumb" class="mb-4">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="{{ route('landing') }}#ekstrakulikuler" class="text-decoration-none">Beranda</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('landing.ekstrakulikuler.semua') }}" class="text-decoration-none">Eskul Sekolah</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $ekstrakulikulers->nama_eskul }}</li>
                </ol>
            </nav>

            <div class="card border-0 shadow-sm rounded-4 p-4 p-md-5">
                <div class="row align-items-center g-4">
                    <div class="col-md-5">
                        <div class="rounded-4 overflow-hidden shadow-sm" style="height: 320px;">
                            @if($ekstrakulikulers->gambar)
                                <img class="w-100 h-100 object-fit-cover" src="{{ asset('storage/' . $ekstrakulikulers->gambar) }}" alt="{{ $ekstrakulikulers->nama_eskul }}">
                            @else
                                <img class="w-100 h-100 object-fit-cover" src="{{ asset('assets/img/default-ekstrakulikuler.png') }}" alt="{{ $ekstrakulikulers->nama_eskul }}">
                            @endif
                        </div>
                    </div>

                    <div class="col-md-7">
                        <h2 class="fw-bold text-dark mb-4">{{ $ekstrakulikulers->nama_eskul }}</h2>
                        <div class="row g-3">
                            <div class="col-sm-6">
                                <span class="text-muted d-block" style="font-size: 0.85rem;">Pembina</span>
                                <span class="fw-semibold text-dark">{{ $ekstrakulikulers->pembina ?? '-' }}</span>
                            </div>
                            <div class="col-sm-6">
                                <span class="text-muted d-block" style="font-size: 0.85rem;">Jadwal</span>
                                <span class="fw-semibold text-dark">{{ $ekstrakulikulers->jadwal ?? '' }}</span>
                            </div>
                            <div class="col-sm-12">
                                <span class="text-muted d-block" style="font-size: 0.85rem;">Deskripsi</span>
                                <span class="fw-semibold text-dark">{{ $ekstrakulikulers->deskripsi ?? '' }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-5">
            <a href="{{ route('landing') }}#ekstrakulikuler" class="btn btn-outline-secondary rounded-pill px-4">
                &larr; Kembali ke Beranda
            </a>
        </div>
        </div>
    </div>
@endsection
