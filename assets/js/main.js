// assets/js/main.js - الملف الرئيسي للجافاسكريبت
document.addEventListener('DOMContentLoaded', function() {
    // ===== NAVBAR =====
    const navbar = document.getElementById('navbar');
    const navToggle = document.getElementById('navToggle');
    const navLinks = document.getElementById('navLinks');

    // Scroll effect
    let lastScroll = 0;
    window.addEventListener('scroll', function() {
        const currentScroll = window.pageYOffset;
        if (currentScroll > 50) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
        lastScroll = currentScroll;
    });

    // Mobile menu toggle
    if (navToggle && navLinks) {
        navToggle.addEventListener('click', function() {
            this.classList.toggle('active');
            navLinks.classList.toggle('open');
        });

        // Close menu on link click
        navLinks.querySelectorAll('a').forEach(link => {
            link.addEventListener('click', function() {
                navToggle.classList.remove('active');
                navLinks.classList.remove('open');
            });
        });
    }

    // ===== ART LIGHTBOX =====
    const lightbox = document.getElementById('artLightbox');
    const lightboxImg = document.getElementById('lightboxImage');
    const lightboxTitle = document.getElementById('lightboxTitle');
    const lightboxArtist = document.getElementById('lightboxArtist');
    const lightboxDetails = document.getElementById('lightboxDetails');
    const lightboxClose = document.querySelector('.lightbox-close');

    document.querySelectorAll('.art-item, .art-card-full').forEach(item => {
        item.addEventListener('click', function() {
            const img = this.querySelector('img');
            const title = this.dataset.title || this.querySelector('.art-overlay h4')?.textContent || 'عمل فني';
            const artist = this.dataset.artist || this.querySelector('.art-overlay p')?.textContent || 'فنان';
            const year = this.dataset.year || '';
            const medium = this.dataset.medium || '';
            const size = this.dataset.size || '';

            if (lightboxImg) {
                lightboxImg.src = img ? img.src : '';
                lightboxImg.alt = title;
            }
            if (lightboxTitle) lightboxTitle.textContent = title;
            if (lightboxArtist) lightboxArtist.textContent = artist;
            if (lightboxDetails) {
                let details = [];
                if (year) details.push(year);
                if (medium) details.push(medium);
                if (size) details.push(size);
                lightboxDetails.textContent = details.join(' — ');
            }

            if (lightbox) {
                lightbox.classList.add('active');
                document.body.style.overflow = 'hidden';
            }
        });
    });

    if (lightboxClose && lightbox) {
        lightboxClose.addEventListener('click', function() {
            lightbox.classList.remove('active');
            document.body.style.overflow = '';
        });

        lightbox.addEventListener('click', function(e) {
            if (e.target === this) {
                this.classList.remove('active');
                document.body.style.overflow = '';
            }
        });

        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape' && lightbox.classList.contains('active')) {
                lightbox.classList.remove('active');
                document.body.style.overflow = '';
            }
        });
    }

    // ===== SCROLL REVEAL =====
    const revealElements = document.querySelectorAll(
        '.manifesto, .experience-card, .menu-item, .signature, .art-item, ' +
        '.space-item, .gallery-slide, .social-item, .location-layout, ' +
        '.final-cta, .about-layout, .team-card, .art-card-full, .gallery-masonry-item'
    );

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0)';
            }
        });
    }, {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    });

    revealElements.forEach(el => {
        el.style.opacity = '0';
        el.style.transform = 'translateY(40px)';
        el.style.transition = 'opacity 0.8s ease, transform 0.8s cubic-bezier(0.25, 0.46, 0.45, 0.94)';
        observer.observe(el);
    });

    // ===== EXPERIENCE CARDS =====
    document.querySelectorAll('.experience-card').forEach(card => {
        card.addEventListener('mouseenter', function() {
            const img = this.querySelector('.experience-image img');
            const content = this.querySelector('.experience-content');
            const number = this.querySelector('.experience-number');

            if (img) {
                img.style.opacity = '1';
            }
            if (content) {
                content.style.color = 'white';
                const p = content.querySelector('p');
                if (p) p.style.color = 'rgba(255,255,255,0.8)';
            }
            if (number) {
                number.style.color = 'white';
            }
        });

        card.addEventListener('mouseleave', function() {
            const img = this.querySelector('.experience-image img');
            const content = this.querySelector('.experience-content');
            const number = this.querySelector('.experience-number');

            if (img) {
                img.style.opacity = '0';
            }
            if (content) {
                content.style.color = '';
                const p = content.querySelector('p');
                if (p) p.style.color = '';
            }
            if (number) {
                number.style.color = '';
            }
        });
    });

    // ===== GALLERY SCROLL =====
    const galleryScroll = document.querySelector('.gallery-scroll');
    if (galleryScroll) {
        let isDown = false;
        let startX;
        let scrollLeft;

        galleryScroll.addEventListener('mousedown', (e) => {
            isDown = true;
            startX = e.pageX - galleryScroll.offsetLeft;
            scrollLeft = galleryScroll.scrollLeft;
        });

        galleryScroll.addEventListener('mouseleave', () => {
            isDown = false;
        });

        galleryScroll.addEventListener('mouseup', () => {
            isDown = false;
        });

        galleryScroll.addEventListener('mousemove', (e) => {
            if (!isDown) return;
            e.preventDefault();
            const x = e.pageX - galleryScroll.offsetLeft;
            const walk = (x - startX) * 1.5;
            galleryScroll.scrollLeft = scrollLeft - walk;
        });
    }

    // ===== SMOOTH SCROLL =====
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                e.preventDefault();
                const offset = 80;
                const targetPosition = target.getBoundingClientRect().top + window.pageYOffset - offset;
                window.scrollTo({
                    top: targetPosition,
                    behavior: 'smooth'
                });
            }
        });
    });
});