<div class="content-wrapper" style="background-color:#f7f1e3; min-height:100vh;">
    <div class="container-fluid py-4">

        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2 style="font-weight:600;">Barang Masuk</h2>
            <a href="<?= base_url('transaksi/barangmasuk/tambah') ?>"
               class="btn btn-primary px-4 py-2"
               style="border-radius:8px;">
                + Input Barang Masuk
            </a>
        </div>

        <div class="card shadow-sm" style="border-radius:12px;">
            <div class="card-body">

                <table class="table table-bordered table-hover align-middle mb-0">
                    <thead class="table-light">
                        <tr>
                            <th width="50">No</th>
                            <th>Nama Barang</th>
                            <th>Supplier</th>
                            <th width="80">Jumlah</th>
                            <th width="120">Tanggal</th>
                            <th>Keterangan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no=1; foreach($barang_masuk as $bm): ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $bm->nama_barang ?></td>
                            <td><?= $bm->nama_supplier ?></td>
                            <td><?= $bm->jumlah ?></td>
                            <td><?= $bm->tanggal ?></td>
                            <td><?= $bm->keterangan ?></td>
                        </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>

            </div>
        </div>

    </div>
</div>
