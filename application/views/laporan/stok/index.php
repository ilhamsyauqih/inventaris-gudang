<div class="content-wrapper krem-bg">
    <div class="container-fluid py-4">

        <!-- Header -->
        <div class="mb-4">
            <h2 class="page-title">Laporan Stok Barang</h2>
            <p class="text-muted">
                Data stok terkini seluruh barang di gudang percetakan
            </p>
        </div>

        <!-- Card -->
        <div class="card shadow-sm rounded-4">
            <div class="card-body">

                <table class="table table-hover align-middle mb-0">
                    <thead class="table-light">
                        <tr>
                            <th>No</th>
                            <th>Kode</th>
                            <th>Nama Barang</th>
                            <th>Kategori</th>
                            <th>Satuan</th>
                            <th class="text-end">Stok</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; foreach ($stok as $s): ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $s->kode_barang; ?></td>
                            <td><?= $s->nama_barang; ?></td>
                            <td><?= $s->nama_kategori; ?></td>
                            <td><?= $s->satuan; ?></td>
                            <td class="text-end">
                                <span class="badge bg-success px-3 py-2">
                                    <?= $s->stok; ?>
                                </span>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>

            </div>
        </div>

    </div>
</div>
