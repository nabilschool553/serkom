<div class="bg-light py-5" id="Guru">
    <div class="container p-5 text-center">
        <span class="text-primary fw-bold text-uppercase small">Guru & Staf Profesional</span>
        <h2 class="fw-bold display-6 text-dark mt-2 mb-3">Tenaga Pendidikan</h2>
        <hr>
        <p>
            Guru dan staf kami terdiri dari tenaga profesional yang kompeten, berpengalaman, dan berdedikasi tinggi dalam memberikan
            layanan pendidikan berkualitas. Dengan pendekatan pembelajaran yang inovatif dan berorientasi pada kebutuhan siswa, kami
            berkomitmen menciptakan lingkungan belajar yang inspiratif dan produktif.
        </p>

        <div class="row g-4 mt-4 justify-content-center">
            @forelse($gurus as $guru)
                <div class="col-md-3 col-sm-6">
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
                </div>
            @empty
                <div class="col-12 text-center py-5">
                    <p class="text-muted mb-0">Belum ada data guru yang tersedia.</p>
                </div>
            @endforelse
        </div>
        <div class="text-center mt-4">
            <a href="{{ route('landing.guru.semua') }}" class="btn btn-primary px-4 py-2 rounded-pill">
                Lihat Semua &rarr;
            </a>
        </div>
    </div>
</div>
