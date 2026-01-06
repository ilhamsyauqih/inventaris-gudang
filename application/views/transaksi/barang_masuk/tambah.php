<div class="content-wrapper" style="background-color:#f7f1e3; min-height:100vh;">
    <div class="container-fluid py-4">

        <h2 style="font-weight:600;" class="mb-4">Input Barang Masuk</h2>

        <div class="card shadow-sm" style="border-radius:12px;">
            <div class="card-body">

                <form method="post" action="<?= base_url('transaksi/barangmasuk/simpan') ?>">

                    <div class="form-group mb-3">
                        <label>Nama Barang</label>
                        <select name="id_barang" class="form-control" required>
                            <option value="">-- Pilih Barang --</option>
                            <?php foreach($barang as $b): ?>
                                <option value="<?= $b->id_barang ?>">
                                    <?= $b->nama_barang ?>
                                </option>
                            <?php endforeach ?>
                        </select>
                    </div>

                    <div class="form-group mb-3">
                        <label>Supplier</label>
                        <select name="id_supplier" class="form-control" required>
                            <option value="">-- Pilih Supplier --</option>
                            <?php foreach($supplier as $s): ?>
                                <option value="<?= $s->id_supplier ?>">
                                    <?= $s->nama_supplier ?>
                                </option>
                            <?php endforeach ?>
                        </select>
                    </div>

                    <div class="form-group mb-3">
                        <label>Jumlah</label>
                        <input type="number" name="jumlah" class="form-control" required>
                    </div>

                    <div class="form-group mb-4">
                        <label>Tanggal Barang Masuk</label>
                        <input type="date" name="tanggal" class="form-control" required>
                    </div>

                    <div class="form-group mb-4">
                        <label>Keterangan</label>
                        <textarea name="keterangan" class="form-control"></textarea>
                    </div>

                    <button class="btn btn-success px-4">Simpan</button>
                    <a href="<?= base_url('transaksi/barangmasuk') ?>" class="btn btn-secondary px-4">
                        Kembali
                    </a>

                </form>

            </div>
        </div>

    </div>
</div>
