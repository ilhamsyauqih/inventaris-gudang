
<div class="container mt-4">

    <h4 class="text-krem mb-3">Tambah Barang</h4>

    <div class="card card-krem shadow-sm">
        <div class="card-body">

            <form action="<?= base_url('master/barang/simpan'); ?>" method="post" enctype="multipart/form-data">
                


                <div class="mb-3">
                    <label>Kategori</label>
                    <select name="id_kategori" class="form-select" required>
                        <option value="">-- Pilih Kategori --</option>
                        <?php foreach ($kategori as $k): ?>
                        <option value="<?= $k->id_kategori; ?>">
                            <?= $k->nama_kategori; ?>
                        </option>
                        <?php endforeach; ?>
                    </select>
                </div>
<div class="mb-3">
    <label>Gambar Barang</label>
    <input type="file" name="gambar" class="form-control" accept="image/*">
    <small class="text-muted">Format JPG / PNG (max 2MB)</small>
</div>

                <div class="mb-3">
                    <label>Kode Barang</label>
                    <input type="text" name="kode_barang" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label>Nama Barang</label>
                    <input type="text" name="nama_barang" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label>Satuan</label>
                    <input type="text" name="satuan" class="form-control" placeholder="pcs / rim / botol" required>
                </div>

                <button class="btn btn-success">Simpan</button>
                <a href="<?= base_url('master/barang'); ?>" class="btn btn-secondary">Kembali</a>

            </form>

        </div>
    </div>

</div>
