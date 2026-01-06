<div class="container mt-4">

    <div class="d-flex justify-content-between align-items-center mb-3">
        <h4 class="text-krem">Data Barang</h4>
        <a href="<?= base_url('master/barang/tambah'); ?>" class="btn btn-primary">
            + Tambah Barang
        </a>
    </div>

    <div class="card card-krem shadow-sm">
        <div class="card-body">

            <table class="table table-bordered table-hover">
                <thead class="table-light">
                    <tr>
                        <th>No</th>
                        <th>Kategori</th>
                        <th>Kode</th>
                        <th>Nama Barang</th>
                        <th>Satuan</th>
                        <th>Stok</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; foreach ($barang as $b): ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $b->nama_kategori; ?></td>
                        <td><?= $b->kode_barang; ?></td>
                        <td><?= $b->nama_barang; ?></td>
                        <td><?= $b->satuan; ?></td>
                        <td><?= $b->stok; ?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

        </div>
    </div>

</div>
