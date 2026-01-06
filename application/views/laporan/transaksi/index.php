<div class="content-wrapper krem-bg">
    <div class="container-fluid py-4">

        <!-- Header -->
        <div class="mb-4">
            <h2 class="page-title">Laporan Transaksi</h2>
            <p class="text-muted">
                Riwayat transaksi barang masuk dan barang keluar
            </p>
        </div>

        <!-- Card -->
        <div class="card shadow-sm rounded-4">
            <div class="card-body">

                <table class="table table-hover align-middle mb-0">
                    <thead class="table-light">
                        <tr>
                            <th>No</th>
                            <th>Tanggal</th>
                            <th>Nama Barang</th>
                            <th>Jenis</th>
                            <th>Keterangan</th>
                            <th class="text-end">Jumlah</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; foreach ($transaksi as $t): ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= date('d M Y', strtotime($t->tanggal)); ?></td>
                            <td><?= $t->nama_barang; ?></td>
                            <td>
                                <?php if ($t->jenis == 'Barang Masuk'): ?>
                                    <span class="badge bg-success">Barang Masuk</span>
                                <?php else: ?>
                                    <span class="badge bg-warning text-dark">Barang Keluar</span>
                                <?php endif; ?>
                            </td>
                            <td><?= $t->keterangan; ?></td>
                            <td class="text-end fw-semibold">
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
