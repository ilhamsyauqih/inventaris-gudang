<div class="container mt-4">

    <h3 class="mb-4 text-krem">
        Selamat Datang, <?= $this->session->userdata('nama'); ?> 👋
    </h3>

    <!-- Baris statistik -->
    <div class="row g-4">

        <!-- Kartu total barang -->
        <div class="col-md-3">
            <div class="card card-custom shadow-sm p-3">
                <h6 class="text-muted">Total Barang</h6>

                <!-- Total barang dari controller -->
                <h3><?= $total_barang; ?></h3>
            </div>
        </div>

        <!-- Kartu total stok -->
        <div class="col-md-3">
            <div class="card card-custom shadow-sm p-3">
                <h6 class="text-muted">Total Stok</h6>

                <!-- Total stok barang -->
                <h3><?= $stok_total; ?></h3>
            </div>
        </div>

        <!-- Kartu barang masuk -->
        <div class="col-md-3">
            <div class="card card-custom shadow-sm p-3">
                <h6 class="text-muted">Barang Masuk</h6>

                <!-- Jumlah transaksi barang masuk -->
                <h3><?= $barang_masuk; ?></h3>
            </div>
        </div>

        <!-- Kartu barang keluar -->
        <div class="col-md-3">
            <div class="card card-custom shadow-sm p-3">
                <h6 class="text-muted">Barang Keluar</h6>

                <!-- Jumlah transaksi barang keluar -->
                <h3><?= $barang_keluar; ?></h3>
            </div>
        </div>

    </div>

    <!-- Bagian informasi sistem -->
    <div class="row mt-5">
        <div class="col-md-12">
            <div class="card card-custom shadow-sm p-4">

                <!-- Judul info sistem -->
                <h5 class="mb-3 text-krem">Informasi Sistem</h5>

                <!-- Penjelasan singkat fungsi sistem -->
                <p class="text-muted">
                    Sistem ini digunakan untuk mengelola inventaris bahan percetakan, 
                    meliputi pencatatan barang masuk, barang keluar, dan monitoring stok secara real-time.
                </p>

            </div>
        </div>
    </div>

</div>
