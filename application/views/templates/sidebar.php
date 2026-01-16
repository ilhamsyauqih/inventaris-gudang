<!-- Bootstrap Icons -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

<!-- SIDEBAR -->
<aside class="sidebar-krem" id="sidebar">

    <!-- BRAND / LOGO -->
    <!-- BRAND / LOGO -->
    <div class="sidebar-brand d-flex align-items-center gap-3">
        <img src="<?= base_url('assets/img/favicon.png'); ?>" alt="Logo" class="sidebar-logo">
        <div>
            <span class="fw-bold d-block">Inventaris</span>
            <small class="text-muted">Percetakan</small>
        </div>
    </div>

    <!-- INFO USER LOGIN -->
    <div class="sidebar-user">
        <div class="user-avatar">
            <i class="bi bi-person-circle"></i>
        </div>
        <div class="user-info">
            <span class="user-name"><?= $this->session->userdata('nama'); ?></span>
            <small class="user-role"><?= ucfirst($this->session->userdata('role')); ?></small>
        </div>
    </div>

    <!-- MENU NAVIGASI -->
    <ul class="sidebar-menu">

        <!-- DASHBOARD -->
        <li>
            <a href="<?= base_url('dashboard'); ?>"
                class="<?= $this->uri->segment(1) == 'dashboard' || $this->uri->segment(1) == '' ? 'active' : '' ?>">
                <i class="bi bi-speedometer2"></i>
                <span class="menu-text">Dashboard</span>
            </a>
        </li>

        <!-- MENU ADMIN -->
        <?php if ($this->session->userdata('role') == 'admin'): ?>
            <li>
                <a href="<?= base_url('master/barang'); ?>"
                    class="<?= $this->uri->segment(1) == 'master' && $this->uri->segment(2) == 'barang' ? 'active' : '' ?>">
                    <i class="bi bi-box-seam"></i>
                    <span class="menu-text">Data Barang</span>
                </a>
            </li>

            <li>
                <a href="<?= base_url('master/supplier'); ?>"
                    class="<?= $this->uri->segment(1) == 'master' && $this->uri->segment(2) == 'supplier' ? 'active' : '' ?>">
                    <i class="bi bi-truck"></i>
                    <span class="menu-text">Supplier</span>
                </a>
            </li>

            <li>
                <a href="<?= base_url('laporan/laporanstok'); ?>"
                    class="<?= $this->uri->segment(1) == 'laporan' && $this->uri->segment(2) == 'laporanstok' ? 'active' : '' ?>">
                    <i class="bi bi-clipboard-data"></i>
                    <span class="menu-text">Laporan Stok</span>
                </a>
            </li>

            <li>
                <a href="<?= base_url('laporan/laporantransaksi'); ?>"
                    class="<?= $this->uri->segment(1) == 'laporan' && $this->uri->segment(2) == 'laporantransaksi' ? 'active' : '' ?>">
                    <i class="bi bi-clipboard-data"></i>
                    <span class="menu-text">Laporan Transaksi</span>
                </a>
            </li>
        <?php endif; ?>

        <!-- MENU PETUGAS -->
        <?php if ($this->session->userdata('role') == 'petugas'): ?>
            <li>
                <a href="<?= base_url('transaksi/barangmasuk'); ?>"
                    class="<?= $this->uri->segment(1) == 'transaksi' && $this->uri->segment(2) == 'barangmasuk' ? 'active' : '' ?>">
                    <i class="bi bi-arrow-down-square"></i>
                    <span class="menu-text">Barang Masuk</span>
                </a>
            </li>

            <li>
                <a href="<?= base_url('transaksi/barangkeluar'); ?>"
                    class="<?= $this->uri->segment(1) == 'transaksi' && $this->uri->segment(2) == 'barangkeluar' ? 'active' : '' ?>">
                    <i class="bi bi-arrow-up-square"></i>
                    <span class="menu-text">Barang Keluar</span>
                </a>
            </li>

            <li>
                <a href="<?= base_url('laporan/laporantransaksi'); ?>"
                    class="<?= $this->uri->segment(1) == 'laporan' && $this->uri->segment(2) == 'laporantransaksi' ? 'active' : '' ?>">
                    <i class="bi bi-clipboard-data"></i>
                    <span class="menu-text">Laporan Transaksi</span>
                </a>
            </li>
        <?php endif; ?>

    </ul>

    <!-- LOGOUT -->
    <div class="sidebar-footer">
        <a href="<?= base_url('auth/logout'); ?>" class="logout-btn">
            <i class="bi bi-box-arrow-right"></i>
            Logout
        </a>
    </div>

</aside>