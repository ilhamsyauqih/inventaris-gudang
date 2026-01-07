<div class="container py-4">

    <div class="container py-4">

    <!-- HEADER -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h3 class="section-title mb-1">📦 Data Barang</h3>
            <small class="text-muted">
                Kelola inventaris barang percetakan dengan mudah
            </small>
        </div>

       
    </div>


    <!-- FILTER KATEGORI -->
    <div class="card card-krem shadow-sm mb-4">
        <div class="card-body">
            <form method="get" class="row g-3 align-items-center">

                <div class="col-md-4">
                    <label class="form-label mb-0">Filter Kategori</label>
                    <select name="kategori" class="form-select"
                            onchange="this.form.submit()">
                        <option value="">Semua Kategori</option>
                        <?php foreach ($kategori as $k): ?>
                            <option value="<?= $k->id_kategori; ?>"
                                <?= $kategori_aktif == $k->id_kategori ? 'selected' : ''; ?>>
                                <?= $k->nama_kategori; ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <?php if ($kategori_aktif): ?>
                <div class="col-md-2">
                    <a href="<?= base_url('master/barang'); ?>"
                       class="btn btn-outline-secondary mt-4">
                        Reset
                    </a>
                </div>
                <?php endif; ?>

            </form>
        </div>
    </div>


    <div class="d-flex justify-content-between align-items-center mb-4">
        <h4 class="fw-bold text-krem">Data Barang</h4>
        <a href="<?= base_url('master/barang/tambah'); ?>" class="btn btn-primary">
            + Tambah Barang
        </a>
    </div>


<div class="row g-4">

<?php foreach ($barang as $b): ?>
<div class="col-xl-3 col-lg-4 col-md-6">

    <div class="card card-krem card-soft h-100 shadow-sm">

        <!-- STATUS -->
        <div class="position-absolute top-0 end-0 m-3">
            <?php if ($b->stok > 0): ?>
                <span class="badge bg-success">Tersedia</span>
            <?php else: ?>
                <span class="badge bg-danger">Habis</span>
            <?php endif; ?>
        </div>

        <!-- IMAGE -->
        <img src="<?= $b->gambar
            ? base_url('assets/uploads/barang/'.$b->gambar)
            : base_url('assets/img/default.png'); ?>"
             class="card-img-top p-4"
             style="height:170px; object-fit:contain;">

        <div class="card-body">

            <h6 class="fw-bold mb-1"><?= $b->nama_barang; ?></h6>
            <small class="text-muted"><?= $b->kode_barang; ?></small>

            <div class="mt-2">
                <span class="badge badge-krem">
                    <?= $b->nama_kategori; ?>
                </span>
            </div>

            <div class="mt-3 text-muted small">
                Stok: <strong><?= $b->stok; ?></strong> <?= $b->satuan; ?>
            </div>

        </div>

        <div class="card-footer bg-transparent border-0">
    <div class="d-flex gap-2">

        <!-- TOMBOL EDIT -->
        <a href="<?= base_url('master/barang/edit/'.$b->id_barang); ?>"
           class="btn btn-outline-warning btn-sm w-100">
            Edit
        </a>

        <!-- TOMBOL HAPUS (INI YANG DIMAKSUD) -->
        <a href="<?= base_url('master/barang/hapus/'.$b->id_barang); ?>"
           class="btn btn-outline-danger btn-sm"
           onclick="return confirm('Yakin ingin menghapus barang ini?')">
            Hapus
        </a>

    </div>
</div>


    </div>

</div>
<?php endforeach; ?>

</div>


</div>

    </div>

</div>


    </div>
</div>
