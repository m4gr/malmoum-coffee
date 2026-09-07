<?php
// gallery.php - صفحة المعرض
?>
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>المعرض | ملموم MALMOUM CAFE</title>
    <meta name="description" content="معرض صور ملموم - جماليات المكان والقهوة والفن.">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans+Arabic:wght@300;400;600;700&family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/rtl.css">
    <link rel="shortcut icon" href="assets/images/logo.jpg" type="image/x-icon">
</head>
<body>
    <?php include 'includes/navbar.php'; ?>

    <main>
        <section class="gallery-hero">
            <div class="container">
                <h1>المعرض</h1>
                <p>جماليات المكان.</p>
            </div>
        </section>

        <section class="gallery-masonry">
            <div class="container">
                <div class="gallery-masonry-grid">
                    <?php for ($i = 1; $i <= 12; $i++): ?>
                    <div class="gallery-masonry-item gallery-masonry-<?= ($i % 3 == 0) ? 'large' : (($i % 3 == 1) ? 'medium' : 'small') ?>">
                        <img src="assets/images/gallery/gallery-<?= $i ?>.jpg" alt="معرض ملموم <?= $i ?>" loading="lazy">
                        <div class="gallery-masonry-overlay">
                            <span>ملموم</span>
                        </div>
                    </div>
                    <?php endfor; ?>
                </div>
            </div>
        </section>
    </main>

    <?php include 'includes/footer.php'; ?>
    <script src="assets/js/main.js"></script>
</body>
</html>