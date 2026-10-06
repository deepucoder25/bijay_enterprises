<!-- ==========================================================================
     Modern Premium Site Footer
     ========================================================================== -->
<footer class="site-footer" id="siteFooter">
  
  <!-- Subtle Top Gold Accent Line -->
  <div class="footer-top-accent-line"></div>


  <!-- Main Footer Content -->
  <div class="footer-main">
    <div class="container">
      <div class="row g-4">
        
        <!-- Col 1: Brand & Credibility -->
        <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
          <div class="footer-col-brand">
            <a href="<?= site_url() ?>" class="footer-brand-logo-wrap" aria-label="<?= htmlspecialchars($company3) ?> Home">
              <img src="<?= base_url('assets/img/logo/logo.png') ?>" alt="<?= htmlspecialchars($company3) ?>" class="footer-brand-logo" loading="lazy">
            </a>
            
            <p class="footer-brand-desc">
              Eastern India’s premier manufacturer and turnkey contractor for commercial kitchen equipment, bakery machinery, heavy-duty SS 304 fabrication, industrial ventilation, and central LPG gas pipeline infrastructure.
            </p>

            <div class="footer-trust-chips">
              <span class="trust-chip"><i class="bi bi-check-circle-fill text-gold"></i> Food Grade SS 304</span>
              <span class="trust-chip"><i class="bi bi-check-circle-fill text-gold"></i> Since 1996</span>
              <span class="trust-chip"><i class="bi bi-check-circle-fill text-gold"></i> Pan-India Setup</span>
            </div>

            <!-- Social Media Strip -->
            <div class="footer-social-strip">
              <a href="<?= $facebookhtml ?>" target="_blank" rel="noopener" class="footer-social-btn facebook" title="Follow us on Facebook" aria-label="Facebook">
                <i class="bi bi-facebook"></i>
              </a>
              <a href="<?= $instagramhtml ?>" target="_blank" rel="noopener" class="footer-social-btn instagram" title="Follow us on Instagram" aria-label="Instagram">
                <i class="bi bi-instagram"></i>
              </a>
              <a href="<?= $youtubehtml ?>" target="_blank" rel="noopener" class="footer-social-btn youtube" title="Watch on YouTube" aria-label="YouTube">
                <i class="bi bi-youtube"></i>
              </a>
              <a href="<?= $linkedinhtml ?>" target="_blank" rel="noopener" class="footer-social-btn linkedin" title="Connect on LinkedIn" aria-label="LinkedIn">
                <i class="bi bi-linkedin"></i>
              </a>
              <a href="<?= $whatsapphtml ?>" target="_blank" rel="noopener" class="footer-social-btn whatsapp" title="Chat on WhatsApp" aria-label="WhatsApp">
                <i class="bi bi-whatsapp"></i>
              </a>
            </div>
          </div>
        </div>

        <!-- Col 2: Product Catalogue (Exact items from Navbar) -->
        <div class="col-lg-3 col-md-6 col-sm-6 col-6 mb-4 mb-lg-0">
          <div class="footer-widget">
            <h4 class="footer-widget-title">Product Catalogue</h4>
            <ul class="footer-menu-links">
              <li><a href="<?= site_url('products/commercial-kitchen-equipment') ?>"><i class="bi bi-arrow-right-short"></i> Commercial Kitchen Equipment</a></li>
              <li><a href="<?= site_url('products/bakery-equipment') ?>"><i class="bi bi-arrow-right-short"></i> Bakery Equipment</a></li>
              <li><a href="<?= site_url('products/display-counter') ?>"><i class="bi bi-arrow-right-short"></i> Display Counter</a></li>
              <li><a href="<?= site_url('products/refrigeration-equipment') ?>"><i class="bi bi-arrow-right-short"></i> Refrigeration Equipment</a></li>
              <li><a href="<?= site_url('products/kitchen-ventilation-system') ?>"><i class="bi bi-arrow-right-short"></i> Kitchen Ventilation System</a></li>
              <li><a href="<?= site_url('products/washing-equipment') ?>"><i class="bi bi-arrow-right-short"></i> Washing Equipment</a></li>
              <li><a href="<?= site_url('products/lpg-gas-pipeline-installation') ?>"><i class="bi bi-arrow-right-short"></i> L.P.G. Gas Pipeline Installation</a></li>
            </ul>
          </div>
        </div>

        <!-- Col 3: Our Services (Exact items from Navbar) -->
        <div class="col-lg-3 col-md-6 col-sm-6 col-6 mb-4 mb-lg-0">
          <div class="footer-widget">
            <h4 class="footer-widget-title">Our Services</h4>
            <ul class="footer-menu-links">
              <li><a href="<?= site_url('services/commercial-kitchen-equipment') ?>"><i class="bi bi-arrow-right-short"></i> Commercial Kitchen Equipment</a></li>
              <li><a href="<?= site_url('services/bakery-food-service-equipment') ?>"><i class="bi bi-arrow-right-short"></i> Bakery &amp; Food Service Equipment</a></li>
              <li><a href="<?= site_url('services/refrigeration-ventilation-systems') ?>"><i class="bi bi-arrow-right-short"></i> Refrigeration &amp; Ventilation Systems</a></li>
              <li><a href="<?= site_url('services/lpg-gas-pipeline-installation') ?>"><i class="bi bi-arrow-right-short"></i> L.P.G. Gas Pipeline Installation</a></li>
              <li><a href="<?= site_url('services/custom-fabrication-installation') ?>"><i class="bi bi-arrow-right-short"></i> Custom Fabrication &amp; Installation</a></li>
            </ul>
          </div>
        </div>

        <!-- Col 4: Works & Factory Contact -->
        <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
          <div class="footer-widget">
            <h4 class="footer-widget-title">Works &amp; Head Office</h4>
            <div class="footer-contact-items">
              
              <div class="footer-contact-item">
                <div class="contact-item-icon">
                  <i class="bi bi-geo-alt-fill"></i>
                </div>
                <div class="contact-item-content">
                  <span class="contact-item-label">Factory &amp; Works:</span>
                  <p class="contact-item-val mb-0"><?= htmlspecialchars($address) ?></p>
                </div>
              </div>

              <div class="footer-contact-item">
                <div class="contact-item-icon">
                  <i class="bi bi-telephone-fill"></i>
                </div>
                <div class="contact-item-content">
                  <span class="contact-item-label">Direct Lines:</span>
                  <a <?= $phonehtml ?> class="contact-item-link"><?= $phone ?></a>
                  <a <?= $phonehtml1 ?> class="contact-item-link"><?= $phone1 ?></a>
                </div>
              </div>

              <div class="footer-contact-item">
                <div class="contact-item-icon">
                  <i class="bi bi-envelope-fill"></i>
                </div>
                <div class="contact-item-content">
                  <span class="contact-item-label">Technical Inquiries:</span>
                  <a href="<?= $mailhtml ?>" class="contact-item-link"><?= $mail ?></a>
                </div>
              </div>

            </div>
          </div>
        </div>

      </div>
    </div>
  </div>

  <!-- Value Feature Strip -->
  <div class="footer-feature-strip">
    <div class="container">
      <div class="row g-3">
        <div class="col-6 col-lg-3">
          <div class="footer-feature-box">
            <div class="feature-box-icon"><i class="bi bi-shield-check"></i></div>
            <div class="feature-box-text">
              <strong>100% SS 304 Grade</strong>
              <span>Certified Food-Grade Steel</span>
            </div>
          </div>
        </div>
        <div class="col-6 col-lg-3">
          <div class="footer-feature-box">
            <div class="feature-box-icon"><i class="bi bi-gear-wide-connected"></i></div>
            <div class="feature-box-text">
              <strong>Turnkey Execution</strong>
              <span>Concept to Commissioning</span>
            </div>
          </div>
        </div>
        <div class="col-6 col-lg-3">
          <div class="footer-feature-box">
            <div class="feature-box-icon"><i class="bi bi-truck"></i></div>
            <div class="feature-box-text">
              <strong>Pan-India Logistics</strong>
              <span>Safe Delivery &amp; Erection</span>
            </div>
          </div>
        </div>
        <div class="col-6 col-lg-3">
          <div class="footer-feature-box">
            <div class="feature-box-icon"><i class="bi bi-tools"></i></div>
            <div class="feature-box-text">
              <strong>Dedicated AMC Support</strong>
              <span>Engineers &amp; Genuine Spares</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Bottom Legal & Navigation Bar -->
  <div class="footer-bottom">
    <div class="container">
      <div class="row align-items-center g-3">
        <div class="col-md-7 text-center text-md-start">
          <p class="mb-0 copyright-text">
            &copy; <?= date('Y') ?> <strong><?= htmlspecialchars($company3) ?></strong>. All Rights Reserved.
            <span class="d-none d-sm-inline opacity-75">| Engineered for Heavy-Duty Commercial Operations.</span>
          </p>
        </div>
        <div class="col-md-5 text-center text-md-end">
          <div class="footer-bottom-nav">
            <a href="<?= site_url() ?>">Home</a>
            <span class="sep">•</span>
            <a href="<?= site_url('about-us') ?>">About Us</a>
            <span class="sep">•</span>
            <a href="<?= site_url('photo-gallery') ?>">Gallery</a>
            <span class="sep">•</span>
            <a href="<?= site_url('contact-us') ?>">Contact Us</a>
            <span class="sep">•</span>
            <a href="<?= site_url('privacy-policy') ?>">Privacy Policy</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>

<!-- Dual-Side Floating Action Buttons (Get Quote, Call & WhatsApp) -->
<?php $this->load->view('floating_btn'); ?>

<!-- Quotation Modal (contacts/quotemodal) -->
<?php if (file_exists(APPPATH . 'modules/contacts/views/quotemodal.php')) {
  $this->load->view('contacts/quotemodal');
} ?>

<!-- Bootstrap 5 Bundle JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<!-- AJAX Form Handler -->
<script src="<?= base_url('assets/js/form.js') ?>"></script>

<!-- Main Application Combined Script -->
<script src="<?= base_url('assets/js/main.js') ?>?v=<?= @filemtime(FCPATH . 'assets/js/main.js') ?: '1.0' ?>"></script>
</body>
</html>
