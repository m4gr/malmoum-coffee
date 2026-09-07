<?php
// about.php - صفحة عن ملموم
?>
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>عن ملموم | MALMOUM CAFE</title>
    <meta name="description" content="تعرف على قصة ملموم، المكان الذي يجمع القهوة والفن والثقافة في قلب الرياض.">
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
        <section class="about-hero">
            <div class="container">
                <h1>عن ملموم</h1>
                <p>قهوة، فن، ومساحة تجمعنا.</p>
            </div>
        </section>

        <section class="about-story">
            <div class="container">
                <div class="about-layout">
                    <div class="about-content">
                        <span class="section-label">قصتنا</span>
                        <h2>مكان يجمع الأشياء الجميلة.</h2>
                        <p>ملموم ليس مجرد مقهى. هو مساحة تجمع القهوة، الفن، الثقافة، القراءة، العمل، اللقاءات، والإبداع في مكان واحد.</p>
                        <p>نؤمن أن القهوة ليست مجرد مشروب، بل هي بداية حديث، لحظة تأمل، مساحة للعمل، أو لقاء لا يُنسى.</p>
                        <div class="about-values">
                            <div class="value-item">
                                <i class="value-icon">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M17 8h1a4 4 0 1 1 0 8h-1"/>
                                        <path d="M3 8h14v9a4 4 0 0 1-4 4H7a4 4 0 0 1-4-4V8z"/>
                                        <line x1="6" y1="2" x2="6" y2="4"/>
                                        <line x1="10" y1="2" x2="10" y2="4"/>
                                        <line x1="14" y1="2" x2="14" y2="4"/>
                                    </svg>
                                </i>
                                <div>
                                    <h4>القهوة</h4>
                                    <p>حبوب مختارة بعناية من أفضل مزارع العالم</p>
                                </div>
                            </div>
                            <div class="value-item">
                                <i class="value-icon">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M12 2L2 7l10 5 10-5-10-5z"/>
                                        <path d="M2 17l10 5 10-5"/>
                                        <path d="M2 12l10 5 10-5"/>
                                    </svg>
                                </i>
                                <div>
                                    <h4>الفن</h4>
                                    <p>معارض فنية متجددة لدعم المواهب المحلية</p>
                                </div>
                            </div>
                            <div class="value-item">
                                <i class="value-icon">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M4 6h16"/>
                                        <path d="M4 12h16"/>
                                        <path d="M4 18h10"/>
                                        <line x1="18" y1="14" x2="22" y2="18"/>
                                        <line x1="22" y1="14" x2="18" y2="18"/>
                                    </svg>
                                </i>
                                <div>
                                    <h4>الثقافة</h4>
                                    <p>مكتبة غنية وفعاليات ثقافية متنوعة</p>
                                </div>
                            </div>
                            <div class="value-item">
                                <i class="value-icon">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M20 7h-4.5L15 4h-6L8.5 7H4v11h16V7z"/>
                                        <circle cx="12" cy="13" r="3"/>
                                        <path d="M9 7v4a3 3 0 0 0 6 0V7"/>
                                    </svg>
                                </i>
                                <div>
                                    <h4>العمل</h4>
                                    <p>مساحات عمل مريحة مع إنترنت عالي السرعة</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="about-image">
                        <img src="assets/images/space-work.jpg" alt="قصة ملموم">
                    </div>
                </div>
            </div>
        </section>

        <section class="about-team">
            <div class="container">
                <div class="section-header">
                    <span class="section-label">فريق ملموم</span>
                    <h2>روح المكان.</h2>
                </div>
                <div class="team-grid">
                    <div class="team-card">
                        <img src="assets/images/art/Unknown_person.jpg" alt="عبدالرحمن النقيدان">
                        <h4>ادارة ملموم</h4>
                        <p>المؤسس</p>
                    </div>
                    <div class="team-card">
                        <img src="assets/images/art/Unknown_person_female.avif" alt="نورة العنزي">
                        <h4>ادارة ملموم</h4>
                        <p>المديرة التنفيذية</p>
                    </div>
                    <div class="team-card">
                        <img src="assets/images/art/Unknown_person.jpg" alt="سعد المطيري">
                        <h4>ادارة ملموم</h4>
                        <p>رئيس الباريستا</p>
                    </div>
                    <div class="team-card">
                        <img src="assets/images/art/Unknown_person_female.avif" alt="هند القحطاني">
                        <h4>ادارة ملموم</h4>
                        <p>أمينة المكتبة</p>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php include 'includes/footer.php'; ?>
    <script src="assets/js/main.js"></script>
</body>
</html>