<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- ==========================================================================
     Breadcrumbs Section (Light BG + SVG Design)
     ========================================================================== -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'Contact Bijay Enterprises',
    'bc_desc' => 'Connect directly with our engineering and fabrication team in Siliguri. Request custom SS 304 quotes, schedule a factory inspection, or discuss turnkey commercial kitchen planning.',
    'breadcrumbs' => [
        ['name' => 'Contact Us']
    ]
]); ?>

<!-- ==========================================================================
     Contact Main Section
     ========================================================================== -->
<section class="contact-page-section">
  <div class="container">

    <!-- 1. Contact Highlight Cards Grid -->
    <div class="row g-3 g-lg-4 mb-5">
      
      <!-- Card 1: Factory Works & Address -->
      <div class="col-sm-6 col-lg-3">
        <div class="contact-info-card h-100">
          <div class="contact-card-header d-flex align-items-center justify-content-between gap-2">
            <div class="contact-card-icon-wrap contact-icon-gold d-flex align-items-center justify-content-center flex-shrink-0">
              <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"/>
                <circle cx="12" cy="10" r="3"/>
              </svg>
            </div>
            <span class="contact-card-badge">HEADQUARTERS & WORKS</span>
          </div>
          <div class="contact-card-body">
            <h3 class="contact-card-title">Siliguri Manufacturing Facility</h3>
            <p class="contact-card-text">
              <?= htmlspecialchars($address) ?>
            </p>
          </div>
        </div>
      </div>

      <!-- Card 2: Direct Hotline -->
      <div class="col-sm-6 col-lg-3">
        <div class="contact-info-card h-100">
          <div class="contact-card-header d-flex align-items-center justify-content-between gap-2">
            <div class="contact-card-icon-wrap contact-icon-primary d-flex align-items-center justify-content-center flex-shrink-0">
              <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/>
              </svg>
            </div>
            <span class="contact-card-badge">DIRECT ENGINEER LINE</span>
          </div>
          <div class="contact-card-body">
            <h3 class="contact-card-title">Call For Equipment Quotes</h3>
            <div class="contact-phones-list d-flex flex-column gap-2">
              <a <?= $phonehtml ?> class="contact-phone-link text-decoration-none">
                <span class="phone-tag">Primary:</span> <?= htmlspecialchars($phone) ?>
              </a>
              <?php if (!empty($phone1)): ?>
                <a <?= $phonehtml1 ?> class="contact-phone-link text-decoration-none">
                  <span class="phone-tag">Support:</span> <?= htmlspecialchars($phone1) ?>
                </a>
              <?php endif; ?>
            </div>
          </div>
        </div>
      </div>

      <!-- Card 3: Email Desk -->
      <div class="col-sm-6 col-lg-3">
        <div class="contact-info-card h-100">
          <div class="contact-card-header d-flex align-items-center justify-content-between gap-2">
            <div class="contact-card-icon-wrap contact-icon-dark d-flex align-items-center justify-content-center flex-shrink-0">
              <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <rect width="20" height="16" x="2" y="4" rx="2"/>
                <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/>
              </svg>
            </div>
            <span class="contact-card-badge">OFFICIAL INQUIRY DESK</span>
          </div>
          <div class="contact-card-body">
            <h3 class="contact-card-title">Email BOQ & CAD Blueprints</h3>
            <p class="contact-card-text">
              Send architectural blueprints or equipment specifications directly to our desk:
            </p>
            <a <?= $mailhtml ?> class="contact-email-link text-decoration-none">
              <?= htmlspecialchars($mail) ?>
            </a>
          </div>
        </div>
      </div>

      <!-- Card 4: WhatsApp Direct Desk -->
      <div class="col-sm-6 col-lg-3">
        <div class="contact-info-card h-100">
          <div class="contact-card-header d-flex align-items-center justify-content-between gap-2">
            <div class="contact-card-icon-wrap contact-icon-whatsapp d-flex align-items-center justify-content-center flex-shrink-0">
              <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M3 21l1.65-3.8a9 9 0 1 1 3.4 2.9L3 21"/>
                <path d="M9 10a.5.5 0 0 0 1 0V9a.5.5 0 0 0-1 0v1a5 5 0 0 0 5 5h1a.5.5 0 0 0 0-1h-1a.5.5 0 0 0 0 1"/>
              </svg>
            </div>
            <span class="contact-card-badge">INSTANT CHAT DESK</span>
          </div>
          <div class="contact-card-body">
            <h3 class="contact-card-title">WhatsApp Quick Estimates</h3>
            <p class="contact-card-text">
              Chat instantly with our technical sales team for immediate equipment pricing & catalogs.
            </p>
            <a href="<?= $whatsapphtml ?>" target="_blank" rel="noopener noreferrer" class="contact-card-action contact-action-whatsapp d-inline-flex align-items-center gap-2 text-decoration-none">
              <span>Chat on WhatsApp</span>
              <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="9 18 15 12 9 6"/>
              </svg>
            </a>
          </div>
        </div>
      </div>

    </div>

    <!-- 2. Main Two-Column Stage: Form + Map & Details -->
    <div class="row g-4 g-lg-5 align-items-start">
      
      <!-- Left Column: Modern Contact Form -->
      <div class="col-lg-7">
        <div class="contact-form-card">
          <div class="contact-form-header">
            <div class="d-inline-flex align-items-center gap-2 mb-2">
              <span class="contact-badge-pill">
                <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
                QUICK RESPONSE GUARANTEED
              </span>
            </div>
            <h2 class="contact-form-title">Send Us a Direct Message</h2>
            <p class="contact-form-subtitle">
              Provide your details below and a senior fabrication engineer will contact you with exact technical specifications and pricing.
            </p>
          </div>

          <form id="contactform" class="ajax-form contact-form-body" data-url="<?php echo site_url('contacts/contact') ?>" data-result="contactformresults" onsubmit="return false;">
            <div class="row g-3">
              <!-- Full Name -->
              <div class="col-md-6">
                <label class="form-label fw-bold text-dark small mb-1.5">Your Full Name <span class="text-danger">*</span></label>
                <div class="cnt-input-group-stylish">
                  <div class="cnt-input-addon">
                    <i class="bi bi-person-fill"></i>
                  </div>
                  <input type="text" name="name" class="cnt-input-field" placeholder="e.g. Rahul Sharma" required>
                </div>
              </div>

              <!-- Phone Number -->
              <div class="col-md-6">
                <label class="form-label fw-bold text-dark small mb-1.5">Phone / Mobile Number <span class="text-danger">*</span></label>
                <div class="cnt-input-group-stylish">
                  <div class="cnt-input-addon">
                    <i class="bi bi-telephone-fill"></i>
                  </div>
                  <input type="tel" name="phone" maxlength="10" class="cnt-input-field" placeholder="e.g. 9876543210" required>
                </div>
              </div>

              <!-- Email -->
              <div class="col-md-6">
                <label class="form-label fw-bold text-dark small mb-1.5">Email Address</label>
                <div class="cnt-input-group-stylish">
                  <div class="cnt-input-addon">
                    <i class="bi bi-envelope-fill"></i>
                  </div>
                  <input type="email" name="email" class="cnt-input-field" placeholder="e.g. rahul@example.com">
                </div>
              </div>

              <!-- Required Service -->
              <div class="col-md-6">
                <label class="form-label fw-bold text-dark small mb-1.5">Required Service / Machinery</label>
                <div class="cnt-input-group-stylish">
                  <div class="cnt-input-addon">
                    <i class="bi bi-gear-fill"></i>
                  </div>
                  <select name="service" class="cnt-input-field form-select border-0">
                    <option value="Commercial Kitchen Equipment">Commercial Kitchen Equipment</option>
                    <option value="Industrial Bakery Machinery">Industrial Bakery Machinery</option>
                    <option value="SS 304 Custom Fabrication">SS 304 Custom Fabrication</option>
                    <option value="Kitchen Exhaust & Ventilation">Kitchen Exhaust &amp; Ventilation</option>
                    <option value="Commercial LPG Gas Pipeline">Commercial LPG Gas Pipeline</option>
                    <option value="Turnkey Commercial Kitchen Setup">Turnkey Kitchen Project Setup</option>
                    <option value="Household Shifting">Household Shifting</option>
                    <option value="Bike Transportation">Bike Transportation</option>
                    <option value="Car Transportation">Car Transportation</option>
                    <option value="Office Relocation">Office Relocation</option>
                  </select>
                </div>
              </div>

              <!-- Message -->
              <div class="col-12">
                <label class="form-label fw-bold text-dark small mb-1.5">Your Message / Requirements</label>
                <div class="cnt-input-group-stylish align-items-start">
                  <div class="cnt-input-addon pt-3">
                    <i class="bi bi-chat-left-text-fill"></i>
                  </div>
                  <textarea name="message" class="cnt-input-field" rows="4" placeholder="Tell us your requirements, equipment needed, or specifications..."></textarea>
                </div>
              </div>

              <!-- Submit Button -->
              <div class="col-12 mt-4">
                <button type="submit" class="cnt-contact-submit-btn w-100 d-inline-flex align-items-center justify-content-center gap-2">
                  <i class="bi bi-send-fill"></i>
                  <span>Send Message &amp; Get Free Quote</span>
                </button>
              </div>
            </div>

            <!-- Form Result Message Containers -->
            <div id="contactformresults" class="mt-3"></div>
            <div id="resultContactFormPage" class="mt-3"></div>
          </form>
        </div>
      </div>

      <!-- Right Column: Working Hours & Facility Map -->
      <div class="col-lg-5">
        <div class="contact-sidebar-stack">
          
          <!-- Interactive Map Container -->
          <div class="contact-map-card h-100">
            <div class="contact-map-header">
              <span class="contact-map-tag">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
                Works Location
              </span>
              <span class="contact-map-city">Siliguri, West Bengal</span>
            </div>
            <div class="contact-map-frame h-100">
              <iframe 
                src="https://maps.google.com/maps?q=Jhankar%20More,%204th%20Mahananda%20Bridge,%20Siliguri,%20Darjeeling&amp;t=&amp;z=15&amp;ie=UTF8&amp;iwloc=&amp;output=embed" 
                width="100%" 
                height="450" 
                style="border:0; min-height: 420px;" 
                allowfullscreen="" 
                loading="lazy" 
                referrerpolicy="no-referrer-when-downgrade" 
                title="Bijay Enterprises Location">
              </iframe>
            </div>
          </div>

        </div>
      </div>

    </div>

    <!-- 3. Bottom Trust Bar -->
    <div class="contact-trust-strip mt-5">
      <div class="row g-3">
        <div class="col-md-4">
          <div class="contact-trust-item d-flex align-items-start gap-3">
            <div class="trust-item-icon d-flex align-items-center justify-content-center flex-shrink-0">
              <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><polyline points="9 12 11 14 15 10"/></svg>
            </div>
            <div class="trust-item-content">
              <strong>Certified Food-Grade SS 304</strong>
              <p>Heavy gauge non-magnetic stainless steel with lifetime rust resistance.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="contact-trust-item d-flex align-items-start gap-3">
            <div class="trust-item-icon d-flex align-items-center justify-content-center flex-shrink-0">
              <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect width="20" height="14" x="2" y="5" rx="2"/><line x1="2" y1="10" x2="22" y2="10"/></svg>
            </div>
            <div class="trust-item-content">
              <strong>Factory Direct Pricing</strong>
              <p>Direct manufacturer rates without middleman commissions or dealer markups.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="contact-trust-item d-flex align-items-start gap-3">
            <div class="trust-item-icon d-flex align-items-center justify-content-center flex-shrink-0">
              <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"/></svg>
            </div>
            <div class="trust-item-content">
              <strong>Turnkey Installation &amp; Blueprints</strong>
              <p>Custom CAD planning, exhaust ducting, and PESO gas manifold commission.</p>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
</section>