<?php include 'includes/header.php'; ?>

<!-- Expert Inner Page Header -->
<div class="page-header"
    style="background: var(--gradient-dark); padding: 8rem 0 4rem; position: relative; overflow: hidden;">
    <div
        style="position: absolute; top:0; left:0; width:100%; height:100%; opacity:0.1; background: url('https://images.unsplash.com/photo-1559027615-cd4628902d4a?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80') center/cover;">
    </div>
    <div class="container relative-z" data-aos="fade-up">
        <h1 style="color: white; font-size: clamp(2.5rem, 5vw, 4rem);">Become a <span
                class="gradient-text">Volunteer</span></h1>
        <div class="breadcrumb" style="color: var(--clr-text-muted);">
            <a href="index.php" style="color: var(--clr-text-light);">Home</a> <span style="margin: 0 10px;">/</span>
            Volunteer
        </div>
    </div>
</div>

<!-- Volunteer Section -->
<section class="section" style="background: var(--clr-bg-main);">
    <div class="container">

        <div class="grid-volunteer">

            <!-- Information Panel Expert -->
            <div data-aos="fade-right" data-aos-delay="100">
                <div class="glass-card"
                    style="height: 100%; padding: 3rem; background: linear-gradient(135deg, rgba(23,42,70,0.8), rgba(2,12,27,0.9)); border-top: 4px solid var(--clr-primary);">

                    <h3 style="color: white; font-size: 2rem; margin-bottom: 2rem;">Why Volunteer <br><span
                            class="gradient-text">With Us?</span></h3>

                    <ul style="list-style: none; margin: 0; padding: 0;">
                        <li style="display: flex; gap: 1rem; margin-bottom: 1.5rem;">
                            <div
                                style="width: 40px; height: 40px; background: rgba(255, 94, 58, 0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                                <i class="fas fa-globe-americas" style="color: var(--clr-primary);"></i>
                            </div>
                            <div>
                                <h4 style="color: white; font-size: 1.1rem; margin-bottom: 0.25rem;">Global Impact</h4>
                                <p style="font-size: 0.9rem; color: var(--clr-text-muted);">Make a tangible difference
                                    in the community and reach the unreached.</p>
                            </div>
                        </li>

                        <li style="display: flex; gap: 1rem; margin-bottom: 1.5rem;">
                            <div
                                style="width: 40px; height: 40px; background: rgba(100, 255, 218, 0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                                <i class="fas fa-laptop-code" style="color: var(--clr-accent);"></i>
                            </div>
                            <div>
                                <h4 style="color: white; font-size: 1.1rem; margin-bottom: 0.25rem;">Skill Development
                                </h4>
                                <p style="font-size: 0.9rem; color: var(--clr-text-muted);">Gain valuable experience and
                                    develop new management skills.</p>
                            </div>
                        </li>

                        <li style="display: flex; gap: 1rem; margin-bottom: 1.5rem;">
                            <div
                                style="width: 40px; height: 40px; background: rgba(234, 179, 8, 0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                                <i class="fas fa-handshake" style="color: #eab308;"></i>
                            </div>
                            <div>
                                <h4 style="color: white; font-size: 1.1rem; margin-bottom: 0.25rem;">Networking</h4>
                                <p style="font-size: 0.9rem; color: var(--clr-text-muted);">Connect with like-minded,
                                    passionate individuals from various domains.</p>
                            </div>
                        </li>
                    </ul>

                    <div style="margin-top: 3rem; text-align: center;">
                        <img src="https://images.unsplash.com/photo-1559027615-cd4628902d4a?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                            style="border-radius: var(--radius-md); filter: sepia(0.3) saturate(0.8);">
                    </div>

                </div>
            </div>

            <!-- Form Form Expert -->
            <div data-aos="fade-left" data-aos-delay="200">
                <style>
                    .expert-input {
                        width: 100%;
                        padding: 1rem 1.2rem;
                        background: rgba(255, 255, 255, 0.03);
                        border: 1px solid rgba(255, 255, 255, 0.5);
                        /* Enhanced visible outline */
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
                        color: white;
                        /* Made labels white */
                        font-weight: 600;
                    }

                    select.expert-input {
                        appearance: none;
                        background-image: url('data:image/svg+xml;charset=US-ASCII,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%22292.4%22%20height%3D%22292.4%22%3E%3Cpath%20fill%3D%22%23FFFFFF%22%20d%3D%22M287%2069.4a17.6%2017.6%200%200%200-13-5.4H18.4c-5%200-9.3%201.8-12.9%205.4A17.6%2017.6%200%200%200%200%2082.2c0%205%201.8%209.3%205.4%2012.9l128%20127.9c3.6%203.6%207.8%205.4%2012.8%205.4s9.2-1.8%2012.8-5.4L287%2095c3.5-3.5%205.4-7.8%205.4-12.8%200-5-1.9-9.2-5.5-12.8z%22%2F%3E%3C%2Fsvg%3E');
                        background-repeat: no-repeat;
                        background-position: right 1rem top 50%;
                        background-size: 0.65rem auto;
                    }

                    select.expert-input option {
                        background: var(--clr-bg-main);
                        color: white;
                    }
                </style>
                <div class="glass-card" style="padding: 3rem; background: rgba(23, 42, 70, 0.4);">
                    <h2
                        style="margin-bottom: 0.5rem; font-family: var(--font-main); font-style: normal; font-size: 2rem; color: white;">
                        Application Form</h2>
                    <p style="margin-bottom: 2rem; color: rgba(255, 255, 255, 0.8);">Fill out the details below and our
                        coordinator will contact you.</p>

                    <form action="#" method="POST">
                        <div class="form-group-expert">
                            <label class="expert-label">Full Name *</label>
                            <input type="text" class="expert-input" placeholder="e.g. John Doe" required>
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

                        <div class="grid-2-col" style="gap: 1.5rem; margin-bottom: 1.5rem;">
                            <div class="form-group-expert">
                                <label class="expert-label">Date of Birth *</label>
                                <input type="date" class="expert-input" required style="color: rgba(255,255,255,0.7);">
                            </div>
                            <div class="form-group-expert">
                                <label class="expert-label">Area of Interest *</label>
                                <select class="expert-input" required>
                                    <option value="" disabled selected>Select an area...</option>
                                    <option value="teaching">Teaching / Education</option>
                                    <option value="health">Health & Medical Camps</option>
                                    <option value="animal">Animal Welfare (Gau Seva)</option>
                                    <option value="food">Food Distribution</option>
                                    <option value="events">Event Organization</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group-expert">
                            <label class="expert-label">Why do you want to join us? *</label>
                            <textarea class="expert-input" placeholder="Tell us about your motivation..." rows="5"
                                required></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary" style="width: 100%; margin-top: 1rem;">Submit
                            Application</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>