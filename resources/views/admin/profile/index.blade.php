 @extends('layouts.template')

@section('content')
<div class="container-fluid px-4 py-4">
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="card shadow-sm border-0">
        <div class="card-header bg-white py-3 d-flex justify-content-between align-items-center">
            <h5 class="m-0 font-weight-bold text-primary">Profil Sekolah</h5>
            <a href="{{ route('admin.profil.edit') }}" class="btn btn-primary btn-sm px-3">
                <i class="fas fa-edit me-1"></i> Edit Profil
            </a>
        </div>
        <div class="card-body">
            @if($profil)
                <div class="row">
                    {{-- Logo & Foto --}}
                    <div class="col-12 mb-4 text-center">
                        <div class="d-flex justify-content-center align-items-center gap-4 flex-wrap">
                            @if($profil->logo)
                                <div>
                                    <small class="text-muted d-block mb-1">Logo Sekolah</small>
                                    <img src="{{ asset('storage/' . $profil->logo) }}" alt="Logo" class="img-thumbnail" style="height: 120px; object-fit: contain;">
                                </div>
                            @endif
                            @if($profil->foto)
                                <div>
                                    <small class="text-muted d-block mb-1">Foto Sampul / Kepala Sekolah</small>
                                    <img src="{{ asset('storage/' . $profil->foto) }}" alt="Foto" class="img-thumbnail" style="height: 120px; object-fit: cover;">
                                </div>
                            @endif
                        </div>
                    </div>

                    {{-- Detail Informasi (Sejajar ke bawah) --}}
                    <div class="col-12 mb-3">
                        <label class="font-weight-bold text-muted small d-block">NAMA SEKOLAH</label>
                        <h5 class="text-dark">{{ $profil->nama_sekolah }}</h5>
                    </div>

                    <div class="col-12 mb-3">
                        <label class="font-weight-bold text-muted small d-block">KEPALA SEKOLAH</label>
                        <p class="text-dark fs-6">{{ $profil->kepala_sekolah }}</p>
                    </div>

                    <div class="col-12 mb-3">
                        <label class="font-weight-bold text-muted small d-block">NPSN</label>
                        <p class="text-dark fs-6">{{ $profil->npsn }}</p>
                    </div>

                    <div class="col-12 mb-3">
                        <label class="font-weight-bold text-muted small d-block">TAHUN BERDIRI</label>
                        <p class="text-dark fs-6">{{ $profil->tahun_berdiri }}</p>
                    </div>

                    <div class="col-12 mb-3">
                        <label class="font-weight-bold text-muted small d-block">KONTAK / NO. TELEPON</label>
                        <p class="text-dark fs-6">{{ $profil->kontak }}</p>
                    </div>

                    <div class="col-12 mb-3">
                        <label class="font-weight-bold text-muted small d-block">ALAMAT</label>
                        <p class="text-dark fs-6">{{ $profil->alamat }}</p>
                    </div>

                    <div class="col-12 mb-3">
                        <label class="font-weight-bold text-muted small d-block">DESKRIPSI SEKOLAH</label>
                        <div class="p-3 bg-light rounded">{!! nl2br(e($profil->deskripsi)) !!}</div>
                    </div>

                    <div class="col-12 mb-3">
                        <label class="font-weight-bold text-muted small d-block">VISI & MISI</label>
                        <div class="p-3 bg-light rounded">{!! nl2br(e($profil->visi_misi)) !!}</div>
                    </div>
                </div>
            @else
                <div class="text-center py-5">
                    <p class="text-muted mb-3">Data profil sekolah belum diisi.</p>
                    <a href="{{ route('admin.profil.edit') }}" class="btn btn-primary btn-sm">Isi Profil Sekarang</a>
                </div>
            @endif
        </div>
    </div>
</div>
@endsection
