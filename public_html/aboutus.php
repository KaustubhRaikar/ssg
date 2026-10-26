<?php include 'includes/header.php'; ?>

<!-- Expert Inner Page Header -->
<div class="page-header"
    style="background: var(--gradient-dark); padding: 8rem 0 4rem; position: relative; overflow: hidden;">
    <div
        style="position: absolute; top:0; left:0; width:100%; height:100%; opacity:0.1; background: url('https://images.unsplash.com/photo-1593113646773-028c64a8f1b8?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80') center/cover;">
    </div>
    <div class="container relative-z" data-aos="fade-up">
        <h1 style="color: white; font-size: clamp(2.5rem, 5vw, 4rem);">About <span class="gradient-text">Us</span></h1>
        <div class="breadcrumb" style="color: var(--clr-text-muted);">
            <a href="index.php" style="color: var(--clr-text-light);">Home</a> <span style="margin: 0 10px;">/</span>
            About Us
        </div>
    </div>
</div>

<!-- About Section -->
<section class="section" style="background: var(--clr-bg-main);">
    <div class="container">
        <div class="grid-2-col">

            <div data-aos="fade-right" data-aos-duration="1000" style="position: relative;">
                <div
                    style="position: absolute; top: -20px; left: -20px; width: 100px; height: 100px; background: var(--clr-primary); border-radius: 50%; filter: blur(40px); opacity: 0.5;">
                </div>
                <div class="glass-card" style="padding: 10px; border-radius: var(--radius-xl);">
                    <img src="https://images.unsplash.com/photo-1593113646773-028c64a8f1b8?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80"
                        alt="About Soham Seva"
                        style="width:100%; height:auto; border-radius: var(--radius-lg); transform: scale(0.98); transition: var(--transition-bounce);">
                </div>
            </div>

            <div data-aos="fade-left" data-aos-duration="1000">
                <span class="section-subtitle">Who We Are</span>
                <h2 style="color: var(--clr-text-light); margin-bottom: 2rem;">Soham <span class="gradient-text">Seva
                        Group</span></h2>

                <p style="font-size: 1.1rem; line-height: 1.8;">SOHAM in Vedic philosophy means identifying oneself with
                    the universe or ultimate reality. With this vision, Inspired by Rashtrasant Param Gurudev Shree
                    Namramuni Maharaj Saheb, SOHAM SEVA GROUP was formed in March 2022 with a noble purpose to serve
                    society selflessly.</p>
                <p style="font-size: 1.1rem; line-height: 1.8; margin-bottom: 2rem;">We believe that "Happiness results
                    from what we give." Our focus is on humanity, ensuring that basic necessities, education, and
                    compassion reach the farthest corners.</p>

                <div style="display: grid; gap: 1.5rem;">
                    <div class="glass-card"
                        style="padding: 1.5rem; display: flex; align-items: flex-start; gap: 1rem; border-left: 3px solid var(--clr-primary);"
                        data-aos="fade-up" data-aos-delay="100">
                        <div style="font-size: 2rem; color: var(--clr-primary);"><i class="fas fa-bullseye"></i></div>
                        <div>
                            <h4 style="margin-bottom: 5px; color: white;">Our Mission</h4>
                            <p style="margin-bottom: 0; font-size: 0.95rem;">To unconditionally serve those in need and
                                flourish kindness across communities.</p>
                        </div>
                    </div>

                    <div class="glass-card"
                        style="padding: 1.5rem; display: flex; align-items: flex-start; gap: 1rem; border-left: 3px solid var(--clr-accent);"
                        data-aos="fade-up" data-aos-delay="200">
                        <div style="font-size: 2rem; color: var(--clr-accent);"><i class="fas fa-eye"></i></div>
                        <div>
                            <h4 style="margin-bottom: 5px; color: white;">Our Vision</h4>
                            <p style="margin-bottom: 0; font-size: 0.95rem;">A world where compassion leads actions and
                                every individual is capable of helping another.</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>