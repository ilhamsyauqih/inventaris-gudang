<!DOCTYPE html>
<html lang="id">
<head>


    <meta charset="UTF-8">
    <title>Login | Inventaris Percetakan</title>

    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Style khusus halaman login -->
    <style>
        body {
            min-height: 100vh;
            background: linear-gradient(135deg, #f3ead7, #e8dcc4);
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Segoe UI', sans-serif;
        }

        .login-card {
            width: 100%;
            max-width: 420px;
            padding: 35px;
            border-radius: 20px;
            background: rgba(255, 255, 255, 0.55);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.1);
        }

        .login-title {
            font-weight: 600;
            letter-spacing: 2px;
            text-align: center;
            color: #7a6c5d;
            margin-bottom: 30px;
        }

        .form-control {
            border-radius: 12px;
            padding: 12px;
            background-color: rgba(255,255,255,0.85);
        }

        .btn-login {
            border-radius: 30px;
            padding: 12px;
            font-weight: 500;
            background-color: #d6c2a1;
            border: none;
            color: #4a4035;
        }

        .btn-login:hover {
            background-color: #c9b08c;
        }

        .form-check-label,
        .forgot {
            font-size: 0.9rem;
            color: #7a6c5d;
        }

        .forgot {
            text-decoration: none;
        }

        .forgot:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <!-- Container utama halaman login -->
    <div class="login-card">

        <!-- Judul halaman -->
        <h3 class="login-title">LOGIN</h3>

        <!-- Form login: kirim data ke Auth controller -->
        <form action="<?= base_url('auth/login'); ?>" method="post">

            <!-- Input data login -->
            <div class="mb-3">
                <label class="form-label">Username</label>
                <input type="text" name="username" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" name="password" class="form-control" required>
            </div>

            <!-- Opsi tambahan -->
            <div class="d-flex justify-content-between align-items-center mb-4">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="remember">
                    <label class="form-check-label" for="remember">
                        Remember me
                    </label>
                </div>
                <a href="#" class="forgot">Forgot password?</a>
            </div>

            <!-- Arahkan ke halaman register -->
            <div class="text-center mt-3 mb-3">
                <a href="<?= base_url('auth/register'); ?>" class="forgot">
                    Belum punya akun? Daftar
                </a>
            </div>

            <!-- Tombol submit login -->
            <button class="btn btn-login w-100">
                SIGN IN
            </button>

        </form>

    </div>

</body>
</html>
