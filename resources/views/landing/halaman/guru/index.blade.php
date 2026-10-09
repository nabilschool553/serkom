@extends('layouts.landing')

@section('content')
<div class="bg-light py-5">
    <div class="container py-4">
        <nav aria-label="breadcrumb" class="mb-4">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="{{ route('landing') }}#Guru" class="text-decoration-none">Beranda</a></li>
                <li class="breadcrumb-item active" aria-current="page">Staf & Guru</li>
            </ol>
        </nav>

        <h2 class="fw-bold text-primary mb-3">Daftar Lengkap Guru & Staf Profesional</h2>
        <hr class="mb-4">

        <div class="row g-4">
            @forelse($gurus as $guru)
                <div class="col-md-3 col-sm-6">
                    <a href="{{ route('landing.halaman.guru.detail', $guru->slug) }}" class="text-decoration-none">
                        <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden p-2">
                            <div class="rounded-4 overflow-hidden" style="height: 280px;">
                                @if($guru->foto)
                                    <img class="w-100 h-100 object-fit-cover" src="{{ asset('storage/' . $guru->foto) }}" alt="{{ $guru->nama_guru }}">
                                @else
                                    <img class="w-100 h-100 object-fit-cover" src="{{ asset('assets/img/default-guru.png') }}" alt="{{ $guru->nama_guru }}">
                                @endif
                            </div>

                            <div class="card-body d-flex flex-column justify-content-between text-center px-2 pt-3 pb-2">
                                <h5 class="card-title fw-bold text-dark mb-1" style="font-size: 1rem;">
                                    {{ $guru->nama_guru }}
                                </h5>
                                <p class="card-text text-muted mb-0" style="font-size: 0.85rem;">
                                    {{ $guru->mapel }}
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
            @empty
                <div class="col-12 text-center py-5">
                    <p class="text-muted mb-0">Belum ada data guru.</p>
                </div>
            @endforelse
        </div>

        <div class="mt-5">
            <a href="{{ route('landing') }}#Guru" class="btn btn-outline-secondary rounded-pill px-4">
                &larr; Kembali ke Beranda
            </a>
        </div>
    </div>
</div>
@endsection
