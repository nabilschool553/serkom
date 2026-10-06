<?php

namespace App\Http\Controllers;

use App\Models\ekstrakulikuler;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EkstrakulikulerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //
        $search = $request->input('search');
        $ekstrakulikuler = ekstrakulikuler::when($search, function ($query, $search) {
            $query->where('nama_eskul', 'like', "%{$search}%")
                  ->orWhere('pembina', 'like', "%{$search}%")
                  ->orWhere('jadwal', 'like', "%{$search}%");
        })->latest()->paginate(10);
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
            'nama_eskul' => 'required|string|max:100',
            'pembina'    => 'required|string|max:100',
            'jadwal'     => 'required|string|max:100',
            'deskripsi'  => 'required|string',
            'gambar'       => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $gambarPath = null;
        if ($request->hasFile('gambar')) {
            $gambarPath = $request->file('gambar')->store('ekstrakulikuler', 'public');
        }

        ekstrakulikuler::create([
            'nama_eskul'    => $request->nama_eskul,
            'pembina'       => $request->pembina,
            'jadwal'        => $request->jadwal,
            'deskripsi'     => $request->deskripsi,
            'gambar'        => $gambarPath,
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
        $ekstrakulikuler = ekstrakulikuler::where('id_ekstrakulikuler', $id)->firstOrFail();
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
            'nama_eskul'           => 'required|string|max:100',
            'pembina'              => 'required|string|max:100',
            'jadwal'               => 'required|string|max:100',
            'deskripsi'            => 'required|string',
            'gambar'               => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $data = [
            'nama_eskul'           => $request->nama_eskul,
            'pembina'              => $request->pembina,
            'jadwal'               => $request->jadwal,
            'deskripsi'            => $request->deskripsi,
        ];

        if ($request->hasFile('gambar')) {
            if ($ekstrakulikuler->gambar && Storage::disk('public')->exists($ekstrakulikuler->gambar)) {
                Storage::disk('public')->delete($ekstrakulikuler->gambar);
            }
            $data['gambar'] = $request->file('gambar')->store('ekstrakulikuler', 'public');
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

        if ($ekstrakulikuler->gambar && Storage::disk('public')->exists($ekstrakulikuler->gambar)) {
            Storage::disk('public')->delete($ekstrakulikuler->gambar);
        }

        $ekstrakulikuler->delete();

        return redirect()->route('admin.ekstrakulikuler.index')->with('success', 'Data ekstrakulikuler berhasil dihapus!');
    }
}
