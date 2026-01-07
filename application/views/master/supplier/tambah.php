<div class="content-wrapper krem-bg">
    <div class="container-fluid py-4">

        <h2 class="page-title centered mb-4">Tambah Supplier</h2>

        <div class="form-card">
            <form action="<?= base_url('master/supplier/simpan'); ?>" method="post">

                <div class="form-grid">

                    <!-- NAMA SUPPLIER -->
                    <div class="form-row">
                        <div class="icon-box">
                            <i class="bi bi-building"></i>
                        </div>
                        <div class="form-input">
                            <label>Nama Supplier</label>
                            <input type="text" name="nama_supplier" class="form-pill" required>
                        </div>
                    </div>

                    <!-- TELEPON -->
                    <div class="form-row">
                        <div class="icon-box">
                            <i class="bi bi-telephone"></i>
                        </div>
                        <div class="form-input">
                            <label>Telepon</label>
                            <input type="text" name="telepon" class="form-pill" required>
                        </div>
                    </div>

                    <!-- ALAMAT -->
                    <div class="form-row full mb-0">
                        <div class="icon-box">
                            <i class="bi bi-geo-alt"></i>
                        </div>
                        <div class="form-input">
                            <label>Alamat</label>
                            <textarea name="alamat" rows="2" class="form-pill" required></textarea>
                        </div>
                    </div>

                    <!-- ACTION -->
                    <div class="form-action full mt-3">
                        <button type="submit" class="btn btn-success btn-pill px-4">
                            Simpan
                        </button>
                        <a href="<?= base_url('master/supplier'); ?>" class="btn btn-secondary btn-pill px-4">
                            Kembali
                        </a>
                    </div>

                </div>
            </form>
        </div>

    </div>
</div>