<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- ==========================================================================
     About Section - Bijay Enterprises
     ========================================================================== -->
<section class="home-section about-section" id="aboutSection">
  <div class="container">
    <div class="row align-items-center g-4 g-lg-5">
      
      <!-- Left Column: Visual Showcase Card -->
      <div class="col-lg-6 order-2 order-lg-1">
        <div class="position-relative pb-4">
          <div class="about-image-card">
            <img src="<?= base_url('assets/img/about_factory.jpg') ?>" alt="<?= htmlspecialchars($company3) ?> Manufacturing Facility" class="img-fluid about-main-img w-100 d-block" loading="lazy">
            <div class="about-image-overlay"></div>
          </div>

          <!-- Floating Experience Badge -->
          <div class="about-floating-badge d-flex align-items-center">
            <div class="badge-icon-box d-flex align-items-center justify-content-center flex-shrink-0">
              <i class="bi bi-award-fill"></i>
            </div>
            <div class="badge-info">
              <span class="badge-number d-block lh-1">30+</span>
              <span class="badge-text d-block mt-1">Years of Engineering Excellence (Since 1996)</span>
            </div>
          </div>

          <!-- Secondary Trust Card -->
          <div class="about-trust-pill d-none d-sm-flex align-items-center rounded-pill">
            <i class="bi bi-shield-fill-check text-gold fs-4 me-2"></i>
            <div>
              <div class="trust-pill-title">SS 304 Food-Grade Certified</div>
              <div class="trust-pill-sub">Zero Rust • High Heat Tolerance • Laser Finish</div>
            </div>
          </div>
        </div>
      </div>

      <!-- Right Column: Brand Story & Pillars -->
      <div class="col-lg-6 order-1 order-lg-2">
        <div class="about-content ps-lg-3">
          <div class="d-inline-block mb-3">
            <span class="section-tag">
              <i class="bi bi-patch-check-fill text-gold"></i> ABOUT <?= htmlspecialchars($company3) ?>
            </span>
          </div>

          <h2 class="section-main-title mb-3">
            Engineering High-Performance <span class="text-brand-highlight">Commercial Kitchens</span> <span class="text-nowrap">Since 1996</span>
          </h2>

          <p class="about-lead-text">
            Based in Siliguri (West Bengal), <strong><?= htmlspecialchars($company3) ?></strong> is Eastern India’s premier manufacturer and turnkey contractor for commercial kitchen equipment, industrial bakery plants, heavy-gauge SS 304 fabrication, exhaust ventilation systems, and central LPG gas pipeline infrastructure.
          </p>

          <p class="about-desc-text">
            From luxury hotels and multi-cuisine fine dining restaurants to high-volume cloud kitchens, bakeries, and institutional hospitals, we transform culinary spaces into seamless, safe, and ultra-productive culinary powerhouses.
          </p>


          <!-- Action Buttons -->
          <div class="about-cta-strip d-flex flex-wrap align-items-center gap-3 pt-2">
            <button type="button" class="btn-home-primary" data-bs-toggle="modal" data-bs-target="#qteModal">
              <i class="bi bi-file-earmark-text-fill"></i>
              <span>Get Engineered Quotation</span>
            </button>
            <a <?= $phonehtml ?> class="btn-home-outline" title="Call Bijay Enterprises">
              <i class="bi bi-telephone-fill text-gold"></i>
              <span>Call Expert: <?= $phone ?></span>
            </a>
          </div>
        </div>
      </div>

    </div>

    <!-- Stats Bar -->
    <div class="about-stats-strip mt-5">
      <div class="row g-3 text-center">
        <div class="col-6 col-md-3">
          <div class="p-2">
            <div class="stat-number">30+</div>
            <div class="stat-label">Years of Mastery</div>
          </div>
        </div>
        <div class="col-6 col-md-3">
          <div class="p-2">
            <div class="stat-number">500+</div>
            <div class="stat-label">Kitchens Installed</div>
          </div>
        </div>
        <div class="col-6 col-md-3">
          <div class="p-2">
            <div class="stat-number">150+</div>
            <div class="stat-label">Equipment Models</div>
          </div>
        </div>
        <div class="col-6 col-md-3">
          <div class="p-2">
            <div class="stat-number">100%</div>
            <div class="stat-label">Client Satisfaction</div>
          </div>
        </div>
      </div>
    </div>

  </div>
</section>
