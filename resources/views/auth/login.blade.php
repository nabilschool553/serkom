<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - SMPN 1 SALAWU</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
    <style>

        body {
            background-color: var(--bg-main);
            color: #ffffff;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .login-card {
            background-color: var(--bg-card);
            border: 1px solid var(--border-card);
            border-radius: 16px;
            backdrop-filter: blur(10px);
            width: 100%;
            max-width: 400px;
        }

        .icon-box {
            width: 48px;
            height: 48px;
            background-color: var(--purple-accent);
            border-radius: 12px;
        }

        .form-control, .input-group-text {
            background-color: rgba(24, 24, 36, 0.6) !important;
            border-color: var(--border-card) !important;
            color: #ffffff !important;
        }

        .form-control:focus {
            box-shadow: 0 0 0 0.25rem rgba(99, 102, 241, 0.25);
            border-color: var(--purple-accent) !important;
        }

        .form-control::placeholder {
            color: #6b7280;
        }

        .btn-primary-custom {
            background-color: var(--purple-accent);
            border: none;
            color: white;
            font-weight: 500;
        }

        .btn-primary-custom:hover {
            background-color: var(--purple-hover);
            color: white;
        }

        .form-check-input {
            background-color: rgba(24, 24, 36, 0.6);
            border-color: var(--border-card);
        }

        .form-check-input:checked {
            background-color: var(--purple-accent);
            border-color: var(--purple-accent);
        }
    </style>
</head>
<body>
    <div class="container p-3">
        <div class="login-card p-4 mx-auto shadow-lg bg-primary">
            <div class="d-flex align-items-center gap-3 mb-4 justify-content-center">
                <div class="text-center mt-3">    
                    <img src="{{ asset('assets/img/smpn1.png') }}" alt="Avatar Logo" style="width:100px;" >
                    <h5 class="fw-bold mb-0 mt-3">SMPN 1 SALAWU</h5>
                </div>
            </div>

            <form action="{{ route('login') }}" method="POST">
                @csrf

                @if ($errors->any())
                    <div class="alert alert-danger py-2 small mb-3">
                        {{ $errors->first() }}
                    </div>
                @endif

                <div class="mb-3">
                    <label class="form-label small text-light">Username</label>
                    <div class="input-group">
                        <span class="input-group-text text-secondary"><i class="bi bi-person"></i></span>
                        <input type="text" name="username" id="username" class="form-control" placeholder="Masukkan username" value="{{ old('username') }}" required>
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label small text-light">Kata Sandi</label>
                    <div class="input-group">
                        <span class="input-group-text text-secondary"><i class="bi bi-lock"></i></span>
                        <input type="password" name="password" id="password" class="form-control"  placeholder="Masukkan kata sandi" required>
                        <button class="btn input-group-text text-secondary" type="button" onclick="togglePassword()">
                            <i class="bi bi-eye-slash" id="toggleIcon"></i>
                        </button>
                    </div>
                </div>

                <button type="submit" class="btn btn-light w-100 py-2 mb-3">Masuk</button>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function togglePassword() {
            const passwordInput = document.getElementById('passwordInput');
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