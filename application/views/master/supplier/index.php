<div class="container mt-4">

    <div class="d-flex justify-content-between align-items-center mb-3">
        <h4 class="text-krem">Data Supplier</h4>
        <a href="<?= base_url('master/supplier/tambah'); ?>" 
           class="btn btn-primary">
            + Tambah Supplier
        </a>
    </div>

    <div class="card card-krem shadow-sm">
        <div class="card-body">

            <table class="table table-bordered table-hover">
                <thead class="table-light">
                    <tr>
                        <th>No</th>
                        <th>Nama Supplier</th>
                        <th>Alamat</th>
                        <th>Telepon</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; foreach ($supplier as $s): ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $s->nama_supplier; ?></td>
                        <td><?= $s->alamat; ?></td>
                        <td><?= $s->telepon; ?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

        </div>
    </div>

</div>
