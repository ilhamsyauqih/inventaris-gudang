<div class="content-wrapper krem-bg">
    <div class="container-fluid py-4 px-lg-4">

        <!-- HEADER SECTION -->
        <div class="d-flex justify-content-between align-items-center mb-4">
            <div>
                <h2 class="section-title mb-1">📦 Data Barang</h2>
                <p class="text-muted mb-0">
                    Kelola inventaris barang percetakan dengan mudah
                </p>
            </div>
            <a href="<?= base_url('master/barang/tambah'); ?>" class="btn btn-success btn-pill shadow-sm">
                <i class="bi bi-plus-lg me-1"></i> Tambah Barang
            </a>
        </div>

        <!-- FILTER KATEGORI -->
        <div class="category-filter-card mb-5 animate__animated animate__fadeIn">
            <div class="filter-label">
                <i class="bi bi-filter-circle"></i> Filter Kategori
            </div>

            <div class="category-chips">
                <a href="<?= base_url('master/barang'); ?>"
                    class="category-chip <?= !$kategori_aktif ? 'active' : '' ?>">
                    <i class="bi bi-grid-fill"></i> Semua
                </a>

                <?php foreach ($kategori as $k): ?>
                    <a href="<?= base_url('master/barang?kategori=' . $k->id_kategori); ?>"
                        class="category-chip <?= $kategori_aktif == $k->id_kategori ? 'active' : '' ?>">
                        <?= $k->nama_kategori; ?>
                    </a>
                <?php endforeach; ?>
            </div>
        </div>

        <!-- GRID BARANG -->
        <div class="row g-4">
            <?php foreach ($barang as $b): ?>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="card card-barang h-100 shadow-sm border-0 animate__animated animate__fadeInUp">

                        <!-- STATUS BADGE -->
                        <div class="position-absolute top-0 end-0 m-3 z-index-2">
                            <?php if ($b->stok > 0): ?>
                                <span class="badge rounded-pill bg-success-soft text-success shadow-none">Tersedia</span>
                            <?php else: ?>
                                <span class="badge rounded-pill bg-danger-soft text-danger shadow-none">Habis</span>
                            <?php endif; ?>
                        </div>

                        <!-- IMAGE BOX -->
                        <div class="card-img-container">
                            <img src="<?= $b->gambar
                                ? base_url('assets/uploads/barang/' . $b->gambar)
                                : base_url('assets/img/default.png'); ?>" alt="<?= $b->nama_barang ?>"
                                class="barang-img-fluid">
                        </div>

                        <div class="card-body pt-0">
                            <div class="mb-2">
                                <span class="badge-category">
                                    <?= $b->nama_kategori ?>
                                </span>
                            </div>
                            <h6 class="barang-title mb-1"><?= $b->nama_barang ?></h6>
                            <small class="text-muted d-block mb-3"><?= $b->kode_barang ?></small>

                            <div class="stok-info">
                                <span class="stok-label">Stok Saat Ini:</span>
                                <span class="stok-value <?= $b->stok <= 5 ? 'text-danger' : '' ?>">
                                    <?= $b->stok ?> <small class="text-muted fw-normal"><?= $b->satuan ?></small>
                                </span>
                            </div>
                        </div>

                        <div class="card-footer bg-transparent border-0 pt-0 pb-4 px-4">
                            <div class="d-flex gap-2">
                                <a href="<?= base_url('master/barang/edit/' . $b->id_barang); ?>"
                                    class="btn btn-outline-krem btn-sm flex-grow-1 py-2">
                                    <i class="bi bi-pencil-square me-1"></i> Edit
                                </a>
                                <a href="<?= base_url('master/barang/hapus/' . $b->id_barang); ?>"
                                    class="btn btn-outline-danger btn-sm px-3 py-2"
                                    onclick="return confirm('Yakin ingin menghapus barang ini?')">
                                    <i class="bi bi-trash"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>

        </div>


    </div>

</div>

</div>


</div>
</div>