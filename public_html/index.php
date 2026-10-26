<?php include 'includes/header.php'; ?>

<!-- Expert Level Hero Slider (Swiper) -->
<section class="hero-section">
    <div class="swiper hero-slider">
        <div class="swiper-wrapper">

            <!-- Slide 1 -->
            <div class="swiper-slide">
                <div class="hero-bg"
                    style="background-image: url('https://images.unsplash.com/photo-1488521787991-ed7bbaae773c?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80')"
                    data-swiper-parallax="-20%"></div>
                <div class="hero-overlay"></div>
                <div class="container hero-content">
                    <div class="hero-text-box">
                        <span class="section-subtitle" data-swiper-parallax="-300">Welcome to Soham Seva</span>
                        <h1 data-swiper-parallax="-400" class="highlight">Serving Humanity with <span
                                class="highlight">Compassion.</span>
                        </h1>
                        <p data-swiper-parallax="-500">Happiness results from what we give. Everyone has something to
                            give, and every good act is a charity.</p>
                        <div class="hero-actions-wrap" data-swiper-parallax="-600">
                            <a href="volunteer.php" class="btn btn-primary">Join Us Today</a>
                            <a href="aboutus.php" class="btn btn-outline" style="margin-left: 1rem;color:white">Learn
                                More</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide 2 -->
            <div class="swiper-slide">
                <div class="hero-bg"
                    style="background-image: url('https://images.unsplash.com/photo-1593113646773-028c64a8f1b8?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80')"
                    data-swiper-parallax="-20%"></div>
                <div class="hero-overlay"></div>
                <div class="container hero-content">
                    <div class="hero-text-box">
                        <span class="section-subtitle" data-swiper-parallax="-300">Make an Impact</span>
                        <h1 data-swiper-parallax="-400" class="highlight">Your Action Creates <span
                                class="highlight">Hope.</span></h1>
                        <p data-swiper-parallax="-500">A group of highly committed volunteers came together to serve
                            humanity across the most deprived areas.</p>
                        <div class="hero-actions-wrap" data-swiper-parallax="-600">
                            <a href="donate.php" class="btn btn-primary">Donate Now</a>
                            <a href="activities.php" class="btn btn-outline"
                                style="margin-left: 1rem;color:white!important">View
                                Activities</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
        <!-- Add Navigation -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
</section>

<!-- Stats Section -->
<section class="section" style="padding-top: 0; margin-top: -80px; position: relative; z-index: 10;">
    <div class="container">
        <div class="glass-card" data-aos="fade-up" data-aos-duration="1000">
            <div style="display: flex; justify-content: space-around; flex-wrap: wrap; text-align: center; gap: 2rem;">
                <div class="stat-item" data-aos="zoom-in" data-aos-delay="100">
                    <span class="stat-num">500+</span>
                    <span class="stat-text">Active Volunteers</span>
                </div>
                <div class="stat-item" data-aos="zoom-in" data-aos-delay="200">
                    <span class="stat-num">15k</span>
                    <span class="stat-text">Lives Touched</span>
                </div>
                <div class="stat-item" data-aos="zoom-in" data-aos-delay="300">
                    <span class="stat-num">20+</span>
                    <span class="stat-text">Active Regions</span>
                </div>
                <div class="stat-item" data-aos="zoom-in" data-aos-delay="400">
                    <span class="stat-num">100%</span>
                    <span class="stat-text">Commitment</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Features Section (Glassmorphism UI) -->
<section class="section" id="features">
    <div class="container">
        <div class="section-title" data-aos="fade-right">
            <span class="section-subtitle">What We Do</span>
            <h2>Charity With a <span class="gradient-text">Difference</span></h2>
        </div>

        <div class="features-container">
            <!-- Feature 1 -->
            <div class="glass-card feature-glass-box" data-aos="fade-up" data-aos-delay="100">
                <div class="icon-wrapper">
                    <i class="fas fa-donate"></i>
                </div>
                <h3>Send Us Donations</h3>
                <p>Your contribution helps us provide life essential kits and support the underprivileged communities
                    effectively.</p>
                <a href="donate.php" class="feature-link-arrow">Donate Now <i class="fas fa-arrow-right"></i></a>
            </div>

            <!-- Feature 2 -->
            <div class="glass-card feature-glass-box" data-aos="fade-up" data-aos-delay="200"
                style="border-bottom-color: var(--clr-primary);">
                <div class="icon-wrapper" style="background: var(--clr-primary); color: white;">
                    <i class="fas fa-users"></i>
                </div>
                <h3>Become A Volunteer</h3>
                <p>Flourish your kindness by letting it help others in every means you can. Join our group of dedicated
                    volunteers.</p>
                <a href="volunteer.php" class="feature-link-arrow">Join Us <i class="fas fa-arrow-right"></i></a>
            </div>

            <!-- Feature 3 -->
            <div class="glass-card feature-glass-box" data-aos="fade-up" data-aos-delay="300">
                <div class="icon-wrapper">
                    <i class="fas fa-comments"></i>
                </div>
                <h3>Provide Feedback</h3>
                <p>We value your thoughts. Let us know how we can improve our services and reach out to more people in
                    need.</p>
                <a href="contact.php" class="feature-link-arrow">Contact Us <i class="fas fa-arrow-right"></i></a>
            </div>
        </div>
    </div>
