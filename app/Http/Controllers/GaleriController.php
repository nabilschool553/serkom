<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GaleriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //
        $search = $request->input('search');
        $galeris = Galeri::when($search, function ($query, $search) {
            $query->where('judul', 'like', "%{$search}%")
                  ->orWhere('keterangan', 'like', "%{$search}%");
        })->latest()->paginate(10);
        return view('admin.galeri.index', compact('galeris'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.galeri.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'judul'      => 'required|string|max:50',
            'keterangan' => 'required|string',
            'kategori'   => 'required|in:foto,video',
            'tanggal'    => 'required|date',
            'file'       => 'required|file|mimes:jpg,jpeg,png,mp4,mkv,avi|max:20480', // Maks 20MB
        ]);

        $filePath = $request->file('file')->store('galeri', 'public');

        Galeri::create([
            'judul'      => $request->judul,
            'slug'       => Str::slug($request->judul),
            'keterangan' => $request->keterangan,
            'kategori'   => $request->kategori,
            'tanggal'    => $request->tanggal,
            'file'       => $filePath,
        ]);

        return redirect()->route('admin.galeri.index')->with('success', 'Data galeri berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Galeri $galeri)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Galeri $galeri, $id)
    {
        //
        $galeri = Galeri::findOrFail($id);
        return view('admin.galeri.edit', compact('galeri'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Galeri $galeri, $id)
    {
        //
        $galeri = Galeri::findOrFail($id);

        $request->validate([
            'judul'      => 'required|string|max:50',
            'keterangan' => 'required|string',
            'kategori'   => 'required|in:foto,video',
            'tanggal'    => 'required|date',
            'file'       => 'nullable|file|mimes:jpg,jpeg,png,mp4,mkv,avi|max:20480',
        ]);

        $data = [
            'judul'      => $request->judul,
            'keterangan' => $request->keterangan,
            'kategori'   => $request->kategori,
            'tanggal'    => $request->tanggal,
        ];

        if ($request->hasFile('file')) {
            if ($galeri->file && Storage::disk('public')->exists($galeri->file)) {
                Storage::disk('public')->delete($galeri->file);
            }
            $data['file'] = $request->file('file')->store('galeri', 'public');
        }

        $galeri->update($data);

        return redirect()->route('admin.galeri.index')->with('success', 'Data galeri berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Galeri $galeri, $id)
    {
        //
        $galeri = Galeri::findOrFail($id);

        if ($galeri->file && Storage::disk('public')->exists($galeri->file)) {
            Storage::disk('public')->delete($galeri->file);
        }

        $galeri->delete();

        return redirect()->route('admin.galeri.index')->with('success', 'Data galeri berhasil dihapus!');
    }
}
