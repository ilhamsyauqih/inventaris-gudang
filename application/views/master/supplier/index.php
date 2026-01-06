<div class="container py-4">

    <!-- HEADER -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h3 class="fw-bold text-krem mb-1">Data Supplier</h3>
            <small class="text-muted">
                Daftar supplier bahan dan perlengkapan percetakan
            </small>
        </div>

        <a href="<?= base_url('master/supplier/tambah'); ?>"
           class="btn btn-primary shadow-sm">
            + Tambah Supplier
        </a>
    </div>

    <!-- CARD LIST -->
    <div class="row g-4">

        <?php foreach ($supplier as $s): ?>
        <div class="col-xl-3 col-lg-4 col-md-6">

            <div class="card card-krem shadow-sm h-100">

                <div class="card-body d-flex flex-column">

                    <!-- NAMA -->
                    <h6 class="fw-bold mb-2 text-krem">
                        <?= $s->nama_supplier; ?>
                    </h6>

                    <!-- INFO -->
                    <div class="text-muted small mb-2">
                        <div>
                            <strong>Alamat:</strong><br>
                            <?= $s->alamat; ?>
                        </div>
                    </div>

                    <div class="text-muted small mb-3">
                        <strong>Telepon:</strong><br>
                        <?= $s->telepon; ?>
                    </div>

                    <!-- AKSI -->
                    <div class="mt-auto d-flex gap-2">
                        <a href="<?= base_url('master/supplier/edit/'.$s->id_supplier); ?>"
                           class="btn btn-outline-warning btn-sm w-100">
                            Edit
                        </a>

                        <a href="<?= base_url('master/supplier/hapus/'.$s->id_supplier); ?>"
                           class="btn btn-outline-danger btn-sm"
                           onclick="return confirm('Hapus supplier ini?')">
                            Hapus
                        </a>
                    </div>

                </div>

            </div>

        </div>
        <?php endforeach; ?>

    </div>

</div>
