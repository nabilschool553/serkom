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
        $gurus            = Guru::latest()->take(4)->get();
        $beritas          = Berita::latest()->take(3)->get();
        $galeris          = Galeri::latest()->take(3)->get();
        $ekstrakulikulers = Ekstrakulikuler::latest()->take(3)->get();
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

    public function semuaGuru()
    {
        $gurus = Guru::latest()->get();
        return view('landing.halaman.guru.index', compact('gurus'));
    }


    public function semuaBerita()
    {
        $beritas = Berita::latest()->get();
        return view('landing.halaman.berita.index', compact('beritas'));
    }

    public function semuaEkstrakulikuler()
    {
        $ekstrakulikulers = Ekstrakulikuler::latest()->get();
        return view('landing.halaman.ekstrakulikuler.index', compact('ekstrakulikulers'));
    }

    public function semuaGaleri()
    {
        $galeris = Galeri::latest()->get();
        return view('landing.halaman.galeri.index', compact('galeris'));
    }

    public function detailGuru($slug)
    {
        $gurus = Guru::where('slug', $slug)->firstOrfail();
        return view('landing.halaman.guru.detail', compact('gurus'));
    }


    public function detailGaleri($slug)
    {
        $galeris = Galeri::where('slug', $slug)->firstOrfail();
        return view('landing.halaman.galeri.detail', compact('galeris'));
    }

    public function detailEkstrakulikuler($slug)
    {
        $ekstrakulikulers = Ekstrakulikuler::where('slug', $slug)->firstOrfail();
        return view('landing.halaman.ekstrakulikuler.detail', compact('ekstrakulikulers'));
    }

    public function detailBerita($slug)
    {
        $beritas = Berita::where('slug', $slug)->firstOrFail();
        return view('landing.halaman.berita.detail', compact('beritas'));
    }
}
