<div class="content-wrapper krem-bg">
    <div class="container-fluid py-4 px-lg-4">

        <!-- Header -->
        <div class="mb-5 animate__animated animate__fadeInDown">
            <h2 class="section-title mb-1">📋 Laporan Stok Barang</h2>
            <p class="text-muted mb-0">
                Data stok terkini seluruh barang di gudang percetakan
            </p>
        </div>

        <!-- Card -->
        <div class="card card-barang border-0 shadow-sm animate__animated animate__fadeInUp">
            <div class="card-body p-0 overflow-hidden">

                <div class="table-responsive">
                    <table class="table table-hover align-middle mb-0">
                        <thead class="bg-light">
                            <tr>
                                <th class="py-3 px-4 text-muted fw-bold text-uppercase fs-7"
                                    style="letter-spacing: 0.5px;">No</th>
                                <th class="py-3 px-4 text-muted fw-bold text-uppercase fs-7"
                                    style="letter-spacing: 0.5px;">Kode</th>
                                <th class="py-3 px-4 text-muted fw-bold text-uppercase fs-7"
                                    style="letter-spacing: 0.5px;">Nama Barang</th>
                                <th class="py-3 px-4 text-muted fw-bold text-uppercase fs-7"
                                    style="letter-spacing: 0.5px;">Kategori</th>
                                <th class="py-3 px-4 text-muted fw-bold text-uppercase fs-7"
                                    style="letter-spacing: 0.5px;">Satuan</th>
                                <th class="py-3 px-4 text-end text-muted fw-bold text-uppercase fs-7"
                                    style="letter-spacing: 0.5px;">Stok</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                            foreach ($stok as $s): ?>
                                <tr>
                                    <td class="px-4 py-3 text-muted"><?= $no++; ?></td>
                                    <td class="px-4 py-3 fw-bold text-krem"><?= $s->kode_barang; ?></td>
                                    <td class="px-4 py-3">
                                        <div class="fw-bold text-dark"><?= $s->nama_barang; ?></div>
                                    </td>
                                    <td class="px-4 py-3">
                                        <span class="badge bg-light text-dark border"><?= $s->nama_kategori; ?></span>
                                    </td>
                                    <td class="px-4 py-3 text-muted"><?= $s->satuan; ?></td>
                                    <td class="px-4 py-3 text-end">
                                        <?php
                                        $badgeClass = $s->stok > 10 ? 'bg-success-soft text-success' : ($s->stok > 0 ? 'bg-warning-soft text-warning' : 'bg-danger-soft text-danger');
                                        ?>
                                        <span class="badge rounded-pill <?= $badgeClass ?> px-3 py-2">
                                            <?= $s->stok; ?>
                                        </span>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>

    </div>
</div>
<style>
    .fs-7 {
        font-size: 0.75rem;
    }

    .bg-success-soft {
        background-color: rgba(25, 135, 84, 0.1);
    }

    .bg-warning-soft {
        background-color: rgba(255, 193, 7, 0.1);
    }

    .bg-danger-soft {
        background-color: rgba(220, 53, 69, 0.1);
    }
</style>