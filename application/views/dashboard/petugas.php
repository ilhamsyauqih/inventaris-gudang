<div class="container py-4">

    <div class="dashboard-section">
        <h3 class="fw-bold text-krem mb-1">Dashboard Petugas</h3>
        <p class="text-muted mb-0">
            Informasi operasional gudang
        </p>
    </div>
    <!-- STATISTIK -->
    <div class="dashboard-section">
        <div class="row g-4">

            <div class="col-lg-3 col-md-6">
                    <div class="card card-krem shadow-sm stat-card">
                        <div class="card-body">
                            <small class="text-muted">Total Barang</small>
                            <h3 class="fw-bold mb-0"><?= $total_barang; ?></h3>
                        </div>
                    </div>
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
                <a href="<?= base_url('transaksi/barangmasuk'); ?>" class="text-decoration-none text-dark">
                <div class="card card-krem shadow-sm stat-card">
                    <div class="card-body">
                        <small class="text-muted">Barang Masuk</small>
                        <h3 class="fw-bold mb-0"><?= $barang_masuk; ?></h3>
                    </div>
                </div>
                </a>
            </div>

            <div class="col-lg-3 col-md-6">
                <a href="<?= base_url('transaksi/barangkeluar'); ?>" class="text-decoration-none text-dark">
                <div class="card card-krem shadow-sm stat-card">
                    <div class="card-body">
                        <small class="text-muted">Barang Keluar</small>
                        <h3 class="fw-bold mb-0"><?= $barang_keluar; ?></h3>
                    </div>
                </div>
                </a>
            </div>

        </div>
    </div>

            <!-- QUICK ACTION -->
            <div class="dashboard-section">
                <div class="row g-3">

                    <div class="col-md-4">
                        <a href="<?= base_url('transaksi/barangmasuk/tambah'); ?>"
                            class="btn btn-success w-100 py-2 shadow-sm">
                            + Tambah Barang Masuk
                        </a>
                    </div>

                    <div class="col-md-4">
                        <a href="<?= base_url('transaksi/barangkeluar/tambah'); ?>"
                            class="btn btn-primary w-100 py-2 shadow-sm">
                            + Tambah Barang Keluar
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="<?= base_url('laporan/laporantransaksi'); ?>"
                            class="btn btn-outline-secondary w-100 py-2 shadow-sm">
                            Laporan Transaksi
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>