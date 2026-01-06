<div class="container mt-4">

    <h3 class="mb-4 text-krem">
        Selamat Datang, <?= $this->session->userdata('nama'); ?> 👋
    </h3>

    <div class="row g-4">

        <div class="col-md-3">
            <div class="card card-custom shadow-sm p-3">
                <h6 class="text-muted">Total Barang</h6>
                <h3><?= $total_barang; ?></h3>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card card-custom shadow-sm p-3">
                <h6 class="text-muted">Total Stok</h6>
                <h3><?= $stok_total; ?></h3>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card card-custom shadow-sm p-3">
                <h6 class="text-muted">Barang Masuk</h6>
                <h3><?= $barang_masuk; ?></h3>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card card-custom shadow-sm p-3">
                <h6 class="text-muted">Barang Keluar</h6>
                <h3><?= $barang_keluar; ?></h3>
            </div>
        </div>

    </div>

    <div class="row mt-5">
        <div class="col-md-12">
            <div class="card card-custom shadow-sm p-4">
                <h5 class="mb-3 text-krem">Informasi Sistem</h5>
                <p class="text-muted">
                    Sistem ini digunakan untuk mengelola inventaris bahan percetakan, 
                    meliputi pencatatan barang masuk, barang keluar, dan monitoring stok secara real-time.
                </p>
            </div>
        </div>
    </div>

</div>
