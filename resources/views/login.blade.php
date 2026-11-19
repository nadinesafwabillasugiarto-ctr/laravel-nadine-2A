<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login - SB Admin Style</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #540e0e 0%, #224abe 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: system-ui, -apple-system, "Segoe UI", Roboto, sans-serif;
        }
        .login-card {
            border: 0;
            border-radius: 0.75rem;
            box-shadow: 0 0.75rem 2rem rgba(0, 0, 0, 0.18);
            overflow: hidden;
            width: 100%;
            max-width: 420px;
        }
        .login-header {
            background-color: #f8f9fc;
            border-bottom: 1px solid #e3e6f0;
            padding: 1.5rem 1.75rem 1.25rem;
            text-align: center;
        }
        .login-body {
            background-color: #ffffff;
            padding: 1.75rem;
        }
        .form-control-user {
            border-radius: 10rem;
            padding: 0.75rem 1.1rem;
            font-size: 0.9rem;
        }
        .btn-user {
            border-radius: 10rem;
            padding: 0.7rem 1rem;
            font-size: 0.92rem;
            font-weight: 600;
            background-color: #4e73df;
            border-color: #4e73df;
        }
        .btn-user:hover {
            background-color: #2e59d9;
            border-color: #2653d4;
        }
    </style>
</head>
<body>
    <div class="card login-card">
        <div class="login-header">
            <h4 class="fw-bold text-dark mb-1">Welcome Back!</h4>
            <p class="text-muted small mb-0">Silakan masuk untuk melanjutkan</p>
        </div>
        <div class="login-body">
            @if ($errors->any())
                <div class="alert alert-danger py-2 small">
                    <ul class="mb-0 ps-3">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @if (session('error'))
                <div class="alert alert-danger py-2 small">
                    {{ session('error') }}
                </div>
            @endif

            <form method="POST" action="{{ url('/login') }}">
                @csrf
                <div class="mb-3">
                    <input
                        type="text"
                        name="email"
                        value="{{ old('email') }}"
                        class="form-control form-control-user"
                        placeholder="Masukkan Email atau Username..."
                        required
                        autofocus
                    >
                </div>
                <div class="mb-3">
                    <input
                        type="password"
                        name="password"
                        class="form-control form-control-user"
                        placeholder="Password"
                        required
                    >
                </div>
                <div class="mb-3 form-check ms-2">
                    <input type="checkbox" class="form-check-input" id="rememberCheck" name="remember">
                    <label class="form-check-label small text-muted" for="rememberCheck">Ingat saya</label>
                </div>
                <button type="submit" class="btn btn-primary btn-user w-100">
                    Login
                </button>
            </form>
        </div>
    </div>
</body>
</html>