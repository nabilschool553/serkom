<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SMKS YPC Tasikmalaya - Website Resmi Sekolah</title>
  <!-- Tailwind CSS CDN -->
  <script src="https://cdn.tailwindcss.com"></script>
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <!-- Google Fonts Inter -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
  <script>
      tailwind.config = {
          theme: {
              extend: {
                  colors: {
                      brand: {
                          50: '#f0f3ff',
                          100: '#e0e7ff',
                          500: '#6366f1',
                          600: '#4f46e5',
                          700: '#4338ca',
                          800: '#3730a3',
                          900: '#1e1b4b',
                          accent: '#7c3aed'
                      },
                      bhumlu: {
                          dark: '#1e1e2d',
                          card: '#2b2b40',
                          purple: '#695eef',
                          accent: '#00d285'
                      }
                  },
                  fontFamily: {
                      sans: ['Inter', 'sans-serif'],
                  }
              }
          }
      }
  </script>
  
  <style>
      ::-webkit-scrollbar {
          width: 8px;
      }
      ::-webkit-scrollbar-track {
          background: #f1f5f9;
      }
      ::-webkit-scrollbar-thumb {
          background: #a5b4fc;
          border-radius: 4px;
      }
      ::-webkit-scrollbar-thumb:hover {
          background: #6366f1;
      }
      .glass-nav {
          background: rgba(30, 27, 75, 0.92);
          backdrop-filter: blur(12px);
      }
      .page-section {
          display: none;
          opacity: 0;
          transition: opacity 0.3s ease-in-out;
      }
      .page-section.active {
          display: block;
          opacity: 1;
      }
      .gradient-text {
          background: linear-gradient(135deg, #a855f7, #6366f1, #3b82f6);
          -webkit-background-clip: text;
          -webkit-text-fill-color: transparent;
      }
      .gradient-bg {
          background: linear-gradient(135deg, #1e1b4b 0%, #312e81 50%, #4338ca 100%);
      }
  </style>
</head>
<body class="bg-slate-50 font-sans text-slate-800 antialiased selection:bg-brand-500 selection:text-white min-h-screen flex flex-col">

  <!-- Top Announcement Bar -->
  <div class="bg-brand-900 text-indigo-200 text-xs py-2 px-4 border-b border-indigo-800/50">
      <div class="max-w-7xl mx-auto flex flex-col sm:flex-row justify-between items-center gap-2">
          <div class="flex items-center gap-4">
              <span><i class="fa-solid fa-phone text-brand-500 mr-1.5"></i> (021) 7890-1234</span>
              <span><i class="fa-solid fa-envelope text-brand-500 mr-1.5"></i> info@smksypctasikmalaya.sch.id</span>
              <span class="hidden md:inline"><i class="fa-solid fa-location-dot text-brand-500 mr-1.5"></i> Singaparna </span>
          </div>
          <div class="flex items-center gap-3">
              <span class="bg-emerald-500/20 text-emerald-300 text-[10px] font-semibold px-2 py-0.5 rounded-full border border-emerald-500/30">NPSN: 20240918</span>
              <span class="bg-brand-500/20 text-brand-300 text-[10px] font-semibold px-2 py-0.5 rounded-full border border-brand-500/30">Akreditasi A</span>
          </div>
      </div>
  </div>

  <!-- Main Navigation Bar -->
  <header class="sticky top-0 z-40 glass-nav border-b border-indigo-900/60 shadow-lg text-white">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div class="flex items-center justify-between h-20">
              <!-- Logo & School Name -->
              <div class="flex items-center space-x-3 cursor-pointer" onclick="switchTab('beranda')">
                  <div class="w-12 h-12 rounded-xl bg-gradient-to-tr from-brand-accent to-brand-500 p-0.5 shadow-md shadow-brand-500/30 flex items-center justify-center">
                      <div class="w-full h-full bg-brand-900 rounded-[10px] flex items-center justify-center text-brand-500 font-extrabold text-xl">
                          <i class="fa-solid fa-graduation-cap"></i>
                      </div>
                  </div>
                  <div>
                      <span class="text-lg font-bold tracking-tight block text-white leading-tight">SMKS YPC</span>
                      <span class="text-xs text-indigo-300 font-medium tracking-wide">TASIKMALAYA</span>
                  </div>
              </div>

              <!-- Desktop Nav Menu -->
              <nav class="hidden xl:flex items-center space-x-1">
                  <button onclick="switchTab('beranda')" id="nav-beranda" class="nav-link px-3.5 py-2 rounded-lg text-sm font-medium transition-all text-white bg-brand-600/80 shadow-sm">Beranda</button>
                  <button onclick="switchTab('profil')" id="nav-profil" class="nav-link px-3.5 py-2 rounded-lg text-sm font-medium text-indigo-200 hover:text-white hover:bg-white/10 transition-all">Profil Sekolah</button>
                  <button onclick="switchTab('ekskul')" id="nav-ekskul" class="nav-link px-3.5 py-2 rounded-lg text-sm font-medium text-indigo-200 hover:text-white hover:bg-white/10 transition-all">Ekstrakurikuler</button>
                  <button onclick="switchTab('berita')" id="nav-berita" class="nav-link px-3.5 py-2 rounded-lg text-sm font-medium text-indigo-200 hover:text-white hover:bg-white/10 transition-all">Berita</button>
                  <button onclick="switchTab('galeri')" id="nav-galeri" class="nav-link px-3.5 py-2 rounded-lg text-sm font-medium text-indigo-200 hover:text-white hover:bg-white/10 transition-all">Galeri</button>
                  <button onclick="switchTab('guru-siswa')" id="nav-guru-siswa" class="nav-link px-3.5 py-2 rounded-lg text-sm font-medium text-indigo-200 hover:text-white hover:bg-white/10 transition-all">Data Guru & Siswa</button>
              </nav>

              <!-- Action Button / Login Admin -->
              <div class="hidden xl:flex items-center space-x-3">
                  <button onclick="openLoginModal()" class="flex items-center gap-2 bg-gradient-to-r from-brand-accent to-brand-500 hover:from-purple-600 hover:to-brand-600 text-white font-semibold text-xs px-4 py-2.5 rounded-xl shadow-lg shadow-brand-500/20 transition transform active:scale-95 border border-purple-400/30">
                      <i class="fa-solid fa-user-gear"></i>
                      <span id="btn-login-text">Login Admin</span>
                  </button>
              </div>

              <!-- Mobile menu button -->
              <div class="xl:hidden flex items-center gap-2">
                  <button onclick="openLoginModal()" class="p-2 rounded-lg bg-white/10 text-white hover:bg-white/20 text-sm">
                      <i class="fa-solid fa-user-lock"></i>
                  </button>
                  <button onclick="toggleMobileMenu()" class="p-2.5 rounded-xl bg-white/10 text-white hover:bg-white/20 focus:outline-none">
                      <i class="fa-solid fa-bars text-xl"></i>
                  </button>
              </div>
          </div>
      </div>

      <!-- Mobile Drawer Menu -->
      <div id="mobile-menu" class="hidden xl:hidden bg-brand-900/95 border-b border-indigo-800 px-4 pt-2 pb-6 space-y-2 backdrop-blur-md">
          <button onclick="switchTab('beranda'); toggleMobileMenu()" class="block w-full text-left px-4 py-3 rounded-xl text-sm font-medium text-white hover:bg-brand-800">Beranda</button>
          <button onclick="switchTab('profil'); toggleMobileMenu()" class="block w-full text-left px-4 py-3 rounded-xl text-sm font-medium text-indigo-200 hover:bg-brand-800">Profil Sekolah</button>
          <button onclick="switchTab('ekskul'); toggleMobileMenu()" class="block w-full text-left px-4 py-3 rounded-xl text-sm font-medium text-indigo-200 hover:bg-brand-800">Ekstrakurikuler</button>
          <button onclick="switchTab('berita'); toggleMobileMenu()" class="block w-full text-left px-4 py-3 rounded-xl text-sm font-medium text-indigo-200 hover:bg-brand-800">Berita Kegiatan</button>
          <button onclick="switchTab('galeri'); toggleMobileMenu()" class="block w-full text-left px-4 py-3 rounded-xl text-sm font-medium text-indigo-200 hover:bg-brand-800">Galeri Foto & Video</button>
          <button onclick="switchTab('guru-siswa'); toggleMobileMenu()" class="block w-full text-left px-4 py-3 rounded-xl text-sm font-medium text-indigo-200 hover:bg-brand-800">Data Guru & Siswa</button>
      </div>
  </header>

  <main class="flex-grow">
      
      <!-- ==================== 1. BERANDA (HOME) ==================== -->
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
                              <button onclick="switchTab('profil')" class="bg-white text-brand-900 font-bold px-6 py-3.5 rounded-xl shadow-xl hover:bg-indigo-50 transition transform active:scale-95 flex items-center gap-2">
                                  <i class="fa-solid fa-school"></i> Profil Sekolah
                              </button>
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

  <!-- Footer -->
  <footer class="bg-slate-900 text-white pt-12 pb-8 border-t border-slate-800">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div class="grid grid-cols-1 md:grid-cols-4 gap-8 pb-10 border-b border-slate-800">
              <div class="space-y-4">
                  <div class="flex items-center space-x-3">
                      <div class="w-10 h-10 rounded-xl bg-brand-500 flex items-center justify-center text-white font-bold">
                          <i class="fa-solid fa-graduation-cap"></i>
                      </div>
                      <span class="text-base font-bold">SMKS YPC</span>
                  </div>
                  <p class="text-slate-400 text-xs leading-relaxed">
                      Membentuk generasi pembelajar sepanjang hayat yang cerdas, kreatif, dan berbudi pekerti luhur.
                  </p>
              </div>

              <div>
                  <h4 class="text-sm font-bold mb-4 text-indigo-300">Tautan Cepat</h4>
                  <ul class="space-y-2 text-xs text-slate-400">
                      <li><a href="#" onclick="switchTab('profil'); return false;" class="hover:text-white">Profil Sekolah</a></li>
                      <li><a href="#" onclick="switchTab('ekskul'); return false;" class="hover:text-white">Ekstrakurikuler</a></li>
                      <li><a href="#" onclick="switchTab('berita'); return false;" class="hover:text-white">Berita Kegiatan</a></li>
                      <li><a href="#" onclick="switchTab('galeri'); return false;" class="hover:text-white">Galeri Media</a></li>
                  </ul>
              </div>

              <div>
                  <h4 class="text-sm font-bold mb-4 text-indigo-300">Ekstrakurikuler</h4>
                  <ul class="space-y-2 text-xs text-slate-400">
                      <li>Pramuka Ambalan</li>
                      <li>Paskibraka Utama</li>
                      <li>PMR Wira</li>
                      <li>Klub Sains & Robotik</li>
                  </ul>
              </div>

              <div>
                  <h4 class="text-sm font-bold mb-4 text-indigo-300">Kontak Kami</h4>
                  <ul class="space-y-2 text-xs text-slate-400">
                      <li class="flex items-start gap-2"><i class="fa-solid fa-location-dot mt-0.5 text-brand-500"></i> Jl. Pendidikan No. 45, Jakarta Selatan</li>
                      <li class="flex items-center gap-2"><i class="fa-solid fa-phone text-brand-500"></i> (021) 7890-1234</li>
                      <li class="flex items-center gap-2"><i class="fa-solid fa-envelope text-brand-500"></i> info@sman1permata.sch.id</li>
                  </ul>
              </div>
          </div>

          <div class="pt-6 flex flex-col sm:flex-row justify-between items-center text-xs text-slate-500 gap-4">
              <p>&copy; 2026 SMKS YPC TASIKMALAYA. All Rights Reserved. Powered by db_profil_sekolah Engine.</p>
              <div class="flex space-x-4">
                  <a href="#" class="hover:text-indigo-400"><i class="fa-brands fa-facebook"></i></a>
                  <a href="#" class="hover:text-indigo-400"><i class="fa-brands fa-instagram"></i></a>
                  <a href="#" class="hover:text-indigo-400"><i class="fa-brands fa-youtube"></i></a>
              </div>
          </div>
      </div>
  </footer>
 
</body>
</html>