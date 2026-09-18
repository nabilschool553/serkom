@extends('layouts.template')
@section('content')
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <!-- Sub Tab Switcher -->
        <div class="flex flex-col sm:flex-row justify-between items-center gap-4 mb-8">
            <div class="inline-flex p-1 bg-slate-200/80 rounded-2xl text-sm w-full sm:w-auto">
                <button onclick="switchDirectoryTab('siswa')" id="btn-tab-siswa" class="w-1/2 sm:w-auto px-6 py-2.5 rounded-xl font-bold transition text-slate-600 hover:text-slate-900">
                    <i class="fa-solid fa-user-graduate mr-2"></i> Data Siswa (<span id="count-siswa-badge">0</span>)
                </button>
            </div>

            <div class="relative w-full sm:w-80">
                <i class="fa-solid fa-search absolute left-3.5 top-1/2 -translate-y-1/2 text-slate-400"></i>
                <input type="text" id="dir-search-input" onkeyup="filterDirectoryTable()" placeholder="Cari nama, NISN, atau mapel..." class="w-full pl-10 pr-4 py-2 rounded-xl border border-slate-200 text-sm focus:outline-none focus:border-brand-500">
            </div>
        </div>

        <div id="dir-siswa-container" class="hidden bg-white rounded-2xl shadow-sm border border-slate-200 overflow-hidden">
            <div class="overflow-x-auto">
                <table class="w-full text-sm text-left">
                    <thead class="bg-slate-50 border-b border-slate-200 text-xs font-bold uppercase text-slate-500">
                        <tr>
                            <th class="py-3.5 px-4">NISN</th>
                            <th class="py-3.5 px-4">Nama Siswa</th>
                            <th class="py-3.5 px-4">Jenis Kelamin</th>
                            <th class="py-3.5 px-4 text-center">Tahun Masuk</th>
                            <th class="py-3.5 px-4 text-center">Status Siswa</th>
                        </tr>
                    </thead>
                    <tbody id="tbl-siswa-body" class="divide-y divide-slate-100">
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection