<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class GuruController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //
        $search = $request->input('search');
        $gurus = Guru::when($search, function ($query, $search) {
            $query->where('nama_guru', 'like', "%{$search}%")
                  ->orWhere('nip', 'like', "%{$search}%")
                  ->orWhere('mapel', 'like', "%{$search}%");
        })->latest()->paginate(10);
        return view('admin.guru.index', compact('gurus'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.guru.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Guru $guru)
    {
        //
        $request->validate([
            'nama_guru' => 'required|string|max:40',
            'nip'       => 'required|string|max:15|unique:gurus,nip',
            'mapel'     => 'required|string|max:40',
            'foto'      => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Maksimal 2MB
        ]);

        // Upload foto ke storage/app/public/guru
        $fotoPath = $request->file('foto')->store('guru', 'public');

        Guru::create([
            'id'        => (string) Str::uuid(),
            'nama_guru' => $request->nama_guru,
            'slug'      => Str::slug($request->nama_guru),
            'nip'       => $request->nip,
            'mapel'     => $request->mapel,
            'foto'      => $fotoPath,
        ]);

        return redirect()->route('admin.guru.index')->with('success', 'Data guru berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Guru $guru)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $guru = Guru::findOrFail($id);
        return view('admin.guru.edit', compact('guru'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $guru = Guru::findOrFail($id);

        $request->validate([
            'nama_guru' => 'required|string|max:40',
            'nip'       => 'required|string|max:15|unique:gurus,nip,' . $id,
            'mapel'     => 'required|string|max:40',
            'foto'      => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $data = [
            'nama_guru' => $request->nama_guru,
            'nip'       => $request->nip,
            'mapel'     => $request->mapel,
        ];

        if ($request->hasFile('foto')) {
            if ($guru->foto && Storage::disk('public')->exists($guru->foto)) {
                Storage::disk('public')->delete($guru->foto);
            }
            $data['foto'] = $request->file('foto')->store('guru', 'public');
        }

        $guru->update($data);

        return redirect()->route('admin.guru.index')->with('success', 'Data guru berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $guru = Guru::findOrFail($id);

        if ($guru->foto && Storage::disk('public')->exists($guru->foto)) {
            Storage::disk('public')->delete($guru->foto);
        }

        $guru->delete();

        return redirect()->route('admin.guru.index')->with('success', 'Data guru berhasil dihapus!');
    }
}
