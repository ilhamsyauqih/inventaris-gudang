</div> <!-- end main-content -->
</div> <!-- end layout -->

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<script>
    // Ambil elemen dropdown barang
    const barangSelect = document.getElementById('barangSelect');

    // Ambil elemen preview gambar
    const previewBox = document.getElementById('barangPreview');
    const previewImage = document.getElementById('barangImage');

    // Pastikan dropdown barang ada di halaman
    if (barangSelect) {
        barangSelect.addEventListener('change', function () {

            // Ambil option yang dipilih
            const selectedOption = this.options[this.selectedIndex];

            // Ambil URL gambar dari atribut data-image
            const imageUrl = selectedOption ? selectedOption.getAttribute('data-image') : null;

            // Pastikan elemen preview tersedia
            if (previewBox && previewImage) {
                // Jika ada gambar valid, tampilkan preview
                if (imageUrl && !imageUrl.endsWith('/')) {
                    previewImage.src = imageUrl;
                    previewBox.style.display = 'flex';
                    previewBox.style.animation = 'fadeInScale 0.35s ease';
                } 
                // Jika tidak ada gambar, sembunyikan preview
                else {
                    previewBox.style.display = 'none';
                    previewImage.src = '';
                }
            }
        });
    }
</script>

</body>
</html>
