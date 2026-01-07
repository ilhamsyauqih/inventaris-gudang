<div class="content-wrapper krem-bg">
    <div class="container-fluid py-4">

        <h2 class="page-title centered mb-4">Input Barang Masuk</h2>

        <div class="form-card">
            <form method="post">

                <div class="form-grid">


                    <!-- NAMA BARANG & PREVIEW -->
                    <div class="form-row">
                        <div class="icon-box">
                            <i class="bi bi-box-seam"></i>
                        </div>
                        <div id="barangPreview" class="thumbnail-preview" style="display:none;">
                            <img id="barangImage" src="" alt="Thumb">
                        </div>
                        <div class="form-input">
                            <label>Nama Barang</label>
                            <select name="id_barang" id="barangSelect" class="form-pill">
                                <option value="">-- Pilih Barang --</option>
                                <?php foreach ($barang as $b): ?>
                                    <option value="<?= $b->id_barang ?>"
                                        data-image="<?= base_url('assets/uploads/barang/' . $b->gambar) ?>">
                                        <?= $b->nama_barang ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>

                    <!-- SUPPLIER -->
                    <div class="form-row">
                        <div class="icon-box">
                            <i class="bi bi-truck"></i>
                        </div>
                        <div class="form-input">
                            <label>Supplier</label>
                            <select name="id_supplier" class="form-pill">
                                <option value="">-- Pilih Supplier --</option>
                                <?php foreach ($supplier as $s): ?>
                                    <option value="<?= $s->id_supplier ?>">
                                        <?= $s->nama_supplier ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>

                    <!-- JUMLAH -->
                    <div class="form-row">
                        <div class="icon-box">
                            <i class="bi bi-hash"></i>
                        </div>
                        <div class="form-input">
                            <label>Jumlah</label>
                            <input type="number" name="jumlah" class="form-pill">
                        </div>
                    </div>

                    <!-- TANGGAL -->
                    <div class="form-row">
                        <div class="icon-box">
                            <i class="bi bi-calendar-event"></i>
                        </div>
                        <div class="form-input">
                            <label>Tanggal</label>
                            <input type="date" name="tanggal" class="form-pill">
                        </div>
                    </div>

                    <!-- KETERANGAN -->
                    <div class="form-row full mb-0">
                        <div class="icon-box">
                            <i class="bi bi-chat-left-text"></i>
                        </div>
                        <div class="form-input">
                            <label>Keterangan</label>
                            <textarea name="keterangan" rows="2" class="form-pill"></textarea>
                        </div>
                    </div>

                    <!-- ACTION -->
                    <div class="form-action full mt-3">
                        <button type="submit" class="btn btn-success btn-pill px-4">
                            Simpan
                        </button>
                        <a href="<?= base_url('transaksi/barangmasuk'); ?>" class="btn btn-secondary btn-pill px-4">
                            Kembali
                        </a>
                    </div>

                </div>
            </form>
        </div>

    </div>
</div>