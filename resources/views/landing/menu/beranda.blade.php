<div class="container-fluid p-0" style="margin-top:0;">
    <div id="heroCarousel" class="carousel slide">

        <div class="carousel-inner">

            <div class="carousel-item active position-relative">
                <img src="{{ asset('assets/img/sekolah2.jpg') }}" class="w-100 d-block object-fit-cover" style="height: 600px;" alt="Foto Sekolah Unggulan">
                <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-50"></div>

                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center text-start text-white">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8">
                                <span class="badge bg-warning text-dark px-3 py-2 rounded-pill fw-semibold mb-3 shadow">
                                    <i class="fas fa-school me-1"></i> Selamat Datang di {{ $profilSekolah->nama_sekolah }}
                                </span>

                                <h1 class="display-4 fw-bold mb-3 text-white" style="text-shadow: 0 2px 6px rgba(0,0,0,0.6);">
                                    Membangun <span class="text-warning">Generasi Emas</span> Berkarakter & Berprestasi
                                </h1>

                                <p class="lead text-light mb-4" style="text-shadow: 0 1px 3px rgba(0,0,0,0.6);">
                                    Lingkungan belajar modern dengan tenaga pendidik profesional dan program terarah untuk membentuk karakter, kompetensi, dan kesiapan karier siswa.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>

<div class="container my-5">
    <div class="row stats-container rounded-4 shadow-lg overflow-hidden text-primary text-center py-4">
        <div class="col stat-item">
            <h2 class="fw-bold mb-1">{{ $totalSiswa }}+</h2>
            <p class="mb-0 text-dark-50 small">Siswa</p>
        </div>
        <div class="col stat-item">
            <h2 class="fw-bold mb-1">{{ $totalGuru }}+</h2>
            <p class="mb-0 text-dark-50 small">Guru & Staf</p>
        </div>
        <div class="col stat-item">
            <h2 class="fw-bold mb-1">{{ $totalEskul }}+</h2>
            <p class="mb-0 text-dark-50 small">Ekstrakulikuler</p>
        </div>
    </div>
</div>
