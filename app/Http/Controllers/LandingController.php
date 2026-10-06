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
        $siswas           = Siswa::all();

        return view('landing.index', compact(
            'gurus',
            'beritas',
            'galeris',
            'ekstrakulikulers',
            'profil_sekolah',
            'siswas'
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
        return view('landing.menu.semuaguru', compact('gurus'));
    }

    public function semuaBerita()
    {
        $beritas = Berita::all();
        return view('landing.menu.semuaberita', compact('beritas'));
    }

    public function semuaEkstrakulikuler()
    {
        $ekstrakulikulers = Ekstrakulikuler::all();
        return view('landing.menu.semuaeskul', compact('ekstrakulikulers'));
    }

    public function semuaGaleri()
    {
        $galeris = Galeri::all();
        return view('landing.menu.semuaGaleri', compact('galeris'));
    }

}
