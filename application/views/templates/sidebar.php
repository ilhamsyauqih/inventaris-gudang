<nav class="navbar navbar-expand-lg bg-krem shadow-sm">
    <div class="container-fluid">
        <span class="navbar-brand fw-bold text-krem">
            Inventaris Percetakan
        </span>

        <div class="d-flex align-items-center">
            <span class="me-3 text-krem">
                <?= $this->session->userdata('nama'); ?> 
                (<?= ucfirst($this->session->userdata('role')); ?>)
            </span>
            <a href="<?= base_url('auth/logout'); ?>" 
               class="btn btn-outline-secondary btn-sm">
                Logout
            </a>
        </div>
    </div>
</nav>
