<div class="py-5" id="galeri">
    <div class="container p-5 text-center">
        <span class="text-primary fw-bold text-uppercase small">Galeri Sekolah Kami</span>
        <h2 class="fw-bold display-6 text-dark mt-2 mb-3">Dokumentasi Kegiatan</h2>
        <hr>
        <p>Galeri sekolah menampilkan berbagai dokumentasi kegiatan dan momen berharga siswa selama
            proses pembelajaran dan pengembangan diri. Melalui foto dan video, Anda dapat melihat secara langsung
            suasana belajar, prestasi, serta aktivitas siswa di lingkungan sekolah kami.
        </p>
        <div class="row g-4 mt-4 justify-content-center">
            @forelse($galeris as $galeri)
                <div class="col-md-4 col-sm-6">
                    <a href="{{ route('landing.halaman.galeri.detail', $galeri->slug ) }}" class="text-decoration-none">
                        <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden p-2">
                            <div class="rounded-4 overflow-hidden" style="height: 280px;">
                                @if($galeri->kategori == 'foto' && $galeri->file)
                                    <img class="w-100 h-100 object-fit-cover" src="{{ asset('storage/' . $galeri->file) }}" alt="{{ $galeri->judul }}">
                                @elseif($galeri->kategori == 'video' && $galeri->file)
                                    <video class="w-100 h-100 object-fit-cover" controls>
                                        <source src="{{ asset('storage/' . $galeri->file) }}" type="video/mp4">
                                        Your browser does not support the video tag.
                                    </video>
                                @else
                                    <img class="w-100 h-100 object-fit-cover" src="{{ asset('assets/img/default-galeri.png') }}" alt="{{ $galeri->judul }}">
                                @endif
                            </div>
                            <div class="card-body d-flex flex-column justify-content-between text-center px-2 pt-3 pb-2">
                                <h5 class="card-title fw-bold text-dark mb-1" style="font-size: 1rem;">
                                    {{ $galeri->judul }}
                                </h5>
                                <p class="card-text text-muted mb-0" style="font-size: 0.85rem;">
                                    {{ $galeri->keterangan }}
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
            @empty
                <div class="col-12 text-center py-5">
                    <p class="text-muted mb-0">Belum ada data galeri yang tersedia.</p>
                </div>
            @endforelse
        </div>
        <div class="text-center mt-4">
            <a href="{{ route('landing.galeri.semua') }}" class="btn btn-primary px-4 py-2 rounded-pill">
                Lihat Semua &rarr;
            </a>
        </div>
    </div>
</div>
