<div class="content-wrapper krem-bg">
    <div class="container-fluid py-4">

        <!-- Header -->
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2 class="page-title">Barang Masuk</h2>
            <a href="<?= base_url('transaksi/barangmasuk/tambah'); ?>" class="btn btn-primary rounded-btn">
                + Input Barang Masuk
            </a>
        </div>

        <!-- CARD LIST -->
        <?php foreach ($barang_masuk as $bm): ?>
        <div class="data-card">

            <div class="data-card-left">
                <h5><?= $bm->nama_barang ?></h5>
                <small class="text-muted">
                    Supplier: <?= $bm->nama_supplier ?>
                </small>
            </div>

            <div class="data-card-middle">
                <div class="info-box">
                    <span>Jumlah</span>
                    <strong><?= $bm->jumlah ?></strong>
                </div>
                <div class="info-box">
                    <span>Tanggal</span>
                    <strong><?= date('d M Y', strtotime($bm->tanggal)) ?></strong>
                </div>
            </div>

            <div class="data-card-right">
                <span class="badge badge-krem">
                    <?= $bm->keterangan ?: 'Barang Masuk' ?>
                </span>
            </div>

        </div>
        <?php endforeach; ?>

    </div>
</div>
