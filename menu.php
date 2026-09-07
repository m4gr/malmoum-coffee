<?php
// menu.php - صفحة المنيو التفاعلية
?>
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>المنيو | ملموم MALMOUM CAFE</title>
    <meta name="description" content="استكشف قائمة ملموم من القهوة والمشروبات الباردة والمعجنات والحلويات.">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans+Arabic:wght@300;400;600;700&family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/rtl.css">
    <link rel="shortcut icon" href="assets/images/logo.jpg" type="image/x-icon">
</head>
<body>
    <?php include 'includes/navbar.php'; ?>

    <main class="menu-page">
        <!-- Hero Section للمنيو -->
        <section class="menu-hero">
            <div class="container">
                <div class="menu-hero-content">
                    <span class="menu-hero-label">استكشف</span>
                    <h1>المنيو</h1>
                    <p>كل كوب يحمل قصة، وكل طبق يُصنع بشغف.</p>
                </div>
            </div>
        </section>

        <!-- قسم المنيو الرئيسي -->
        <section class="menu-section">
            <div class="container">
                <!-- فلتر التصنيفات -->
                <div class="menu-filters">
                    <div class="menu-categories" id="menuCategories">
                        <button class="category-btn active" data-category="all">الكل</button>
                        <button class="category-btn" data-category="coffee">
                            قهوة
                        </button>
                        <button class="category-btn" data-category="cold">
                            مشروبات باردة
                        </button>
                        <button class="category-btn" data-category="matcha">
                            ماتشا
                        </button>
                        <button class="category-btn" data-category="tea">
                            شاي
                        </button>
                        <button class="category-btn" data-category="pastries">
                            معجنات
                        </button>
                        <button class="category-btn" data-category="desserts">
                            حلويات
                        </button>
                    </div>

                    <!-- شريط البحث -->
                    <div class="menu-search-wrapper">
                        <div class="menu-search">
                            <svg class="search-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <circle cx="11" cy="11" r="8"/>
                                <path d="M21 21L16.65 16.65"/>
                            </svg>
                            <input type="text" id="menuSearch" placeholder="ابحث في المنيو..." aria-label="البحث في المنيو">
                            <button class="search-clear" id="searchClear" aria-label="مسح البحث">✕</button>
                        </div>
                    </div>
                </div>

                <!-- عرض عدد النتائج -->
                <div class="menu-results-count" id="resultsCount">
                    <span id="countNumber">0</span> منتج
                </div>

                <!-- شبكة المنتجات -->
                <div class="menu-items" id="menuItems">
                    <?php
                    // بيانات المنيو الكاملة
                    $menuItems = [
                        // القهوة
                        [
                            'name' => 'Espresso',
                            'name_ar' => 'اسبريسو',
                            'description' => 'قهوة إيطالية مركزة مع طبقة كريمة ذهبية، تُقدم في كوب صغير.',
                            'price' => '١٨',
                            'category' => 'coffee',
                            'image' => 'espresso.jpg',
                            'badge' => 'الأكثر طلباً'
                        ],
                        [
                            'name' => 'Flat White',
                            'name_ar' => 'فلات وايت',
                            'description' => 'قهوة مزدوجة مع حليب مبخر ناعم، قوام كريمي ونكهة متوازنة.',
                            'price' => '٢٢',
                            'category' => 'coffee',
                            'image' => 'flatwhite.webp',
                            'badge' => ''
                        ],
                        [
                            'name' => 'Latte',
                            'name_ar' => 'لاتيه',
                            'description' => 'إسبريسو مع حليب ساخن ورغوة خفيفة، مثالي لعشاق القهوة الناعمة.',
                            'price' => '٢٠',
                            'category' => 'coffee',
                            'image' => 'latte.jpg',
                            'badge' => ''
                        ],
                        [
                            'name' => 'Spanish Latte',
                            'name_ar' => 'سبانش لاتيه',
                            'description' => 'لاتيه محلى بالحليب المكثف، مزيج فريد من النكهات الإسبانية.',
                            'price' => '٢٤',
                            'category' => 'coffee',
                            'image' => 'spanish-latte.jpg',
                            'badge' => 'توقيع ملموم'
                        ],
                        [
                            'name' => 'Americano',
                            'name_ar' => 'أمريكانو',
                            'description' => 'إسبريسو مخفف بالماء الساخن، نكهة غنية وقوام خفيف.',
                            'price' => '١٦',
                            'category' => 'coffee',
                            'image' => 'americano.jpg',
                            'badge' => ''
                        ],
                        [
                            'name' => 'Cappuccino',
                            'name_ar' => 'كابتشينو',
                            'description' => 'إسبريسو مع حليب ورغوة كثيفة، يُقدم مع رشة كاكاو.',
                            'price' => '٢٢',
                            'category' => 'coffee',
                            'image' => 'cappuccino.jpg',
                            'badge' => ''
                        ],
                        [
                            'name' => 'Mocha',
                            'name_ar' => 'موكا',
                            'description' => 'إسبريسو مع شوكولاتة وحليب، مزيج ساحر من القهوة والشوكولاتة.',
                            'price' => '٢٤',
                            'category' => 'coffee',
                            'image' => 'mocha.jpg',
                            'badge' => ''
                        ],
                        [
                            'name' => 'Caramel Macchiato',
                            'name_ar' => 'كاراميل مكياتو',
                            'description' => 'إسبريسو مع حليب مبخر وصلصة الكراميل، نكهة حلوة ومميزة.',
                            'price' => '٢٦',
                            'category' => 'coffee',
                            'image' => 'caramel-macchiato.jpg',
                            'badge' => ''
                        ],

                        // مشروبات باردة
                        [
                            'name' => 'Cold Brew',
                            'name_ar' => 'كولد برو',
                            'description' => 'قهوة باردة منقوعة ١٢ ساعة، نكهة ناعمة وخالية من الحموضة.',
                            'price' => '٢٠',
                            'category' => 'cold',
                            'image' => 'cold-brew.jpg',
                            'badge' => ''
                        ],
                        [
                            'name' => 'Nitro Cold Brew',
                            'name_ar' => 'نيترو كولد برو',
                            'description' => 'كولد برو مكربن بالنيتروجين، قوام كريمي ورغوة كثيفة.',
                            'price' => '٢٦',
                            'category' => 'cold',
                            'image' => 'nitro-cold.jpg',
                            'badge' => 'مميز'
                        ],
                        [
                            'name' => 'Iced Americano',
                            'name_ar' => 'أمريكانو مثلج',
                            'description' => 'إسبريسو مخفف بالماء البارد والثلج، منعش ومناسب لأجواء الصيف.',
                            'price' => '١٨',
                            'category' => 'cold',
                            'image' => 'iced-americano.jpg',
                            'badge' => ''
                        ],
                        [
                            'name' => 'Iced Latte',
                            'name_ar' => 'لاتيه مثلج',
                            'description' => 'إسبريسو مع حليب بارد وثلج، ناعم ومنعش.',
                            'price' => '٢٢',
                            'category' => 'cold',
                            'image' => 'iced-latte.jpg',
                            'badge' => ''
                        ],
                        [
                            'name' => 'Lemonade',
                            'name_ar' => 'ليموناضة',
                            'description' => 'عصير ليمون طازج منعش مع نعناع وشرائح ليمون.',
                            'price' => '١٥',
                            'category' => 'cold',
                            'image' => 'lemonade.jpg',
                            'badge' => ''
                        ],
                        [
                            'name' => 'Strawberry Refresher',
                            'name_ar' => 'فراولة ريفريشر',
                            'description' => 'مشروب منعش بالفراولة والليمون، مثالي لأيام الصيف الحارة.',
                            'price' => '٢٠',
                            'category' => 'cold',
                            'image' => 'strawberry-refresher.jpg',
                            'badge' => ''
                        ],

                        // ماتشا
                        [
                            'name' => 'Matcha Latte',
                            'name_ar' => 'لاتيه ماتشا',
                            'description' => 'ماتشا ياباني عضوي مع حليب ساخن، نكهة أرضية غنية.',
                            'price' => '٢٦',
                            'category' => 'matcha',
                            'image' => 'matcha-latte.jpg',
                            'badge' => ''
                        ],
                        [
                            'name' => 'Iced Matcha',
                            'name_ar' => 'ماتشا مثلج',
                            'description' => 'ماتشا مع حليب وثلج، منعش ومليء بمضادات الأكسدة.',
                            'price' => '٢٨',
                            'category' => 'matcha',
                            'image' => 'iced-matcha.jpg',
                            'badge' => ''
                        ],
                        [
                            'name' => 'Matcha Espresso Fusion',
                            'name_ar' => 'فيوجن ماتشا وإسبريسو',
                            'description' => 'مزيج جريء من الماتشا والإسبريسو مع حليب، تجربة فريدة.',
                            'price' => '٣٠',
                            'category' => 'matcha',
                            'image' => 'matcha-espresso.jpg',
                            'badge' => 'جديد'
                        ],

                        // شاي
                        [
                            'name' => 'Green Tea',
                            'name_ar' => 'شاي أخضر',
                            'description' => 'شاي أخضر عضوي من اليابان، نكهة ناعمة ومهدئة.',
                            'price' => '١٥',
                            'category' => 'tea',
                            'image' => 'green-tea.jpg',
                            'badge' => ''
                        ],
                        [
                            'name' => 'Karak Tea',
                            'name_ar' => 'شاي كرك',
                            'description' => 'شاي حليب بالهيل والزعفران، وصفة سعودية أصيلة.',
                            'price' => '١٤',
                            'category' => 'tea',
                            'image' => 'karak.jpg',
                            'badge' => 'سعودي'
                        ],
                        [
                            'name' => 'Herbal Tea',
                            'name_ar' => 'شاي أعشاب',
                            'description' => 'خليط أعشاب طبيعي مهدئ، مثالي للاسترخاء في المساء.',
                            'price' => '١٦',
                            'category' => 'tea',
                            'image' => 'herbal-tea.jpg',
                            'badge' => ''
                        ],
                        [
                            'name' => 'English Breakfast',
                            'name_ar' => 'شاي إفطار إنجليزي',
                            'description' => 'مزيج كلاسيكي من الشاي الأسود، قوي ونكهة غنية.',
                            'price' => '١٤',
                            'category' => 'tea',
                            'image' => 'english-breakfast.jpg',
                            'badge' => ''
                        ],
                        [
                            'name' => 'Jasmine Tea',
                            'name_ar' => 'شاي ياسمين',
                            'description' => 'شاي أخضر مع زهور الياسمين، نكهة عطرية رقيقة.',
                            'price' => '١٦',
                            'category' => 'tea',
                            'image' => 'jasmine-tea.jpg',
                            'badge' => ''
                        ],

                        // معجنات
                        [
                            'name' => 'Croissant',
                            'name_ar' => 'كرواسون',
                            'description' => 'كرواسون فرنسي طازج، قشري من الخارج وطري من الداخل.',
                            'price' => '١٢',
                            'category' => 'pastries',
                            'image' => 'croissant.jpg',
                            'badge' => ''
                        ],
                        [
                            'name' => 'Pain au Chocolat',
                            'name_ar' => 'بان أو شوكولاتة',
                            'description' => 'كرواسون محشي شوكولاتة غنية، إفطار مثالي مع القهوة.',
                            'price' => '١٤',
                            'category' => 'pastries',
                            'image' => 'pain-chocolat.jpg',
                            'badge' => ''
                        ],
                        [
                            'name' => 'Cinnamon Roll',
                            'name_ar' => 'لفة قرفة',
                            'description' => 'لفة قرفة مع جبنة كريمية، مغطاة بصلصة الفانيليا.',
                            'price' => '١٦',
                            'category' => 'pastries',
                            'image' => 'cinnamon-roll.jpg',
                            'badge' => ''
                        ],
                        [
                            'name' => 'Almond Croissant',
                            'name_ar' => 'كرواسون لوز',
                            'description' => 'كرواسون محشي كريمة اللوز ومغطى بشرائح اللوز.',
                            'price' => '١٨',
                            'category' => 'pastries',
                            'image' => 'almond-croissant.jpg',
                            'badge' => ''
                        ],
                        [
                            'name' => 'Scone',
                            'name_ar' => 'سكون',
                            'description' => 'كعكة إنجليزية تقليدية، تُقدم مع مربى وقشطة.',
                            'price' => '١٤',
                            'category' => 'pastries',
                            'image' => 'scone.jpg',
                            'badge' => ''
                        ],

                        // حلويات
                        [
                            'name' => 'Cheesecake',
                            'name_ar' => 'تشيز كيك',
                            'description' => 'تشيز كيك نيويورك كلاسيكي مع صلصة التوت البري.',
                            'price' => '٢٢',
                            'category' => 'desserts',
                            'image' => 'cheesecake.jpg',
                            'badge' => ''
                        ],
                        [
                            'name' => 'Brownie',
                            'name_ar' => 'براوني',
                            'description' => 'براوني شوكولاتة غني مع قطع جوز، يُقدم مع آيس كريم.',
                            'price' => '١٨',
                            'category' => 'desserts',
                            'image' => 'brownie.jpg',
                            'badge' => ''
                        ],
                        [
                            'name' => 'Tiramisu',
                            'name_ar' => 'تيراميسو',
                            'description' => 'حلوى إيطالية كلاسيكية بطبقات من القهوة والمسكربون.',
                            'price' => '٢٤',
                            'category' => 'desserts',
                            'image' => 'tiramisu.jpg',
                            'badge' => 'الأكثر طلباً'
                        ],
                        [
                            'name' => 'Carrot Cake',
                            'name_ar' => 'كيكة الجزر',
                            'description' => 'كيكة جزر مع جبنة كريمية وجوز، حلوى صحية ولذيذة.',
                            'price' => '٢٠',
                            'category' => 'desserts',
                            'image' => 'carrot-cake.jpg',
                            'badge' => ''
                        ],
                        [
                            'name' => 'Baklava Cheesecake',
                            'name_ar' => 'تشيز كيك بقلاوة',
                            'description' => 'مزيج فريد من التشيز كيك مع طبقات البقلاوة والفستق.',
                            'price' => '٢٦',
                            'category' => 'desserts',
                            'image' => 'baklava-cheesecake.jpg',
                            'badge' => 'توقيع ملموم'
                        ]
                    ];
                    ?>

                    <?php foreach ($menuItems as $item): ?>
                    <div class="menu-card" 
                         data-category="<?= $item['category'] ?>"
                         data-name="<?= $item['name'] ?> <?= $item['name_ar'] ?>"
                         data-price="<?= $item['price'] ?>">
                        <div class="menu-card-image">
                            <img src="assets/images/menu/<?= $item['image'] ?>" 
                                 alt="<?= $item['name'] ?> - <?= $item['name_ar'] ?>" 
                                 loading="lazy">
                            <?php if ($item['badge']): ?>
                            <span class="menu-card-badge"><?= $item['badge'] ?></span>
                            <?php endif; ?>
                        </div>
                        <div class="menu-card-info">
                            <div class="menu-card-header">
                                <div>
                                    <h4><?= $item['name'] ?></h4>
                                    <span class="menu-card-ar"><?= $item['name_ar'] ?></span>
                                </div>
                                <span class="menu-card-price"><?= $item['price'] ?> ريال</span>
                            </div>
                            <p><?= $item['description'] ?></p>
                            <button class="menu-card-add" aria-label="إضافة إلى الطلب">
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M12 5v14M5 12h14"/>
                                </svg>
                                أضف
                            </button>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>

                <!-- رسالة عند عدم وجود نتائج -->
                <div class="menu-empty" id="menuEmpty" style="display: none;">
                    <svg width="64" height="64" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                        <circle cx="11" cy="11" r="8"/>
                        <path d="M21 21L16.65 16.65"/>
                    </svg>
                    <h3>لا توجد نتائج</h3>
                    <p>لم نجد منتجات تطابق بحثك. جرب كلمات أخرى.</p>
                </div>
            </div>
        </section>
    </main>

    <?php include 'includes/footer.php'; ?>
    
    <script src="assets/js/main.js"></script>
    <script src="assets/js/menu.js"></script>
</body>
</html>