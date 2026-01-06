<div class="content-wrapper krem-bg">
    <div class="container-fluid py-4">

        <!-- Header -->
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2 class="page-title">Barang Keluar</h2>
            <a href="<?= base_url('transaksi/barangkeluar/tambah'); ?>" class="btn btn-primary rounded-btn">
                + Input Barang Keluar
            </a>
        </div>

        <!-- CARD LIST -->
        <?php foreach ($barang_keluar as $bk): ?>
        <div class="data-card">

            <div class="data-card-left">
                <h5><?= $bk->nama_barang ?></h5>
                <small class="text-muted">
                    Tujuan: <?= $bk->tujuan ?>
                </small>
            </div>

            <div class="data-card-middle">
                <div class="info-box">
                    <span>Jumlah</span>
                    <strong><?= $bk->jumlah ?></strong>
                </div>
                <div class="info-box">
                    <span>Tanggal</span>
                    <strong><?= date('d M Y', strtotime($bk->tanggal)) ?></strong>
                </div>
            </div>

            <div class="data-card-right">
                <span class="badge badge-krem">
                    Barang Keluar
                </span>
            </div>

        </div>
        <?php endforeach; ?>

    </div>
</div>
