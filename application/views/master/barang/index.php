<div class="container py-4">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h4 class="fw-bold text-krem">Data Barang</h4>
        <a href="<?= base_url('master/barang/tambah'); ?>" class="btn btn-primary">
            + Tambah Barang
        </a>
    </div>

    <div class="row g-4">

        <?php foreach ($barang as $b): ?>
        <div class="col-lg-3 col-md-4 col-sm-6">

            <div class="card card-krem shadow-sm h-100">

                <!-- STATUS -->
                <div class="position-absolute top-0 end-0 m-2">
                    <?php if ($b->stok > 0): ?>
                        <span class="badge bg-success">Tersedia</span>
                    <?php else: ?>
                        <span class="badge bg-danger">Habis</span>
                    <?php endif; ?>
                </div>

                <!-- IMAGE DUMMY -->
                <?php
$img = $b->gambar 
    ? base_url('assets/uploads/barang/'.$b->gambar)
    : base_url('assets/img/default.png');
?>

<img src="<?= $img; ?>" 
     class="card-img-top p-3"
     style="height:150px; object-fit:contain;">


                <div class="card-body">
                    <h6 class="fw-bold mb-1"><?= $b->nama_barang; ?></h6>
                    <small class="text-muted"><?= $b->kode_barang; ?></small>

                    <div class="mt-2">
                        <span class="badge bg-light text-dark">
                            <?= $b->nama_kategori; ?>
                        </span>
                    </div>

                    <div class="mt-2 text-muted">
                        Stok: <strong><?= $b->stok; ?></strong> <?= $b->satuan; ?>
                    </div>
                </div>

                <!-- ACTION -->
                <div class="card-footer bg-transparent border-0">
                    <div class="d-flex gap-2">
                        <a href="<?= base_url('master/barang/edit/'.$b->id_barang); ?>" 
                           class="btn btn-warning btn-sm w-100">
                            Edit
                        </a>
                        <a href="<?= base_url('master/barang/hapus/'.$b->id_barang); ?>" 
                           class="btn btn-outline-danger btn-sm"
                           onclick="return confirm('Hapus barang ini?')">
                            🗑
                        </a>
                    </div>
                </div>

            </div>

        </div>
        <?php endforeach; ?>

    </div>
</div>
