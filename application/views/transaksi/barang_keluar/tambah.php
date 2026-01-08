<!-- WRAPPER HALAMAN INPUT BARANG KELUAR -->
<div class="content-wrapper krem-bg">
    <div class="container-fluid py-4">

        <!-- JUDUL HALAMAN -->
        <h2 class="page-title centered mb-4">Input Barang Keluar</h2>

        <!-- CARD FORM -->
        <div class="form-card">
            <form method="post" action="<?= base_url('transaksi/barangkeluar/simpan'); ?>">

                <div class="form-grid">

                    <!-- PILIH NAMA BARANG -->
                    <div class="form-row">
                        <div class="icon-box">
                            <i class="bi bi-box-seam"></i>
                        </div>
                        <div class="form-input">
                            <label>Nama Barang</label>
                            <select name="id_barang" class="form-pill" required>
                                <option value="">-- Pilih Barang --</option>
                                <?php foreach ($barang as $b): ?>
                                    <option value="<?= $b->id_barang ?>">
                                        <?= $b->nama_barang ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>

                    <!-- INPUT JUMLAH BARANG -->
                    <div class="form-row">
                        <div class="icon-box">
                            <i class="bi bi-hash"></i>
                        </div>
                        <div class="form-input">
                            <label>Jumlah</label>
                            <input type="number" name="jumlah" class="form-pill" required>
                        </div>
                    </div>

                    <!-- INPUT TANGGAL BARANG KELUAR -->
                    <div class="form-row">
                        <div class="icon-box">
                            <i class="bi bi-calendar-event"></i>
                        </div>
                        <div class="form-input">
                            <label>Tanggal Barang Keluar</label>
                            <input type="date" name="tanggal" class="form-pill" required>
                        </div>
                    </div>

                    <!-- INPUT TUJUAN BARANG -->
                    <div class="form-row">
                        <div class="icon-box">
                            <i class="bi bi-geo-alt"></i>
                        </div>
                        <div class="form-input">
                            <label>Tujuan</label>
                            <input type="text" name="tujuan" class="form-pill" required>
                        </div>
                    </div>

                    <!-- TOMBOL AKSI -->
                    <div class="form-action full mt-3">
                        <button type="submit" class="btn btn-success btn-pill px-4">
                            Simpan
                        </button>
                        <a href="<?= base_url('transaksi/barangkeluar'); ?>" class="btn btn-secondary btn-pill px-4">
                            Kembali
                        </a>
                    </div>

                </div>
            </form>
        </div>

    </div>
</div>
