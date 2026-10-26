<?php include 'includes/header.php'; ?>

<!-- Page Header (Parallax Banner) -->
<section class="page-header"
    style="background: url('https://images.unsplash.com/photo-1532629345422-7515f3d16bb0?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80') center/cover fixed; position: relative; padding: 120px 0 80px 0;">
    <div
        style="position: absolute; top:0; left:0; width:100%; height:100%; background: var(--gradient-dark); opacity: 0.85;">
    </div>
    <div class="container relative-z" style="text-align: center; color: white;" data-aos="fade-up">
        <h1 style="font-size: clamp(2.5rem, 5vw, 4rem); margin-bottom: 1rem; margin-top: 1rem;">Make a <span
                class="gradient-text">Donation</span></h1>
        <p class="gradient-text" style="font-size: 1.2rem; max-width: 600px; margin: 0 auto;">Your generosity fuels our
            mission to
            bring hope,
            health, and happiness to those in need.</p>
    </div>
</section>

<!-- Vision & Form Section -->
<section class="section" style="background-color: var(--clr-bg); position: relative;">
    <div class="container">
        <div class="donate-grid">

            <!-- Vision & Details Side -->
            <div class="vision-details" data-aos="fade-right">
                <span class="section-subtitle">Why Donate?</span>
                <h2 style="margin-bottom: 1.5rem;">Empowering Lives Through <span class="highlight">Compassion.</span>
                </h2>
                <p style="margin-bottom: 1.5rem; color: var(--clr-primary); line-height: 1.8;">
                    Soham Seva is dedicated to serving humanity selflessly. Every contribution you make directly impacts
                    lives. From providing essential medical kits to distributing food and stationery to the
                    underprivileged, your support creates a ripple effect of kindness in society.
                </p>

                <div class="glass-card" style="margin-bottom: 2rem; padding: 1.5rem;">
                    <h3 style="margin-bottom: 1rem; color: var(--clr-primary);"><i class="fas fa-shield-alt"></i> 80G
                        Tax Exemption</h3>
                    <p style="font-size: 0.95rem; color: var(--clr-primary);">
                        Donations made to Soham Seva are eligible for tax exemption under section 80G of the Income Tax
                        Act. Please ensure you provide your correct PAN card details to avail of this benefit. Once the
                        donation is successful, an 80G receipt will be automatically emailed to you.
                    </p>
                </div>

                <div class="vision-grid">
                    <div class="glass-card" style="text-align: center; padding: 1.5rem;">
                        <i class="fas fa-hand-holding-heart"
                            style="font-size: 2.5rem; color: var(--clr-primary); margin-bottom: 1rem;"></i>
                        <h4 style="margin-bottom: 0.5rem;">Secure Process</h4>
                        <p style="font-size: 0.85rem; color: var(--clr-primary);">100% safe and encrypted transaction
                            gateway.</p>
                    </div>
                    <div class="glass-card" style="text-align: center; padding: 1.5rem;">
                        <i class="fas fa-file-invoice"
                            style="font-size: 2.5rem; color: var(--clr-primary); margin-bottom: 1rem;"></i>
                        <h4 style="margin-bottom: 0.5rem;">Instant Receipt</h4>
                        <p style="font-size: 0.85rem; color: var(--clr-primary);">Get auto-generated receipts and
                            alerts via email.</p>
                    </div>
                </div>
            </div>

            <!-- Donation Form Side -->
            <div class="glass-card donate-form-wrapper" data-aos="fade-left" style="padding: 2.5rem;">
                <h3 style="margin-bottom: 1.5rem; text-align: center;">Donor Details</h3>
                <form id="donationForm">

                    <div class="form-group" style="margin-bottom: 1.2rem;">
                        <label for="activity" style="display: block; margin-bottom: 0.5rem; font-weight: 500;">Select
                            Activity for Donation <span style="color:red">*</span></label>
                        <select id="activity" name="activity" required
                            style="width: 100%; padding: 0.8rem; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(255,255,255,0.05); color: var(--clr-text); outline: none;"
                            onchange="updateColors(this)">
                            <option value="" disabled selected style="color: black;">Choose an Activity...</option>
                            <option value="Education" style="color: black;">Education & Stationery</option>
                            <option value="Jeevdaya" style="color: black;">Jeevdaya (Animal Welfare)</option>
                            <option value="Medical Relief" style="color: black;">Medical Relief</option>
                            <option value="Elder Care" style="color: black;">Elder Care (Old Age Home)</option>
                            <option value="Food Distribution" style="color: black;">Food & Essential Kits Distribution
                            </option>
                            <option value="General Fund" style="color: black;">General Fund</option>
                        </select>
                    </div>

                    <div class="form-grid">
                        <div class="form-group">
                            <label for="name" style="display: block; margin-bottom: 0.5rem; font-weight: 500;">Full Name
                                <span style="color:red">*</span></label>
                            <input type="text" id="name" name="name" required placeholder="Enter your name"
                                style="width: 100%; padding: 0.8rem; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(255,255,255,0.05); color: var(--clr-text); outline: none;">
                        </div>
                        <div class="form-group">
                            <label for="mobile" style="display: block; margin-bottom: 0.5rem; font-weight: 500;">Mobile
                                No. <span style="color:red">*</span></label>
                            <input type="tel" id="mobile" name="mobile" required placeholder="10-digit number"
                                pattern="[0-9]{10}"
                                style="width: 100%; padding: 0.8rem; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(255,255,255,0.05); color: var(--clr-text); outline: none;">
                        </div>
                    </div>

                    <div class="form-group" style="margin-bottom: 1.2rem;">
                        <label for="address" style="display: block; margin-bottom: 0.5rem; font-weight: 500;">Address
                            <span style="color:red">*</span></label>
                        <textarea id="address" name="address" required rows="2" placeholder="Full residential address"
                            style="width: 100%; padding: 0.8rem; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(255,255,255,0.05); color: var(--clr-text); outline: none; resize: vertical;"></textarea>
                    </div>

                    <div class="form-grid">
                        <div class="form-group">
                            <label for="pan" style="display: block; margin-bottom: 0.5rem; font-weight: 500;">PAN Number
                                <span style="color:red">*</span></label>
                            <input type="text" id="pan" name="pan" required placeholder="ABCDE1234F"
                                style="width: 100%; padding: 0.8rem; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(255,255,255,0.05); color: var(--clr-text); outline: none; text-transform: uppercase;">
                        </div>
                        <div class="form-group">
                            <label for="email" style="display: block; margin-bottom: 0.5rem; font-weight: 500;">Email
                                Address</label>
                            <input type="email" id="email" name="email" placeholder="Required for e-receipt"
                                style="width: 100%; padding: 0.8rem; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(255,255,255,0.05); color: var(--clr-text); outline: none;">
                        </div>
                    </div>

                    <div class="form-grid">
                        <div class="form-group">
                            <label for="amount"
                                style="display: block; margin-bottom: 0.5rem; font-weight: 500;">Donation Amount (₹)
                                <span style="color:red">*</span></label>
                            <input type="number" id="amount" name="amount" required min="100" placeholder="e.g. 1000"
                                style="width: 100%; padding: 0.8rem; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(255,255,255,0.05); color: var(--clr-text); outline: none;">
                        </div>
                        <div class="form-group"
                            style="display: flex; flex-direction: column; justify-content: center; align-items: flex-start;">
                            <label style="display: block; margin-bottom: 0.5rem; font-weight: 500;">Need 80G
                                Benefit?</label>
                            <div style="display: flex; gap: 1.5rem; margin-top: 0.5rem;">
                                <label style="display: flex; align-items: center; gap: 0.5rem; cursor: pointer;">
                                    <input type="radio" name="80g_benefit" value="Yes" checked> Yes
                                </label>
                                <label style="display: flex; align-items: center; gap: 0.5rem; cursor: pointer;">
                                    <input type="radio" name="80g_benefit" value="No"> No
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group" style="margin-bottom: 1.5rem;">
                        <label for="remarks" style="display: block; margin-bottom: 0.5rem; font-weight: 500;">Remarks
                            (Optional)</label>
                        <input type="text" id="remarks" name="remarks"
                            placeholder="Any message or specific instructions"
                            style="width: 100%; padding: 0.8rem; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(255,255,255,0.05); color: var(--clr-text); outline: none;">
                    </div>

                    <button type="submit" class="btn btn-primary"
                        style="width: 100%; padding: 1rem; font-size: 1.1rem; justify-content: center;">Proceed to
                        Payment <i class="fas fa-lock" style="margin-left: 0.5rem;"></i></button>

                </form>
            </div>

        </div>
    </div>
