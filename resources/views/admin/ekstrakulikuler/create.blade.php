@extends('layouts.template')

@section('content')
<div class="container-fluid px-4 py-4">
    <div class="card shadow-sm border-0">
        <div class="card-header bg-white py-3">
            <h5 class="m-0 font-weight-bold text-primary">Tambah Ekstrakulikuler</h5>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.ekstrakulikuler.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="mb-3">
                    <label class="form-label fw-bold">Nama Ekstrakulikuler</label>
                    <input type="text" name="nama_eskul" class="form-control @error('nama_eskul') is-invalid @enderror" value="{{ old('nama_eskul') }}" placeholder="Masukkan nama eskul" required>
                    @error('nama_eskul')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label fw-bold">Pembina</label>
                    <input type="text" name="pembina" class="form-control @error('pembina') is-invalid @enderror" value="{{ old('pembina') }}" placeholder="Masukkan nama pembina" required>
                    @error('pembina')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label fw-bold">Jadwal</label>
                    <input type="text" name="jadwal" class="form-control @error('jadwal') is-invalid @enderror" value="{{ old('jadwal') }}" placeholder="Contoh: Sabtu, 15:00 WIB" required>
                    @error('jadwal')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label fw-bold">Deskripsi</label>
                    <textarea name="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror" rows="4" placeholder="Masukkan deskripsi eskul" required>{{ old('deskripsi') }}</textarea>
                    @error('deskripsi')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label fw-bold">Gambar</label>
                    <input type="file" name="gambar" class="form-control @error('gambar') is-invalid @enderror">
                    @error('gambar')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="d-flex justify-content-between mt-4">
                    <a href="{{ route('admin.ekstrakulikuler.index') }}" class="btn btn-secondary btn-sm">
                        <i class="fas fa-arrow-left"></i> Kembali
                    </a>
                    <button type="submit" class="btn btn-primary btn-sm">
                        <i class="fas fa-save"></i> Simpan Data
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection