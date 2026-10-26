/**
 * Expert Level JS interactions
 * Includes GSAP, Swiper, AOS initialization and custom cursor/smooth scroll logic
 */

document.addEventListener('DOMContentLoaded', () => {

    // 1. Preloader Removal
    const preloader = document.getElementById('preloader');
    if (preloader) {
        setTimeout(() => {
            preloader.style.opacity = '0';
            setTimeout(() => {
                preloader.style.display = 'none';
                // Trigger initial animations if needed after preloader
                if (typeof AOS !== 'undefined') AOS.refresh();
            }, 500);
        }, 1000); // fake loading time for effect
    }

    // 2. Initialize AOS (Animate on Scroll)
    if (typeof AOS !== 'undefined') {
        AOS.init({
            duration: 800,
            easing: 'ease-out-cubic',
            once: true,
            offset: 50,
        });
    }

    // 3. Initialize Hero Swiper with Parallax
    if (document.querySelector('.hero-slider')) {
        const heroSwiper = new Swiper('.hero-slider', {
            speed: 1200,
            parallax: true,
            loop: true,
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },
            effect: 'fade', // Use fade effect for a cinematic feel
            fadeEffect: {
                crossFade: true
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });
    }

    // Initialize Activities Swiper
    if (document.querySelector('.activities-swiper')) {
        const activitiesSwiper = new Swiper('.activities-swiper', {
            slidesPerView: 1,
            spaceBetween: 30,
            breakpoints: {
                640: { slidesPerView: 2 },
                1024: { slidesPerView: 3 },
            },
            pagination: {
                el: '.activities-pagination',
                clickable: true,
            }
        });
    }

    // 4. Header Scroll & Mobile Menu
    const header = document.querySelector('.header');
    const mobileToggle = document.querySelector('.mobile-toggle');
    const mainNav = document.querySelector('.main-nav');
    const backToTop = document.getElementById('backToTop');

    window.addEventListener('scroll', () => {
        let scrollY = window.scrollY;

        // Header
        if (scrollY > 50) {
            header.classList.add('scrolled');
        } else {
            header.classList.remove('scrolled');
        }

        // Back to top
        if (backToTop) {
            if (scrollY > 500) {
                backToTop.classList.add('show');
            } else {
                backToTop.classList.remove('show');
            }
        }
    });

    if (mobileToggle) {
        mobileToggle.addEventListener('click', () => {
            mobileToggle.classList.toggle('active');
            mainNav.classList.toggle('open');
        });
    }

    // Close mobile menu when clicking outside
    document.addEventListener('click', (e) => {
        if (mainNav && mainNav.classList.contains('open') &&
            !mainNav.contains(e.target) &&
            !mobileToggle.contains(e.target)) {

            mainNav.classList.remove('open');
            mobileToggle.classList.remove('active');
        }
    });

    // Smooth Scroll for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            let target = this.getAttribute('href');
            if (target !== '#') {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            }
        });
    });

    // 5. GSAP Parallax and ScrollTrigger Effects (if GSAP is loaded)
    if (typeof gsap !== 'undefined' && typeof ScrollTrigger !== 'undefined') {
        gsap.registerPlugin(ScrollTrigger);

        // Simple parallax for shapes/images
        const parallaxElements = document.querySelectorAll('.parallax-el');
        parallaxElements.forEach(el => {
            const speed = el.dataset.speed || 0.5;
            gsap.to(el, {
                y: () => (ScrollTrigger.maxScroll(window) - ScrollTrigger.scroll()) * speed,
                ease: "none",
                scrollTrigger: {
                    trigger: el,
                    start: "top bottom",
                    end: "bottom top",
                    scrub: true
                }
            });
        });

        // Advanced Parallax for Activities Images
        const parallaxImages = document.querySelectorAll('.img-parallax');
        parallaxImages.forEach(img => {
            gsap.to(img, {
                yPercent: 20, // Move image down slightly as we scroll
                ease: "none",
                scrollTrigger: {
                    trigger: img.parentElement,
                    start: "top bottom", // Start when top of container hits bottom of viewport
                    end: "bottom top",   // End when bottom of container hits top of viewport
                    scrub: true          // Smooth scrubbing tied to scrollbar
                }
            });
        });

        // Slow floating for decorative Orbs
        gsap.utils.toArray('.parallax-orb').forEach(orb => {
            gsap.to(orb, {
                y: -100, // Float up slowly
                rotation: 45,
                ease: "none",
                scrollTrigger: {
                    trigger: orb.parentElement,
                    start: "top bottom",
                    end: "bottom top",
                    scrub: 1 // Add a 1 second delay for a smooth 'floaty' feel
                }
            });
        });

        // 6. Number Counting Effect (Stats)
        const statItems = document.querySelectorAll('.stat-num');
        statItems.forEach(stat => {
            const finalString = stat.innerText.trim();
            const numberMatch = finalString.match(/[\d.]+/);
            if (numberMatch) {
                const finalNum = parseFloat(numberMatch[0]);
                const isFloat = finalString.includes('.');
                const suffix = finalString.replace(/[\d.]+/, '');

                let obj = { val: 0 };
                // Initialize to 0
                stat.innerText = '0' + suffix;

                gsap.to(obj, {
                    val: finalNum,
                    duration: 2.5,
                    ease: "power2.out",
                    scrollTrigger: {
                        trigger: stat,
                        start: "top 85%", // when top of element hits 85% of viewport
                        once: true
                    },
                    onUpdate: function () {
                        const currentNum = isFloat ? obj.val.toFixed(1) : Math.ceil(obj.val);
                        stat.innerText = currentNum + suffix;
                    }
                });
            }
        });
    }
});
