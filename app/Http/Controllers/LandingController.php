<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\Berita;
use App\Models\Galeri;
use App\Models\Ekstrakulikuler;
use App\Models\Siswa;
use App\Models\Profil_sekolah;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        $gurus            = Guru::take(4)->get();
        $beritas          = Berita::take(3)->get();
        $galeris          = Galeri::take(3)->get();
        $ekstrakulikulers = Ekstrakulikuler::take(3)->get();
        $profil_sekolah   = Profil_sekolah::first();

        $totalGuru   = Guru::count();
        $totalSiswa  = Siswa::count();
        $totalEskul  = Ekstrakulikuler::count();

        return view('landing.index', compact(
            'gurus',
            'beritas',
            'galeris',
            'ekstrakulikulers',
            'profil_sekolah',
            'totalGuru',
            'totalSiswa',
            'totalEskul'
        ));
    }

    public function detailBerita($slug)
    {
        $berita = Berita::where('slug', $slug)->firstOrFail();
        return view('landing.berita-detail', compact('berita'));
    }

    public function semuaGuru()
    {
        $gurus = Guru::all();
        return view('landing.halaman.guru.index', compact('gurus'));
    }


    public function semuaBerita()
    {
        $beritas = Berita::all();
        return view('landing.halaman.berita.index', compact('beritas'));
    }

    public function semuaEkstrakulikuler()
    {
        $ekstrakulikulers = Ekstrakulikuler::all();
        return view('landing.halaman.ekstrakulikuler.index', compact('ekstrakulikulers'));
    }

    public function semuaGaleri()
    {
        $galeris = Galeri::all();
        return view('landing.halaman.galeri.index', compact('galeris'));
    }

    public function detailGuru($id)
    {
        $gurus = Guru::findOrFail($id);
        return view('landing.halaman.guru.detail', compact('gurus'));
    }


    public function detailGaleri($id)
    {
        $galeris = Galeri::findOrFail($id);
        return view('landing.halaman.galeri.detail', compact('galeris'));
    }

    public function detailEkstrakulikuler($id)
    {
        $ekstrakulikulers = Ekstrakulikuler::findOrFail($id);
        return view('landing.halaman.ekstrakulikuler.detail', compact('ekstrakulikulers'));
    }

}
