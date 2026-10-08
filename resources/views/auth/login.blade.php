<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - SMAN 1 SALAWU</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body {
            background-color: #283f57;
            color: #ffffff;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .login-card {
            border-radius: 16px;
            width: 100%;
            max-width: 400px;
        }

        .form-control:focus {
            box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.25);
        }
    </style>
</head>
<body>
    <div class="container p-3">
        <div class="login-card p-4 mx-auto shadow-lg bg-primary text-white">
            <div class="d-flex flex-column align-items-center text-center mb-4">
                <img src="{{ asset('storage/' . $profilSekolah->logo) }}" alt="Avatar Logo" style="width: 120px; height: auto;" class="mb-2">
                <span class="navbar-brand fw-bold fs-5 text-white">{{ $profilSekolah->nama_sekolah }}</span>
            </div>

            <form action="{{ route('login') }}" method="POST">
                @csrf

                @if ($errors->any())
                    <div class="alert alert-danger py-2 small mb-3">
                        {{ $errors->first() }}
                    </div>
                @endif

                <div class="mb-3">
                    <label class="form-label small text-white">Username</label>
                    <div class="input-group">
                        <span class="input-group-text bg-light text-secondary"><i class="bi bi-person"></i></span>
                        <input type="text" name="username" id="username" class="form-control" placeholder="Masukkan username" value="{{ old('username') }}" required>
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label small text-white">Kata Sandi</label>
                    <div class="input-group">
                        <span class="input-group-text bg-light text-secondary"><i class="bi bi-lock"></i></span>
                        <input type="password" name="password" id="password" class="form-control" placeholder="Masukkan kata sandi" required>
                        <button class="btn btn-light input-group-text text-secondary" type="button" onclick="togglePassword()">
                            <i class="bi bi-eye-slash" id="toggleIcon"></i>
                        </button>
                    </div>
                </div>

                <button type="submit" class="btn btn-light w-100 py-2 mb-3 fw-semibold">Masuk</button>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function togglePassword() {
            const passwordInput = document.getElementById('password');
            const toggleIcon = document.getElementById('toggleIcon');

            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                toggleIcon.classList.replace('bi-eye-slash', 'bi-eye');
            } else {
                passwordInput.type = 'password';
                toggleIcon.classList.replace('bi-eye', 'bi-eye-slash');
            }
        }
    </script>
</body>
</html>
