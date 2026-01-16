<div class="content-wrapper krem-bg">
    <div class="container-fluid py-4 px-lg-4">

        <!-- HEADER JUDUL HALAMAN -->
        <div class="mb-5 animate__animated animate__fadeInDown d-flex justify-content-between align-items-end">
            <div>
                <h2 class="section-title mb-1">Laporan Transaksi</h2>
                <p class="text-muted mb-0">
                    Riwayat transaksi barang masuk dan barang keluar
                </p>
            </div>

            <!-- Tombol Cetak / PDF -->
            <a href="<?= base_url('laporan/laporantransaksi/cetak'); ?>" target="_blank"
                class="btn btn-primary btn-pill shadow-sm">
                <i class="bi bi-printer me-2"></i>Cetak PDF
            </a>
        </div>

        <div class="card card-barang border-0 shadow-sm animate__animated animate__fadeInUp">
            <div class="card-body p-0 overflow-hidden">

                <div class="table-responsive">
                    <table class="table table-hover align-middle mb-0">

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

                        <tbody>
                            <?php $no = 1;
                            foreach ($transaksi as $t): ?>
                                <tr>
                                    <td class="px-4 py-3 text-muted"><?= $no++; ?></td>

                                    <td class="px-4 py-3">
                                        <span class="fw-medium text-dark">
                                            <?= date('d M Y', strtotime($t->tanggal)); ?>
                                        </span>
                                    </td>

                                    <td class="px-4 py-3">
                                        <div class="fw-bold text-krem"><?= $t->nama_barang; ?></div>
                                    </td>

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

                                    <td class="px-4 py-3 text-muted"><?= $t->keterangan; ?></td>

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

<style>
    .fs-7 {
        font-size: 0.75rem;
    }

    .bg-info-soft {
        background-color: rgba(13, 202, 240, 0.1);
    }

    .bg-warning-soft {
        background-color: rgba(255, 193, 7, 0.1);
    }
</style>