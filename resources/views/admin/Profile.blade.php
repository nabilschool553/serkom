@extends('layouts.template')
@section('admin.profile')
    <section id="page-profil" class="page-section">
            <div class="bg-gradient-to-r from-brand-900 to-indigo-900 text-white py-12">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <h1 class="text-3xl font-bold">Profil Sekolah</h1>
                    <p class="text-indigo-200 text-sm mt-1">Informasi komprehensif identitas dan sejarah sekolah</p>
                </div>
            </div>

            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-8">
                    <!-- Sidebar Profil & Identitas Visual -->
                    <div class="lg:col-span-4 space-y-6">
                        <div class="bg-white rounded-2xl shadow-sm border border-slate-200 p-6 text-center">
                            <div class="w-24 h-24 mx-auto rounded-2xl bg-indigo-50 border-2 border-indigo-100 flex items-center justify-center text-brand-600 text-4xl mb-4 shadow-inner">
                                <i class="fa-solid fa-school-flag"></i>
                            </div>
                            <h3 id="profil-nama-display" class="text-lg font-bold text-slate-900">SMKS YPC Tasikmalaya</h3>
                            <p class="text-xs text-slate-500 mt-1">Penggerak Literasi & Sains Digital</p>
                            
                            <div class="mt-6 pt-6 border-t border-slate-100 text-left space-y-3">
                                <div class="flex justify-between items-center text-xs">
                                    <span class="text-slate-500">Status Sekolah:</span>
                                    <span class="font-semibold text-slate-800">Negeri</span>
                                </div>
                                <div class="flex justify-between items-center text-xs">
                                    <span class="text-slate-500">Tahun Berdiri:</span>
                                    <span id="profil-tahun-display" class="font-semibold text-slate-800">1990</span>
                                </div>
                                <div class="flex justify-between items-center text-xs">
                                    <span class="text-slate-500">Kepala Sekolah:</span>
                                    <span id="profil-kepsek-display" class="font-semibold text-slate-800">Dr.Ujang Sanusi.MP.D.</span>
                                </div>
                            </div>
                        </div>

                        <!-- Card Visi Misi -->
                        <div class="bg-gradient-to-br from-indigo-900 to-brand-900 text-white rounded-2xl p-6 shadow-md">
                            <h3 class="text-base font-bold flex items-center gap-2 mb-3 text-purple-200">
                                <i class="fa-solid fa-compass text-purple-400"></i> Visi & Misi Sekolah
                            </h3>
                            <div id="profil-visi-misi-display" class="text-xs text-indigo-100 space-y-3 leading-relaxed">
                                <!-- Dynamic Visi Misi -->
                            </div>
                        </div>
                    </div>

                    <!-- Tabel Informasi Profil Sekolah (Reflecting `profil_sekolah` schema) -->
                    <div class="lg:col-span-8">
                        <div class="bg-white rounded-2xl shadow-sm border border-slate-200 overflow-hidden">
                            <div class="bg-slate-50 border-b border-slate-200 px-6 py-4 flex items-center justify-between">
                                <h3 class="font-bold text-slate-800 text-base flex items-center gap-2">
                                    <i class="fa-solid fa-table-list text-brand-600"></i> Tabel Informasi Profil Sekolah (`profil_sekolah`)
                                </h3>
                                <span class="bg-brand-50 text-brand-700 text-xs font-semibold px-2.5 py-1 rounded-md border border-brand-200">Database Schema Ready</span>
                            </div>

                            <div class="p-6">
                                <div class="overflow-x-auto">
                                    <table class="w-full text-sm text-left border-collapse">
                                        <tbody>
                                            <tr class="border-b border-slate-100 hover:bg-slate-50/80">
                                                <td class="py-3 px-4 font-semibold text-slate-600 bg-slate-50/50 w-1/3">Nama Sekolah</td>
                                                <td id="tbl-nama-sekolah" class="py-3 px-4 font-medium text-slate-900">--</td>
                                            </tr>
                                            <tr class="border-b border-slate-100 hover:bg-slate-50/80">
                                                <td class="py-3 px-4 font-semibold text-slate-600 bg-slate-50/50">NPSN</td>
                                                <td id="tbl-npsn" class="py-3 px-4 font-mono text-brand-600 font-bold">--</td>
                                            </tr>
                                            <tr class="border-b border-slate-100 hover:bg-slate-50/80">
                                                <td class="py-3 px-4 font-semibold text-slate-600 bg-slate-50/50">Kepala Sekolah</td>
                                                <td id="tbl-kepala-sekolah" class="py-3 px-4 font-medium text-slate-900">--</td>
                                            </tr>
                                            <tr class="border-b border-slate-100 hover:bg-slate-50/80">
                                                <td class="py-3 px-4 font-semibold text-slate-600 bg-slate-50/50">Tahun Berdiri</td>
                                                <td id="tbl-tahun-berdiri" class="py-3 px-4 text-slate-800">--</td>
                                            </tr>
                                            <tr class="border-b border-slate-100 hover:bg-slate-50/80">
                                                <td class="py-3 px-4 font-semibold text-slate-600 bg-slate-50/50">Alamat Lengkap</td>
                                                <td id="tbl-alamat" class="py-3 px-4 text-slate-700">--</td>
                                            </tr>
                                            <tr class="border-b border-slate-100 hover:bg-slate-50/80">
                                                <td class="py-3 px-4 font-semibold text-slate-600 bg-slate-50/50">Kontak / Telepon</td>
                                                <td id="tbl-kontak" class="py-3 px-4 text-slate-700">--</td>
                                            </tr>
                                            <tr class="border-b border-slate-100 hover:bg-slate-50/80">
                                                <td class="py-3 px-4 font-semibold text-slate-600 bg-slate-50/50">Deskripsi Ringkas</td>
                                                <td id="tbl-deskripsi" class="py-3 px-4 text-slate-600 text-xs leading-relaxed">--</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <div class="mt-8 pt-6 border-t border-slate-100">
                                    <h4 class="font-bold text-slate-800 text-sm mb-3">Fasilitas Utama Sekolah</h4>
                                    <div class="grid grid-cols-2 sm:grid-cols-3 gap-3 text-xs">
                                        <div class="p-3 bg-slate-50 rounded-xl border border-slate-100 flex items-center gap-2">
                                            <i class="fa-solid fa-laptop-code text-brand-600"></i> Lab Komputer STEAM
                                        </div>
                                        <div class="p-3 bg-slate-50 rounded-xl border border-slate-100 flex items-center gap-2">
                                            <i class="fa-solid fa-book-bookmark text-brand-600"></i> Perpustakaan Digital
                                        </div>
                                        <div class="p-3 bg-slate-50 rounded-xl border border-slate-100 flex items-center gap-2">
                                            <i class="fa-solid fa-flask text-brand-600"></i> Laboratorium IPA
                                        </div>
                                        <div class="p-3 bg-slate-50 rounded-xl border border-slate-100 flex items-center gap-2">
                                            <i class="fa-solid fa-volleyball text-brand-600"></i> Lapangan Olahraga Multi
                                        </div>
                                        <div class="p-3 bg-slate-50 rounded-xl border border-slate-100 flex items-center gap-2">
                                            <i class="fa-solid fa-mosque text-brand-600"></i> Masjid Sekolah
                                        </div>
                                        <div class="p-3 bg-slate-50 rounded-xl border border-slate-100 flex items-center gap-2">
                                            <i class="fa-solid fa-wifi text-brand-600"></i> Area Hotspot Wi-Fi 6
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection