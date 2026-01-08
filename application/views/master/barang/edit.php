<div class="content-wrapper krem-bg">
    <div class="container-fluid py-4">

        <h2 class="page-title centered mb-4">Edit Barang</h2>

        <div class="form-card">
            <form action="<?= base_url('master/barang/update'); ?>" method="post" enctype="multipart/form-data">
                <input type="hidden" name="id_barang" value="<?= $barang->id_barang; ?>">

                <div class="form-grid">

                    <!-- KODE BARANG -->
                    <div class="form-row">
                        <div class="icon-box">
                            <i class="bi bi-qr-code"></i>
                        </div>
                        <div class="form-input">
                            <label>Kode Barang</label>
                            <input type="text" name="kode_barang" value="<?= $barang->kode_barang; ?>" class="form-pill"
                                required>
                        </div>
                    </div>

                    <!-- NAMA BARANG -->
                    <div class="form-row">
                        <div class="icon-box">
                            <i class="bi bi-box-seam"></i>
                        </div>
                        <div class="form-input">
                            <label>Nama Barang</label>
                            <input type="text" name="nama_barang" value="<?= $barang->nama_barang; ?>" class="form-pill"
                                required>
                        </div>
                    </div>

                    <!-- KATEGORI -->
                    <div class="form-row">
                        <div class="icon-box">
                            <i class="bi bi-grid"></i>
                        </div>
                        <div class="form-input">
                            <label>Kategori</label>
                            <select name="id_kategori" class="form-pill" required>
                                <?php foreach ($kategori as $k): ?>
                                    <option value="<?= $k->id_kategori; ?>" <?= $k->id_kategori == $barang->id_kategori ? 'selected' : ''; ?>>
                                        <?= $k->nama_kategori; ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>

                    <!-- SATUAN -->
                    <div class="form-row">
                        <div class="icon-box">
                            <i class="bi bi-tag"></i>
                        </div>
                        <div class="form-input">
                            <label>Satuan</label>
                            <input type="text" name="satuan" value="<?= $barang->satuan; ?>" class="form-pill" required>
                        </div>
                    </div>

                    <!-- GAMBAR -->
                    <div class="form-row full">
                        <div class="icon-box">
                            <i class="bi bi-image"></i>
                        </div>
                        <?php if ($barang->gambar): ?>
                            <div class="thumbnail-preview me-3">
                                <img src="<?= base_url('assets/uploads/barang/' . $barang->gambar); ?>" alt="Thumb"
                                    style="max-width: 200px; height: auto; border-radius: 8px;">
                            </div>
                        <?php endif; ?>
                        <div class="form-input">
                            <label>Ganti Gambar Barang</label>
                            <input type="file" name="gambar" class="form-pill" accept="image/*">
                            <small class="text-muted d-block mt-1">Kosongkan jika tidak ingin mengubah (Max 2MB)</small>
                        </div>
                    </div>

                    <!-- ACTION -->
                    <div class="form-action full mt-3">
                        <button type="submit" class="btn btn-success btn-pill px-4">
                            Update
                        </button>
                        <a href="<?= base_url('master/barang'); ?>" class="btn btn-secondary btn-pill px-4">
                            Kembali
                        </a>
                    </div>

                </div>
            </form>
        </div>

    </div>
</div>