@extends('layouts.template')

@section('content')
<div class="container-fluid px-4 py-4">
    <div class="card shadow-sm border-0">
        <div class="card-header bg-white py-3 d-flex justify-content-between align-items-center">
            <h5 class="m-0 font-weight-bold text-primary">Tambah Data Guru</h5>
            <a href="{{ route('admin.guru.index') }}" class="btn btn-secondary btn-sm">Kembali</a>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.guru.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="mb-3">
                    <label for="nama_guru" class="form-label font-weight-bold">Nama Guru </label>
                    <input type="text" name="nama_guru" id="nama_guru" maxlength="40" class="form-control @error('nama_guru') is-invalid @enderror" value="{{ old('nama_guru') }}" placeholder="Masukkan Nama Guru" required>
                    @error('nama_guru')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="nip" class="form-label font-weight-bold">NIP </label>
                    <input type="text" name="nip" id="nip" maxlength="15" class="form-control @error('nip') is-invalid @enderror" value="{{ old('nip') }}" placeholder="Masukkan NIP (Maks 15 karakter)" required>
                    @error('nip')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="mapel" class="form-label font-weight-bold">Mata Pelajaran </label>
                    <input type="text" name="mapel" id="mapel" maxlength="40" class="form-control @error('mapel') is-invalid @enderror" value="{{ old('mapel') }}" placeholder="Contoh: Matematika" required>
                    @error('mapel')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="foto" class="form-label font-weight-bold">Foto Guru</label>
                    <input type="file" name="foto" id="foto" class="form-control @error('foto') is-invalid @enderror" accept="image/*" required>
                    <small class="text-muted">Format: JPG, PNG, JPEG. Maksimal 10MB.</small>
                    @error('foto')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="d-flex justify-content-end gap-2 mt-4">
                    <button type="submit" class="btn btn-primary px-4">Simpan Guru</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
