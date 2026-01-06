<div class="container mt-4">

    <h4 class="mb-4 text-krem">Dashboard Petugas</h4>

    <div class="row g-4">
        <div class="col-md-4">
            <div class="card card-krem shadow-sm p-3">
                <small class="text-muted">Stok Tersedia</small>
                <h3><?= $stok_total; ?></h3>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card card-krem shadow-sm p-3">
                <small class="text-muted">Barang Masuk Hari Ini</small>
                <h3><?= $barang_masuk; ?></h3>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card card-krem shadow-sm p-3">
                <small class="text-muted">Barang Keluar Hari Ini</small>
                <h3><?= $barang_keluar; ?></h3>
            </div>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-12">
            <div class="card card-krem shadow-sm p-4">
                <h6 class="text-krem">Tugas Petugas</h6>
                <ul class="text-muted mb-0">
                    <li>Mencatat barang masuk</li>
                    <li>Mencatat barang keluar</li>
                    <li>Memastikan stok tercatat</li>
                </ul>
            </div>
        </div>
    </div>

</div>
