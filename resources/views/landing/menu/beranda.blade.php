<style>
    .hero-container {
        position: relative;
        overflow: hidden;
        border-radius: 0px;
    }
    
    .hero-container img {
        width: 100%;
        height: 500px; 
        object-fit:cover; 
    }

    .hero-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.6); 
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        color: #ffffff;
    }
</style>

<div class="container-fluid p-0" style="margin-top: 70px;">

    <div id="heroCarousel" class="carousel slide" data-bs-ride="carousel">
        
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>

        <div class="carousel-inner">
            
            <div class="carousel-item active position-relative" data-bs-interval="5000">
                <img src="{{ asset('assets/img/sekolah1.jpg') }}" class="w-100 d-block" alt="Foto Sekolah Unggulan" style="height: 500px; object-fit: cover;">
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
                                <a href="#" class="btn btn-warning fw-bold px-4 py-2 rounded-pill text-white">
                                    Lihat Profil Sekolah
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="carousel-item position-relative" data-bs-interval="5000">
                <img src="{{ asset('assets/img/sekolah2.jpg') }}" class="w-100 d-block" alt="Foto Kegiatan Sekolah" style="height: 500px; object-fit: cover;">
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
                                <a href="#" class="btn btn-warning fw-bold px-4 py-2 rounded-pill text-white">
                                    Lihat Ekstrakurikuler
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="carousel-item position-relative" data-bs-interval="5000">
                <img src="{{ asset('assets/img/sekolah3.jpg') }}" class="w-100 d-block" alt="Fasilitas Sekolah" style="height: 500px; object-fit: cover;">
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
                                <a href="#" class="btn btn-warning fw-bold px-4 py-2 rounded-pill text-white">
                                    Lihat Fasilitas
                                </a>
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
