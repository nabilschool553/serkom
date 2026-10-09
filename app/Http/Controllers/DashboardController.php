<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guru;
use App\Models\Siswa;
use App\Models\ekstrakulikuler;
use App\Models\Berita;
use App\Models\Galeri;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $totalGuru = Guru::count();
        $totalSiswa = Siswa::count();
        $totalEskul = ekstrakulikuler::count();
        $totalBerita = Berita::count();

        $beritaTerbaru = Berita::latest()->take(3)->get();
        $galeriTerbaru = Galeri::latest()->take(3)->get();

        return view('admin.dashboard.index', compact('totalGuru','totalSiswa','totalEskul','totalBerita','beritaTerbaru','galeriTerbaru'));
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
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
