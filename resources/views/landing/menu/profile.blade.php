<!-- Section Profil Sekolah -->
<section id="profil" class="py-5 bg-light">
    <div class="container py-4">
        <div class="text-center mx-auto mb-5" style="max-width: 700px;">
            <span class="text-primary fw-bold text-uppercase small">Profil Sekolah Kami</span>
            <h2 class="fw-bold display-6 text-dark mt-2 mb-3">{{ $profilSekolah->nama_sekolah }}</h2>
            <p class="text-muted">Membentuk generasi unggul, berkarakter, dan berdaya saing tinggi di era digital.</p>
        </div>
        <div class="row align-items-center g-5">

            <div class="col-lg-6 position-relative">
                <img src="{{ asset('assets/img/sekolah2.jpg')}}" class="img-fluid rounded-4 shadow position-relative w-100 object-fit-cover" style="height: 400px; z-index: 1;">
            </div>

            <div class="col-lg-6">
                <div class="mb-4">
                    <h3 class="h5 fw-bold text-dark mb-2">Selamat Datang di Web Sekolah Kami</h3>
                    <p class="text-muted mb-0">{{ $profilSekolah->deskripsi}}</p>
                </div>

                <div class="border-top pt-4">

                    <div class="d-flex align-items-start gap-3 mb-3">
                        <div>
                            <h6 class="fw-bold text-dark mb-1">Alamat Sekolah</h6>
                            <p class="text-muted small mb-0">{{ $profilSekolah->alamat}}</p>
                        </div>
                    </div>

                    <div class="d-flex align-items-center gap-3 d-sm-none">
                        <div class="bg-primary bg-opacity-10 text-primary p-2 rounded-3">
                            <i class="bi bi-calendar-check-fill fs-5"></i>
                        </div>
                        <div>
                            <h6 class="fw-bold text-dark mb-1">Tahun Berdiri</h6>
                            <p class="text-muted small mb-0">{{ $profilSekolah->tahun_berdiri}}</p>
                        </div>
                    </div>
                    <div class="d-flex gap-3 flex-wrap mt-4">
                        <div class="bg-white p-3 rounded-4 shadow-sm border border-light flex-grow-1" style="min-width: 200px;">
                            <h5 class="fw-bold text-dark mb-1 fs-6">{{ $profilSekolah->kepala_sekolah }}</h5>
                            <p class="text-primary fw-semibold mb-0 small">Kepala Sekolah</p>
                        </div>

                        <div class="bg-white p-3 rounded-4 shadow-sm border border-light text-center" style="min-width: 130px;">
                            <span class="text-muted d-block small mb-1">Berdiri Sejak</span>
                            <span class="fs-4 text-primary fw-bold">{{ $profilSekolah->tahun_berdiri }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
