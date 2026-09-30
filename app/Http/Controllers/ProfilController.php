<?php

namespace App\Http\Controllers;

use App\Models\Profil_sekolah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProfilController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $profil = Profil_Sekolah::first();
        return view('admin.profile.index', compact('profil'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Profil_sekolah $profil_sekolah)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Profil_sekolah $profil_sekolah)
    {
        //
        $profil = Profil_Sekolah::first();
        return view('admin.profile.edit', compact('profil'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Profil_sekolah $profil_sekolah)
    {
        //
        $profil = Profil_Sekolah::first();

        $request->validate([
            'nama_sekolah'   => 'required|string|max:40',
            'kepala_sekolah' => 'required|string|max:40',
            'npsn'           => 'required|string|max:10',
            'kontak'         => 'required|string|max:15',
            'tahun_berdiri'  => 'required|digits:4',
            'alamat'         => 'required|string',
            'deskripsi'      => 'required|string',
            'visi_misi'      => 'required|string',
            'foto'           => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'logo'           => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $data = [
            'nama_sekolah'   => $request->nama_sekolah,
            'kepala_sekolah' => $request->kepala_sekolah,
            'npsn'           => $request->npsn,
            'kontak'         => $request->kontak,
            'tahun_berdiri'  => $request->tahun_berdiri,
            'alamat'         => $request->alamat,
            'deskripsi'      => $request->deskripsi,
            'visi_misi'      => $request->visi_misi,
        ];

        // Upload Foto Kepala Sekolah / Gedung
        if ($request->hasFile('foto')) {
            if ($profil && $profil->foto && Storage::disk('public')->exists($profil->foto)) {
                Storage::disk('public')->delete($profil->foto);
            }
            $data['foto'] = $request->file('foto')->store('profil', 'public');
        }

        // Upload Logo Sekolah
        if ($request->hasFile('logo')) {
            if ($profil && $profil->logo && Storage::disk('public')->exists($profil->logo)) {
                Storage::disk('public')->delete($profil->logo);
            }
            $data['logo'] = $request->file('logo')->store('profil', 'public');
        }

        if ($profil) {
            $profil->update($data);
        } else {
            // Generate UUID manual jika membuat data baru
            $data['id_profil_sekolah'] = (string) Str::uuid();
            Profil_Sekolah::create($data);
        }

        return redirect()->route('admin.profil.index')->with('success', 'Profil sekolah berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Profil_sekolah $profil_sekolah)
    {
        //
    }
}
