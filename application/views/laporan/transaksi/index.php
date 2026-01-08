<!-- WRAPPER HALAMAN LAPORAN TRANSAKSI -->
<div class="content-wrapper krem-bg">
    <div class="container-fluid py-4 px-lg-4">

        <!-- HEADER JUDUL HALAMAN -->
        <div class="mb-5 animate__animated animate__fadeInDown">
            <h2 class="section-title mb-1">📈 Laporan Transaksi</h2>
            <p class="text-muted mb-0">
                Riwayat transaksi barang masuk dan barang keluar
            </p>
        </div>

        <!-- CARD TABEL TRANSAKSI -->
        <div class="card card-barang border-0 shadow-sm animate__animated animate__fadeInUp">
            <div class="card-body p-0 overflow-hidden">

                <!-- RESPONSIVE TABLE -->
                <div class="table-responsive">
                    <table class="table table-hover align-middle mb-0">

                        <!-- HEADER TABEL -->
                        <thead class="bg-light">
                            <tr>
                                <th class="py-3 px-4 text-muted fw-bold text-uppercase fs-7">No</th>
                                <th class="py-3 px-4 text-muted fw-bold text-uppercase fs-7">Tanggal</th>
                                <th class="py-3 px-4 text-muted fw-bold text-uppercase fs-7">Nama Barang</th>
                                <th class="py-3 px-4 text-muted fw-bold text-uppercase fs-7">Jenis</th>
                                <th class="py-3 px-4 text-muted fw-bold text-uppercase fs-7">Keterangan</th>
                                <th class="py-3 px-4 text-end text-muted fw-bold text-uppercase fs-7">Jumlah</th>
                            </tr>
                        </thead>

                        <!-- ISI DATA TRANSAKSI -->
                        <tbody>
                            <?php $no = 1; foreach ($transaksi as $t): ?>
                                <tr>
                                    <td class="px-4 py-3 text-muted"><?= $no++; ?></td>

                                    <!-- TANGGAL TRANSAKSI -->
                                    <td class="px-4 py-3">
                                        <span class="fw-medium text-dark">
                                            <?= date('d M Y', strtotime($t->tanggal)); ?>
                                        </span>
                                    </td>

                                    <!-- NAMA BARANG -->
                                    <td class="px-4 py-3">
                                        <div class="fw-bold text-krem"><?= $t->nama_barang; ?></div>
                                    </td>

                                    <!-- JENIS TRANSAKSI -->
                                    <td class="px-4 py-3">
                                        <?php if ($t->jenis == 'Barang Masuk'): ?>
                                            <span class="badge bg-info-soft text-info rounded-pill px-3 py-2">
                                                <i class="bi bi-arrow-down-circle me-1"></i>Masuk
                                            </span>
                                        <?php else: ?>
                                            <span class="badge bg-warning-soft text-warning rounded-pill px-3 py-2">
                                                <i class="bi bi-arrow-up-circle me-1"></i>Keluar
                                            </span>
                                        <?php endif; ?>
                                    </td>

                                    <!-- KETERANGAN -->
                                    <td class="px-4 py-3 text-muted"><?= $t->keterangan; ?></td>

                                    <!-- JUMLAH BARANG -->
                                    <td class="px-4 py-3 text-end fw-bold text-dark">
                                        <?= $t->jumlah; ?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>

                    </table>
                </div>

            </div>
        </div>

    </div>
</div>

<!-- STYLE TAMBAHAN -->
<style>
    /* Ukuran font kecil untuk header tabel */
    .fs-7 {
        font-size: 0.75rem;
    }

    /* Badge barang masuk */
    .bg-info-soft {
        background-color: rgba(13, 202, 240, 0.1);
    }

    /* Badge barang keluar */
    .bg-warning-soft {
        background-color: rgba(255, 193, 7, 0.1);
    }
</style>
