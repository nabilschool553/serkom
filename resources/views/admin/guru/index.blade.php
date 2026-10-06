@extends('layouts.template')

@section('content')
<div class="container-fluid px-4 py-4">
    <div class="card shadow-sm border-0">
        <div class="card-header bg-white py-3 d-flex justify-content-between align-items-center">
            <h5 class="m-0 font-weight-bold text-primary">Data Guru</h5>
            <form action="{{ route('admin.guru.index') }}" method="GET" class="d-flex w-50">
                <input type="text" name="search" class="form-control form-control-sm me-2" placeholder="Cari NIP, nama, mapel..." value="{{ request('search') }}">
                <button type="submit" class="btn btn-outline-primary btn-sm">Cari</button>
                @if(request('search'))
                    <a href="{{ route('admin.guru.index') }}" class="btn btn-outline-secondary btn-sm ms-1">Reset</a>
                @endif
            </form>
            <a href="{{ route('admin.guru.create') }}" class="btn btn-primary btn-sm">
                <i class="fas fa-plus"></i> Tambah Guru
            </a>
        </div>
        <div class="card-body">
            @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <div class="table-responsive">
                <table class="table table-bordered table-striped align-middle">
                    <thead class="table-light">
                        <tr>
                            <th width="50" class="text-center">No</th>
                            <th width="80" class="text-center">Foto</th>
                            <th>Nama Guru</th>
                            <th>NIP</th>
                            <th>Mata Pelajaran</th>
                            <th width="150" class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($gurus as $key => $guru)
                            <tr>
                                <td class="text-center">{{ $gurus->firstItem() + $key }}</td>
                                <td class="text-center">
                                    @if($guru->foto)
                                        <img src="{{ asset('storage/' . $guru->foto) }}" alt="Foto Guru" width="50" height="50" class="rounded-circle object-fit-cover">
                                    @else
                                        <span class="badge bg-secondary">No Photo</span>
                                    @endif
                                </td>
                                <td>{{ $guru->nama_guru }}</td>
                                <td>{{ $guru->nip }}</td>
                                <td>{{ $guru->mapel }}</td>
                                <td class="text-center">
                                    <div class="d-flex justify-content-center gap-1">
                                        <a href="{{ route('admin.guru.edit', $guru->id) }}" class="btn btn-warning btn-sm text-white">
                                            Edit
                                        </a>
                                        <form action="{{ route('admin.guru.destroy', $guru->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data guru ini?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="text-center text-muted py-3">Data guru belum tersedia.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            <div class="d-flex justify-content-end mt-3">
                {{ $gurus->links() }}
            </div>
        </div>
    </div>
</div>
@endsection
