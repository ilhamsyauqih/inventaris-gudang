</div> <!-- end main-content -->
</div> <!-- end layout -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script>
    const barangSelect = document.getElementById('barangSelect');
    const previewBox = document.getElementById('barangPreview');
    const previewImage = document.getElementById('barangImage');

    if (barangSelect) {
        barangSelect.addEventListener('change', function () {
            const selectedOption = this.options[this.selectedIndex];
            const imageUrl = selectedOption ? selectedOption.getAttribute('data-image') : null;

            if (previewBox && previewImage) {
                if (imageUrl && !imageUrl.endsWith('/')) {
                    previewImage.src = imageUrl;
                    previewBox.style.display = 'flex';
                    previewBox.style.animation = 'fadeInScale 0.35s ease';
                } else {
                    previewBox.style.display = 'none';
                    previewImage.src = '';
                }
            }
        });
    }
</script>

</body>

</html>