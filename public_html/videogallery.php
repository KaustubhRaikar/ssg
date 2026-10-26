<?php include 'includes/header.php'; ?>

<!-- Expert Inner Page Header -->
<div class="page-header"
    style="background: var(--gradient-dark); padding: 8rem 0 4rem; position: relative; overflow: hidden;">
    <div
        style="position: absolute; top:0; left:0; width:100%; height:100%; opacity:0.1; background: url('https://images.unsplash.com/photo-1488521787991-ed7bbaae773c?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80') center/cover;">
    </div>
    <div class="container relative-z" data-aos="fade-up">
        <h1 style="color: white; font-size: clamp(2.5rem, 5vw, 4rem);">Video <span class="gradient-text">Gallery</span>
        </h1>
        <div class="breadcrumb" style="color: var(--clr-text-muted);">
            <a href="index.php" style="color: var(--clr-text-light);">Home</a> <span style="margin: 0 10px;">/</span>
            Video Gallery
        </div>
    </div>
</div>

<!-- Video Section -->
<section class="section" style="background: var(--clr-bg-main);">
    <div class="container">
        <div class="section-title text-center" style="text-align: center; margin-bottom: 4rem;" data-aos="fade-up">
            <span class="section-subtitle">Our Impact</span>
            <h2>Videos That Speak For <span class="gradient-text">Themselves</span></h2>
        </div>

        <div
            style="display: grid; grid-template-columns: repeat(auto-fill, minmax(400px, 1fr)); gap: var(--spacing-xxl);">

            <!-- Video Item 1 -->
            <div data-aos="fade-up" data-aos-delay="100">
                <div class="glass-card" style="padding: 1.5rem; background: rgba(255,255,255,0.02); height: 100%;">
                    <div
                        style="position: relative; padding-bottom: 56.25%; height: 0; border-radius: var(--radius-sm); overflow: hidden; box-shadow: var(--shadow-soft);">
                        <iframe src="https://www.youtube.com/embed/ScMzIvxBSi4?rel=0"
                            style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; border:0;"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                    </div>
                    <div style="padding-top: 1.5rem;">
                        <span
                            style="font-size: 0.8rem; color: var(--clr-primary); text-transform: uppercase; letter-spacing: 1px; font-weight: 600;">Introduction</span>
                        <h4 style="color: white; font-size: 1.2rem; margin-top: 0.5rem; margin-bottom: 0.5rem;">Soham
                            Seva Mission</h4>
                        <p style="color: var(--clr-text-muted); font-size: 0.9rem; margin-bottom: 0;">A brief overview
                            of our mission, vision, and activities we do to serve the society.</p>
                    </div>
                </div>
            </div>

            <!-- Video Item 2 -->
            <div data-aos="fade-up" data-aos-delay="200">
                <div class="glass-card" style="padding: 1.5rem; background: rgba(255,255,255,0.02); height: 100%;">
                    <div
                        style="position: relative; padding-bottom: 56.25%; height: 0; border-radius: var(--radius-sm); overflow: hidden; box-shadow: var(--shadow-soft);">
                        <iframe src="https://www.youtube.com/embed/d3u20H1yKkE?rel=0"
                            style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; border:0;"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                    </div>
                    <div style="padding-top: 1.5rem;">
                        <span
                            style="font-size: 0.8rem; color: var(--clr-accent); text-transform: uppercase; letter-spacing: 1px; font-weight: 600;">Activity
                            Highlight</span>
                        <h4 style="color: white; font-size: 1.2rem; margin-top: 0.5rem; margin-bottom: 0.5rem;">Recent
                            Charity Drive</h4>
                        <p style="color: var(--clr-text-muted); font-size: 0.9rem; margin-bottom: 0;">Highlights from
                            our recent essential kit distribution to the underprivileged.</p>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>

<?php include 'includes/footer.php'; ?>