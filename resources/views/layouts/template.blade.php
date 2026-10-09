<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Dashboard Admin - {{ $profilSekolah->nama_sekolah }}</title>
    <link rel="icon" type="image/png" href="{{ asset('assets/img/logosman1.png')}}">

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons & Font Awesome -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f5f7fb;
            color: #333;
            margin: 0;
        }

        /* =========================
           SIDEBAR
        ========================= */
        .sidebar {
            position: fixed;
            top: 0;
            left: 0;
            bottom: 0;
            width: 250px;
            color: #adb5bd;
            z-index: 1050;
            display: flex;
            flex-direction: column;
            background-color: #0d6efd; /* Bootstrap Primary */
        }

        .sidebar-header {
            padding: 22px 20px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.15);
        }

        .school-subtitle {
            color: rgba(255, 255, 255, 0.8);
            font-size: 11px;
            margin: 2px 0 0;
        }

        /* =========================
           MENU
        ========================= */
        .menu-title {
            padding: 0 18px 8px;
            color: rgba(255, 255, 255, 0.7);
            font-size: 10px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: .5px;
        }

        .sidebar-menu {
            padding: 0 12px;
            flex: 1;
            overflow-y: auto;
        }

        .sidebar-menu a {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 11px 14px;
            margin-bottom: 4px;
            border-radius: 8px;
            color: #ffffff;
            text-decoration: none;
            font-size: 13px;
            font-weight: 500;
            transition: .2s;
        }

        .sidebar-menu a i {
            width: 20px;
            text-align: center;
        }

        .sidebar-menu a:hover,
        .sidebar-menu a.active {
            background-color: rgba(255, 255, 255, 0.2);
            color: white;
        }

        /* =========================
           MAIN CONTENT & TOP NAVBAR
        ========================= */
        .main-content {
            margin-left: 250px;
            min-height: 100vh;
        }

        .top-navbar {
            background-color: white;
            border-bottom: 1px solid #e5e7eb;
            padding: 16px 25px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .page-title {
            font-size: 18px;
            font-weight: 600;
            margin: 0;
            color: #222;
        }

        .page-description {
            font-size: 12px;
            color: #8a8a8a;
            margin: 3px 0 0;
        }

        .top-admin {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .top-admin-info {
            text-align: right;
        }

        .top-admin-name {
            font-size: 12px;
            font-weight: 600;
            margin: 0;
            color: #444;
        }

        .top-admin-role {
            font-size: 10px;
            color: #999;
            margin: 2px 0 0;
        }

        .top-avatar {
            width: 36px;
            height: 36px;
            border-radius: 50%;
            background-color: #eeeaff;
            color: #695eef;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 13px;
            font-weight: 600;
        }

        .content-area {
            padding: 25px;
        }

        /* =========================
           MOBILE HEADER & MENU
        ========================= */
        .mobile-header {
            display: none;
            background-color: #1e1e2d;
            color: white;
            padding: 12px 15px;
            align-items: center;
            justify-content: space-between;
        }

        .mobile-title {
            font-size: 14px;
            font-weight: 600;
        }

        .mobile-subtitle {
            font-size: 10px;
            color: #9292a0;
        }

        .mobile-menu-btn {
            border: none;
            background: transparent;
            color: white;
            font-size: 20px;
        }

        .mobile-menu {
            display: none;
            background-color: #1e1e2d;
            padding: 12px;
            border-top: 1px solid #343445;
        }

        .mobile-menu.show {
            display: block;
        }

        .mobile-menu a {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 11px 12px;
            margin-bottom: 4px;
            color: #aaa;
            text-decoration: none;
            border-radius: 8px;
            font-size: 13px;
        }

        .mobile-menu a:hover,
        .mobile-menu a.active {
            background-color: #695eef;
            color: white;
        }

        /* RESPONSIVE */
        @media (max-width: 991.98px) {
            .sidebar {
                display: none;
            }

            .main-content {
                margin-left: 0;
            }

            .mobile-header {
                display: flex;
            }

            .top-navbar {
                display: none;
            }

            .content-area {
                padding: 18px;
            }
        }
    </style>
</head>

<body>
    <!-- MOBILE HEADER -->
    <div class="mobile-header">
        <div class="d-flex align-items-center gap-2">
            <div class="top-avatar">
                <i class="fa-solid fa-school"></i>
            </div>
            <div>
                <div class="mobile-title">{{ $profilSekolah->nama_sekolah }}</div>
                <div class="mobile-subtitle">Dashboard Admin</div>
            </div>
        </div>
        <button class="mobile-menu-btn" onclick="toggleMobileMenu()">
            <i class="fa-solid fa-bars"></i>
        </button>
    </div>

    <!-- MOBILE MENU -->
    <div id="mobile-menu" class="mobile-menu">
        <a href="{{ route('dashboard') }}"><i class="fa-solid fa-chart-pie"></i> Dashboard</a>
        <a href="{{ route('admin.guru.index') }}"><i class="fa-solid fa-chalkboard-user"></i> Data Guru</a>
        <a href="{{ route('admin.siswa.index') }}"><i class="fa-solid fa-users"></i> Data Siswa</a>
        @auth
            @if (Auth::user()->role === 'admin')
                <a href="{{ route('admin.user.index') }}"><i class="fa-solid fa-users-gear"></i> Data User</a>
            @endif
        @endauth
        <a href="{{ route('admin.berita.index') }}"><i class="fa-solid fa-newspaper"></i> Kelola Berita</a>
        <a href="{{ route('admin.ekstrakulikuler.index') }}"><i class="fa-solid fa-basketball"></i> Ekstrakurikuler</a>
        <a href="{{ route('admin.galeri.index') }}"><i class="fa-solid fa-images"></i> Galeri</a>
        <a href="{{ route('admin.profil.index') }}"><i class="fa-solid fa-school"></i> Profile Sekolah</a>
    </div>

    <!-- SIDEBAR DESKTOP -->
    <aside class="sidebar">
        <div class="sidebar-header">
            <div class="d-flex align-items-center gap-3">
                <img src="{{ asset('storage/' . $profilSekolah->logo) }}" alt="Logo" style="width:40px; height:40px; object-fit:contain;">
                <div>
                    <span class="fw-semibold text-white d-block" style="font-size: 14px;">{{ $profilSekolah->nama_sekolah }}</span>
                    <p class="school-subtitle">Panel Administrasi</p>
                </div>
            </div>
        </div>

        <nav class="sidebar-menu pt-3">
            <div class="menu-title">Menu Utama</div>
            <a href="{{ route('dashboard') }}"><i class="fa-solid fa-chart-pie"></i><span>Dashboard</span></a>
            <a href="{{ route('admin.guru.index') }}"><i class="fa-solid fa-chalkboard-user"></i><span>Data Guru</span></a>
            <a href="{{ route('admin.siswa.index') }}"><i class="fa-solid fa-users"></i><span>Data Siswa</span></a>
            @auth
                @if (Auth::user()->role === 'admin')
                    <a href="{{ route('admin.user.index') }}"><i class="fa-solid fa-users-gear"></i><span>Data User</span></a>
                @endif
            @endauth
            <a href="{{ route('admin.berita.index') }}"><i class="fa-solid fa-newspaper"></i><span>Kelola Berita</span></a>
            <a href="{{ route('admin.ekstrakulikuler.index') }}"><i class="fa-solid fa-basketball"></i><span>Ekstrakurikuler</span></a>
            <a href="{{ route('admin.galeri.index') }}"><i class="fa-solid fa-images"></i><span>Galeri</span></a>
            <a href="{{ route('admin.profil.index') }}"><i class="fa-solid fa-school"></i><span>Profile Sekolah</span></a>
        </nav>
    </aside>

    <!-- MAIN CONTENT (TERMASUK TOP NAVBAR) -->
    <main class="main-content">
        <header class="top-navbar">
            <div>
                <h1 class="page-title">Sistem Informasi</h1>
                <p class="page-description">Selamat datang di Panel Administrasi {{ $profilSekolah->nama_sekolah }}</p>
            </div>

            <!-- Area Profil Admin dengan Dropdown -->
            <div class="top-admin dropdown">
                <div class="d-flex align-items-center gap-3" id="dropdownUserMenu" data-bs-toggle="dropdown" aria-expanded="false" style="cursor: pointer;">
                    <div class="top-admin-info">
                        <p class="top-admin-name">{{ Auth::user()->name ?? 'Administrator' }}</p>
                        <p class="top-admin-role">{{ Auth::user()->username ?? 'admin_sekolah' }}</p>
                    </div>
                    <div class="top-avatar">
                        {{ strtoupper(substr(Auth::user()->name ?? 'A', 0, 1)) }}
                    </div>
                </div>

                <!-- Menu Dropdown -->
                <ul class="dropdown-menu dropdown-menu-end border-0 shadow mt-2 p-3">
                    <li class="dropdown-header text-center p-0 mb-3">
                        <div class="top-avatar mx-auto mb-2">
                            {{ strtoupper(substr(Auth::user()->name ?? 'A', 0, 1)) }}
                        </div>
                        <span class="fw-bold text-dark d-block fs-6">{{ Auth::user()->name ?? 'Administrator' }}</span>
                        <small class="text-muted d-block">{{ Auth::user()->email ?? Auth::user()->username ?? '' }}</small>
                    </li>

                    <li><hr class="dropdown-divider my-2"></li>

                    <li class="text-center pt-2">
                        <form method="POST" action="{{ route('logout') }}" class="d-inline-block w-100">
                            @csrf
                            <button type="submit" class="btn btn-danger btn-sm w-100 d-flex align-items-center justify-content-center gap-2 py-2 rounded-2 fw-semibold">
                                <i class="bi bi-box-arrow-right"></i> Logout
                            </button>
                        </form>
                    </li>
                </ul>
            </div>
        </header>

        <!-- Dynamic Content Area -->
        <div class="content-area">
            @yield('content')
        </div>
    </main>

    <!-- Bootstrap 5 Bundle JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        function toggleMobileMenu() {
            const menu = document.getElementById('mobile-menu');
            menu.classList.toggle('show');
        }
    </script>
</body>
</html>
