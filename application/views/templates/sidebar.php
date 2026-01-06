<nav class="navbar navbar-expand-lg bg-krem shadow-sm">
    <div class="container-fluid">
        <span class="navbar-brand fw-bold text-krem">
            Inventaris Percetakan
        </span>

        <div class="collapse navbar-collapse">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('dashboard'); ?>">
                        Dashboard
                    </a>
                </li>

                <?php if ($this->session->userdata('role') == 'admin'): ?>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('master/barang'); ?>">
                        Data Barang
                    </a>
                </li>
                <?php endif; ?>

            </ul>
        </div>

        <div class="d-flex align-items-center">
            <span class="me-3 text-krem">
                <?= $this->session->userdata('nama'); ?>
            </span>
            <a href="<?= base_url('auth/logout'); ?>" 
               class="btn btn-outline-secondary btn-sm">
                Logout
            </a>
        </div>
    </div>
</nav>
