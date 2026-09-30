@extends('layouts.template')

@section('content')
<div class="container-fluid px-4 py-4">
    <div class="card shadow-sm border-0">
        <div class="card-header bg-white py-3 d-flex justify-content-between align-items-center">
            <h5 class="m-0 font-weight-bold text-primary">Edit Profil Sekolah</h5>
            <a href="{{ route('admin.profil.index') }}" class="btn btn-secondary btn-sm">Kembali</a>
        </div>
        <div class="card-body">
            @if ($errors->any())
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <form action="{{ route('admin.profil.update') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="row">
                    {{-- Nama Sekolah --}}
                    <div class="col-12 mb-3">
                        <label class="form-label font-weight-bold">Nama Sekolah *</label>
                        <input type="text" name="nama_sekolah" class="form-control @error('nama_sekolah') is-invalid @enderror" value="{{ old('nama_sekolah', $profil->nama_sekolah ?? '') }}" maxlength="40" required placeholder="Masukkan nama sekolah">
                        @error('nama_sekolah')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- Kepala Sekolah --}}
                    <div class="col-12 mb-3">
                        <label class="form-label font-weight-bold">Nama Kepala Sekolah *</label>
                        <input type="text" name="kepala_sekolah" class="form-control @error('kepala_sekolah') is-invalid @enderror" value="{{ old('kepala_sekolah', $profil->kepala_sekolah ?? '') }}" maxlength="40" required placeholder="Masukkan nama kepala sekolah">
                        @error('kepala_sekolah')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- NPSN --}}
                    <div class="col-12 mb-3">
                        <label class="form-label font-weight-bold">NPSN *</label>
                        <input type="text" name="npsn" class="form-control @error('npsn') is-invalid @enderror" value="{{ old('npsn', $profil->npsn ?? '') }}" maxlength="10" required placeholder="Masukkan NPSN">
                        @error('npsn')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- Tahun Berdiri --}}
                    <div class="col-12 mb-3">
                        <label class="form-label font-weight-bold">Tahun Berdiri *</label>
                        <input type="number" name="tahun_berdiri" class="form-control @error('tahun_berdiri') is-invalid @enderror" value="{{ old('tahun_berdiri', $profil->tahun_berdiri ?? '') }}" placeholder="Contoh: 2005" required>
                        @error('tahun_berdiri')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- Kontak --}}
                    <div class="col-12 mb-3">
                        <label class="form-label font-weight-bold">Kontak / No. Telp *</label>
                        <input type="text" name="kontak" class="form-control @error('kontak') is-invalid @enderror" value="{{ old('kontak', $profil->kontak ?? '') }}" maxlength="15" required placeholder="Contoh: 08123456789">
                        @error('kontak')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- Logo Sekolah --}}
                    <div class="col-12 mb-3">
                        <label class="form-label font-weight-bold">Logo Sekolah</label>
                        @if(isset($profil->logo) && $profil->logo)
                            <div class="mb-2">
                                <img src="{{ asset('storage/' . $profil->logo) }}" alt="Logo Saat Ini" class="img-thumbnail" style="max-height: 80px;">
                            </div>
                        @endif
                        <input type="file" name="logo" class="form-control @error('logo') is-invalid @enderror" accept="image/*">
                        <small class="text-muted d-block mt-1">Biarkan kosong jika tidak ingin menguubah logo. (Format: JPG, PNG. Maks: 2MB)</small>
                        @error('logo')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- Foto Profil / Sampul --}}
                    <div class="col-12 mb-3">
                        <label class="form-label font-weight-bold">Foto Sampul / Gedung / Kepala Sekolah</label>
                        @if(isset($profil->foto) && $profil->foto)
                            <div class="mb-2">
                                <img src="{{ asset('storage/' . $profil->foto) }}" alt="Foto Saat Ini" class="img-thumbnail" style="max-height: 100px;">
                            </div>
                        @endif
                        <input type="file" name="foto" class="form-control @error('foto') is-invalid @enderror" accept="image/*">
                        <small class="text-muted d-block mt-1">Biarkan kosong jika tidak ingin mengubah foto. (Format: JPG, PNG. Maks: 2MB)</small>
                        @error('foto')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- Alamat --}}
                    <div class="col-12 mb-3">
                        <label class="form-label font-weight-bold">Alamat *</label>
                        <textarea name="alamat" class="form-control @error('alamat') is-invalid @enderror" rows="3" required placeholder="Masukkan alamat lengkap sekolah">{{ old('alamat', $profil->alamat ?? '') }}</textarea>
                        @error('alamat')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- Deskripsi --}}
                    <div class="col-12 mb-3">
                        <label class="form-label font-weight-bold">Deskripsi Sekolah *</label>
                        <textarea name="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror" rows="4" required placeholder="Masukkan ringkasan/deskripsi sekolah">{{ old('deskripsi', $profil->deskripsi ?? '') }}</textarea>
                        @error('deskripsi')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- Visi & Misi --}}
                    <div class="col-12 mb-3">
                        <label class="form-label font-weight-bold">Visi & Misi *</label>
                        <textarea name="visi_misi" class="form-control @error('visi_misi') is-invalid @enderror" rows="5" required placeholder="Masukkan visi dan misi sekolah">{{ old('visi_misi', $profil->visi_misi ?? '') }}</textarea>
                        @error('visi_misi')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="d-flex justify-content-end gap-2 mt-3">
                    <button type="submit" class="btn btn-primary px-4">Simpan Profil</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
