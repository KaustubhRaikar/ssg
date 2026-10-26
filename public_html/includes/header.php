<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soham Seva Group | Serving Humanity</title>
    <!-- Google Fonts for Elegant Theme -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,600;0,700;1,400&family=Figtree:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Swiper CSS for advanced sliders -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />

    <!-- AOS CSS for scroll animations -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Main CSS -->
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- Google Translate Script Initialization -->
    <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({
                pageLanguage: 'en',
                includedLanguages: 'en,gu',
                layout: google.translate.TranslateElement.InlineLayout.SIMPLE,
                autoDisplay: false
            }, 'google_translate_element');
        }

        function changeLanguage(langCode) {
            var selectField = document.querySelector("#google_translate_element select");
            if (!selectField) return;

            selectField.value = langCode;
            selectField.dispatchEvent(new Event('change'));

            // Update active state on buttons
            document.querySelectorAll('.lang-btn').forEach(btn => btn.classList.remove('active'));
            event.target.classList.add('active');
        }
    </script>
    <script type="text/javascript"
        src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
</head>

<body>
    <!-- Hidden Google Translate Element (used by custom buttons to trigger events) -->
    <div id="google_translate_element" style="display: none;"></div>

    <!-- Preloader -->
    <div id="preloader">
        <div class="loader-circle"></div>
        <div class="loader-text">Soham<span class="highlight">Seva</span></div>
    </div>

    <!-- Top Bar -->
    <div class="top-bar">
        <div class="container">
            <div class="top-bar-content">
                <div class="contact-info">
                    <span><i class="fas fa-envelope"></i> info@sohamseva.org</span>
                    <span><i class="fas fa-phone"></i> +91 123 456 7890</span>
                </div>
                <!-- Custom Language Switcher -->
                <div class="lang-switcher">
                    <button class="lang-btn active" onclick="changeLanguage('en')">English</button>
                    <span class="lang-divider">|</span>
                    <button class="lang-btn" onclick="changeLanguage('gu')">ગુજરાતી</button>
                </div>
                <div class="social-links">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Navigation (Glassmorphism) -->
    <header class="header">
        <div class="container header-container">
            <a href="index.php" class="logo">
                <span class="logo-text">Soham<span class="highlight">Seva</span></span>
            </a>

            <button class="mobile-toggle" aria-label="Toggle Menu">
                <div class="hamburger">
                    <span></span><span></span><span></span>
                </div>
            </button>

            <nav class="main-nav">
                <ul>
                    <li><a href="index.php" class="active">Home</a></li>
                    <li><a href="aboutus.php">About Us</a></li>
                    <li><a href="activities.php">Activities</a></li>
                    <li><a href="photogallery.php">Gallery</a></li>
                    <li><a href="contact.php">Contact Us</a></li>
                </ul>
                <div class="nav-actions">
                    <a href="volunteer.php" class="btn btn-outline glow-effect">Volunteer</a>
                    <a href="donate.php" class="btn btn-primary btn-glow">Donate Now</a>
                </div>
            </nav>
        </div>
    </header>

    <!-- Main Content Wrapper -->
    <main>