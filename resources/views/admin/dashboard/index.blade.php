@extends('layouts.template')

@section('content')
<div class="container-fluid px-4 py-4">
    <div class="card shadow-sm border-0 mb-4 bg-primary text-white">
        <div class="card-body p-4">
            <h3 class="fw-bold mb-1">Selamat Datang, {{ Auth::user()->name ?? 'Administrator' }}! </h3>
            <p class="mb-0 text-white-50">Anda masuk sebagai Administrator di Panel Pengelolaan Sistem Informasi SMPN 1 Salawu.</p>
        </div>
    </div>

    <div class="row g-3 mb-4">
        <div class="col-xl-3 col-md-6">
            <div class="card border-0 shadow-sm h-100 border-start border-primary border-4">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between">
                        <div>
                            <span class="text-muted small text-uppercase fw-bold">Total Guru</span>
                            <h2 class="fw-bold mb-0 mt-1 text-dark">{{ $totalGuru ?? 0 }}</h2>
                        </div>
                        <div class="bg-primary bg-opacity-10 p-3 rounded-circle text-primary">
                            <i class="fa-solid fa-chalkboard-user fa-lg"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6">
            <div class="card border-0 shadow-sm h-100 border-start border-success border-4">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between">
                        <div>
                            <span class="text-muted small text-uppercase fw-bold">Total Siswa</span>
                            <h2 class="fw-bold mb-0 mt-1 text-dark">{{ $totalSiswa ?? 0 }}</h2>
                        </div>
                        <div class="bg-success bg-opacity-10 p-3 rounded-circle text-success">
                            <i class="fa-solid fa-user-graduate fa-lg"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6">
            <div class="card border-0 shadow-sm h-100 border-start border-warning border-4">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between">
                        <div>
                            <span class="text-muted small text-uppercase fw-bold">Ekstrakulikuler</span>
                            <h2 class="fw-bold mb-0 mt-1 text-dark">{{ $totalEskul ?? 0 }}</h2>
                        </div>
                        <div class="bg-warning bg-opacity-10 p-3 rounded-circle text-warning">
                            <i class="fa-solid fa-futbol fa-lg"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6">
            <div class="card border-0 shadow-sm h-100 border-start border-info border-4">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between">
                        <div>
                            <span class="text-muted small text-uppercase fw-bold">Kelola Berita</span>
                            <h2 class="fw-bold mb-0 mt-1 text-dark">{{ $totalBerita ?? 0 }}</h2>
                        </div>
                        <div class="bg-info bg-opacity-10 p-3 rounded-circle text-info">
                            <i class="fa-solid fa-newspaper fa-lg"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="card shadow-sm border-0">
                <div class="card-header bg-white py-3">
                    <h5 class="m-0 fw-bold text-secondary" style="font-size: 1rem;">Akses Cepat Pengelolaan</h5>
                </div>
                <div class="card-body">
                    <p class="text-muted mb-3">Silakan pilih menu di sidebar atau gunakan tombol pintasan di bawah untuk mengelola data sekolah:</p>
                    <div class="d-flex flex-wrap gap-2">
                        <a href="{{ route('admin.ekstrakulikuler.index') }}" class="btn btn-outline-primary btn-sm px-3">
                            <i class="fa-solid fa-futbol me-1"></i> Kelola Ekstrakulikuler
                        </a>
                        <a href="{{ route('admin.guru.index') }}" class="btn btn-outline-success btn-sm px-3">
                            <i class="fa-solid fa-chalkboard-user me-1"></i> Kelola Guru
                        </a>
                        <a href="{{ route('admin.siswa.index') }}" class="btn btn-outline-warning btn-sm px-3">
                            <i class="fa-solid fa-user-graduate me-1"></i> Kelola Siswa
                        </a>
                        <a href="{{ route('admin.berita.index') }}" class="btn btn-outline-info btn-sm px-3">
                            <i class="fa-solid fa-newspaper me-1"></i> Kelola Berita
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection