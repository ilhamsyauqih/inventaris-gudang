<div class="content-wrapper krem-bg">
    <div class="container-fluid py-4 px-lg-4">

        <!-- HEADER -->
        <div class="mb-5 animate__animated animate__fadeInDown">
            <h2 class="section-title mb-1">📊 Dashboard Admin</h2>
            <p class="text-muted mb-0">
                Ringkasan inventaris gudang percetakan
            </p>
        </div>

        <!-- STATISTIK -->
        <div class="row g-4 mb-5">
            <!-- Total Barang -->
            <div class="col-xl-3 col-md-6">
                <a href="<?= base_url('master/barang'); ?>" class="text-decoration-none">
                    <div class="card card-barang h-100 border-0 shadow-sm animate__animated animate__fadeInUp"
                        style="animation-delay: 0.1s;">
                        <div class="card-body p-4">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <div class="icon-box bg-primary-soft text-primary rounded-circle">
                                    <i class="bi bi-box-seam fs-4 text-primary"></i>
                                </div>
                                <span class="badge bg-primary-soft text-primary rounded-pill">Total</span>
                            </div>
                            <h2 class="fw-bold mb-0 text-dark"><?= $total_barang; ?></h2>
                            <small class="text-muted">Item Barang</small>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Total Stok -->
            <div class="col-xl-3 col-md-6">
                <a href="<?= base_url('laporan/laporanstok'); ?>" class="text-decoration-none">
                    <div class="card card-barang h-100 border-0 shadow-sm animate__animated animate__fadeInUp"
                        style="animation-delay: 0.2s;">
                        <div class="card-body p-4">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <div class="icon-box bg-success-soft text-success rounded-circle">
                                    <i class="bi bi-stack fs-4 text-success"></i>
                                </div>
                                <span class="badge bg-success-soft text-success rounded-pill">Stok</span>
                            </div>
                            <h2 class="fw-bold mb-0 text-dark"><?= $stok_total; ?></h2>
                            <small class="text-muted">Unit Tersedia</small>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Barang Masuk -->
            <div class="col-xl-3 col-md-6">
                <a href="<?= base_url('laporan/laporantransaksi'); ?>" class="text-decoration-none">
                    <div class="card card-barang h-100 border-0 shadow-sm animate__animated animate__fadeInUp"
                        style="animation-delay: 0.3s;">
                        <div class="card-body p-4">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <div class="icon-box bg-info-soft text-info rounded-circle">
                                    <i class="bi bi-arrow-down-circle fs-4 text-info"></i>
                                </div>
                                <span class="badge bg-info-soft text-info rounded-pill">Masuk</span>
                            </div>
                            <h2 class="fw-bold mb-0 text-dark"><?= $barang_masuk; ?></h2>
                            <small class="text-muted">Transaksi Masuk</small>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Barang Keluar -->
            <div class="col-xl-3 col-md-6">
                <a href="<?= base_url('laporan/laporantransaksi'); ?>" class="text-decoration-none">
                    <div class="card card-barang h-100 border-0 shadow-sm animate__animated animate__fadeInUp"
                        style="animation-delay: 0.4s;">
                        <div class="card-body p-4">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <div class="icon-box bg-warning-soft text-warning rounded-circle">
                                    <i class="bi bi-arrow-up-circle fs-4 text-warning"></i>
                                </div>
                                <span class="badge bg-warning-soft text-warning rounded-pill">Keluar</span>
                            </div>
                            <h2 class="fw-bold mb-0 text-dark"><?= $barang_keluar; ?></h2>
                            <small class="text-muted">Transaksi Keluar</small>
                        </div>
                    </div>
                </a>
            </div>
        </div>

        <!-- QUICK ACTION & INFO -->
        <div class="row g-4">
            <!-- Quick Actions -->
            <div class="col-lg-8">
                <div class="card border-0 shadow-sm rounded-4 animate__animated animate__fadeInUp"
                    style="animation-delay: 0.5s;">
                    <div class="card-body p-4">
                        <h5 class="fw-bold text-krem mb-4">⚡ Akses Cepat</h5>
                        <div class="row g-3">
                            <div class="col-sm-6">
                                <a href="<?= base_url('master/barang/tambah'); ?>"
                                    class="btn btn-success btn-pill w-100 py-3 shadow-sm d-flex align-items-center justify-content-center gap-2">
                                    <i class="bi bi-plus-circle-fill"></i> Tambah Barang
                                </a>
                            </div>
                            <div class="col-sm-6">
                                <a href="<?= base_url('master/supplier/tambah'); ?>"
                                    class="btn btn-primary btn-pill w-100 py-3 shadow-sm d-flex align-items-center justify-content-center gap-2">
                                    <i class="bi bi-person-plus-fill"></i> Tambah Supplier
                                </a>
                            </div>
                            <div class="col-sm-6">
                                <a href="<?= base_url('laporan/laporanstok'); ?>"
                                    class="btn btn-outline-krem btn-pill w-100 py-3 d-flex align-items-center justify-content-center gap-2">
                                    <i class="bi bi-clipboard-data"></i> Laporan Stok
                                </a>
                            </div>
                            <div class="col-sm-6">
                                <a href="<?= base_url('laporan/laporantransaksi'); ?>"
                                    class="btn btn-outline-krem btn-pill w-100 py-3 d-flex align-items-center justify-content-center gap-2">
                                    <i class="bi bi-arrow-left-right"></i> Laporan Transaksi
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- System Info -->
            <div class="col-lg-4">
                <div class="card bg-krem text-white border-0 shadow-sm rounded-4 h-100 animate__animated animate__fadeInUp"
                    style="animation-delay: 0.6s;">
                    <div class="card-body p-4 position-relative overflow-hidden">
                        <!-- Decorative Circle -->
                        <div class="position-absolute top-0 end-0 translate-middle p-5 rounded-circle bg-white opacity-10"
                            style="margin-top: -20px; margin-right: -20px;"></div>

                        <h5 class="fw-bold mb-3 text-white"><i class="bi bi-info-circle me-2"></i>Informasi Sistem</h5>
                        <p class="mb-0 opacity-75 small text-white" style="line-height: 1.8;">
                            Sistem ini digunakan untuk mengelola inventaris bahan percetakan secara terstruktur.
                            Pantau stok, kelola supplier, dan catat transaksi dengan mudah.
                        </p>

                        <div class="mt-4 pt-3 border-top border-white border-opacity-25">
                            <small class="opacity-50">Versi 1.0.0</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<style>
    /* Additional inline styles for dashboard-specific micro-interactions if needed, 
   though most are handled by global classes */
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