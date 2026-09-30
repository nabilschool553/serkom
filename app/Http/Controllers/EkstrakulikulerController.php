<?php

namespace App\Http\Controllers;

use App\Models\ekstrakulikuler;
use Illuminate\Http\Request;

class EkstrakulikulerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $ekstrakulikuler = ekstrakulikuler::latest()->paginate(10);
        return view('admin.ekstrakulikuler.index', compact('ekstrakulikuler'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.ekstrakulikuler.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, ekstrakulikuler $ekstrakulikuler)
    {
        //
        $request->validate([
            'nama_ekstrakulikuler' => 'required|string|max:100',
            'pembina'              => 'required|string|max:100',
            'deskripsi'            => 'required|string',
            'foto'                 => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $fotoPath = null;
        if ($request->hasFile('foto')) {
            $fotoPath = $request->file('foto')->store('ekstrakulikuler', 'public');
        }

        ekstrakulikuler::create([
            'nama_ekstrakulikuler' => $request->nama_ekstrakulikuler,
            'pembina'              => $request->pembina,
            'deskripsi'            => $request->deskripsi,
            'foto'                 => $fotoPath,
        ]);

        return redirect()->route('admin.ekstrakulikuler.index')->with('success', 'Data ekstrakulikuler berhasil ditambahkan!');
    }


    /**
     * Display the specified resource.
     */
    public function show(ekstrakulikuler $ekstrakulikuler)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ekstrakulikuler $ekstrakulikuler, $id)
    {
        //
        $ekstrakulikuler = ekstrakulikuler::findOrFail($id);
        return view('admin.ekstrakulikuler.edit', compact('ekstrakulikuler'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ekstrakulikuler $ekstrakulikuler, $id)
    {
        //
        $ekstrakulikuler = ekstrakulikuler::findOrFail($id);

        $request->validate([
            'nama_ekstrakulikuler' => 'required|string|max:100',
            'pembina'              => 'required|string|max:100',
            'deskripsi'            => 'required|string',
            'foto'                 => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $data = [
            'nama_ekstrakulikuler' => $request->nama_ekstrakulikuler,
            'pembina'              => $request->pembina,
            'deskripsi'            => $request->deskripsi,
        ];

        if ($request->hasFile('foto')) {
            // Hapus foto lama jika ada
            if ($ekstrakulikuler->foto && Storage::disk('public')->exists($ekstrakulikuler->foto)) {
                Storage::disk('public')->delete($ekstrakulikuler->foto);
            }
            $data['foto'] = $request->file('foto')->store('ekstrakulikuler', 'public');
        }

        $ekstrakulikuler->update($data);

        return redirect()->route('admin.ekstrakulikuler.index')->with('success', 'Data ekstrakulikuler berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ekstrakulikuler $ekstrakulikuler, $id)
    {
        //
        $ekstrakulikuler = ekstrakulikuler::findOrFail($id);

        if ($ekstrakulikuler->foto && Storage::disk('public')->exists($ekstrakulikuler->foto)) {
            Storage::disk('public')->delete($ekstrakulikuler->foto);
        }

        $ekstrakulikuler->delete();

        return redirect()->route('admin.ekstrakulikuler.index')->with('success', 'Data ekstrakulikuler berhasil dihapus!');
    }
}
