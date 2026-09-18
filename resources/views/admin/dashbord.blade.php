@extends('layouts.template')
@section('content')
    <section id="page-beranda" class="page-section active">
          <!-- Hero Banner Section -->
          <div class="relative gradient-bg overflow-hidden text-white pt-12 pb-20 lg:pt-16 lg:pb-28">
              <div class="absolute inset-0 opacity-10 bg-[radial-gradient(#fff_1px,transparent_1px)] [background-size:16px_16px]"></div>
              
              <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
                  <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
                      <div class="lg:col-span-7 space-y-6 text-center lg:text-left">
                          <div class="inline-flex items-center gap-2 bg-indigo-500/20 border border-indigo-400/30 backdrop-blur-md text-indigo-200 px-3.5 py-1.5 rounded-full text-xs font-semibold">
                              <span class="w-2 h-2 rounded-full bg-emerald-400 animate-ping"></span>
                              Selamat Datang di Website Resmi Sekolah
                          </div>
                          <h1 class="text-3xl sm:text-5xl lg:text-6xl font-extrabold tracking-tight leading-tight">
                              Mewujudkan Generasi <span class="gradient-text">Unggul & Berkarakter</span> Global
                          </h1>
                          <div class="flex flex-wrap gap-4 justify-center lg:justify-start pt-2">
                              <a href="{{route('admin.Profile')}}" class="bg-white text-brand-900 font-bold px-6 py-3.5 rounded-xl shadow-xl hover:bg-indigo-50 transition transform active:scale-95 flex items-center gap-2">
                                  <i class="fa-solid fa-school"></i> Profil Sekolah
                              </a>
                              <button onclick="switchTab('berita')" class="bg-indigo-800/60 hover:bg-indigo-800 text-white border border-indigo-500/40 font-semibold px-6 py-3.5 rounded-xl backdrop-blur-md transition flex items-center gap-2">
                                  <i class="fa-solid fa-newspaper"></i> Berita Terkini
                              </button>
                          </div>
                      </div>
                  </div>
              </div>
          </div>

          <!-- Interactive Statistics Cards -->
          <div class="-mt-10 relative z-20 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
              <div class="grid grid-cols-2 md:grid-cols-4 gap-4 sm:gap-6">
                  <div class="bg-white p-5 sm:p-6 rounded-2xl shadow-xl shadow-slate-200/60 border border-slate-100 flex items-center gap-4 hover:-translate-y-1 transition duration-300">
                      <div class="w-12 h-12 rounded-xl bg-indigo-100 text-brand-600 flex items-center justify-center text-xl font-bold">
                          <i class="fa-solid fa-chalkboard-user"></i>
                      </div>
                      <div>
                          <div id="stat-guru" class="text-2xl sm:text-3xl font-extrabold text-slate-800">0</div>
                          <div class="text-xs text-slate-500 font-medium">Jumlah Guru</div>
                      </div>
                  </div>

                  <div class="bg-white p-5 sm:p-6 rounded-2xl shadow-xl shadow-slate-200/60 border border-slate-100 flex items-center gap-4 hover:-translate-y-1 transition duration-300">
                      <div class="w-12 h-12 rounded-xl bg-purple-100 text-purple-600 flex items-center justify-center text-xl font-bold">
                          <i class="fa-solid fa-users-line"></i>
                      </div>
                      <div>
                          <div id="stat-siswa" class="text-2xl sm:text-3xl font-extrabold text-slate-800">0</div>
                          <div class="text-xs text-slate-500 font-medium">Jumlah Siswa</div>
                      </div>
                  </div>

                  <div class="bg-white p-5 sm:p-6 rounded-2xl shadow-xl shadow-slate-200/60 border border-slate-100 flex items-center gap-4 hover:-translate-y-1 transition duration-300">
                      <div class="w-12 h-12 rounded-xl bg-emerald-100 text-emerald-600 flex items-center justify-center text-xl font-bold">
                          <i class="fa-solid fa-basketball"></i>
                      </div>
                      <div>
                          <div id="stat-ekskul" class="text-2xl sm:text-3xl font-extrabold text-slate-800">0</div>
                          <div class="text-xs text-slate-500 font-medium">Ekstrakurikuler</div>
                      </div>
                  </div>

                  <div class="bg-white p-5 sm:p-6 rounded-2xl shadow-xl shadow-slate-200/60 border border-slate-100 flex items-center gap-4 hover:-translate-y-1 transition duration-300">
                      <div class="w-12 h-12 rounded-xl bg-amber-100 text-amber-600 flex items-center justify-center text-xl font-bold">
                          <i class="fa-solid fa-newspaper"></i>
                      </div>
                      <div>
                          <div id="stat-berita" class="text-2xl sm:text-3xl font-extrabold text-slate-800">0</div>
                          <div class="text-xs text-slate-500 font-medium">Berita Kegiatan</div>
                      </div>
                  </div>
              </div>
          </div>

          <!-- Berita Terbaru Snippet -->
          <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
              <div class="flex flex-col sm:flex-row sm:items-end justify-between mb-10 gap-4">
                  <div>
                      <span class="text-xs font-bold text-brand-600 tracking-wider uppercase">Kabar Terbaru</span>
                      <h2 class="text-2xl sm:text-3xl font-bold text-slate-900 mt-1">Berita & Kegiatan Sekolah</h2>
                  </div>
                  <button onclick="switchTab('berita')" class="text-brand-600 hover:text-brand-700 font-semibold text-sm flex items-center gap-2 group">
                      Lihat Semua Berita <i class="fa-solid fa-arrow-right group-hover:translate-x-1 transition"></i>
                  </button>
              </div>

              <div id="home-news-container" class="grid grid-cols-1 md:grid-cols-3 gap-8">
                  <!-- Dynamic News Cards Injection -->
              </div>
          </div>

          <!-- Galeri Cuplikan Snippet -->
          <div class="bg-slate-100/70 py-16">
              <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                  <div class="text-center max-w-2xl mx-auto mb-12">
                      <span class="text-xs font-bold text-purple-600 tracking-wider uppercase">Dokumentasi</span>
                      <h2 class="text-2xl sm:text-3xl font-bold text-slate-900 mt-1">Galeri Kegiatan Siswa</h2>
                      <p class="text-slate-600 text-sm mt-2">Momen-momen berharga dalam berbagai aktivitas pembelajaran & kompetisi.</p>
                  </div>

                  <div id="home-gallery-container" class="grid grid-cols-2 md:grid-cols-4 gap-4">
                      <!-- Dynamic Gallery Items Injection -->
                  </div>

                  <div class="text-center mt-8">
                      <button onclick="switchTab('galeri')" class="bg-slate-900 hover:bg-slate-800 text-white font-medium text-sm px-6 py-3 rounded-xl transition shadow-md">
                          Buka Galeri Lengkap <i class="fa-solid fa-images ml-2"></i>
                      </button>
                  </div>
              </div>
          </div>
      </section>

  </main>

  <!-- Modal Login & Dashboard Admin Simulation -->
  <div id="modal-login" class="fixed inset-0 bg-slate-900/70 backdrop-blur-sm z-50 hidden flex items-center justify-center p-4">
      <div class="bg-white w-full max-w-md rounded-3xl shadow-2xl border border-slate-100 overflow-hidden relative">
          <button onclick="closeLoginModal()" class="absolute right-4 top-4 text-slate-400 hover:text-slate-600 p-2">
              <i class="fa-solid fa-xmark text-xl"></i>
          </button>
          <div class="p-8">
              <div class="text-center mb-6">
                  <div class="w-14 h-14 bg-brand-50 rounded-2xl flex items-center justify-center text-brand-600 text-2xl mx-auto mb-3">
                      <i class="fa-solid fa-user-shield"></i>
                  </div>
                  <h3 class="text-xl font-bold text-slate-900">Portal Admin Sekolah</h3>
                  <p class="text-xs text-slate-500 mt-1">Masuk untuk mengelola data `db_profil_sekolah`</p>
              </div>

              <form onsubmit="handleLoginSubmit(event)" class="space-y-4">
                  <div>
                      <label class="block text-xs font-semibold text-slate-600 mb-1">Username (`username`)</label>
                      <input type="text" id="login-username" value="admin_sekolah" required class="w-full px-4 py-2.5 rounded-xl border border-slate-200 text-sm focus:outline-none focus:border-brand-500">
                  </div>
                  <div>
                      <label class="block text-xs font-semibold text-slate-600 mb-1">Password</label>
                      <input type="password" id="login-password" value="admin123" required class="w-full px-4 py-2.5 rounded-xl border border-slate-200 text-sm focus:outline-none focus:border-brand-500">
                  </div>
                  <div>
                      <label class="block text-xs font-semibold text-slate-600 mb-1">Role (`role`)</label>
                      <select id="login-role" class="w-full px-4 py-2.5 rounded-xl border border-slate-200 text-sm focus:outline-none focus:border-brand-500">
                          <option value="Admin">Admin Utama</option>
                          <option value="Operator">Operator Data</option>
                      </select>
                  </div>
                  <button type="submit" class="w-full bg-brand-600 hover:bg-brand-700 text-white font-bold py-3 rounded-xl text-sm shadow-md transition">
                      Masuk Sistem Admin
                  </button>
              </form>
          </div>
      </div>
  </div>

  <!-- Admin Panel Dashboard Modal (Simulated Dashboard inspired by Bhumlu design) -->
  <div id="admin-panel-modal" class="fixed inset-0 bg-slate-900/80 backdrop-blur-md z-50 hidden flex items-center justify-center p-2 sm:p-6 overflow-y-auto">
      <div class="bg-bhumlu-dark w-full max-w-5xl rounded-3xl shadow-2xl border border-indigo-900/60 text-slate-200 overflow-hidden flex flex-col max-h-[90vh]">
          <!-- Admin Topbar -->
          <div class="bg-bhumlu-card p-4 px-6 border-b border-indigo-900/50 flex items-center justify-between">
              <div class="flex items-center gap-3">
                  <div class="w-9 h-9 rounded-xl bg-bhumlu-purple flex items-center justify-center text-white font-bold">
                      <i class="fa-solid fa-gauge-high"></i>
                  </div>
                  <div>
                      <h4 class="font-bold text-white text-sm">Dashboard Admin db_profil_sekolah</h4>
                      <p class="text-[10px] text-indigo-300">Logged as: <span id="admin-user-display" class="font-mono text-emerald-400">Admin</span></p>
                  </div>
              </div>
              <button onclick="closeAdminPanel()" class="bg-red-500/20 text-red-300 hover:bg-red-500 hover:text-white px-3 py-1.5 rounded-xl text-xs transition flex items-center gap-1.5">
                  <i class="fa-solid fa-right-from-bracket"></i> Keluar
              </button>
          </div>

          <!-- Admin Content Body -->
          <div class="p-6 overflow-y-auto space-y-6 flex-grow text-xs">
              <!-- Add Quick Data Form Section -->
              <div class="bg-bhumlu-card p-5 rounded-2xl border border-indigo-900/40">
                  <h5 class="font-bold text-white text-sm mb-4 flex items-center gap-2">
                      <i class="fa-solid fa-plus-circle text-bhumlu-accent"></i> Tambah Berita Baru (`berita`)
                  </h5>
                  <form onsubmit="handleAdminAddBerita(event)" class="grid grid-cols-1 md:grid-cols-2 gap-4">
                      <div class="md:col-span-2">
                          <label class="block text-slate-400 mb-1">Judul Berita (`judul`)</label>
                          <input type="text" id="add-berita-judul" required placeholder="Judul berita terbaru..." class="w-full bg-slate-900/70 border border-indigo-900 rounded-xl px-3 py-2 text-white focus:outline-none focus:border-bhumlu-purple">
                      </div>
                      <div>
                          <label class="block text-slate-400 mb-1">Tanggal (`tanggal`)</label>
                          <input type="date" id="add-berita-tanggal" required class="w-full bg-slate-900/70 border border-indigo-900 rounded-xl px-3 py-2 text-white focus:outline-none focus:border-bhumlu-purple">
                      </div>
                      <div>
                          <label class="block text-slate-400 mb-1">Kategori</label>
                          <select id="add-berita-kategori" class="w-full bg-slate-900/70 border border-indigo-900 rounded-xl px-3 py-2 text-white focus:outline-none">
                              <option value="Kegiatan">Kegiatan Sekolah</option>
                              <option value="Prestasi">Prestasi Siswa</option>
                              <option value="Pengumuman">Pengumuman</option>
                          </select>
                      </div>
                      <div class="md:col-span-2">
                          <label class="block text-slate-400 mb-1">Isi Berita (`isi`)</label>
                          <textarea id="add-berita-isi" rows="3" required placeholder="Tulis rincian berita..." class="w-full bg-slate-900/70 border border-indigo-900 rounded-xl px-3 py-2 text-white focus:outline-none"></textarea>
                      </div>
                      <div class="md:col-span-2 flex justify-end">
                          <button type="submit" class="bg-bhumlu-purple hover:bg-indigo-600 text-white font-bold px-5 py-2.5 rounded-xl shadow-md transition">
                              Simpan Data Berita
                          </button>
                      </div>
                  </form>
              </div>

              <!-- Database Status Summary -->
              <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                  <div class="bg-slate-900/60 p-4 rounded-2xl border border-indigo-900/30">
                      <div class="text-slate-400">Total Record Guru</div>
                      <div id="admin-count-guru" class="text-2xl font-bold text-white mt-1">0</div>
                  </div>
                  <div class="bg-slate-900/60 p-4 rounded-2xl border border-indigo-900/30">
                      <div class="text-slate-400">Total Record Siswa</div>
                      <div id="admin-count-siswa" class="text-2xl font-bold text-white mt-1">0</div>
                  </div>
                  <div class="bg-slate-900/60 p-4 rounded-2xl border border-indigo-900/30">
                      <div class="text-slate-400">Total Record Ekskul</div>
                      <div id="admin-count-ekskul" class="text-2xl font-bold text-white mt-1">0</div>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <!-- Modals Lightbox for Berita / Galeri -->
  <div id="modal-detail" class="fixed inset-0 bg-slate-900/70 backdrop-blur-sm z-50 hidden flex items-center justify-center p-4">
      <div class="bg-white w-full max-w-2xl rounded-3xl shadow-2xl overflow-hidden relative max-h-[90vh] flex flex-col">
          <button onclick="closeDetailModal()" class="absolute right-4 top-4 bg-slate-100 hover:bg-slate-200 text-slate-600 w-8 h-8 rounded-full flex items-center justify-center z-10">
              <i class="fa-solid fa-xmark"></i>
          </button>
          <div id="modal-detail-content" class="p-6 sm:p-8 overflow-y-auto">
              <!-- Injected via JavaScript -->
          </div>
      </div>
  </div>

  <!-- Notification Toast -->
  <div id="toast" class="fixed bottom-5 right-5 bg-slate-900 text-white px-5 py-3 rounded-2xl shadow-2xl z-50 hidden flex items-center gap-3 border border-slate-700 text-xs">
      <i class="fa-solid fa-circle-check text-emerald-400 text-base"></i>
      <span id="toast-message">Pesan notifikasi</span>
  </div>
@endsection