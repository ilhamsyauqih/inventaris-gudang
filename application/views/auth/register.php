<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Akun</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            min-height: 100vh;
            background: linear-gradient(135deg, #f3ead7, #e8dcc4);
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .card-glass {
            width: 100%;
            max-width: 450px;
            padding: 35px;
            border-radius: 20px;
            background: rgba(255,255,255,0.55);
            backdrop-filter: blur(12px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.1);
        }

        .title {
            font-weight: 600;
            text-align: center;
            letter-spacing: 2px;
            color: #7a6c5d;
            margin-bottom: 25px;
        }
    </style>
</head>
<body>

<div class="card-glass">

    <h3 class="title">DAFTAR AKUN</h3>

    <?php if ($this->session->flashdata('error')): ?>
        <div class="alert alert-danger">
            <?= $this->session->flashdata('error'); ?>
        </div>
    <?php endif; ?>

    <form action="<?= base_url('auth/save_register'); ?>" method="post">

        <div class="mb-3">
            <label>Nama Lengkap</label>
            <input type="text" name="nama" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Username</label>
            <input type="text" name="username" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Password</label>
            <input type="password" name="password" class="form-control" required>
        </div>

        <div class="mb-4">
            <label>Role</label>
            <select name="role" class="form-select" required>
                <option value="">-- Pilih Role --</option>
                <option value="admin">Admin</option>
                <option value="petugas">Petugas</option>
            </select>
        </div>

        <button class="btn btn-success w-100 mb-3">
            Daftar
        </button>

        <div class="text-center">
            <a href="<?= base_url('auth/login'); ?>" class="text-muted">
                Sudah punya akun? Login
            </a>
        </div>

    </form>

</div>

</body>
</html>
