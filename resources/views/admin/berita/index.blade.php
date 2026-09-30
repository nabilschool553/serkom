@extends('layouts.template')

@section('content')
<div class="container-fluid px-4 py-4">
    <div class="card shadow-sm border-0">
        <div class="card-header bg-white py-3 d-flex justify-content-between align-items-center">
            <h5 class="m-0 font-weight-bold text-primary">Data Berita</h5>
            <a href="{{ route('admin.berita.create') }}" class="btn btn-primary btn-sm">
                <i class="fas fa-plus"></i> Tambah Berita
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
                            <th width="100" class="text-center">Gambar</th>
                            <th>Judul</th>
                            <th>Isi Ringkas</th>
                            <th class="text-center">Tanggal</th>
                            <th width="150" class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($berita as $key => $berita)
                            <tr>
                                <td class="text-center">
                                    {{ method_exists($berita, 'firstItem') ? $berita->firstItem() + $key : $key + 1 }}
                                </td>
                                <td class="text-center">
                                    @if($berita->gambar)
                                        <img src="{{ asset('storage/' . $berita->gambar) }}" alt="{{ $berita->judul }}" width="60" height="60" class="rounded object-fit-cover">
                                    @else
                                        <span class="badge bg-secondary">No Image</span>
                                    @endif
                                </td>
                                <td>{{ $berita->judul }}</td>
                                <td>{{ Str::limit(strip_tags($berita->isi), 50) }}</td>
                                <td class="text-center">{{ date('d-m-Y', strtotime($berita->tanggal)) }}</td>
                                <td class="text-center">
                                    <div class="d-flex justify-content-center gap-1">
                                        <a href="{{ route('admin.berita.edit', ['id' => $berita->id_berita]) }}" class="btn btn-warning btn-sm text-white">
                                            Edit
                                        </a>
                                        <form action="{{ route('admin.berita.destroy', ['id' => $berita->id_berita]) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus berita ini?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="text-center text-muted py-3">Data berita belum tersedia.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            <div class="d-flex justify-content-end mt-3">
                @if(method_exists($berita, 'links'))
                    {{ $berita->links() }}
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
