<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Cetak Laporan Stok</title>
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
            <h5 class="text-muted">Laporan Stok Barang</h5>
            <small class="text-muted">Dicetak pada:
                <?= date('d M Y'); ?>
            </small>
        </div>

        <table class="table table-bordered align-middle">
            <thead class="table-light">
                <tr>
                    <th class="text-center">No</th>
                    <th>Kode</th>
                    <th>Nama Barang</th>
                    <th>Kategori</th>
                    <th>Satuan</th>
                    <th class="text-end">Stok</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1;
                foreach ($stok as $s): ?>
                    <tr>
                        <td class="text-center">
                            <?= $no++; ?>
                        </td>
                        <td class="fw-bold">
                            <?= $s->kode_barang; ?>
                        </td>
                        <td>
                            <?= $s->nama_barang; ?>
                        </td>
                        <td>
                            <?= $s->nama_kategori; ?>
                        </td>
                        <td>
                            <?= $s->satuan; ?>
                        </td>
                        <td class="text-end fw-bold">
                            <?= $s->stok; ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

</body>

</html>