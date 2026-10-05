@extends('layouts.template')

@section('content')
<div class="container-fluid px-4 py-4">
    <div class="card shadow-sm border-0">
        <div class="card-header bg-white py-3 d-flex justify-content-between align-items-center">
            <h5 class="m-0 font-weight-bold text-primary">Tambah Galeri</h5>
            <a href="{{ route('admin.galeri.index') }}" class="btn btn-secondary btn-sm">Kembali</a>
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

            <form action="{{ route('admin.galeri.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="row">
                    <div class="col-12 mb-3">
                        <label class="form-label font-weight-bold">Judul </label>
                        <input type="text" name="judul" class="form-control @error('judul') is-invalid @enderror" value="{{ old('judul') }}" maxlength="50" required placeholder="Masukkan judul galeri">
                        @error('judul')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-12 mb-3">
                        <label class="form-label font-weight-bold">Tanggal </label>
                        <input type="date" name="tanggal" class="form-control @error('tanggal') is-invalid @enderror" value="{{ old('tanggal', date('Y-m-d')) }}" required>
                        @error('tanggal')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-12 mb-3">
                        <label class="form-label font-weight-bold">Kategori </label>
                        <select name="kategori" class="form-select @error('kategori') is-invalid @enderror" required>
                            <option value="" disabled selected>-- Pilih Kategori --</option>
                            <option value="foto" {{ old('kategori') == 'foto' ? 'selected' : '' }}>Foto</option>
                            <option value="video" {{ old('kategori') == 'video' ? 'selected' : '' }}>Video</option>
                        </select>
                        @error('kategori')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-12 mb-3">
                        <label class="form-label font-weight-bold">Upload File (Foto/Video) </label>
                        <input type="file" name="file" class="form-control @error('file') is-invalid @enderror" accept="image/*,video/*" required>
                        <small class="text-muted d-block mt-1">Format: JPG, PNG, MP4, MKV (Maksimal 20MB)</small>
                        @error('file')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-12 mb-3">
                        <label class="form-label font-weight-bold">Keterangan </label>
                        <textarea name="keterangan" class="form-control @error('keterangan') is-invalid @enderror" rows="4" required placeholder="Masukkan keterangan galeri">{{ old('keterangan') }}</textarea>
                        @error('keterangan')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="d-flex justify-content-end gap-2 mt-3">
                    <button type="reset" class="btn btn-light">Reset</button>
                    <button type="submit" class="btn btn-primary px-4">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
