<?php
// includes/navbar.php - شريط التنقل
?>

<nav class="navbar" id="navbar">
    <div class="container">
        <div class="navbar-brand">
            <a href="index.php">
                <span class="brand-ar">ملموم</span>
                <span class="brand-en">MALMOUM CAFE</span>
            </a>
        </div>
        <div class="navbar-links" id="navLinks">
            <ul>
                <li><a href="index.php" <?= $_SERVER['REQUEST_URI'] == '/' ? 'class="active"' : '' ?>>الرئيسية</a></li>
                <li><a href="menu.php" <?= strpos($_SERVER['REQUEST_URI'], '/menu') !== false ? 'class="active"' : '' ?>>المنيو</a></li>
                <li><a href="about.php" <?= strpos($_SERVER['REQUEST_URI'], '/about') !== false ? 'class="active"' : '' ?>>عن ملموم</a></li>
                <li><a href="gallery.php" <?= strpos($_SERVER['REQUEST_URI'], '/gallery') !== false ? 'class="active"' : '' ?>>المعرض</a></li>
                <li><a href="contact.php" <?= strpos($_SERVER['REQUEST_URI'], '/contact') !== false ? 'class="active"' : '' ?>>الموقع</a></li>
            </ul>
            <div class="navbar-actions">
                <a href="menu.php" class="btn btn-primary btn-sm" style="color:white;">المنيو</a>
            </div>
        </div>
        <button class="navbar-toggle" id="navToggle" aria-label="القائمة">
            <span></span>
            <span></span>
            <span></span>
        </button>
    </div>
</nav>

