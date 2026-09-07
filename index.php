<?php
// index.php - الصفحة الرئيسية
?>
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ملموم | MALMOUM CAFE - قهوة، فن، ومساحة تجمعنا</title>
    <meta name="description" content="ملموم ليس مجرد مقهى، هو مساحة تجمع القهوة والفن والثقافة والقراءة والعمل واللقاءات والإبداع.">
    <meta property="og:title" content="ملموم | MALMOUM CAFE">
    <meta property="og:description" content="قهوة، فن، ومساحة تجمعنا.">
    <meta property="og:type" content="website">
    <!-- Preconnect & Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans+Arabic:wght@300;400;600;700&family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- CSS Stylesheets -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/rtl.css">
    <link rel="shortcut icon" href="assets/images/logo.jpg" type="image/x-icon">
</head>
<body>
    <?php include 'includes/navbar.php'; ?>
    
    <main>
        <!-- Hero Section -->
        <section id="hero" class="hero">
            <div class="hero-bg">
                <img src="assets/images/heropage.jpg" alt="ملموم كافيه - أجواء القهوة والفن" fetchpriority="high">
                <div class="hero-overlay"></div>
            </div>
            <div class="hero-content">
                <span class="hero-subtitle">ملموم</span>
                <h1 class="hero-title">قهوة، فن،<br>ومساحة تجمعنا.</h1>
                <div class="hero-actions">
                    <a href="menu.php" class="btn btn-primary">استكشف المنيو</a>
                    <a href="#manifesto" class="btn btn-secondary">اكتشف ملموم</a>
                </div>
            </div>
            <div class="scroll-indicator">
                <span>مرر للأسفل</span>
                <svg width="20" height="30" viewBox="0 0 20 30" fill="none">
                    <path d="M10 0V25M10 25L3 18M10 25L17 18" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>
                </svg>
            </div>
        </section>

        <!-- Manifesto Section -->
        <section id="manifesto" class="manifesto">
            <div class="container">
                <div class="manifesto-content">
                    <h2 class="manifesto-title">نؤمن أن القهوة ليست مجرد مشروب.</h2>
                    <p class="manifesto-text">هي بداية حديث، لحظة تأمل، مساحة للعمل، أو لقاء لا يُنسى.<br>في ملموم، كل كوب يحمل قصة.</p>
                </div>
            </div>
        </section>

        <!-- Experience Section -->
        <section class="experience">
            <div class="container">
                <div class="section-header">
                    <span class="section-label">تجربة ملموم</span>
                    <h2 class="section-title">أكثر من قهوة.</h2>
                </div>
                <div class="experience-grid">
                    <div class="experience-card" data-experience="coffee">
                        <div class="experience-number">01</div>
                        <div class="experience-content">
                            <h3>قهوة</h3>
                            <p>حبوب مختارة بعناية، تحضير بإتقان، ونكهة تبقى في الذاكرة.</p>
                        </div>
                        <div class="experience-image">
                            <img src="assets/images/exp-coffee.jpg" alt="قهوة ملموم" loading="lazy">
                        </div>
                    </div>
                    <div class="experience-card" data-experience="art">
                        <div class="experience-number">02</div>
                        <div class="experience-content">
                            <h3>فن</h3>
                            <p>جداريات وأعمال فنية تُلهم الزوار وتضيف روحًا للمكان.</p>
                        </div>
                        <div class="experience-image">
                            <img src="assets/images/exp-art.jpg" alt="فن في ملموم" loading="lazy">
                        </div>
                    </div>
                    <div class="experience-card" data-experience="reading">
                        <div class="experience-number">03</div>
                        <div class="experience-content">
                            <h3>قراءة</h3>
                            <p>مكتبة متنوعة، وزوايا هادئة لعشاق الكتب والقراءة المتأملة.</p>
                        </div>
                        <div class="experience-image">
                            <img src="assets/images/exp-reading.jpg" alt="قراءة في ملموم" loading="lazy">
                        </div>
                    </div>
                    <div class="experience-card" data-experience="work">
                        <div class="experience-number">04</div>
                        <div class="experience-content">
                            <h3>عمل</h3>
                            <p>مساحات مريحة للعمل، مع إضاءة طبيعية ومنافذ شحن في كل مكان.</p>
                        </div>
                        <div class="experience-image">
                            <img src="assets/images/exp-work.jpg" alt="عمل في ملموم" loading="lazy">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Featured Menu -->
        <section class="featured-menu">
            <div class="container">
                <div class="section-header">
                    <span class="section-label">من المنيو</span>
                    <h2 class="section-title">اختر ما يناسبك.</h2>
                </div>
                <div class="menu-preview">
                    <?php
                    $featuredItems = [
                        ['Espresso', 'اسبريسو', 'قهوة مركزة غنية بالنكهة', '18', 'espresso.jpg'],
                        ['Flat White', 'فلات وايت', 'حليب مبخر مع قهوة مزدوجة', '22', 'flatwhite.webp'],
                        ['Latte', 'لاتيه', 'قهوة ناعمة مع حليب فاخر', '20', 'latte.jpg'],
                    ];
                    foreach ($featuredItems as $item):
                    ?>
                    <div class="menu-item">
                        <div class="menu-item-image">
                            <img src="assets/images/menu/<?= $item[4] ?>" alt="<?= $item[0] ?>" loading="lazy">
                        </div>
                        <div class="menu-item-info">
                            <h4><?= $item[0] ?></h4>
                            <span class="menu-item-ar"><?= $item[1] ?></span>
                            <p><?= $item[2] ?></p>
                            <span class="menu-item-price"><?= $item[3] ?> ريال</span>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
                <div class="menu-cta">
                    <a href="menu.php" class="btn btn-outline">استكشف المنيو كاملًا</a>
                </div>
            </div>
        </section>

        <!-- Signature Item -->
        <section class="signature">
            <div class="container">
                <div class="signature-layout">
                    <div class="signature-image">
                        <img src="assets/images/flatwhite.webp" alt="توقيع ملموم - سبانش لاتيه" loading="lazy">
                    </div>
                    <div class="signature-content">
                        <span class="signature-badge">Flat white</span>
                        <h2>فلات وايت</h2>
                        <p>مزيج فريد من الإسبريسو الإيطالي، الحليب الطازج، والحليب المكثف المحلى، يقدم بلمسة سعودية أصيلة.</p>
                        <div class="signature-details">
                            <span class="signature-price">٢٤ ريال</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Art Section -->
        <section class="art-section">
            <div class="container">
                <div class="section-header">
                    <span class="section-label">الفن في المكان</span>
                    <h2 class="section-title">الفن جزء من المكان.</h2>
                    <h2 class="section-title" style="font-size:20px; margin-top:10px;">تواصل معنا وضع لمسة فنك</h2>
                </div>
                <div class="art-gallery">
                    <?php
                    $artworks = [
                        ['اسم اللوحة', 'اسمك', '2026', 'نوعها', 'aristarea.jpg'],
                        ['اسم اللوحة', 'اسمك', '2026', 'نوعها', 'aristarea.jpg']
                        #--['اسم اللوحة', 'اسمك', '2026', 'نوعها', 'aristarea.jpg'],
                        #--['اسم اللوحة', 'اسمك', '2026', 'نوعها', 'aristarea.jpg']
                    ];
                    foreach ($artworks as $art):
                    ?>
                    <div class="art-item" data-title="<?= $art[0] ?>" data-artist="<?= $art[1] ?>" data-year="<?= $art[2] ?>" data-medium="<?= $art[3] ?>">
                        <img src="assets/images/art/<?= $art[4] ?>" alt="<?= $art[0] ?> - <?= $art[1] ?>" loading="lazy">
                        <div class="art-overlay">
                            <h4><?= $art[0] ?></h4>
                            <p><?= $art[1] ?></p>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <!-- Space Section -->
        <section class="space-section">
            <div class="container">
                <div class="section-header">
                    <span class="section-label">المساحة</span>
                    <h2 class="section-title">مساحتك، على طريقتك.</h2>
                </div>
                <div class="space-grid">
                    <div class="space-item">
                        <img src="assets/images/space-reading.jpg" alt="زاوية القراءة في ملموم" loading="lazy">
                        <div class="space-label">للقراءة</div>
                    </div>
                    <div class="space-item space-item-large">
                        <img src="assets/images/space-work.jpg" alt="مساحة العمل في ملموم" loading="lazy">
                        <div class="space-label">للعمل</div>
                    </div>
                    <div class="space-item">
                        <img src="assets/images/exp-art.jpg" alt="لقاءات في ملموم" loading="lazy">
                        <div class="space-label">لللقاءات</div>
                    </div>
                    <div class="space-item">
                        <img src="assets/images/space-relax.jpg" alt="الاسترخاء في ملموم" loading="lazy">
                        <div class="space-label">للاسترخاء</div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Gallery Section -->
        <section class="gallery-section">
            <div class="container">
                <div class="section-header">
                    <span class="section-label">المعرض</span>
                    <h2 class="section-title">جماليات المكان.</h2>
                </div>
                <div class="gallery-scroll">
                    <div class="gallery-track">
                        <?php for ($i = 1; $i <= 8; $i++): ?>
                        <div class="gallery-slide">
                            <img src="assets/images/gallery/gallery-<?= $i ?>.jpg" alt="معرض ملموم <?= $i ?>" loading="lazy">
                        </div>
                        <?php endfor; ?>
                    </div>
                </div>
            </div>
        </section>

        <!-- Instagram Section -->
        <section class="social-section">
            <div class="container">
                <div class="section-header">
                    <span class="section-label">من ملموم</span>
                    <h2 class="section-title">لحظاتنا اليومية.</h2>
                </div>
                <div class="social-grid">
                    <?php for ($i = 1; $i <= 6; $i++): ?>
                    <div class="social-item">
                        <img src="assets/images/social/social-<?= $i ?>.jpg" alt="من ملموم" loading="lazy">
                    </div>
                    <?php endfor; ?>
                </div>
                <div class="social-cta">
                    <a href="https://instagram.com/malmoum_cafe" target="_blank" rel="noopener noreferrer" class="btn btn-instagram">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"/>
                        </svg>
                        تابعنا على Instagram
                    </a>
                </div>
            </div>
        </section>

        <!-- Location Section -->
        <section class="location-section">
            <div class="container">
                <div class="location-layout">
                    <div class="location-info">
                        <span class="section-label">نلتقي هنا</span>
                        <h2>نلتقي هنا.</h2>
                        <div class="location-details">
                            <p><strong>ملموم كافيه</strong></p>
                            <p>طريق العروبة, الرياض، المملكة العربية السعودية</p>
                            <p>
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" style="display:inline;vertical-align:middle;margin-left:6px;">
                                    <circle cx="12" cy="12" r="10"/>
                                    <polyline points="12 6 12 12 16 14"/>
                                </svg>
                                من السبت حتى الخميس
                            </p>
                            <p>
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" style="display:inline;vertical-align:middle;margin-left:6px;">
                                    <circle cx="12" cy="12" r="10"/>
                                    <polyline points="12 6 12 12 16 14"/>
                                </svg>
                                ٣:٠٠ عصرًا - ١١:٣٠ مساًء
                            </p>
                            <p>
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" style="display:inline;vertical-align:middle;margin-left:6px;">
                                    <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/>
                                </svg>
                                 4563 146 50 966+
                            </p>
                        </div>
                        <a href="https://maps.google.com" target="_blank" rel="noopener noreferrer" class="btn btn-primary">فتح الموقع في الخرائط</a>
                    </div>
                    <div class="location-map">
                        <div class="map-placeholder">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3860.443871804321!2d46.645655476444695!3d24.700206952421492!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e2f1d79f9cb1823%3A0xb38b6c9806b478a9!2z2YXZhNmF2YjZhSDZg9in2YHZitmHIHwgTWFsbW91bSBjYWZl!5e1!3m2!1sen!2ssa!4v1788332711324!5m2!1sen!2ssa" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="strict-origin-when-cross-origin"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Final CTA -->
        <section class="final-cta">
            <div class="container">
                <div class="cta-content">
                    <h2>نشوفك في ملموم؟</h2>
                    <p>قهوتك تنتظرك.</p>
                    <a href="menu.php" class="btn btn-primary btn-large" style="background-color:#4A3728; ">ابدأ زيارتك</a>
                </div>
            </div>
        </section>
    </main>

    <?php include 'includes/footer.php'; ?>

    <!-- Art Lightbox -->
    <div class="art-lightbox" id="artLightbox">
        <button class="lightbox-close">&times;</button>
        <div class="lightbox-content">
            <img src="" alt="" id="lightboxImage">
            <div class="lightbox-info">
                <h3 id="lightboxTitle"></h3>
                <p id="lightboxArtist"></p>
                <p id="lightboxDetails"></p>
            </div>
        </div>
    </div>

    <!-- Script المعالج مع defer -->
    <script src="assets/js/main.js" defer></script>
</body>
</html>