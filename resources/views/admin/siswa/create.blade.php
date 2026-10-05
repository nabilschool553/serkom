@extends('layouts.template')

@section('content')
<div class="container-fluid px-4 py-4">
    <div class="card shadow-sm border-0">
        <div class="card-header bg-white py-3 d-flex justify-content-between align-items-center">
            <h5 class="m-0 font-weight-bold text-primary">Tambah Data Siswa</h5>
            <a href="{{ route('admin.siswa.index') }}" class="btn btn-secondary btn-sm">Kembali</a>
        </div>
        <div class="card-body">
            @if ($errors->any())
                <div class="alert alert-danger mb-3">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('admin.siswa.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="nisn" class="form-label font-weight-bold">NISN </label>
                    <input type="text" name="nisn" id="nisn" maxlength="10" class="form-control @error('nisn') is-invalid @enderror" value="{{ old('nisn') }}" placeholder="Masukkan 10 digit NISN" required>
                    @error('nisn')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="nama_siswa" class="form-label font-weight-bold">Nama Siswa</label>
                    <input type="text" name="nama_siswa" id="nama_siswa" maxlength="40" class="form-control @error('nama_siswa') is-invalid @enderror" value="{{ old('nama_siswa') }}" placeholder="Masukkan Nama Siswa" required>
                    @error('nama_siswa')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="jk" class="form-label font-weight-bold">Jenis Kelamin</label>
                    <select name="jk" id="jk" class="form-select @error('jk') is-invalid @enderror" required>
                        <option value="">-- Pilih Jenis Kelamin --</option>
                        <option value="Laki-laki" {{ old('jk') == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                        <option value="Perempuan" {{ old('jk') == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                    </select>
                    @error('jk')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="tahun_masuk" class="form-label font-weight-bold">Tahun Masuk</label>
                    <input type="number" name="tahun_masuk" id="tahun_masuk" class="form-control @error('tahun_masuk') is-invalid @enderror" value="{{ old('tahun_masuk', date('Y')) }}" placeholder="Contoh: 2024" required>
                    @error('tahun_masuk')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="d-flex justify-content-end gap-2 mt-4">
                    <button type="submit" class="btn btn-primary px-4">Simpan Siswa</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection