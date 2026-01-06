<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register | Inventaris Percetakan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container d-flex justify-content-center align-items-center vh-100">
    <div class="card shadow" style="width: 420px;">
        <div class="card-body">
            <h4 class="text-center mb-3">Buat Akun</h4>

            <?php if ($this->session->flashdata('error')): ?>
                <div class="alert alert-danger">
                    <?= $this->session->flashdata('error'); ?>
                </div>
            <?php endif; ?>

            <form action="<?= base_url('auth/register_process'); ?>" method="post">
                <input type="text" name="nama" class="form-control mb-2" placeholder="Nama Lengkap" required>
                <input type="text" name="username" class="form-control mb-2" placeholder="Username" required>
                <input type="password" name="password" class="form-control mb-2" placeholder="Password" required>

                <select name="role" class="form-control mb-3" required>
                    <option value="">-- Pilih Role --</option>
                    <option value="admin">Admin</option>
                    <option value="petugas">Petugas</option>
                </select>

                <button class="btn btn-success w-100">Daftar</button>
            </form>

            <div class="text-center mt-3">
                <a href="<?= base_url('auth/login'); ?>">Sudah punya akun?</a>
            </div>
        </div>
    </div>
</div>

</body>
</html>
