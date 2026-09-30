@extends('layouts.template')

@section('content')
<div class="container-fluid px-4 py-4">
    <div class="card shadow-sm border-0">
        <div class="card-header bg-white py-3 d-flex justify-content-between align-items-center">
            <h5 class="m-0 font-weight-bold text-primary">Galeri</h5>
            <a href="{{ route('admin.galeri.create') }}" class="btn btn-primary btn-sm">
                <i class="fas fa-plus"></i> Tambah Galeri
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
                            <th width="100" class="text-center">File / Preview</th>
                            <th>Judul</th>
                            <th>Keterangan</th>
                            <th class="text-center">Kategori</th>
                            <th class="text-center">Tanggal</th>
                            <th width="150" class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($galeris as $key => $galeri)
                            <tr>
                                <td class="text-center">
                                    {{ method_exists($galeris, 'firstItem') ? $galeris->firstItem() + $key : $key + 1 }}
                                </td>
                                <td class="text-center">
                                    @if($galeri->kategori == 'foto')
                                        <img src="{{ asset('storage/' . $galeri->file) }}" alt="{{ $galeri->judul }}" width="60" height="60" class="rounded object-fit-cover">
                                    @elseif($galeri->kategori == 'video')
                                        <video width="80" height="60" class="rounded object-fit-cover" controls>
                                            <source src="{{ asset('storage/' . $galeri->file) }}" type="video/mp4">
                                        </video>
                                    @else
                                        <span class="badge bg-secondary">No File</span>
                                    @endif
                                </td>
                                <td>{{ $galeri->judul }}</td>
                                <td>{{ Str::limit($galeri->keterangan, 50) }}</td>
                                <td class="text-center">
                                    <span class="badge {{ $galeri->kategori == 'foto' ? 'bg-info' : 'bg-warning' }}">
                                        {{ ucfirst($galeri->kategori) }}
                                    </span>
                                </td>
                                <td class="text-center">{{ date('d-m-Y', strtotime($galeri->tanggal)) }}</td>
                                <td class="text-center">
                                    <div class="d-flex justify-content-center gap-1">
                                        <a href="{{ route('admin.galeri.edit', ['id' => $galeri->id_galeri]) }}" class="btn btn-warning btn-sm text-white">
                                            Edit
                                        </a>
                                        <form action="{{ route('admin.galeri.destroy', ['id' => $galeri->id_galeri]) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data galeri ini?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7" class="text-center text-muted py-3">Data galeri belum tersedia.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            <div class="d-flex justify-content-end mt-3">
                @if(method_exists($galeris, 'links'))
                    {{ $galeris->links() }}
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
