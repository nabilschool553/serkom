@extends('layouts.template') {{-- Sesuaikan nama layout utama admin Anda --}}

@section('content')
<div class="container mx-auto p-6">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold text-gray-800">Daftar Ekstrakulikuler</h1>
        <a href="{{ route('admin.ekstrakulikuler.create') }}" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded shadow">
            + Tambah Ekstrakulikuler
        </a>
    </div>

    @if (session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <div class="bg-white shadow-md rounded my-6 overflow-x-auto">
        <table class="min-w-full bg-white border">
            <thead>
                <tr class="w-full bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                    <th class="py-3 px-6 text-left">No</th>
                    <th class="py-3 px-6 text-left">Foto</th>
                    <th class="py-3 px-6 text-left">Nama Ekstrakulikuler</th>
                    <th class="py-3 px-6 text-left">Pembina</th>
                    <th class="py-3 px-6 text-left">Deskripsi</th>
                    <th class="py-3 px-6 text-center">Aksi</th>
                </tr>
            </thead>
            <tbody class="text-gray-600 text-sm font-light">
                @forelse ($ekstrakulikuler as $index => $item)
                    <tr class="border-b border-gray-200 hover:bg-gray-100">
                        <td class="py-3 px-6 text-left whitespace-nowrap">
                            {{ $ekstrakulikuler->firstItem() + $index }}
                        </td>
                        <td class="py-3 px-6 text-left">
                            @if ($item->foto)
                                <img src="{{ asset('storage/' . $item->foto) }}" alt="Foto Ekstrakulikuler" class="w-16 h-16 object-cover rounded">
                            @else
                                <span class="text-gray-400 italic">Tanpa Foto</span>
                            @endif
                        </td>
                        <td class="py-3 px-6 text-left font-semibold">
                            {{ $item->nama_ekstrakulikuler }}
                        </td>
                        <td class="py-3 px-6 text-left">
                            {{ $item->pembina }}
                        </td>
                        <td class="py-3 px-6 text-left">
                            {{ Str::limit($item->deskripsi, 50) }}
                        </td>
                        <td class="py-3 px-6 text-center">
                            <div class="flex item-center justify-center space-x-2">
                                <a href="{{ route('admin.ekstrakulikuler.edit', $item->id) }}" class="bg-yellow-500 hover:bg-yellow-600 text-white py-1 px-3 rounded text-xs">
                                    Edit
                                </a>
                                <form action="{{ route('admin.ekstrakulikuler.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="bg-red-600 hover:bg-red-700 text-white py-1 px-3 rounded text-xs">
                                        Hapus
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="py-4 px-6 text-center text-gray-500">
                            Belum ada data ekstrakulikuler.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    {{-- Link Pagination --}}
    <div class="mt-4">
        {{ $ekstrakulikuler->links() }}
    </div>
</div>
@endsection
