<div class="content-wrapper krem-bg">
    <div class="container-fluid py-4 px-lg-4">

        <!-- ===== HEADER DASHBOARD ===== -->
        <div class="mb-5 animate__animated animate__fadeInDown">
            <!-- Judul dashboard petugas -->
            <h2 class="section-title mb-1">👨‍💼 Dashboard Petugas</h2>

            <p class="text-muted mb-0">
                Informasi operasional gudang percetakan
            </p>
        </div>

        <!-- ===== BAGIAN STATISTIK ===== -->
        <div class="row g-4 mb-5">

            <!-- === TOTAL BARANG === -->
            <div class="col-xl-3 col-md-6">
                <div class="card card-barang h-100 border-0 shadow-sm animate__animated animate__fadeInUp"
                    style="animation-delay: 0.1s;">
                    <div class="card-body p-4">

                        <!-- Icon dan label -->
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <div class="icon-box bg-primary-soft text-primary rounded-circle">
                                <i class="bi bi-box-seam fs-4 text-primary"></i>
                            </div>
                            <span class="badge bg-primary-soft text-primary rounded-pill">Total</span>
                        </div>

                        <!-- Total item barang -->
                        <h2 class="fw-bold mb-0 text-dark"><?= $total_barang; ?></h2>
                        <small class="text-muted">Item Barang</small>
                    </div>
                </div>
            </div>

            <!-- === TOTAL STOK === -->
            <div class="col-xl-3 col-md-6">
                <div class="card card-barang h-100 border-0 shadow-sm animate__animated animate__fadeInUp"
                    style="animation-delay: 0.2s;">
                    <div class="card-body p-4">

                        <!-- Icon dan label -->
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <div class="icon-box bg-success-soft text-success rounded-circle">
                                <i class="bi bi-stack fs-4 text-success"></i>
                            </div>
                            <span class="badge bg-success-soft text-success rounded-pill">Stok</span>
                        </div>

                        <!-- Total stok tersedia -->
                        <h2 class="fw-bold mb-0 text-dark"><?= $stok_total; ?></h2>
                        <small class="text-muted">Unit Tersedia</small>
                    </div>
                </div>
            </div>

            <!-- === BARANG MASUK === -->
            <div class="col-xl-3 col-md-6">
                <!-- Card bisa diklik ke halaman barang masuk -->
                <a href="<?= base_url('transaksi/barangmasuk'); ?>" class="text-decoration-none">
                    <div class="card card-barang h-100 border-0 shadow-sm animate__animated animate__fadeInUp"
                        style="animation-delay: 0.3s;">
                        <div class="card-body p-4">

                            <!-- Icon dan label -->
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <div class="icon-box bg-info-soft text-info rounded-circle">
                                    <i class="bi bi-arrow-down-circle fs-4 text-info"></i>
                                </div>
                                <span class="badge bg-info-soft text-info rounded-pill">Masuk</span>
                            </div>

                            <!-- Jumlah transaksi barang masuk -->
                            <h2 class="fw-bold mb-0 text-dark"><?= $barang_masuk; ?></h2>
                            <small class="text-muted">Transaksi Masuk</small>
                        </div>
                    </div>
                </a>
            </div>

            <!-- === BARANG KELUAR === -->
            <div class="col-xl-3 col-md-6">
                <!-- Card bisa diklik ke halaman barang keluar -->
                <a href="<?= base_url('transaksi/barangkeluar'); ?>" class="text-decoration-none">
                    <div class="card card-barang h-100 border-0 shadow-sm animate__animated animate__fadeInUp"
                        style="animation-delay: 0.4s;">
                        <div class="card-body p-4">

                            <!-- Icon dan label -->
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <div class="icon-box bg-warning-soft text-warning rounded-circle">
                                    <i class="bi bi-arrow-up-circle fs-4 text-warning"></i>
                                </div>
                                <span class="badge bg-warning-soft text-warning rounded-pill">Keluar</span>
                            </div>

                            <!-- Jumlah transaksi barang keluar -->
                            <h2 class="fw-bold mb-0 text-dark"><?= $barang_keluar; ?></h2>
                            <small class="text-muted">Transaksi Keluar</small>
                        </div>
                    </div>
                </a>
            </div>

        </div>

        <!-- ===== QUICK ACTION (AKSES CEPAT) ===== -->
        <div class="card border-0 shadow-sm rounded-4 animate__animated animate__fadeInUp"
            style="animation-delay: 0.5s;">
            <div class="card-body p-4">

                <!-- Judul quick action -->
                <h5 class="fw-bold text-krem mb-4">⚡ Akses Cepat</h5>

                <div class="row g-3">

                    <!-- Tombol input barang masuk -->
                    <div class="col-lg-4 col-md-6">
                        <a href="<?= base_url('transaksi/barangmasuk/tambah'); ?>"
                            class="btn btn-success btn-pill w-100 py-3 shadow-sm d-flex align-items-center justify-content-center gap-2">
                            <i class="bi bi-arrow-down-circle"></i> Input Barang Masuk
                        </a>
                    </div>

                    <!-- Tombol input barang keluar -->
                    <div class="col-lg-4 col-md-6">
                        <a href="<?= base_url('transaksi/barangkeluar/tambah'); ?>"
                            class="btn btn-primary btn-pill w-100 py-3 shadow-sm d-flex align-items-center justify-content-center gap-2">
                            <i class="bi bi-arrow-up-circle"></i> Input Barang Keluar
                        </a>
                    </div>

                    <!-- Tombol laporan transaksi -->
                    <div class="col-lg-4 col-md-12">
                        <a href="<?= base_url('laporan/laporantransaksi'); ?>"
                            class="btn btn-outline-krem btn-pill w-100 py-3 d-flex align-items-center justify-content-center gap-2">
                            <i class="bi bi-file-earmark-text"></i> Laporan Transaksi
                        </a>
                    </div>

                </div>
            </div>
        </div>

    </div>
</div>


<style>

    .bg-primary-soft {
        background-color: rgba(13, 110, 253, 0.1);
    }

    .bg-success-soft {
        background-color: rgba(25, 135, 84, 0.1);
    }

    .bg-info-soft {
        background-color: rgba(13, 202, 240, 0.1);
    }

    .bg-warning-soft {
        background-color: rgba(255, 193, 7, 0.1);
    }

    .icon-box {
        width: 48px;
        height: 48px;
        display: flex;
        align-items: center;
        justify-content: center;
    }
</style>
