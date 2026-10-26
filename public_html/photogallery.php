<?php include 'includes/header.php'; ?>

<!-- Expert Inner Page Header -->
<div class="page-header"
    style="background: var(--gradient-dark); padding: 8rem 0 4rem; position: relative; overflow: hidden;">
    <!-- Abstract gradient blob -->
    <div
        style="position: absolute; top: -50%; left: -10%; width: 50vw; height: 50vw; background: radial-gradient(circle, rgba(255,94,58,0.2) 0%, rgba(2,12,27,0) 70%); border-radius: 50%; z-index: 1; filter: blur(50px);">
    </div>

    <div class="container relative-z" data-aos="fade-up">
        <h1 style="color: white; font-size: clamp(2.5rem, 5vw, 4rem);">Photo <span class="gradient-text">Gallery</span>
        </h1>
        <div class="breadcrumb" style="color: var(--clr-text-muted);">
            <a href="index.php" style="color: var(--clr-text-light);">Home</a> <span style="margin: 0 10px;">/</span>
            Gallery
        </div>
    </div>
</div>

<!-- Gallery Section -->
<section class="section" style="background: var(--clr-bg-main);">
    <div class="container">
        <div class="section-title text-center" style="text-align: center; margin-bottom: 4rem;" data-aos="fade-up">
            <span class="section-subtitle">Moments We Shared</span>
            <h2>Captured <span class="gradient-text">Memories</span></h2>
        </div>

        <!-- Masonry Grid via CSS columns -->
        <style>
            .expert-gallery {
                column-count: 3;
                column-gap: 1.5rem;
            }

            .expert-gallery-item {
                margin-bottom: 1.5rem;
                break-inside: avoid;
                border-radius: var(--radius-md);
                overflow: hidden;
                position: relative;
                group;
                cursor: pointer;
            }

            .expert-gallery-item img {
                width: 100%;
                display: block;
                transition: transform 0.6s cubic-bezier(0.25, 1, 0.5, 1);
            }

            .expert-gallery-item:hover img {
                transform: scale(1.08);
                filter: brightness(0.8);
            }

            .expert-gallery-overlay {
                position: absolute;
                inset: 0;
                background: linear-gradient(to top, rgba(2, 12, 27, 0.8), transparent);
                opacity: 0;
                transition: opacity 0.3s ease;
                display: flex;
                align-items: flex-end;
                padding: 1.5rem;
            }

            .expert-gallery-item:hover .expert-gallery-overlay {
                opacity: 1;
            }

            .expert-gallery-icon {
                width: 50px;
                height: 50px;
                background: rgba(255, 255, 255, 0.1);
                backdrop-filter: blur(5px);
                border-radius: 50%;
                display: flex;
                align-items: center;
                justify-content: center;
                color: white;
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%) scale(0.5);
                opacity: 0;
                transition: all 0.4s cubic-bezier(0.25, 1, 0.5, 1);
            }

            .expert-gallery-item:hover .expert-gallery-icon {
                opacity: 1;
                transform: translate(-50%, -50%) scale(1);
            }

            @media (max-width: 991px) {
                .expert-gallery {
                    column-count: 2;
                }
            }

            @media (max-width: 576px) {
                .expert-gallery {
                    column-count: 1;
                }
            }
        </style>

        <div class="expert-gallery">
            <div class="expert-gallery-item" data-aos="zoom-in" data-aos-delay="100">
                <img src="https://images.unsplash.com/photo-1593113646773-028c64a8f1b8?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                    alt="Gallery Image">
                <div class="expert-gallery-overlay"><span style="color: white; font-weight: 600;">Community Drive</span>
                </div>
                <div class="expert-gallery-icon"><i class="fas fa-search-plus"></i></div>
            </div>

            <div class="expert-gallery-item" data-aos="zoom-in" data-aos-delay="200">
                <img src="https://images.unsplash.com/photo-1488521787991-ed7bbaae773c?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                    alt="Gallery Image">
                <div class="expert-gallery-overlay"><span style="color: white; font-weight: 600;">Food
                        Distribution</span></div>
                <div class="expert-gallery-icon"><i class="fas fa-search-plus"></i></div>
            </div>

            <div class="expert-gallery-item" data-aos="zoom-in" data-aos-delay="300">
                <img src="https://images.unsplash.com/photo-1542838132-92c53300491e?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&h=1200&q=80"
                    alt="Gallery Image">
                <div class="expert-gallery-overlay"><span style="color: white; font-weight: 600;">Environmental
                        Care</span></div>
                <div class="expert-gallery-icon"><i class="fas fa-search-plus"></i></div>
            </div>

            <div class="expert-gallery-item" data-aos="zoom-in" data-aos-delay="100">
                <img src="https://images.unsplash.com/photo-1503676260728-1c00da094a0b?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&h=1000&q=80"
                    alt="Gallery Image">
                <div class="expert-gallery-overlay"><span style="color: white; font-weight: 600;">Stationery Kits</span>
                </div>
                <div class="expert-gallery-icon"><i class="fas fa-search-plus"></i></div>
            </div>

            <div class="expert-gallery-item" data-aos="zoom-in" data-aos-delay="200">
                <img src="https://images.unsplash.com/photo-1599059813005-11265ba4b4ce?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                    alt="Gallery Image">
                <div class="expert-gallery-overlay"><span style="color: white; font-weight: 600;">Old Age Home</span>
                </div>
                <div class="expert-gallery-icon"><i class="fas fa-search-plus"></i></div>
            </div>

            <div class="expert-gallery-item" data-aos="zoom-in" data-aos-delay="300">
                <img src="https://images.unsplash.com/photo-1559027615-cd4628902d4a?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                    alt="Gallery Image">
                <div class="expert-gallery-overlay"><span style="color: white; font-weight: 600;">Core Volunteers</span>
                </div>
                <div class="expert-gallery-icon"><i class="fas fa-search-plus"></i></div>
            </div>
        </div>

    </div>
</section>

<?php include 'includes/footer.php'; ?>