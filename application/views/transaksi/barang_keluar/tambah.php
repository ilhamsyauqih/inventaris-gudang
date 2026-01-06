<div class="content-wrapper krem-bg">
    <div class="container-fluid py-4">

        <h2 class="page-title mb-4">Input Barang Keluar</h2>

        <div class="card shadow-sm rounded-4">
            <div class="card-body">

                <form method="post" action="<?= base_url('transaksi/barangkeluar/simpan'); ?>">

                    <div class="form-group mb-3">
                        <label>Nama Barang</label>
                        <select name="id_barang" class="form-control" required>
                            <option value="">-- Pilih Barang --</option>
                            <?php foreach($barang as $b): ?>
                                <option value="<?= $b->id_barang ?>">
                                    <?= $b->nama_barang ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="form-group mb-3">
                        <label>Jumlah</label>
                        <input type="number" name="jumlah" class="form-control" required>
                    </div>

                    <div class="form-group mb-3">
                        <label>Tanggal Barang Keluar</label>
                        <input type="date" name="tanggal" class="form-control" required>
                    </div>

                    <div class="form-group mb-4">
                        <label>Tujuan</label>
                        <input type="text" name="tujuan" class="form-control" required>
                    </div>

                    <button class="btn btn-success px-4">Simpan</button>
                    <a href="<?= base_url('transaksi/barangkeluar'); ?>" class="btn btn-secondary px-4">
                        Kembali
                    </a>

                </form>

            </div>
        </div>

    </div>
</div>
