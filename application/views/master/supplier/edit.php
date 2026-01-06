<div class="container py-4">

    <h3 class="fw-bold text-krem mb-3">Edit Supplier</h3>

    <div class="card card-krem shadow-sm">
        <div class="card-body">

            <form action="<?= base_url('master/supplier/update'); ?>" method="post">

                <input type="hidden" name="id_supplier" 
                       value="<?= $supplier->id_supplier; ?>">

                <div class="mb-3">
                    <label class="form-label">Nama Supplier</label>
                    <input type="text" name="nama_supplier"
                           value="<?= $supplier->nama_supplier; ?>"
                           class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Alamat</label>
                    <textarea name="alamat"
                              class="form-control"
                              rows="3" required><?= $supplier->alamat; ?></textarea>
                </div>

                <div class="mb-3">
                    <label class="form-label">Telepon</label>
                    <input type="text" name="telepon"
                           value="<?= $supplier->telepon; ?>"
                           class="form-control" required>
                </div>

                <div class="d-flex gap-2">
                    <button class="btn btn-success">
                        Update
                    </button>
                    <a href="<?= base_url('master/supplier'); ?>"
                       class="btn btn-secondary">
                        Kembali
                    </a>
                </div>

            </form>

        </div>
    </div>

</div>
