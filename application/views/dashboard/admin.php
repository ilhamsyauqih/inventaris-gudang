<div class="container py-4">

    <!-- HEADER -->
    <div class="dashboard-section">
        <h3 class="fw-bold text-krem mb-1">Dashboard Admin</h3>
        <p class="text-muted mb-0">
            Ringkasan inventaris gudang percetakan
        </p>
    </div>

    <!-- STATISTIK -->
    <div class="dashboard-section">
        <div class="row g-4">

            <div class="col-lg-3 col-md-6">
                <a href="<?= base_url('master/barang'); ?>" class="text-decoration-none text-dark">
                    <div class="card card-krem shadow-sm stat-card">
                        <div class="card-body">
                            <small class="text-muted">Total Barang</small>
                            <h3 class="fw-bold mb-0"><?= $total_barang; ?></h3>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="card card-krem shadow-sm stat-card">
                    <div class="card-body">
                        <small class="text-muted">Total Stok</small>
                        <h3 class="fw-bold mb-0"><?= $stok_total; ?></h3>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="card card-krem shadow-sm stat-card">
                    <div class="card-body">
                        <small class="text-muted">Barang Masuk</small>
                        <h3 class="fw-bold mb-0"><?= $barang_masuk; ?></h3>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="card card-krem shadow-sm stat-card">
                    <div class="card-body">
                        <small class="text-muted">Barang Keluar</small>
                        <h3 class="fw-bold mb-0"><?= $barang_keluar; ?></h3>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- QUICK ACTION -->
    <div class="dashboard-section">
        <div class="row g-3">

            <div class="col-md-4">
                <a href="<?= base_url('master/barang/tambah'); ?>"
                   class="btn btn-success w-100 py-2 shadow-sm">
                    + Tambah Barang
                </a>
            </div>

            <div class="col-md-4">
                <a href="<?= base_url('master/supplier/tambah'); ?>"
                   class="btn btn-primary w-100 py-2 shadow-sm">
                    + Tambah Supplier
                </a>
            </div>

            <div class="col-md-4">
                <a href="<?= base_url('laporan/stok'); ?>"
                   class="btn btn-outline-secondary w-100 py-2 shadow-sm">
                    Laporan Stok
                </a>
            </div>

        </div>
    </div>

    <!-- INFO SISTEM -->
    <div class="dashboard-section">
        <div class="card card-krem shadow-sm">
            <div class="card-body">
                <h6 class="fw-bold text-krem mb-2">Informasi Sistem</h6>
                <p class="text-muted mb-0">
                    Sistem ini digunakan untuk mengelola inventaris bahan percetakan,
                    termasuk pengelolaan barang, supplier, serta transaksi barang masuk
                    dan keluar secara terstruktur.
                </p>
            </div>
        </div>
    </div>

</div>
