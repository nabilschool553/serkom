@extends('layouts.template') {{-- Sesuaikan nama layout utama admin Anda --}}

@section('content')
<div class="container mx-auto p-6 max-w-2xl">
    <div class="bg-white shadow-md rounded-lg p-6">
        <h2 class="text-2xl font-bold mb-6 text-gray-800">Tambah Ekstrakulikuler</h2>

        <form action="{{ route('admin.ekstrakulikuler.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="mb-4">
                <label for="nama_ekstrakulikuler" class="block text-gray-700 font-bold mb-2">Nama Ekstrakulikuler</label>
                <input type="text" name="nama_ekstrakulikuler" id="nama_ekstrakulikuler" value="{{ old('nama_ekstrakulikuler') }}" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 @error('nama_ekstrakulikuler') border-red-500 @enderror" required>
                @error('nama_ekstrakulikuler')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="pembina" class="block text-gray-700 font-bold mb-2">Nama Pembina</label>
                <input type="text" name="pembina" id="pembina" value="{{ old('pembina') }}" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 @error('pembina') border-red-500 @enderror" required>
                @error('pembina')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="deskripsi" class="block text-gray-700 font-bold mb-2">Deskripsi</label>
                <textarea name="deskripsi" id="deskripsi" rows="4" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 @error('deskripsi') border-red-500 @enderror" required>{{ old('deskripsi') }}</textarea>
                @error('deskripsi')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="foto" class="block text-gray-700 font-bold mb-2">Foto / Logo (Opsional)</label>
                <input type="file" name="foto" id="foto" accept="image/*" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 @error('foto') border-red-500 @enderror">
                @error('foto')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex justify-between items-center">
                <a href="{{ route('admin.ekstrakulikuler.index') }}" class="bg-gray-500 hover:bg-gray-600 text-white font-bold py-2 px-4 rounded">
                    Batal
                </a>
                <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    Simpan Data
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
