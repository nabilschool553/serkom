<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //
        $search = $request->input('search');
        $siswas = Siswa::when($search, function ($query, $search) {
            $query->where('nisn', 'like', "%{$search}%")
                  ->orWhere('nama_siswa', 'like', "%{$search}%")
                  ->orWhere('jk', 'like', "%{$search}%");
        })->latest()->paginate(10);
        return view('admin.siswa.index', compact('siswas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.siswa.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'nisn'        => 'required|string|max:10|unique:siswas,nisn',
            'nama_siswa'  => 'required|string|max:40',
            'jk'          => 'required|in:Laki-laki,Perempuan',
            'tahun_masuk' => 'required|digits:4|integer|min:2000|max:' . date('Y'),
        ]);

        Siswa::create([
            'nisn'        => $request->nisn,
            'nama_siswa'  => $request->nama_siswa,
            'jk'          => $request->jk,
            'tahun_masuk' => $request->tahun_masuk,
        ]);

        return redirect()->route('admin.siswa.index')->with('success', 'Data siswa berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $siswa = Siswa::findOrFail($id);
        return view('admin.siswa.edit', compact('siswa'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $request->validate([
            'nisn'        => 'required|string|max:10|unique:siswas,nisn,' . $id,
            'nama_siswa'  => 'required|string|max:40',
            'jk'          => 'required|in:Laki-laki,Perempuan',
            'tahun_masuk' => 'required|digits:4|integer|min:2000|max:' . date('Y'),
        ]);

        $siswa = Siswa::findOrFail($id);
        $siswa->update([
            'nisn'        => $request->nisn,
            'nama_siswa'  => $request->nama_siswa,
            'jk'          => $request->jk,
            'tahun_masuk' => $request->tahun_masuk,
        ]);

        return redirect()->route('admin.siswa.index')->with('success', 'Data siswa berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $siswa = Siswa::findOrFail($id);
        $siswa->delete();

        return redirect()->route('admin.siswa.index')->with('success', 'Data siswa berhasil dihapus!');
    }
}