</section>

<!-- Mockup Payment Modal -->
<div id="paymentModal"
    style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.8); z-index: 9999; justify-content: center; align-items: center; backdrop-filter: blur(5px);">
    <div class="glass-card"
        style="width: 100%; max-width: 450px; padding: 2.5rem; text-align: center; position: relative;">
        <button id="closeModal"
            style="position: absolute; top: 15px; right: 20px; background: none; border: none; color: white; font-size: 1.5rem; cursor: pointer;">&times;</button>

        <div id="paymentInitState">
            <h3 style="margin-bottom: 1rem; color: var(--clr-primary);">Secure Payment Gateway</h3>
            <p style="margin-bottom: 0.5rem;">Paying to: <strong>Soham Seva Group</strong></p>
            <h2 id="modalDisplayAmount" style="margin-bottom: 2rem; font-size: 2.5rem;">₹ 0</h2>

            <div style="display: grid; gap: 1rem; margin-bottom: 1.5rem;">
                <button class="btn btn-outline"
                    style="width: 100%; justify-content: center; padding: 0.8rem; border-color: #ddd; color: var(--clr-text);"
                    onclick="simulatePaymentProcessing('UPI')">Pay via UPI (GPay/PhonePe)</button>
                <button class="btn btn-outline"
                    style="width: 100%; justify-content: center; padding: 0.8rem; border-color: #ddd; color: var(--clr-text);"
                    onclick="simulatePaymentProcessing('Card')">Pay via Credit / Debit Card</button>
                <button class="btn btn-outline"
                    style="width: 100%; justify-content: center; padding: 0.8rem; border-color: #ddd; color: var(--clr-text);"
                    onclick="simulatePaymentProcessing('NetBanking')">Pay via Net Banking</button>
            </div>
            <p style="font-size: 0.8rem; color: var(--clr-text-light);">This is a mock gateway for demonstration.</p>
        </div>

        <div id="paymentProcessingState" style="display: none; padding: 2rem 0;">
            <div class="loader-circle"
                style="width: 60px; height: 60px; border-width: 4px; border-top-color: var(--clr-primary); margin: 0 auto 1.5rem auto;">
            </div>
            <h4>Processing Payment...</h4>
            <p style="font-size: 0.9rem; color: var(--clr-text-light); margin-top: 0.5rem;">Please do not close this
                window or press back.</p>
        </div>

    </div>
