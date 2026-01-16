<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Cetak Laporan Transaksi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
        }

        .table thead th {
            background-color: #f8f9fa !important;
            -webkit-print-color-adjust: exact;
        }
    </style>
</head>

<body onload="window.print()">

    <div class="container py-5">

        <div class="text-center mb-5">
            <h3 class="fw-bold mb-0">Inventaris Percetakan</h3>
            <h5 class="text-muted">Laporan Transaksi Barang</h5>
            <small class="text-muted">Dicetak pada:
                <?= date('d M Y'); ?>
            </small>
        </div>

        <table class="table table-bordered align-middle">
            <thead class="table-light">
                <tr>
                    <th class="text-center">No</th>
                    <th>Tanggal</th>
                    <th>Nama Barang</th>
                    <th>Jenis</th>
                    <th>Keterangan</th>
                    <th class="text-end">Jumlah</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1;
                foreach ($transaksi as $t): ?>
                    <tr>
                        <td class="text-center">
                            <?= $no++; ?>
                        </td>
                        <td>
                            <?= date('d M Y', strtotime($t->tanggal)); ?>
                        </td>
                        <td>
                            <?= $t->nama_barang; ?>
                        </td>
                        <td>
                            <?php if ($t->jenis == 'Barang Masuk'): ?>
                                <span class="text-success fw-bold">Masuk</span>
                            <?php else: ?>
                                <span class="text-warning fw-bold">Keluar</span>
                            <?php endif; ?>
                        </td>
                        <td>
                            <?= $t->keterangan; ?>
                        </td>
                        <td class="text-end fw-bold">
                            <?= $t->jumlah; ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

</body>

</html>