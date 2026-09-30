<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Dashboard Admin - SMKS YPC Tasikmalaya</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap"
          rel="stylesheet">

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
            background-color: #1e1e2d;
            color: #adb5bd;
            z-index: 1050;
            display: flex;
            flex-direction: column;
        }

        .sidebar-header {
            padding: 22px 20px;
            border-bottom: 1px solid #343445;
        }

        .school-icon {
            width: 42px;
            height: 42px;
            background-color: #695eef;
            border-radius: 10px;

            display: flex;
            align-items: center;
            justify-content: center;

            color: white;
            font-size: 18px;
        }

        .school-name {
            color: white;
            font-weight: 600;
            margin: 0;
            font-size: 15px;
        }

        .school-subtitle {
            color: #90909f;
            font-size: 11px;
            margin: 2px 0 0;
        }

        /* =========================
           ADMIN PROFILE
        ========================= */

        .admin-box {
            margin: 20px 15px;
            padding: 12px;

            background-color: #2b2b40;
            border: 1px solid #363654;
            border-radius: 10px;

            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .admin-avatar {
            width: 36px;
            height: 36px;

            background-color: rgba(105, 94, 239, .15);
            color: #8d85ff;

            border-radius: 50%;

            display: flex;
            align-items: center;
            justify-content: center;

            font-size: 13px;
            font-weight: 600;
        }

        .admin-name {
            color: white;
            font-size: 13px;
            font-weight: 600;
            margin: 0;
        }

        .admin-role {
            color: #8b8b9b;
            font-size: 10px;
            margin: 2px 0 0;
        }

        /* =========================
           MENU
        ========================= */

        .menu-title {
            padding: 0 18px 8px;
            color: #707080;
            font-size: 10px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: .5px;
        }

        .sidebar-menu {
            padding: 0 12px;
            flex: 1;
        }

        .sidebar-menu a {
            display: flex;
            align-items: center;

            gap: 12px;

            padding: 11px 14px;
            margin-bottom: 4px;

            border-radius: 8px;

            color: #9999a8;
            text-decoration: none;

            font-size: 13px;
            font-weight: 500;

            transition: .2s;
        }

        .sidebar-menu a i {
            width: 20px;
            text-align: center;
        }

        .sidebar-menu a:hover {
            background-color: #2b2b40;
            color: white;
        }

        .sidebar-menu a.active {
            background-color: #695eef;
            color: white;
        }

        /* =========================
           LOGOUT
        ========================= */

        .logout-area {
            padding: 15px;
            border-top: 1px solid #343445;
        }

        .logout-btn {
            width: 100%;

            border: 1px solid rgba(220, 53, 69, .3);
            background-color: rgba(220, 53, 69, .08);

            color: #dc3545;

            padding: 9px;

            border-radius: 8px;

            font-size: 12px;
            font-weight: 600;

            transition: .2s;
        }

        .logout-btn:hover {
            background-color: #dc3545;
            color: white;
        }

        /* =========================
           MAIN CONTENT
        ========================= */

        .main-content {
            margin-left: 250px;
            min-height: 100vh;
        }

        /* =========================
           TOP NAVBAR
        ========================= */

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

        /* =========================
           CONTENT
        ========================= */

        .content-area {
            padding: 25px;
        }

        /* =========================
           MOBILE HEADER
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

        /* =========================
           RESPONSIVE
        ========================= */

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
        /* =========================
           MOBILE MENU
        ========================= */

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

    </style>
</head>


<body>
    <!-- =========================
         MOBILE HEADER
    ========================== -->
    <div class="mobile-header">
        <div class="d-flex align-items-center gap-2">
            <div class="school-icon">
                <i class="fa-solid fa-school"></i>
            </div>
            <div>
                <div class="mobile-title">
                    SMKS YPC
                </div>
                <div class="mobile-subtitle">
                    Dashboard Admin
                </div>
            </div>
        </div>
        <button class="mobile-menu-btn"
                onclick="toggleMobileMenu()">

            <i class="fa-solid fa-bars"></i>
        </button>
    </div>
    <!-- =========================
         MOBILE MENU
    ========================== -->

    <div id="mobile-menu" class="mobile-menu">

        <a href="{{ route('dashboard') }}">
            <i class="fa-solid fa-chart-pie"></i>
            Dashboard
        </a>

        <a href="{{ route('admin.guru.index') }}">
            <i class="fa-solid fa-chalkboard-user"></i>
            Data Guru
        </a>

        <a href="{{ route('admin.siswa.index') }}">
            <i class="fa-solid fa-users"></i>
            Data Siswa
        </a>

        <a href="{{ route('admin.user.index') }}">
            <i class="fa-solid fa-users"></i>
            Data User
        </a>

        <a href="{{ route('admin.berita.index') }}">
            <i class="fa-solid fa-newspaper"></i>
            Kelola Berita
        </a>

        <a href="{{ route('admin.ekstrakulikuler.index') }}">
            <i class="fa-solid fa-basketball"></i>
            Ekstrakurikuler
        </a>

        <a href="{{ route('admin.galeri.index') }}">
            <i class="fa-solid fa-images"></i>
            Galeri
        </a>

    </div>
    <!-- =========================
         SIDEBAR
    ========================== -->
    <aside class="sidebar">
        <!-- Header -->
        <div class="sidebar-header">
            <div class="d-flex align-items-center gap-3">
                <div class="school-icon">
                    <i class="fa-solid fa-school"></i>
                </div>
                <div>
                    <p class="school-name">
                        SMKS YPC Admin
                    </p>

                    <p class="school-subtitle">
                        Panel Administrasi
                    </p>
                </div>
            </div>
        </div>
        <!-- Admin -->
        <a href="{{ route('admin.profil.index') }}" class="admin-box">
            <div class="admin-avatar">
                A
            </div>
            <div>
                <p class="admin-name">
                    Administrator
                </p>
                <p class="admin-role">
                    admin_sekolah
                </p>
            </div>
        </a>
        <!-- Navigation -->
        <nav class="sidebar-menu">
            <div class="menu-title">
                Menu Utama
            </div>
            <a href="{{ route('dashboard') }}" class="">
                <i class="fa-solid fa-chart-pie"></i>
                <span>
                    Dashboard
                </span>
            </a>
            <a href="{{ route('admin.guru.index') }}">
                <i class="fa-solid fa-chalkboard-user"></i>
                <span>
                    Data Guru
                </span>
            </a>
            <a href="{{ route('admin.siswa.index') }}">
                <i class="fa-solid fa-users"></i>
                <span>
                    Data Siswa
                </span>
            </a>
            <a href="{{ route('admin.user.index') }}">
                <i class="fa-solid fa-users"></i>
                <span>
                    Data User
                </span>
            </a>
            <a href="{{ route('admin.berita.index') }}">
                <i class="fa-solid fa-newspaper"></i>
                <span>
                    Kelola Berita
                </span>
            </a>
            <a href="{{ route('admin.ekstrakulikuler.index') }}">
                <i class="fa-solid fa-basketball"></i>
                <span>
                    Ekstrakurikuler
                </span>
            </a>
            <a href="{{ route('admin.galeri.index') }}">
                <i class="fa-solid fa-images"></i>
                <span>
                    Galeri
                </span>
            </a>
        </nav>
        <!-- Logout -->
        <form action="{{ route('logout') }}" method="POST" class="d-inline">
            @csrf
            <button type="submit" class="btn btn-outline-danger btn-sm">
                Logout
            </button>
        </form>
    </aside>
    <!-- =========================
         MAIN CONTENT
    ========================== -->
    <main class="main-content">
        <!-- Content Laravel -->
        <div class="content-area">
            @yield('content')
        </div>
    </main>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
    </script>
    <!-- Custom JS -->
    <script>
        function toggleMobileMenu() {
            const menu = document.getElementById('mobile-menu');
            menu.classList.toggle('show');
        }
    </script>
</body>
</html>