</div>

<!-- SweetAlert2 for beautiful alerts -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    // Hack to style select options in some browsers based on selection
    function updateColors(select) {
        select.style.color = "var(--clr-text)";
    }

    const form = document.getElementById('donationForm');
    const modal = document.getElementById('paymentModal');
    const closeModal = document.getElementById('closeModal');
    const modalDisplayAmount = document.getElementById('modalDisplayAmount');

    let currentFormData = null;

    form.addEventListener('submit', function (e) {
        e.preventDefault();

        // Grab form data
        currentFormData = new FormData(form);
        const amount = currentFormData.get('amount');

        // Setup Modal
        modalDisplayAmount.innerText = '₹ ' + amount;

        // Show Modal
        document.getElementById('paymentInitState').style.display = 'block';
        document.getElementById('paymentProcessingState').style.display = 'none';
        modal.style.display = 'flex';
    });

    closeModal.addEventListener('click', () => {
        modal.style.display = 'none';
    });

    function simulatePaymentProcessing(method) {
        // Change Modal state to Processing
        document.getElementById('paymentInitState').style.display = 'none';
        document.getElementById('paymentProcessingState').style.display = 'block';

        // Add mock method to FormData
        currentFormData.append('payment_method', method);

        // Simulate network delay (2.5 seconds)
        setTimeout(() => {
            fetch('mock_process.php', {
                method: 'POST',
                body: currentFormData
            })
                .then(res => res.json())
                .then(data => {
                    // Close modal
                    modal.style.display = 'none';

                    if (data.status === 'success') {
                        // Secure escaping helper to prevent DOM XSS
                        const escapeHtml = (str) => {
                            if (!str) return '';
                            return String(str)
                                .replace(/&/g, '&amp;')
                                .replace(/</g, '&lt;')
                                .replace(/>/g, '&gt;')
                                .replace(/"/g, '&quot;')
                                .replace(/'/g, '&#39;');
                        };

                        const safeName = escapeHtml(data.name);
                        const safeActivity = escapeHtml(data.activity);
                        const safeTxnId = escapeHtml(data.transaction_id);
                        const safeAmount = escapeHtml(data.amount);
                        const safeDate = escapeHtml(data.date);
                        const safeEmail = escapeHtml(data.email || 'your provided address');

                        // Show glorious success alert mimicking Email & PDF generation
                        Swal.fire({
                            icon: 'success',
                            title: 'Payment Successful!',
                            html: `
                            <p>Thank you, <strong>${safeName}</strong>, for your generous donation towards <strong>${safeActivity}</strong>.</p>
                            <br>
                            <div style="text-align:left; background: rgba(0,0,0,0.2); padding: 15px; border-radius: 8px; font-size: 0.9rem;">
                                <strong>Txn ID:</strong> ${safeTxnId}<br>
                                <strong>Amount:</strong> ₹${safeAmount}<br>
                                <strong>Date:</strong> ${safeDate}<br>
                            </div>
                            <br>
                            <p style="font-size: 0.9rem; color: #4CAF50;"><i class="fas fa-envelope-open-text"></i> An automated acknowledgement email with your <strong>80G Receipt (PDF)</strong> has been successfully sent to ${safeEmail}.</p>
                            <p style="font-size: 0.8rem; color: #aaa; margin-top: 10px;">[Admin Alert Notification triggered successfully]</p>
                        `,
                            confirmButtonText: 'Great, Thanks!',
                            confirmButtonColor: '#ff5e3a',
                            background: '#1a1f2b',
                            color: '#ffffff'
                        }).then(() => {
                            // Reset form after acknowledgment
                            form.reset();
                        });
                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: 'Transaction Failed',
                            text: 'Something went wrong while processing your mock payment.',
                            background: '#1a1f2b',
                            color: '#ffffff'
                        });
                    }
                })
                .catch(err => {
                    modal.style.display = 'none';
                    Swal.fire('Error', 'Network Error processing request.', 'error');
                });

        }, 2500);
    }

</script>

<!-- Responsive CSS for donate page -->
<style>
    /* Desktop Grids */
    .donate-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 4rem;
        align-items: start;
    }

    .vision-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 1rem;
    }

    .form-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 1rem;
        margin-bottom: 1.2rem;
    }

    @media (max-width: 900px) {
        .donate-grid {
            grid-template-columns: 1fr;
            gap: 2.5rem;
        }
    }

    @media (max-width: 600px) {

        /* Collapse grids to single column */
        .vision-grid {
            grid-template-columns: 1fr;
        }

        .form-grid {
            grid-template-columns: 1fr;
        }

        /* Form Box Padding */
        .donate-form-wrapper {
            padding: 1.5rem !important;
        }

        /* Vision Section Alignment */
        .vision-details {
            text-align: center;
        }

        .vision-details .glass-card {
            padding: 1.2rem !important;
        }

        /* Header space reduction */
        .page-header {
            padding: 100px 15px 50px 15px !important;
        }

        /* Payment Modal space */
        #paymentModal .glass-card {
            padding: 1.5rem !important;
            margin: 1rem;
        }

        /* Make radio buttons align nicely */
        input[type="radio"] {
            margin-right: 0.2rem;
        }
    }
</style>

<?php include 'includes/footer.php'; ?>