<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Official Website</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

    <style>

        .custom-footer a {
            color: #ffffff;
            text-decoration: none;
            transition: opacity 0.2s;
        }

        .custom-footer a:hover {
            opacity: 0.8;
            text-decoration: underline;
        }

        .footer-title {
            font-weight: 600;
            position: relative;
            padding-bottom: 8px;
            margin-bottom: 15px;
        }

        .footer-title::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: 0;
            width: 100%;
            height: 1px;
        }

        .social-icons a {
            font-size: 1.2rem;
            margin-right: 15px;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-sm navbar-dark bg-primary justify-content-center fixed-top shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="#">
                <div class="d-flex align-items-center gap-3">
                    <img src="{{ asset('storage/' . $profilSekolah->logo) }}" alt="Logo" style="height: 40px; width: auto;">
                    <span class="navbar-brand">{{ $profilSekolah->nama_sekolah }}</span>
                </div>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav gap-3">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#profil">Profil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#Guru">Guru</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#berita">Berita</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#ekstrakulikuler">Ekstrakurikuler</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#galeri">Galeri</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')

    <footer class="bg-primary pt-5 text-light " style="margin-top: 100px;">
        <div class="container pb-4">
            <div class="row gy-4">

                <div class="col-lg-4 col-md-6">
                    <div class="d-flex align-items-center mb-3">
                        <img src="{{ asset('storage/' . $profilSekolah->logo) }}" alt="Logo" style="height: 40px; width: auto;" class="me-2">
                        <span class="navbar-brand">{{ $profilSekolah->nama_sekolah }}</span>
                    </div>

                    <ul class="list-unstyled">
                        <li class="d-flex align-items-start mb-2">
                            <i class="bi bi-geo-alt-fill me-2 mt-1"></i>
                            <span>{{ $profilSekolah->alamat }}</span>
                        </li>
                        <li class="d-flex align-items-center mb-2">
                            <i class="bi bi-whatsapp me-2"></i>
                            <span>{{ $profilSekolah->kontak }}</span>
                        </li>
                        <li class="d-flex align-items-center mb-2">
                            <i class="bi bi-telephone-fill me-2"></i>
                            <span>0123-123456</span>
                        </li>
                        <li class="d-flex align-items-center mb-3">
                            <i class="bi bi-envelope-fill me-2"></i>
                            <span>{{ $profilSekolah->nama_sekolah }}@gmail.com</span>
                        </li>
                    </ul>

                    <div class="social-icons d-flex">
                        <a href="#"><i class="bi bi-facebook"></i></a>
                        <a href="#"><i class="bi bi-instagram"></i></a>
                        <a href="#"><i class="bi bi-tiktok"></i></a>
                        <a href="#"><i class="bi bi-youtube"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <h5 class="footer-title">Update Terbaru</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2 d-flex align-items-start">
                            <span class="me-2">•</span>
                            <p>Siswa {{ $profilSekolah->nama_sekolah }} Raih Prestasi, Terima Tropi Penghargaan dalam Ajang Lomba</p>
                        </li>
                        <li class="mb-2 d-flex align-items-start">
                            <span class="me-2">•</span>
                            <p>Khidmat dan Penuh Haru, Haul Akbar Yayasan Pesantren Cintawana Dihadiri Bupati Tasikmalaya</p>
                        </li>
                        <li class="mb-2 d-flex align-items-start">
                            <span class="me-2">•</span>
                            <p>Tetap Semangat Junjung Sportivitas dan Berikan yang Terbaik</p>
                        </li>
                        <li class="mb-2 d-flex align-items-start">
                            <span class="me-2">•</span>
                            <p>Persiapan Matang Menuju Puncak Kompetensi</p>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-4 col-md-12">
                    <h5 class="footer-title">Komentar Terbaru</h5>
                </div>

            </div>
            <hr>

            <div class="copyright-section text-center py-3">
                <div class="container">
                    <p class="m-0 fw-bold">
                        &copy; {{ $profilSekolah->nama_sekolah }} Mencetak Generasi Siap Kerja, Siap Berkarya.
                    </p>
                    <p class="m-0 text-white-50" style="font-size: 0.75rem;">
                        Crafted with dedication by Pusdatin
                    </p>
                </div>
            </div>
        </div>

    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
