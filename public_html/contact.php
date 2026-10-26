<?php include 'includes/header.php'; ?>

<!-- Expert Inner Page Header -->
<div class="page-header"
    style="background: var(--gradient-dark); padding: 8rem 0 4rem; position: relative; overflow: hidden;">
    <div
        style="position: absolute; top:0; left:0; width:100%; height:100%; opacity:0.1; background: url('https://images.unsplash.com/photo-1516321497487-e288fb19713f?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80') center/cover;">
    </div>
    <div class="container relative-z" data-aos="fade-up">
        <h1 style="color: white; font-size: clamp(2.5rem, 5vw, 4rem);">Contact <span class="gradient-text">Us</span>
        </h1>
        <div class="breadcrumb" style="color: var(--clr-text-muted);">
            <a href="index.php" style="color: var(--clr-text-light);">Home</a> <span style="margin: 0 10px;">/</span>
            Contact
        </div>
    </div>
</div>

<!-- Contact Section -->
<section class="section" style="background: var(--clr-bg-main);">
    <div class="container">
        <div class="grid-contact">

            <!-- Contact Info -->
            <div style="display: flex; flex-direction: column; gap: 1.5rem;">
                <div class="glass-card"
                    style="padding: 2rem; border-left: 2px solid var(--clr-primary); text-align: left;"
                    data-aos="fade-right" data-aos-delay="100">
                    <div
                        style="width: 50px; height: 50px; background: rgba(255, 94, 58, 0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-bottom: 1rem;">
                        <i class="fas fa-map-marker-alt" style="font-size: 1.5rem; color: var(--clr-primary);"></i>
                    </div>
                    <h4 style="color: white;">Our Location</h4>
                    <p style="font-size: 0.9rem; margin-bottom: 0;">123 Seva Road, Mumbai, India - 400001</p>
                </div>

                <div class="glass-card"
                    style="padding: 2rem; border-left: 2px solid var(--clr-accent); text-align: left;"
                    data-aos="fade-right" data-aos-delay="200">
                    <div
                        style="width: 50px; height: 50px; background: rgba(100, 255, 218, 0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-bottom: 1rem;">
                        <i class="fas fa-phone-alt" style="font-size: 1.5rem; color: var(--clr-accent);"></i>
                    </div>
                    <h4 style="color: white;">Call Us</h4>
                    <p style="font-size: 0.9rem; margin-bottom: 0;">+91 123 456 7890<br>+91 987 654 3210</p>
                </div>

                <div class="glass-card" style="padding: 2rem; border-left: 2px solid #eab308; text-align: left;"
                    data-aos="fade-right" data-aos-delay="300">
                    <div
                        style="width: 50px; height: 50px; background: rgba(234, 179, 8, 0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-bottom: 1rem;">
                        <i class="fas fa-envelope" style="font-size: 1.5rem; color: #eab308;"></i>
                    </div>
                    <h4 style="color: white;">Email Us</h4>
                    <p style="font-size: 0.9rem; margin-bottom: 0;">info@sohamseva.org<br>support@sohamseva.org</p>
                </div>
            </div>

            <!-- Contact Form Expert -->
            <div class="glass-card" style="padding: 3rem; background: rgba(23, 42, 70, 0.6);" data-aos="fade-left"
                data-aos-delay="200">
                <h2 style="margin-bottom: 0.5rem; font-family: var(--font-main); font-style: normal; font-size: 2rem;">
                    Get In Touch</h2>
                <p style="margin-bottom: 2rem;">We'd love to hear from you. Provide your feedback or inquire about
                    volunteering below.</p>

                <!-- Modern Input styles inside the parent -->
                <style>
                    .expert-input {
                        width: 100%;
                        padding: 1rem 1.2rem;
                        background: rgba(255, 255, 255, 0.03);
                        border: 1px solid rgba(255, 255, 255, 0.1);
                        border-radius: var(--radius-sm);
                        color: white;
                        font-family: var(--font-main);
                        transition: all 0.3s ease;
                    }

                    .expert-input:focus {
                        outline: none;
                        border-color: var(--clr-primary);
                        background: rgba(255, 255, 255, 0.05);
                        box-shadow: inset 0 0 10px rgba(255, 94, 58, 0.1);
                    }

                    .expert-input::placeholder {
                        color: rgba(255, 255, 255, 0.3);
                    }

                    .form-group-expert {
                        margin-bottom: 1.5rem;
                    }

                    .expert-label {
                        display: block;
                        margin-bottom: 0.5rem;
                        font-size: 0.85rem;
                        text-transform: uppercase;
                        letter-spacing: 1px;
                        color: var(--clr-text-muted);
                        font-weight: 600;
                    }
                </style>

                <form action="#" method="POST">
                    <div class="grid-2-col" style="gap: 1.5rem; margin-bottom: 1.5rem;">
                        <div class="form-group-expert">
                            <label class="expert-label">First Name *</label>
                            <input type="text" class="expert-input" placeholder="John" required>
                        </div>
                        <div class="form-group-expert">
                            <label class="expert-label">Last Name</label>
                            <input type="text" class="expert-input" placeholder="Doe">
                        </div>
                    </div>

                    <div class="grid-2-col" style="gap: 1.5rem; margin-bottom: 1.5rem;">
                        <div class="form-group-expert">
                            <label class="expert-label">Email Address *</label>
                            <input type="email" class="expert-input" placeholder="john@example.com" required>
                        </div>
                        <div class="form-group-expert">
                            <label class="expert-label">Phone Number *</label>
                            <input type="tel" class="expert-input" placeholder="+91 XXXXX XXXXX" required>
                        </div>
                    </div>

                    <div class="form-group-expert">
                        <label class="expert-label">Message / Feedback *</label>
                        <textarea class="expert-input" placeholder="How can we help you?" rows="5" required></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary" style="width: 100%; margin-top: 1rem;">Send Message <i
                            class="fas fa-paper-plane" style="margin-left: 10px;"></i></button>
                </form>
            </div>

        </div>
    </div>
</section>

<!-- Filtered Map Section for Expert Look -->
<div
    style="width: 100%; height: 500px; background-color: var(--clr-bg-main); position: relative; filter: grayscale(80%) invert(100%) hue-rotate(180deg) contrast(1.2);">
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d241317.11609823277!2d72.74109995709657!3d19.08219783958221!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c6306644edc1%3A0x5da4ed8f8d648c69!2sMumbai%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1700000000000!5m2!1sen!2sin"
        width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"></iframe>
    <div
        style="position: absolute; top:0; left:0; width:100%; height:100%; pointer-events:none; background: linear-gradient(to bottom, rgba(2,12,27,1) 0%, rgba(2,12,27,0) 15%, rgba(2,12,27,0) 85%, rgba(2,12,27,1) 100%);">
    </div>
</div>

<?php include 'includes/footer.php'; ?>