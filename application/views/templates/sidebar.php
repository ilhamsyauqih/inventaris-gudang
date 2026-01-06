<!-- Bootstrap Icons -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

<aside class="sidebar-krem">
    <!-- BRAND -->
    <div class="sidebar-brand">
        <span class="fw-bold">Inventaris</span>
        <small>Percetakan</small>
    </div>

    <!-- USER -->
    <div class="sidebar-user">
        <div class="user-avatar">
            <i class="bi bi-person-circle"></i>
        </div>
        <div class="user-info">
            <span class="user-name"><?= $this->session->userdata('nama'); ?></span>
            <small class="user-role"><?= ucfirst($this->session->userdata('role')); ?></small>
        </div>
    </div>

    <!-- MENU -->
    <ul class="sidebar-menu">

        <li>
            <a href="<?= base_url('dashboard'); ?>">
                <i class="bi bi-speedometer2"></i>
                <span>Dashboard</span>
            </a>
        </li>

        <!-- ADMIN -->
        <?php if ($this->session->userdata('role') == 'admin'): ?>
        <li>
            <a href="<?= base_url('master/barang'); ?>">
                <i class="bi bi-box-seam"></i>
                <span>Data Barang</span>
            </a>
        </li>

        <li>
            <a href="<?= base_url('master/supplier'); ?>">
                <i class="bi bi-truck"></i>
                <span>Supplier</span>
            </a>
        </li>

        <li>
            <a href="<?= base_url('laporan/stok'); ?>">
                <i class="bi bi-clipboard-data"></i>
                <span>Laporan Stok</span>
            </a>
        </li>
        <?php endif; ?>

        <!-- PETUGAS -->
        <?php if ($this->session->userdata('role') == 'petugas'): ?>
        <li>
            <a href="<?= base_url('transaksi/barangmasuk'); ?>">
                <i class="bi bi-arrow-down-square"></i>
                <span>Barang Masuk</span>
            </a>
        </li>

        <li>
            <a href="<?= base_url('transaksi/barangkeluar'); ?>">
                <i class="bi bi-arrow-up-square"></i>
                <span>Barang Keluar</span>
            </a>
        </li>
        <?php endif; ?>

    </ul>

    <!-- FOOTER -->
    <div class="sidebar-footer">
        <a href="<?= base_url('auth/logout'); ?>" class="logout-btn">
            <i class="bi bi-box-arrow-right"></i>
            Logout
        </a>
    </div>
</aside>
