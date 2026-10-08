<div class="container-fluid p-0" style="margin-top:0;">
    <div id="heroCarousel" class="carousel slide" data-bs-ride="carousel">

        <div class="carousel-indicators">
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>

        <div class="carousel-inner">

            <div class="carousel-item active position-relative" data-bs-interval="5000">
                <img src="{{ asset('assets/img/sekolah1.jpg') }}" class="w-100 d-block object-fit-cover" style="height: 600px;" alt="Foto Sekolah Unggulan">
                <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-50"></div>
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center text-center text-white">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <span class="text-warning text-uppercase fw-bold small d-block mb-2">Sekolah Unggulan</span>
                                <h1 class="display-5 fw-bold mb-3">Membangun Generasi Emas</h1>
                                <p class="lead text-white-50 mb-4">
                                    Lingkungan belajar modern dengan tenaga pendidik profesional dan program terarah untuk membentuk karakter, kompetensi, dan kesiapan karier siswa.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="carousel-item position-relative" data-bs-interval="5000">
                <img src="{{ asset('assets/img/sekolah2.jpg') }}" class="w-100 d-block object-fit-cover" style="height: 600px;" alt="Foto Kegiatan Sekolah">
                <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-50"></div>
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center text-center text-white">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <span class="text-warning text-uppercase fw-bold small d-block mb-2">Prestasi & Kegiatan</span>
                                <h1 class="display-5 fw-bold mb-3">Aktif, Kreatif, dan Berprestasi</h1>
                                <p class="lead text-white-50 mb-4">
                                    Berbagai kegiatan ekstrakurikuler dan fasilitas penunjang untuk mengasah bakat serta potensi peserta didik secara maksimal.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="carousel-item position-relative" data-bs-interval="5000">
                <img src="{{ asset('assets/img/sekolah3.jpg') }}" class="w-100 d-block object-fit-cover" style="height: 600px;" alt="Fasilitas Sekolah">
                <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-50"></div>
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center text-center text-white">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <span class="text-warning text-uppercase fw-bold small d-block mb-2">Fasilitas Modern</span>
                                <h1 class="display-5 fw-bold mb-3">Sarana Prasarana Terlengkap</h1>
                                <p class="lead text-white-50 mb-4">
                                    Menyediakan ruang kelas yang nyaman, laboratorium, perpustakaan, dan sarana penunjang pembelajaran digital lainnya.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
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
