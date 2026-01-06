<div class="container py-4">

    <div class="dashboard-section">
        <h3 class="fw-bold text-krem mb-1">Dashboard Petugas</h3>
        <p class="text-muted mb-0">
            Informasi operasional gudang
        </p>
    </div>

    <div class="dashboard-section">
        <div class="row g-4">

            <div class="col-md-4">
                <div class="card card-krem shadow-sm stat-card">
                    <div class="card-body">
                        <small class="text-muted">Stok Tersedia</small>
                        <h3 class="fw-bold mb-0"><?= $stok_total; ?></h3>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card card-krem shadow-sm stat-card">
                    <div class="card-body">
                        <small class="text-muted">Barang Masuk</small>
                        <h3 class="fw-bold mb-0"><?= $barang_masuk; ?></h3>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card card-krem shadow-sm stat-card">
                    <div class="card-body">
                        <small class="text-muted">Barang Keluar</small>
                        <h3 class="fw-bold mb-0"><?= $barang_keluar; ?></h3>
                    </div>
                </div>
            </div>

        </div>
    </div>

</div>
