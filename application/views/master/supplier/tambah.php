<div class="container mt-4">

    <h4 class="text-krem mb-3">Tambah Supplier</h4>

    <div class="card card-krem shadow-sm">
        <div class="card-body">

            <form action="<?= base_url('master/supplier/simpan'); ?>" method="post">

                <div class="mb-3">
                    <label>Nama Supplier</label>
                    <input type="text" name="nama_supplier" 
                           class="form-control" required>
                </div>

                <div class="mb-3">
                    <label>Alamat</label>
                    <textarea name="alamat" 
                              class="form-control" required></textarea>
                </div>

                <div class="mb-3">
                    <label>Telepon</label>
                    <input type="text" name="telepon" 
                           class="form-control" required>
                </div>

                <button class="btn btn-success">Simpan</button>
                <a href="<?= base_url('master/supplier'); ?>" 
                   class="btn btn-secondary">
                    Kembali
                </a>

            </form>

        </div>
    </div>

</div>
