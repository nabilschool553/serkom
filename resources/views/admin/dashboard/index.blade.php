@extends('layouts.template')

@section('content')
<div class="container-fluid px-4 py-4">
    <!-- Banner Selamat Datang -->
    <div class="card shadow-sm border-0 mb-4 bg-primary text-white">
        <div class="card-body p-4">
            <h3 class="fw-bold mb-1">Selamat Datang, {{ Auth::user()->name ?? 'Administrator' }}! </h3>
            <p class="mb-0 text-white-50">Anda masuk sebagai Administrator di Panel Pengelolaan Sistem Informasi SMPN 1 Salawu.</p>
        </div>
    </div>

    <!-- Stat Cards -->
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

    <!-- Akses Cepat Pengelolaan -->
    <div class="row mb-4">
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

    <!-- Tabel Berita Terbaru & Galeri Terbaru (2 Kolom) -->
    <div class="row g-3">
        <!-- Kolom Kiri: Berita Terbaru -->
        <div class="col-lg-7">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-header bg-white border-0 py-3 d-flex justify-content-between align-items-center">
                    <h5 class="m-0 fw-bold text-secondary" style="font-size: 1rem;">
                        <i class="fa-solid fa-newspaper text-primary me-2"></i>Berita Terbaru
                    </h5>
                    <a href="{{ route('admin.berita.index') }}" class="btn btn-sm btn-light rounded-pill px-3 fs-7 fw-semibold">
                        Lihat Semua <i class="fa-solid fa-arrow-right ms-1"></i>
                    </a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover align-middle mb-0">
                            <thead class="table-light">
                                <tr>
                                    <th class="border-0">Judul Berita</th>
                                    <th class="border-0">Tanggal</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($beritaTerbaru ?? [] as $berita)
                                    <tr>
                                        <td>
                                            <div class="fw-semibold text-dark text-truncate" style="max-width: 280px;">
                                                {{ $berita->judul }}
                                            </div>
                                        </td>
                                        <td>
                                            <span class="badge bg-light text-secondary fw-normal px-2 py-1">
                                                <i class="fa-regular fa-calendar me-1"></i>{{ $berita->tanggal ?? '.' }}
                                            </span>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="3" class="text-center text-muted py-4">
                                            <i class="fa-solid fa-folder-open d-block fs-3 mb-2 opacity-50"></i>
                                            Belum ada data berita
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-5">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-header bg-white border-0 py-3 d-flex justify-content-between align-items-center">
                    <h5 class="m-0 fw-bold text-secondary" style="font-size: 1rem;">
                        <i class="fa-solid fa-images text-info me-2"></i>Galeri Terbaru
                    </h5>
                    <a href="{{ route('admin.galeri.index') }}" class="btn btn-sm btn-light rounded-pill px-3 fs-7 fw-semibold">
                        Lihat Semua <i class="fa-solid fa-arrow-right ms-1"></i>
                    </a>
                </div>
                <div class="card-body">
                    <div class="d-flex flex-column gap-3">
                        @forelse($galeriTerbaru ?? [] as $galeri)
                            <div class="d-flex align-items-center justify-content-between p-2 rounded-3 bg-light">
                                <div class="d-flex align-items-center gap-3">
                                    @if($galeri->kategori == 'foto' && $galeri->file)
                                        <img src="{{ asset('storage/' . $galeri->file) }}" alt="Galeri" class="rounded-3 object-fit-cover" style="width: 48px; height: 48px;">
                                    @elseif($galeri->kategori == 'video' && $galeri->file)
                                        <video class="w-100 h-100 object-fit-cover" controls>
                                            <source src="{{ asset('storage/' . $galeri->file) }}" type="video/mp4">
                                            Your browser does not support the video tag.
                                        </video>
                                    @else
                                        <div class="bg-secondary-subtle rounded-3 d-flex align-items-center justify-content-center text-secondary" style="width: 48px; height: 48px;">
                                            <i class="fa-solid fa-image fs-5"></i>
                                        </div>
                                    @endif
                                    <div>
                                        <h6 class="fw-semibold text-dark mb-1 fs-7 text-truncate" style="max-width: 180px;">
                                            {{ $galeri->judul ?? 'Foto Kegiatan' }}
                                        </h6>
                                        <small class="text-muted d-block fs-8">
                                            <i class="fa-regular fa-clock me-1"></i>{{ $galeri->tanggal ?? '.' }}
                                        </small>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <div class="text-center text-muted py-4">
                                <i class="fa-solid fa-images d-block fs-3 mb-2 opacity-50"></i>
                                Belum ada galeri yang diunggah
                            </div>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
