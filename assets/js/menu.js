// assets/js/menu.js - جافاسكريبت صفحة المنيو
document.addEventListener('DOMContentLoaded', function() {
    const categoryBtns = document.querySelectorAll('.category-btn');
    const menuCards = document.querySelectorAll('.menu-card');
    const searchInput = document.getElementById('menuSearch');
    const resultsCount = document.getElementById('resultsCount');
    const countNumber = document.getElementById('countNumber');

    // ===== دالة تحديث عدد النتائج =====
    function updateResultsCount() {
        let visibleCount = 0;
        menuCards.forEach(card => {
            if (card.style.display !== 'none') {
                visibleCount++;
            }
        });
        
        if (countNumber) {
            countNumber.textContent = visibleCount;
        }
        
        // إظهار/إخفاء رسالة "لا توجد نتائج"
        const emptyMessage = document.getElementById('menuEmpty');
        if (emptyMessage) {
            if (visibleCount === 0) {
                emptyMessage.style.display = 'block';
            } else {
                emptyMessage.style.display = 'none';
            }
        }
    }

    // ===== CATEGORY FILTER =====
    categoryBtns.forEach(btn => {
        btn.addEventListener('click', function() {
            categoryBtns.forEach(b => b.classList.remove('active'));
            this.classList.add('active');

            const category = this.dataset.category;
            let visibleCount = 0;

            menuCards.forEach(card => {
                if (category === 'all' || card.dataset.category === category) {
                    card.style.display = 'block';
                    visibleCount++;
                    // Stagger animation
                    card.style.transitionDelay = (visibleCount * 0.05) + 's';
                    card.style.opacity = '0';
                    card.style.transform = 'translateY(20px)';

                    setTimeout(() => {
                        card.style.opacity = '1';
                        card.style.transform = 'translateY(0)';
                    }, 50);
                } else {
                    card.style.display = 'none';
                }
            });

            // تحديث عدد النتائج بعد التصفية
            updateResultsCount();
        });
    });

    // ===== SEARCH =====
    if (searchInput) {
        searchInput.addEventListener('input', function() {
            const query = this.value.toLowerCase().trim();

            menuCards.forEach(card => {
                const name = (card.dataset.name || '').toLowerCase();
                const text = card.textContent.toLowerCase();
                const matches = query === '' || name.includes(query) || text.includes(query);

                card.style.display = matches ? 'block' : 'none';
            });

            // تحديث عدد النتائج بعد البحث
            updateResultsCount();

            // إظهار/إخفاء زر مسح البحث
            const clearBtn = document.getElementById('searchClear');
            if (clearBtn) {
                if (query.length > 0) {
                    clearBtn.classList.add('visible');
                } else {
                    clearBtn.classList.remove('visible');
                }
            }
        });
    }

    // ===== زر مسح البحث =====
    const clearBtn = document.getElementById('searchClear');
    if (clearBtn && searchInput) {
        clearBtn.addEventListener('click', function() {
            searchInput.value = '';
            searchInput.dispatchEvent(new Event('input'));
            this.classList.remove('visible');
            searchInput.focus();
        });
    }

    // ===== INITIAL ANIMATION =====
    menuCards.forEach((card, i) => {
        card.style.transitionDelay = (i * 0.06) + 's';
        card.style.opacity = '0';
        card.style.transform = 'translateY(30px)';

        setTimeout(() => {
            card.style.opacity = '1';
            card.style.transform = 'translateY(0)';
        }, 200 + (i * 60));
    });

    // ===== تحديث عدد النتائج بعد تحميل الصفحة =====
    setTimeout(() => {
        updateResultsCount();
    }, 500);
});