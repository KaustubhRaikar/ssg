<?php include 'includes/header.php'; ?>

<!-- Expert Inner Page Header -->
<div class="page-header"
    style="background: var(--gradient-dark); padding: 8rem 0 4rem; position: relative; overflow: hidden;">
    <div
        style="position: absolute; top:0; left:0; width:100%; height:100%; opacity:0.1; background: url('https://images.unsplash.com/photo-1542838132-92c53300491e?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80') center/cover;">
    </div>
    <div class="container relative-z" data-aos="fade-up">
        <h1 style="color: white; font-size: clamp(2.5rem, 5vw, 4rem);">Our <span class="gradient-text">Activities</span>
        </h1>
        <div class="breadcrumb" style="color: var(--clr-text-muted);">
            <a href="index.php" style="color: var(--clr-text-light);">Home</a> <span style="margin: 0 10px;">/</span>
            Activities
        </div>
    </div>
</div>

<!-- Dedicated Activities Blocks Section -->
<section class="section"
    style="background: var(--clr-bg-main); padding-top: var(--spacing-xxl); position: relative; overflow: hidden;">

    <!-- Parallax Decor -->
    <div class="parallax-orb orb-1"
        style="width: 400px; height: 400px; background: var(--clr-primary); top: 10%; left: -10%;"></div>
    <div class="parallax-orb orb-2"
        style="width: 500px; height: 500px; background: var(--clr-accent); top: 50%; right: -15%;"></div>
    <div class="parallax-orb orb-3" style="width: 300px; height: 300px; background: #a855f7; bottom: 5%; left: 20%;">
    </div>

    <div class="container relative-z">

        <!-- Activity 1: Life Essential Kit (Text Left, Media Right) -->
        <div class="activity-detail-block">
            <div class="activity-grid-alt">

                <div class="activity-text-content" data-aos="fade-right" data-aos-duration="1000">
                    <span class="activity-cat">Health/Food</span>
                    <h3 class="split-text">Life Essential KIT Distribution</h3>

                    <div class="activity-meta">
                        <span class="date"><i class="far fa-calendar-alt" style="margin-right: 5px;"></i> May 15,
                            2026</span>
                        <span style="color: var(--clr-text-muted);"><i class="fas fa-map-marker-alt"
                                style="margin-right: 5px;"></i> Slum Areas, Mumbai</span>
                    </div>

                    <p style="font-size: 1.1rem; line-height: 1.8;">Happiness results from what we give. Thousands of
                        families are completely unaware of where their next meal is coming from. Our volunteers work
                        relentlessly day and night to ensure basic nutrition and hygienic items reach the farthest, most
                        deprived corners of society.</p>
                    <p style="font-size: 1.1rem; line-height: 1.8; margin-bottom: 2rem;">In this recent drive, our
                        dedicated team successfully distributed over 500 complete 'Life Essential Kits'. These kits
                        consisted of vital grains, cooking oil, sanitary necessities, and daily vitamins to help sustain
                        families for an entire month.</p>

                    <a href="volunteer.php" class="btn btn-primary" style="padding: 0.8rem 2rem;">Join This Cause</a>
                </div>

                <div class="activity-media-grid" data-aos="fade-left" data-aos-duration="1000">
                    <!-- Large Video Embed -->
                    <div class="activity-media-item large parallax-media" style="background: #000;">
                        <div class="video-wrapper" style="height: 100%; padding-bottom: 0;">
                            <iframe src="https://www.youtube.com/embed/ScMzIvxBSi4?si=r7k5B1E9YhWJ2uH7&mute=1"
                                title="YouTube video player"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                allowfullscreen></iframe>
                        </div>
                    </div>
                    <!-- Smaller Images -->
                    <div class="activity-media-item parallax-media-slow">
                        <img class="img-parallax"
                            src="https://images.unsplash.com/photo-1488521787991-ed7bbaae773c?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80"
                            alt="Distribution Event 1">
                    </div>
                    <div class="activity-media-item parallax-media-fast">
                        <img class="img-parallax"
                            src="https://images.unsplash.com/photo-1593113646773-028c64a8f1b8?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80"
                            alt="Distribution Event 2">
                    </div>
                </div>

            </div>
        </div>

        <!-- Activity 2: Water Bowls (Media Left, Text Right) -->
        <div class="activity-detail-block">
            <div class="activity-grid-alt reverse">

                <div class="activity-media-grid" data-aos="fade-right" data-aos-duration="1000">
                    <div class="activity-media-item large parallax-media">
                        <img class="img-parallax"
                            src="https://images.unsplash.com/photo-1542838132-92c53300491e?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80"
                            alt="Water distribution to animals">
                    </div>
                    <div class="activity-media-item parallax-media-fast" style="background: #000;">
                        <!-- Mini Video -->
                        <div class="video-wrapper" style="height: 100%; padding-bottom: 0;">
                            <iframe src="https://www.youtube.com/embed/LXb3EKWsInQ?si=WpI2wI2g3h0K5hZ8&mute=1"
                                title="YouTube video" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="activity-media-item parallax-media-slow">
                        <img class="img-parallax"
                            src="https://images.unsplash.com/photo-1526976663112-0052ab6c3409?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80"
                            alt="Cows">
                    </div>
                </div>

                <div class="activity-text-content" data-aos="fade-left" data-aos-duration="1000"
                    style="grid-column: 2;">
                    <span class="activity-cat" style="background: var(--clr-accent); color: var(--clr-bg-main);">Animal
                        Welfare</span>
                    <h3 class="split-text">Water Bowls for Birds & Animals</h3>

                    <div class="activity-meta">
                        <span class="date"><i class="far fa-calendar-alt" style="margin-right: 5px;"></i> Apr 22,
                            2026</span>
                        <span style="color: var(--clr-text-muted);"><i class="fas fa-map-marker-alt"
                                style="margin-right: 5px;"></i> Across City Parks</span>
                    </div>

                    <p style="font-size: 1.1rem; line-height: 1.8;">Water is the most important element of Life. With
                        the scorching heat waves approaching during the summer season, thousands of stray animals and
                        birds suffer from terrible dehydration.</p>
                    <p style="font-size: 1.1rem; line-height: 1.8; margin-bottom: 2rem;">In our massive "Hydrate the
                        Voiceless" campaign, the Soham Seva Group mobilized across 15 different parks and societal
                        locations to distribute and install over 2,000 earthen water bowls. Not only did we install
                        them, but our group of volunteers took oaths to routinely refill these bowls daily.</p>

                    <a href="volunteer.php" class="btn btn-outline" style="padding: 0.8rem 2rem;">Join This Cause</a>
                </div>

            </div>
        </div>

        <!-- Activity 3: Stationery Kit (Text Left, Media Right) -->
        <div class="activity-detail-block">
            <div class="activity-grid-alt">

                <div class="activity-text-content" data-aos="fade-right" data-aos-duration="1000">
                    <span class="activity-cat" style="background: #eab308; color: white;">Education</span>
                    <h3 class="split-text">Stationery Kit Distribution</h3>

                    <div class="activity-meta">
                        <span class="date"><i class="far fa-calendar-alt" style="margin-right: 5px;"></i> Mar 10,
                            2026</span>
                        <span style="color: var(--clr-text-muted);"><i class="fas fa-map-marker-alt"
                                style="margin-right: 5px;"></i> ZP Primary Schools</span>
                    </div>

                    <p style="font-size: 1.1rem; line-height: 1.8;">Education is strictly the key to a better future.
                        Unfortunately, many talented minds are restricted purely due to the lack of basic educational
                        supplies.</p>
                    <p style="font-size: 1.1rem; line-height: 1.8; margin-bottom: 2rem;">Covering 5 different rural
                        schools, our team distributed comprehensive stationery kits to over 1,200 enthusiastic kids.
                        These kits included notebooks, geometry boxes, pens, and art supplies to support their
                        educational journey and bring brilliant smiles to their faces.</p>

                    <a href="volunteer.php" class="btn btn-primary" style="padding: 0.8rem 2rem;">Join This Cause</a>
                </div>

                <div class="activity-media-grid" data-aos="fade-left" data-aos-duration="1000">
                    <div class="activity-media-item parallax-media-slow">
                        <img class="img-parallax"
                            src="https://images.unsplash.com/photo-1503676260728-1c00da094a0b?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80"
                            alt="Students">
                    </div>
                    <div class="activity-media-item parallax-media-fast" style="background: #000;">
                        <div class="video-wrapper" style="height: 100%; padding-bottom: 0;">
                            <iframe src="https://www.youtube.com/embed/zpOULjyy-n8?si=Zqf2S3qfB9t4G9s6&mute=1"
                                title="YouTube video" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="activity-media-item large parallax-media">
                        <img class="img-parallax"
                            src="https://images.unsplash.com/photo-1577896851231-70ef18881754?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80"
                            alt="Stationery">
                    </div>
                </div>

            </div>
        </div>

    </div>
</section>
<?php include 'includes/footer.php'; ?>