<div class="bg-white py-5" id="berita">
    <div class="container p-5 text-center">
        <span class="text-primary fw-bold text-uppercase small">Berita Sekolah Kami</span>
        <h2 class="fw-bold display-6 text-dark mt-2 mb-3">Informasi & Pembaruan</h2>
        <hr>
        <p>Temukan berbagai informasi terbaru seputar kegiatan, prestasi, dan perkembangan
            sekolah melalui berita dan artikel yang kami sajikan. Kami menghadirkan konten informatif
            dan inspiratif untuk memberikan gambaran nyata tentang aktivitas dan pencapaian sekolah.
        </p>
        <div class="row g-4 mt-4 justify-content-center">
            @forelse($beritas as $berita)
                <div class="col-md-4 col-sm-6">
                    <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden p-2">
                        <div class="rounded-4 overflow-hidden" style="height: 280px;">
                            @if($berita->gambar)
                                <img class="w-100 h-100 object-fit-cover" src="{{ asset('storage/' . $berita->gambar) }}" alt="{{ $berita->judul }}">
                            @else
                                <img class="w-100 h-100 object-fit-cover" src="{{ asset('assets/img/default-guru.png') }}" alt="{{ $berita->judul }}">
                            @endif
                        </div>

                        <div class="card-body d-flex flex-column justify-content-between text-center px-2 pt-3 pb-2">
                            <h5 class="card-title fw-bold text-dark mb-1" style="font-size: 1rem;">
                                {{ $berita->judul }}
                            </h5>
                            <p class="card-text text-muted mb-0" style="font-size: 0.85rem;">
                                {{ $berita->isi }}
                            </p>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12 text-center py-5">
                    <p class="text-muted mb-0">Belum ada data berita yang tersedia.</p>
                </div>
            @endforelse
        </div>
        <div class="text-center mt-4">
            <a href="{{ route('landing.berita.semua') }}" class="btn btn-primary px-4 py-2 rounded-pill">
                Lihat Semua &rarr;
            </a>
        </div>
    </div>
</div>
