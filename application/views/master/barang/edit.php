<div class="container py-4">

    <h4 class="fw-bold text-krem mb-3">Edit Barang</h4>

    <div class="card card-krem shadow-sm">
        <div class="card-body">

            <form action="<?= base_url('master/barang/update'); ?>"
      method="post"
      enctype="multipart/form-data">


                <input type="hidden" name="id_barang" value="<?= $barang->id_barang; ?>">

                <div class="mb-3">
                    <label>Kategori</label>
                    <select name="id_kategori" class="form-select" required>
                        <?php foreach ($kategori as $k): ?>
                        <option value="<?= $k->id_kategori; ?>"
                            <?= $k->id_kategori == $barang->id_kategori ? 'selected' : ''; ?>>
                            <?= $k->nama_kategori; ?>
                        </option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="mb-3">
                    <label>Kode Barang</label>
                    <input type="text" name="kode_barang" 
                           value="<?= $barang->kode_barang; ?>" 
                           class="form-control" required>
                </div>

                <div class="mb-3">
                    <label>Nama Barang</label>
                    <input type="text" name="nama_barang" 
                           value="<?= $barang->nama_barang; ?>" 
                           class="form-control" required>
                </div>

                <div class="mb-3">
                    <label>Satuan</label>
                    <input type="text" name="satuan" 
                           value="<?= $barang->satuan; ?>" 
                           class="form-control" required>
                </div>
                

                <div class="mb-3">
    <label>Gambar Barang</label>
    <input type="file" name="gambar" class="form-control" accept="image/*">
</div>

<?php if ($barang->gambar): ?>
<img src="<?= base_url('assets/uploads/barang/'.$barang->gambar); ?>" 
     style="max-width:120px;" class="mt-2">
<?php endif; ?>

                <button class="btn btn-success">Update</button>
                <a href="<?= base_url('master/barang'); ?>" 
                   class="btn btn-secondary">
                    Kembali
                </a>

            </form>

        </div>
    </div>

</div>
