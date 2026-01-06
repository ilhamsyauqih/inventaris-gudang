<div class="container mt-4">

    <h4 class="mb-4 text-krem">Dashboard Admin</h4>

    <div class="row g-4">
        <div class="col-md-3">
            <div class="card card-krem shadow-sm p-3">
                <small class="text-muted">Total Barang</small>
                <h3><?= $total_barang; ?></h3>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card card-krem shadow-sm p-3">
                <small class="text-muted">Total Stok</small>
                <h3><?= $stok_total; ?></h3>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card card-krem shadow-sm p-3">
                <small class="text-muted">Barang Masuk</small>
                <h3><?= $barang_masuk; ?></h3>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card card-krem shadow-sm p-3">
                <small class="text-muted">Barang Keluar</small>
                <h3><?= $barang_keluar; ?></h3>
            </div>
        </div>
    </div>
    <div class="col-md-3">
    <a href="<?= base_url('master/barang'); ?>" class="text-decoration-none text-dark">
        <div class="card card-krem shadow-sm p-3">
            <small class="text-muted">Total Barang</small>
            <h3><?= $total_barang; ?></h3>
            <small class="text-muted">Lihat Data Barang</small>
        </div>
    </a>
</div>
<div class="row mt-4">
    <div class="col-md-4">
        <a href="<?= base_url('master/barang/tambah'); ?>" class="btn btn-success w-100">
            + Tambah Barang
        </a>
    </div>
</div>


    <div class="row mt-4">
        <div class="col-12">
            <div class="card card-krem shadow-sm p-4">
                <h6 class="text-krem">Hak Akses Admin</h6>
                <p class="text-muted mb-0">
                    Admin memiliki akses penuh terhadap pengelolaan data inventaris,
                    laporan, dan konfigurasi sistem.
                </p>
            </div>
        </div>
    </div>

</div>
