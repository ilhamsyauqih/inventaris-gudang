<!-- WRAPPER HALAMAN BARANG MASUK -->
<div class="content-wrapper krem-bg">
    <div class="container-fluid py-4 px-lg-4">

        <!-- HEADER HALAMAN + TOMBOL INPUT -->
        <div class="d-flex justify-content-between align-items-center mb-5 animate__animated animate__fadeInDown">
            <div>
                <h2 class="section-title mb-1">📥 Barang Masuk</h2>
                <p class="text-muted mb-0">Riwayat penerimaan barang dari supplier</p>
            </div>
            <a href="<?= base_url('transaksi/barangmasuk/tambah'); ?>" class="btn btn-primary btn-pill shadow-sm">
                <i class="bi bi-plus-lg me-1"></i> Input Barang Masuk
            </a>
        </div>

        <!-- DAFTAR DATA BARANG MASUK -->
        <div class="row g-3">
            <?php foreach ($barang_masuk as $bm): ?>
                <div class="col-12">

                    <!-- CARD DATA -->
                    <div class="card card-barang border-0 shadow-sm animate__animated animate__fadeInUp">
                        <div class="card-body p-4">
                            <div class="row align-items-center">

                                <!-- ICON + NAMA BARANG -->
                                <div class="col-md-4 mb-3 mb-md-0 d-flex align-items-center gap-3">
                                    <div class="icon-box bg-info-soft text-info rounded-circle flex-shrink-0">
                                        <i class="bi bi-arrow-down-circle fs-5"></i>
                                    </div>
                                    <div>
                                        <h6 class="barang-title mb-1"><?= $bm->nama_barang ?></h6>
                                        <small class="text-muted">
                                            <i class="bi bi-person-badge me-1"></i>
                                            Supplier: <?= $bm->nama_supplier ?>
                                        </small>
                                    </div>
                                </div>

                                <!-- DETAIL JUMLAH & TANGGAL -->
                                <div class="col-md-6 mb-3 mb-md-0">
                                    <div class="d-flex gap-4">
                                        <div>
                                            <small class="d-block text-muted mb-1 text-uppercase fs-7 fw-bold">
                                                Jumlah
                                            </small>
                                            <span class="fs-5 fw-bold text-dark"><?= $bm->jumlah ?></span>
                                        </div>
                                        <div>
                                            <small class="d-block text-muted mb-1 text-uppercase fs-7 fw-bold">
                                                Tanggal
                                            </small>
                                            <span class="fw-medium">
                                                <?= date('d M Y', strtotime($bm->tanggal)) ?>
                                            </span>
                                        </div>
                                    </div>
                                </div>

                                <!-- KETERANGAN / STATUS -->
                                <div class="col-md-2 text-md-end">
                                    <span class="badge bg-info-soft text-info rounded-pill px-3 py-2">
                                        <?= $bm->keterangan ?: 'Barang Masuk' ?>
                                    </span>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            <?php endforeach; ?>
        </div>

    </div>
</div>

<!-- STYLE TAMBAHAN -->
<style>
    /* Font kecil untuk label */
    .fs-7 {
        font-size: 0.75rem;
    }

    /* Warna lembut untuk barang masuk */
    .bg-info-soft {
        background-color: rgba(13, 202, 240, 0.1);
    }

    /* Ukuran dan posisi icon */
    .icon-box {
        width: 48px;
        height: 48px;
        display: flex;
        align-items: center;
        justify-content: center;
    }
</style>
