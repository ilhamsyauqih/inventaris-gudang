<div class="content-wrapper krem-bg">
    <div class="container-fluid py-4">

        <h2 class="page-title centered mb-4">Tambah Barang</h2>

        <div class="form-card">
            <form action="<?= base_url('master/barang/simpan'); ?>" method="post" enctype="multipart/form-data">

                <div class="form-grid">

                    <!-- KODE BARANG -->
                    <div class="form-row">
                        <div class="icon-box">
                            <i class="bi bi-qr-code"></i>
                        </div>
                        <div class="form-input">
                            <label>Kode Barang</label>
                            <input type="text" name="kode_barang" class="form-pill" required>
                        </div>
                    </div>

                    <!-- NAMA BARANG -->
                    <div class="form-row">
                        <div class="icon-box">
                            <i class="bi bi-box-seam"></i>
                        </div>
                        <div class="form-input">
                            <label>Nama Barang</label>
                            <input type="text" name="nama_barang" class="form-pill" required>
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
                                <option value="">-- Pilih Kategori --</option>
                                <?php foreach ($kategori as $k): ?>
                                    <option value="<?= $k->id_kategori; ?>">
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
                            <input type="text" name="satuan" class="form-pill" placeholder="pcs / rim / botol" required>
                        </div>
                    </div>

                    <!-- GAMBAR -->
                    <div class="form-row full">
                        <div class="icon-box">
                            <i class="bi bi-image"></i>
                        </div>
                        <div class="form-input">
                            <label>Gambar Barang</label>
                            <input type="file" name="gambar" class="form-pill" accept="image/*">
                            <small class="text-muted d-block mt-1">Format JPG / PNG (max 2MB)</small>
                        </div>
                    </div>

                    <!-- ACTION -->
                    <div class="form-action full mt-3">
                        <button type="submit" class="btn btn-success btn-pill px-4">
                            Simpan
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