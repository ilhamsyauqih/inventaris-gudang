<div class="content-wrapper krem-bg">
    <div class="container-fluid py-4 px-lg-4">

        <!-- HEADER SECTION -->
        <div class="d-flex justify-content-between align-items-center mb-4">
            <div>
                <h2 class="section-title mb-1">🏭 Data Supplier</h2>
                <p class="text-muted mb-0">
                    Daftar supplier bahan dan perlengkapan percetakan
                </p>
            </div>
            <a href="<?= base_url('master/supplier/tambah'); ?>" class="btn btn-success btn-pill shadow-sm">
                <i class="bi bi-plus-lg me-1"></i> Tambah Supplier
            </a>
        </div>

        <!-- GRID SUPPLIER -->
        <div class="row g-4">
            <?php foreach ($supplier as $s): ?>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="card card-barang h-100 shadow-sm border-0 animate__animated animate__fadeInUp">

                        <!-- PLACEHOLDER ICON in place of Image -->
                        <div class="card-img-container bg-light d-flex align-items-center justify-content-center"
                            style="height: 180px;">
                            <i class="bi bi-building text-krem display-1 opacity-25"></i>
                        </div>

                        <div class="card-body pt-0">
                            <!-- Helper spacing to match card-barang layout -->
                            <div class="mb-3"></div>

                            <h6 class="barang-title mb-1"><?= $s->nama_supplier ?></h6>
                            <small class="text-muted d-block mb-3">
                                <i class="bi bi-geo-alt me-1"></i><?= $s->alamat ?>
                            </small>

                            <!-- TELEPON INFO (Styled like Stok Info) -->
                            <div class="stok-info">
                                <span class="stok-label">Telepon:</span>
                                <span class="stok-value text-dark fw-bold">
                                    <?= $s->telepon ?>
                                </span>
                            </div>
                        </div>

                        <div class="card-footer bg-transparent border-0 pt-0 pb-4 px-4">
                            <div class="d-flex gap-2">
                                <a href="<?= base_url('master/supplier/edit/' . $s->id_supplier); ?>"
                                    class="btn btn-outline-krem btn-sm flex-grow-1 py-2">
                                    <i class="bi bi-pencil-square me-1"></i> Edit
                                </a>
                                <a href="<?= base_url('master/supplier/hapus/' . $s->id_supplier); ?>"
                                    class="btn btn-outline-danger btn-sm px-3 py-2"
                                    onclick="return confirm('Yakin ingin menghapus supplier ini?')">
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