</section>

<!-- Advanced Activities Swiper Section -->
<section class="section" style="background: var(--clr-secondary-lighter); position: relative; overflow: hidden;">
    <!-- Abstract background shape for premium feel -->
    <div
        style="position: absolute; top: -20%; right: -10%; width: 50%; height: 100%; background: radial-gradient(circle, rgba(255,94,58,0.1) 0%, rgba(2,12,27,0) 70%); border-radius: 50%; z-index: 1;">
    </div>

    <div class="container relative-z">
        <div class="section-title" data-aos="fade-right">
            <span class="section-subtitle">Our Work</span>
            <h2>Recent <span class="gradient-text">Activities</span></h2>
        </div>

        <div class="activities-slider-container" data-aos="fade-up">
            <div class="swiper activities-swiper">
                <div class="swiper-wrapper">

                    <!-- Activity 1 -->
                    <div class="swiper-slide">
                        <div class="activity-expert-card">
                            <img src="https://images.unsplash.com/photo-1488521787991-ed7bbaae773c?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                                alt="Life Essential Kit">
                            <div class="activity-expert-overlay">
                                <span class="activity-cat">Health/Food</span>
                                <h3>Life Essential KIT</h3>
                                <p>Thousands of families are hungry. Our volunteers work hard to ensure basic
                                    necessities reach them immediately.</p>
                                <a href="activities.php" class="btn-outline"
                                    style="padding: 0.5rem 1rem; font-size: 0.8rem;">Read More</a>
                            </div>
                        </div>
                    </div>

                    <!-- Activity 2 -->
                    <div class="swiper-slide">
                        <div class="activity-expert-card">
                            <img src="https://images.unsplash.com/photo-1542838132-92c53300491e?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                                alt="Water distribution">
                            <div class="activity-expert-overlay">
                                <span class="activity-cat">Animal Welfare</span>
                                <h3>Water Bowls for Birds</h3>
                                <p>During the hot summer season, we distribute water bowls to help our feathered friends
                                    stay hydrated.</p>
                                <a href="activities.php" class="btn-outline"
                                    style="padding: 0.5rem 1rem; font-size: 0.8rem;">Read More</a>
                            </div>
                        </div>
                    </div>

                    <!-- Activity 3 -->
                    <div class="swiper-slide">
                        <div class="activity-expert-card">
                            <img src="https://images.unsplash.com/photo-1503676260728-1c00da094a0b?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                                alt="Stationery Kit">
                            <div class="activity-expert-overlay">
                                <span class="activity-cat">Education</span>
                                <h3>Stationery Kit Distribution</h3>
                                <p>Education is the key to a better future. We distributed stationery to underprivileged
                                    kids.</p>
                                <a href="activities.php" class="btn-outline"
                                    style="padding: 0.5rem 1rem; font-size: 0.8rem;">Read More</a>
                            </div>
                        </div>
                    </div>

                    <!-- Activity 4 -->
                    <div class="swiper-slide">
                        <div class="activity-expert-card">
                            <img src="https://images.unsplash.com/photo-1599059813005-11265ba4b4ce?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                                alt="Oldage Support">
                            <div class="activity-expert-overlay">
                                <span class="activity-cat">Elder Care</span>
                                <h3>OldAge Home Support</h3>
                                <p>Spending time and distributing essential medical supplies at Radhika Old Age Home.
                                </p>
                                <a href="activities.php" class="btn-outline"
                                    style="padding: 0.5rem 1rem; font-size: 0.8rem;">Read More</a>
                            </div>
                        </div>
                    </div>

                </div>
                <br><br>
                <div class="activities-pagination" style="text-align: center;"></div>
            </div>

            <div class="text-center" style="text-align: center; margin-top: 3rem;" data-aos="zoom-in">
                <a href="activities.php" class="btn btn-primary">View All Activities</a>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action Section (Parallax Banner) -->
<section class="section"
    style="background: url('https://images.unsplash.com/photo-1559027615-cd4628902d4a?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80') center/contain fixed; position: relative;">
    <div
        style="position: absolute; top:0; left:0; width:100%; height:100%; background: var(--gradient-dark); opacity: 0.85;">
    </div>
    <div class="container relative-z" style="text-align: center; max-width: 800px;" data-aos="fade-up">
        <h2 style="font-size: clamp(2rem, 4vw, 3.5rem); margin-bottom: 2rem; color: white;">Be The Reason Someone
            <br><span class="gradient-text">Smiles Today</span>
        </h2>
        <p style="font-size: 1.2rem; margin-bottom: 3rem; color: var(--clr-text-light);">We are always looking for
            passionate individuals who want to dedicate their time and effort for the betterment of the society.</p>
        <a href="volunteer.php" class="btn btn-primary" style="padding: 1.2rem 3rem; font-size: 1.2rem;">Become a
            Volunteer</a>
    </div>
</section>

<?php include 'includes/footer.php'; ?>