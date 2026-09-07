<?php
// contact.php - صفحة الموقع والتواصل
?>
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>الموقع والتواصل | ملموم MALMOUM CAFE</title>
    <meta name="description" content="موقع ملموم في الرياض، أوقات العمل، وطرق التواصل.">
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
        <section class="contact-hero">
            <div class="container">
                <h1>نلتقي هنا</h1>
                <p style="margin-top:15px;">تعال زرنا في قلب الرياض.</p>
            </div>
        </section>

        <section class="contact-section">
            <div class="container">
                <div class="contact-layout">
                    <div class="contact-info">
                        <div class="contact-card">
                            <h3>
                                <i class="contact-icon">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/>
                                        <circle cx="12" cy="10" r="3"/>
                                    </svg>
                                </i>
                                العنوان
                            </h3>
                            <p>طريق العروبة, الرياض, المملكة العربية السعودية</p>
                        </div>
                        <div class="contact-card">
                            <h3>
                                <i class="contact-icon">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <circle cx="12" cy="12" r="10"/>
                                        <polyline points="12 6 12 12 16 14"/>
                                    </svg>
                                </i>
                                أوقات العمل
                            </h3>
                            <p> ٣:٠٠ عصرًا - ١١:٣٠ مساًء</p>
                            <p>من السبت حتى الخميس</p>
                        </div>
                        <div class="contact-card">
                            <h3>
                                <i class="contact-icon">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/>
                                    </svg>
                                </i>
                                التواصل
                            </h3>
                            <p>4563 146 50 966+</p>
                            <p>info@malmoum.sa</p>
                        </div>
                        <a href="#" class="btn btn-primary">فتح الموقع في الخرائط</a>
                    </div>
                    <div class="contact-map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3860.443871804321!2d46.645655476444695!3d24.700206952421492!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e2f1d79f9cb1823%3A0xb38b6c9806b478a9!2z2YXZhNmF2YjZhSDZg9in2YHZitmHIHwgTWFsbW91bSBjYWZl!5e1!3m2!1sen!2ssa!4v1788332711324!5m2!1sen!2ssa" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="strict-origin-when-cross-origin"></iframe>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php include 'includes/footer.php'; ?>
    <script src="assets/js/main.js"></script>
    <style>
        /* ===== أيقونات صفحة التواصل ===== */
        .contact-card h3 {
            display: flex;
            align-items: center;
            gap: 0.6rem;
            font-size: 1.1rem;
            font-weight: 600;
            margin-bottom: 0.5rem;
            color: var(--charcoal);
        }

        .contact-icon {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            color: var(--terracotta);
            flex-shrink: 0;
        }

        .contact-icon svg {
            width: 22px;
            height: 22px;
            stroke: currentColor;
        }

        /* ===== تنسيق البطاقات ===== */
        .contact-card {
            padding: 1.5rem;
            border: 1px solid rgba(44, 42, 40, 0.06);
            background: white;
            transition: all 0.3s ease;
        }

        .contact-card:hover {
            border-color: rgba(44, 42, 40, 0.12);
            transform: translateY(-2px);
            box-shadow: 0 8px 24px rgba(44, 42, 40, 0.04);
        }

        .contact-card p {
            margin-right: 2.5rem;
            color: rgba(44, 42, 40, 0.7);
            font-size: 0.95rem;
        }

        .contact-card p:last-of-type {
            margin-bottom: 0;
        }

        /* ===== استجابة للجوال ===== */
        @media (max-width: 768px) {
            .contact-card h3 {
                font-size: 1rem;
            }
            
            .contact-icon svg {
                width: 20px;
                height: 20px;
            }
            
            .contact-card p {
                font-size: 0.9rem;
                margin-right: 2rem;
            }
        }
    </style>
</body>
</html>