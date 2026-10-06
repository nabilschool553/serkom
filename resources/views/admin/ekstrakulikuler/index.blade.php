@extends('layouts.template')

@section('content')
<div class="container-fluid px-4 py-4">
    <div class="card shadow-sm border-0">
        <div class="card-header bg-white py-3 d-flex justify-content-between align-items-center">
            <h5 class="m-0 font-weight-bold text-primary">Ekstrakulikuler</h5>
            <form action="{{ route('admin.ekstrakulikuler.index') }}" method="GET" class="d-flex w-50">
                <input type="text" name="search" class="form-control form-control-sm me-2" placeholder="Cari nama, pembina, jadwal..." value="{{ request('search') }}">
                <button type="submit" class="btn btn-outline-primary btn-sm">Cari</button>
                @if(request('search'))
                    <a href="{{ route('admin.ekstrakulikuler.index') }}" class="btn btn-outline-secondary btn-sm ms-1">Reset</a>
                @endif
            </form>
            <a href="{{ route('admin.ekstrakulikuler.create') }}" class="btn btn-primary btn-sm">
                <i class="fas fa-plus"></i> Tambah ekstrakulikuler
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
                            <th>Nama Ekstrakulikuler</th>
                            <th>Pembina</th>
                            <th>Jadwal</th>
                            <th>Deskripsi</th>
                            <th width="120" class="text-center">Gambar</th>
                            <th width="150" class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($ekstrakulikuler as $key => $item)
                            <tr>
                                <td class="text-center">
                                    {{ method_exists($ekstrakulikuler, 'firstItem') ? $ekstrakulikuler->firstItem() + $key : $key + 1 }}
                                </td>
                                <td>{{ $item->nama_eskul }}</td>
                                <td>{{ $item->pembina }}</td>
                                <td>{{ $item->jadwal }}</td>
                                <td>{{ Str::limit($item->deskripsi, 50) }}</td>
                                <td class="text-center">
                                    @if($item->gambar)
                                        <img src="{{ asset('storage/' . $item->gambar) }}" alt="{{ $item->nama_eskul }}" width="60" height="60" class="rounded object-fit-cover">
                                    @else
                                        <span class="badge bg-secondary">Tidak ada gambar</span>
                                    @endif
                                </td>
                                <td class="text-center">
                                    <div class="d-flex justify-content-center gap-1">
                                        <a href="{{ route('admin.ekstrakulikuler.edit', $item->id_ekstrakulikuler) }}" class="btn btn-warning btn-sm text-white">
                                            Edit
                                        </a>
                                        <form action="{{ route('admin.ekstrakulikuler.destroy', $item->id_ekstrakulikuler) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ekstrakulikuler ini?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7" class="text-center text-muted py-3">Data ekstrakulikuler belum tersedia.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            <div class="d-flex justify-content-end mt-3">
                @if(method_exists($ekstrakulikuler, 'links'))
                    {{ $ekstrakulikuler->links() }}
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
