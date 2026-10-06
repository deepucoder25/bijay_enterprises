<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- ==========================================================================
     Services Section - Bijay Enterprises (From Navbar Services)
     ========================================================================== -->
<section class="home-section services-section" id="servicesShowcase">

  <!-- Section Background Decorative Art (Blueprint Grid, Ornaments & Ambient Glows) -->
  <div class="services-section-bg-art position-absolute top-0 start-0 w-100 h-100 overflow-hidden" aria-hidden="true">
    <!-- SVG Technical Engineering Grid Pattern -->
    <svg class="services-bg-grid position-absolute top-0 start-0 w-100 h-100" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg">
      <defs>
        <pattern id="svcEngineeringGrid" width="48" height="48" patternUnits="userSpaceOnUse">
          <path d="M 48 0 L 0 0 0 48" fill="none" stroke="rgba(148, 163, 184, 0.16)" stroke-width="1"/>
          <!-- Minor subdivisions -->
          <path d="M 24 0 L 24 48 M 0 24 L 48 24" fill="none" stroke="rgba(148, 163, 184, 0.08)" stroke-width="0.8" stroke-dasharray="2 2"/>
          <!-- Technical intersection points -->
          <circle cx="0" cy="0" r="1.6" fill="rgba(152, 1, 1, 0.28)"/>
          <circle cx="48" cy="0" r="1.6" fill="rgba(152, 1, 1, 0.28)"/>
          <circle cx="0" cy="48" r="1.6" fill="rgba(152, 1, 1, 0.28)"/>
          <circle cx="48" cy="48" r="1.6" fill="rgba(152, 1, 1, 0.28)"/>
          <circle cx="24" cy="24" r="1" fill="rgba(212, 175, 55, 0.35)"/>
        </pattern>
        <linearGradient id="svcGridFadeMask" x1="0" y1="0" x2="0" y2="1">
          <stop offset="0%" stop-color="#ffffff" stop-opacity="0.95"/>
          <stop offset="60%" stop-color="#ffffff" stop-opacity="0.8"/>
          <stop offset="100%" stop-color="#ffffff" stop-opacity="0.25"/>
        </linearGradient>
        <mask id="svcGridMask">
          <rect width="100%" height="100%" fill="url(#svcGridFadeMask)"/>
        </mask>
      </defs>
      <rect width="100%" height="100%" fill="url(#svcEngineeringGrid)" mask="url(#svcGridMask)"/>
    </svg>

    <!-- Top-Left Architectural Drafting Compass & Axis Lines -->
    <svg class="bg-ornament-left position-absolute pe-none" viewBox="0 0 450 450" fill="none" xmlns="http://www.w3.org/2000/svg">
      <circle cx="150" cy="150" r="220" stroke="rgba(152, 1, 1, 0.08)" stroke-width="1.5" stroke-dasharray="8 6"/>
      <circle cx="150" cy="150" r="160" stroke="rgba(212, 175, 55, 0.1)" stroke-width="1.2"/>
      <circle cx="150" cy="150" r="90" stroke="rgba(152, 1, 1, 0.1)" stroke-width="1.5"/>
      <line x1="0" y1="150" x2="380" y2="150" stroke="rgba(148, 163, 184, 0.18)" stroke-width="1" stroke-dasharray="4 4"/>
      <line x1="150" y1="0" x2="150" y2="380" stroke="rgba(148, 163, 184, 0.18)" stroke-width="1" stroke-dasharray="4 4"/>
      <path d="M150 50 L155 62 H145 Z" fill="rgba(152, 1, 1, 0.18)"/>
      <path d="M250 150 L238 155 V145 Z" fill="rgba(152, 1, 1, 0.18)"/>
      <circle cx="150" cy="150" r="4" fill="#980101"/>
    </svg>

    <!-- Top-Right Heavy Engineering Fluid Dynamic Curves & Gear Accent -->
    <svg class="bg-ornament-right position-absolute pe-none" viewBox="0 0 500 500" fill="none" xmlns="http://www.w3.org/2000/svg">
      <circle cx="360" cy="140" r="200" stroke="rgba(212, 175, 55, 0.09)" stroke-width="1.5" stroke-dasharray="10 8"/>
      <circle cx="360" cy="140" r="130" stroke="rgba(152, 1, 1, 0.08)" stroke-width="1.2"/>
      <!-- Aerodynamic CFM Exhaust Curves -->
      <path d="M100 280C180 250 280 250 360 210C430 180 470 120 490 60" stroke="rgba(152, 1, 1, 0.09)" stroke-width="2.2" stroke-linecap="round"/>
      <path d="M140 320C220 280 300 280 380 240C440 210 480 160 500 100" stroke="rgba(212, 175, 55, 0.09)" stroke-width="1.8" stroke-dasharray="6 4" stroke-linecap="round"/>
      <path d="M180 360C260 320 340 310 420 270" stroke="rgba(148, 163, 184, 0.12)" stroke-width="1.2" stroke-dasharray="4 4" stroke-linecap="round"/>
      <!-- Engineering Hub -->
      <circle cx="360" cy="140" r="10" fill="rgba(212, 175, 55, 0.2)"/>
      <circle cx="360" cy="140" r="4" fill="#d4af37"/>
    </svg>

    <!-- Ambient Glowing Light Orbs -->
    <div class="services-ambient-glow glow-top"></div>
    <div class="services-ambient-glow glow-gold"></div>
    <div class="services-ambient-glow glow-crimson"></div>
  </div>

  <div class="container-fluid services-container-custom">

    <!-- Section Header -->
    <div class="section-header text-center mb-5">
      <div class="d-inline-block mb-2">
        <span class="section-tag">
          <i class="bi bi-gear-wide-connected text-gold"></i> OUR SERVICES
        </span>
      </div>
      <h2 class="section-main-title">
        End-to-End <span class="text-brand-highlight">Commercial Kitchen Engineering</span>
      </h2>
      <p class="section-subtitle mx-auto">
        From empty commercial floors to buzzing, fully operational commercial kitchens. We handle turnkey design, precision fabrication, ventilation, safety pipelines, and lifelong maintenance.
      </p>
    </div>

    <!-- 5 Core Services in One Row -->
    <div class="services-grid-5">
      
      <!-- 1. Commercial Kitchen Equipment Setup -->
      <div class="service-card service-card--kitchen" onclick="window.location.href='<?= site_url('services/commercial-kitchen-equipment') ?>';">
        <a href="<?= site_url('services/commercial-kitchen-equipment') ?>" class="service-card-stretched-link" aria-label="Commercial Kitchen Equipment"></a>
        <!-- Thematic SVG Watermark in Background -->
        <svg class="service-bg-art" viewBox="0 0 180 180" fill="none" xmlns="http://www.w3.org/2000/svg">
          <line x1="20" y1="20" x2="180" y2="20" stroke="currentColor" stroke-dasharray="3 3"/>
          <line x1="20" y1="50" x2="180" y2="50" stroke="currentColor" stroke-dasharray="3 3"/>
          <line x1="20" y1="80" x2="180" y2="80" stroke="currentColor" stroke-dasharray="3 3"/>
          <line x1="20" y1="110" x2="180" y2="110" stroke="currentColor" stroke-dasharray="3 3"/>
          <line x1="50" y1="0" x2="50" y2="160" stroke="currentColor" stroke-dasharray="3 3"/>
          <line x1="90" y1="0" x2="90" y2="160" stroke="currentColor" stroke-dasharray="3 3"/>
          <line x1="130" y1="0" x2="130" y2="160" stroke="currentColor" stroke-dasharray="3 3"/>
          <rect x="85" y="45" width="75" height="75" rx="6" stroke="currentColor" stroke-width="1.8"/>
          <circle cx="104" cy="64" r="10" stroke="currentColor" stroke-width="1.5"/>
          <circle cx="104" cy="64" r="3" fill="currentColor"/>
          <circle cx="141" cy="64" r="10" stroke="currentColor" stroke-width="1.5"/>
          <circle cx="141" cy="64" r="3" fill="currentColor"/>
          <circle cx="104" cy="101" r="10" stroke="currentColor" stroke-width="1.5"/>
          <circle cx="104" cy="101" r="3" fill="currentColor"/>
          <circle cx="141" cy="101" r="10" stroke="currentColor" stroke-width="1.5"/>
          <circle cx="141" cy="101" r="3" fill="currentColor"/>
          <line x1="85" y1="35" x2="160" y2="35" stroke="currentColor" stroke-width="1.2"/>
          <path d="M88 32L85 35L88 38" stroke="currentColor" stroke-width="1.2"/>
          <path d="M157 32L160 35L157 38" stroke="currentColor" stroke-width="1.2"/>
          <path d="M130 145C125 145 120 141 121 135C117 134 115 128 118 124C116 119 119 113 124 113C126 110 131 110 134 112C138 108 145 109 148 114C153 113 158 118 156 123C159 127 157 133 153 135C154 141 149 145 144 145H130Z" stroke="currentColor" stroke-width="1.4" stroke-linejoin="round"/>
          <path d="M125 145H149V151H125V145Z" stroke="currentColor" stroke-width="1.4"/>
        </svg>

        <div class="service-card-top position-relative d-flex align-items-center justify-content-between mb-2">
          <div class="service-icon-box d-flex align-items-center justify-content-center">
            <!-- Custom Kitchen Setup SVG Icon -->
            <svg width="28" height="28" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
              <rect x="5" y="16" width="30" height="19" rx="3" fill="#ffffff" stroke="#980101" stroke-width="2"/>
              <path d="M4 16H36" stroke="#980101" stroke-width="2.5" stroke-linecap="round"/>
              <circle cx="13" cy="22" r="3.5" stroke="#f59e0b" stroke-width="1.8"/>
              <circle cx="13" cy="22" r="1.2" fill="#ea580c"/>
              <circle cx="27" cy="22" r="3.5" stroke="#f59e0b" stroke-width="1.8"/>
              <circle cx="27" cy="22" r="1.2" fill="#ea580c"/>
              <rect x="10" y="28" width="20" height="4" rx="1.5" fill="#fee2e2" stroke="#dc2626" stroke-width="1"/>
              <path d="M10 5L7 11H33L30 5H10Z" fill="#fee2e2" stroke="#980101" stroke-width="1.8" stroke-linejoin="round"/>
              <rect x="17" y="2" width="6" height="3" fill="#980101"/>
              <path d="M14 13C14 12 15 11 15 10" stroke="#f59e0b" stroke-width="1.5" stroke-linecap="round"/>
              <path d="M20 13C20 12 21 11 21 10" stroke="#f59e0b" stroke-width="1.5" stroke-linecap="round"/>
              <path d="M26 13C26 12 27 11 27 10" stroke="#f59e0b" stroke-width="1.5" stroke-linecap="round"/>
            </svg>
          </div>
          <span class="service-number-pill rounded-pill">01</span>
        </div>

        <span class="service-tag-label">KITCHEN PLANNING</span>
        <h3 class="service-title">
          <a href="<?= site_url('services/commercial-kitchen-equipment') ?>">Commercial Kitchen Equipment</a>
        </h3>
        <p class="service-desc">
          Turnkey culinary facility engineering with customized 2D/3D CAD floor blueprints, ergonomic prep/cook zoning, and utility mapping.
        </p>

        <ul class="service-perks-list list-unstyled d-flex flex-column flex-grow-1 mb-3">
          <li class="d-flex align-items-start">
            <svg class="service-perk-svg" width="15" height="15" viewBox="0 0 16 16" fill="none">
              <circle cx="8" cy="8" r="7.5" fill="#fef2f2" stroke="#fecaca"/>
              <path d="M4.5 8.2L6.8 10.5L11.5 5.8" stroke="#980101" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span>2D/3D CAD Layout Blueprints</span>
          </li>
          <li class="d-flex align-items-start">
            <svg class="service-perk-svg" width="15" height="15" viewBox="0 0 16 16" fill="none">
              <circle cx="8" cy="8" r="7.5" fill="#fef2f2" stroke="#fecaca"/>
              <path d="M4.5 8.2L6.8 10.5L11.5 5.8" stroke="#980101" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span>HACCP Food Safety Standards</span>
          </li>
          <li class="d-flex align-items-start">
            <svg class="service-perk-svg" width="15" height="15" viewBox="0 0 16 16" fill="none">
              <circle cx="8" cy="8" r="7.5" fill="#fef2f2" stroke="#fecaca"/>
              <path d="M4.5 8.2L6.8 10.5L11.5 5.8" stroke="#980101" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span>Ergonomic Chef Workflow</span>
          </li>
        </ul>

        <div class="service-footer position-relative mt-auto">
          <a href="<?= site_url('services/commercial-kitchen-equipment') ?>" class="service-link-btn w-100 d-inline-flex align-items-center justify-content-between text-decoration-none">
            <span>Consult Kitchen</span>
            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
              <line x1="5" y1="12" x2="19" y2="12"></line>
              <polyline points="12 5 19 12 12 19"></polyline>
            </svg>
          </a>
        </div>

        <!-- Corner Accent Curve -->
        <svg class="service-corner-accent position-absolute bottom-0 end-0 pe-none" width="60" height="20" viewBox="0 0 60 20" fill="none">
          <path d="M0 20C15 20 25 10 40 10C50 10 55 5 60 0" stroke="var(--svc-color)" stroke-width="1.2" opacity="0.25" stroke-dasharray="2 3"/>
        </svg>
      </div>

      <!-- 2. Bakery & Food Service Equipment -->
      <div class="service-card service-card--bakery" onclick="window.location.href='<?= site_url('services/bakery-food-service-equipment') ?>';">
        <a href="<?= site_url('services/bakery-food-service-equipment') ?>" class="service-card-stretched-link" aria-label="Bakery & Food Service Equipment"></a>
        <!-- Thematic SVG Watermark in Background -->
        <svg class="service-bg-art" viewBox="0 0 180 180" fill="none" xmlns="http://www.w3.org/2000/svg">
          <circle cx="125" cy="55" r="32" stroke="currentColor" stroke-width="1.5" stroke-dasharray="6 4"/>
          <circle cx="125" cy="55" r="22" stroke="currentColor" stroke-width="1.2"/>
          <circle cx="125" cy="55" r="8" fill="currentColor"/>
          <line x1="125" y1="18" x2="125" y2="92" stroke="currentColor" stroke-width="1.2"/>
          <line x1="88" y1="55" x2="162" y2="55" stroke="currentColor" stroke-width="1.2"/>
          <line x1="99" y1="29" x2="151" y2="81" stroke="currentColor" stroke-width="1.2"/>
          <line x1="99" y1="81" x2="151" y2="29" stroke="currentColor" stroke-width="1.2"/>
          <path d="M70 160C85 140 105 110 115 85" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"/>
          <ellipse cx="80" cy="140" rx="6" ry="3.5" transform="rotate(-30 80 140)" stroke="currentColor" stroke-width="1.2"/>
          <ellipse cx="90" cy="136" rx="6" ry="3.5" transform="rotate(30 90 136)" stroke="currentColor" stroke-width="1.2"/>
          <ellipse cx="92" cy="118" rx="6" ry="3.5" transform="rotate(-30 92 118)" stroke="currentColor" stroke-width="1.2"/>
          <ellipse cx="102" cy="114" rx="6" ry="3.5" transform="rotate(30 102 114)" stroke="currentColor" stroke-width="1.2"/>
          <path d="M120 135C120 125 130 120 145 120C160 120 170 125 170 135C170 142 165 146 145 146C125 146 120 142 120 135Z" stroke="currentColor" stroke-width="1.4"/>
          <path d="M130 123L135 131" stroke="currentColor" stroke-width="1.2"/>
          <path d="M142 121L147 131" stroke="currentColor" stroke-width="1.2"/>
          <path d="M154 123L159 131" stroke="currentColor" stroke-width="1.2"/>
        </svg>

        <div class="service-card-top position-relative d-flex align-items-center justify-content-between mb-2">
          <div class="service-icon-box d-flex align-items-center justify-content-center">
            <!-- Custom Bakery SVG Icon -->
            <svg width="28" height="28" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M8 35H32C33.1 35 34 34.1 34 33V28C34 26.9 33.1 26 32 26H31V12C31 8.7 28.3 6 25 6H13C10.8 6 9 7.8 9 10V14H24C25.1 14 26 14.9 26 16C26 17.1 25.1 18 24 18H9V33C9 34.1 9.9 35 11 35H8Z" fill="#fffbeb" stroke="#b45309" stroke-width="1.8"/>
              <path d="M12 20H28C28 27 24.5 31 20 31C15.5 31 12 27 12 20Z" fill="#ffffff" stroke="#b45309" stroke-width="2"/>
              <line x1="10" y1="20" x2="30" y2="20" stroke="#f59e0b" stroke-width="2" stroke-linecap="round"/>
              <path d="M20 18V23C20 25 22 26 22 27C22 28 20.5 28.5 19 28" stroke="#d97706" stroke-width="2" stroke-linecap="round"/>
              <circle cx="27" cy="10" r="2" fill="#d97706"/>
              <path d="M4 14C5.5 12 6.5 9 6 6C8.5 7 10 9 9 12C11 10.5 13 11 13 13C11 14 9 14.5 7 16" stroke="#f59e0b" stroke-width="1.4" stroke-linecap="round"/>
            </svg>
          </div>
          <span class="service-number-pill rounded-pill">02</span>
        </div>

        <span class="service-tag-label">BAKERY PLANTS</span>
        <h3 class="service-title">
          <a href="<?= site_url('services/bakery-food-service-equipment') ?>">Bakery &amp; Food Service Equipment</a>
        </h3>
        <p class="service-desc">
          Industrial baking machinery for commercial bread plants, patisseries, artisan cafes, and confectionery factories.
        </p>

        <ul class="service-perks-list list-unstyled d-flex flex-column flex-grow-1 mb-3">
          <li class="d-flex align-items-start">
            <svg class="service-perk-svg" width="15" height="15" viewBox="0 0 16 16" fill="none">
              <circle cx="8" cy="8" r="7.5" fill="#fffbeb" stroke="#fef3c7"/>
              <path d="M4.5 8.2L6.8 10.5L11.5 5.8" stroke="#b45309" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span>Rotary Rack &amp; Deck Ovens</span>
          </li>
          <li class="d-flex align-items-start">
            <svg class="service-perk-svg" width="15" height="15" viewBox="0 0 16 16" fill="none">
              <circle cx="8" cy="8" r="7.5" fill="#fffbeb" stroke="#fef3c7"/>
              <path d="M4.5 8.2L6.8 10.5L11.5 5.8" stroke="#b45309" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span>Spiral Mixers &amp; Dough Sheeters</span>
          </li>
          <li class="d-flex align-items-start">
            <svg class="service-perk-svg" width="15" height="15" viewBox="0 0 16 16" fill="none">
              <circle cx="8" cy="8" r="7.5" fill="#fffbeb" stroke="#fef3c7"/>
              <path d="M4.5 8.2L6.8 10.5L11.5 5.8" stroke="#b45309" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span>Batch Capacity Engineering</span>
          </li>
        </ul>

        <div class="service-footer position-relative mt-auto">
          <a href="<?= site_url('services/bakery-food-service-equipment') ?>" class="service-link-btn w-100 d-inline-flex align-items-center justify-content-between text-decoration-none">
            <span>Consult Bakery</span>
            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
              <line x1="5" y1="12" x2="19" y2="12"></line>
              <polyline points="12 5 19 12 12 19"></polyline>
            </svg>
          </a>
        </div>

        <!-- Corner Accent Curve -->
        <svg class="service-corner-accent position-absolute bottom-0 end-0 pe-none" width="60" height="20" viewBox="0 0 60 20" fill="none">
          <path d="M0 20C15 20 25 10 40 10C50 10 55 5 60 0" stroke="var(--svc-color)" stroke-width="1.2" opacity="0.25" stroke-dasharray="2 3"/>
        </svg>
      </div>

      <!-- 3. Refrigeration & Ventilation Systems -->
      <div class="service-card service-card--ventilation" onclick="window.location.href='<?= site_url('services/refrigeration-ventilation-systems') ?>';">
        <a href="<?= site_url('services/refrigeration-ventilation-systems') ?>" class="service-card-stretched-link" aria-label="Refrigeration & Ventilation Systems"></a>
        <!-- Thematic SVG Watermark in Background -->
        <svg class="service-bg-art" viewBox="0 0 180 180" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M40 160C45 130 65 110 85 95C110 75 140 70 170 50" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/>
          <path d="M60 170C65 145 80 128 100 115C125 100 148 92 175 75" stroke="currentColor" stroke-width="1.4" stroke-dasharray="4 3"/>
          <path d="M25 145C30 120 48 100 68 85C92 68 120 60 150 40" stroke="currentColor" stroke-width="1.2" stroke-dasharray="6 4"/>
          <path d="M130 35C148 35 162 48 162 65C162 82 148 95 130 95C112 95 100 82 100 65C100 50 112 38 126 38" stroke="currentColor" stroke-width="1.5"/>
          <circle cx="131" cy="65" r="6" fill="currentColor"/>
          <g transform="translate(145, 135)">
            <line x1="-18" y1="0" x2="18" y2="0" stroke="currentColor" stroke-width="1.5"/>
            <line x1="0" y1="-18" x2="0" y2="18" stroke="currentColor" stroke-width="1.5"/>
            <line x1="-12" y1="-12" x2="12" y2="12" stroke="currentColor" stroke-width="1.2"/>
            <line x1="-12" y1="12" x2="12" y2="-12" stroke="currentColor" stroke-width="1.2"/>
            <path d="M-5 -13L0 -18L5 -13" stroke="currentColor" stroke-width="1.2"/>
            <path d="M-5 13L0 18L5 13" stroke="currentColor" stroke-width="1.2"/>
            <path d="M-13 -5L-18 0L-13 5" stroke="currentColor" stroke-width="1.2"/>
            <path d="M13 -5L18 0L13 5" stroke="currentColor" stroke-width="1.2"/>
          </g>
        </svg>

        <div class="service-card-top position-relative d-flex align-items-center justify-content-between mb-2">
          <div class="service-icon-box d-flex align-items-center justify-content-center">
            <!-- Custom Ventilation & Cold SVG Icon -->
            <svg width="28" height="28" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M6 14L10 6H30L34 14H6Z" fill="#f0f9ff" stroke="#0284c7" stroke-width="2" stroke-linejoin="round"/>
              <rect x="16" y="2" width="8" height="4" fill="#e0f2fe" stroke="#0284c7" stroke-width="1.5"/>
              <line x1="5" y1="14" x2="35" y2="14" stroke="#0284c7" stroke-width="2.5" stroke-linecap="round"/>
              <line x1="12" y1="11" x2="15" y2="9" stroke="#38bdf8" stroke-width="1.5" stroke-linecap="round"/>
              <line x1="19" y1="11" x2="22" y2="9" stroke="#38bdf8" stroke-width="1.5" stroke-linecap="round"/>
              <line x1="26" y1="11" x2="29" y2="9" stroke="#38bdf8" stroke-width="1.5" stroke-linecap="round"/>
              <g transform="translate(20, 26)">
                <line x1="0" y1="-8" x2="0" y2="8" stroke="#0284c7" stroke-width="2" stroke-linecap="round"/>
                <line x1="-8" y1="0" x2="8" y2="0" stroke="#0284c7" stroke-width="2" stroke-linecap="round"/>
                <line x1="-5.5" y1="-5.5" x2="5.5" y2="5.5" stroke="#38bdf8" stroke-width="1.6" stroke-linecap="round"/>
                <line x1="-5.5" y1="5.5" x2="5.5" y2="-5.5" stroke="#38bdf8" stroke-width="1.6" stroke-linecap="round"/>
                <circle cx="0" cy="0" r="2" fill="#0284c7"/>
              </g>
            </svg>
          </div>
          <span class="service-number-pill rounded-pill">03</span>
        </div>

        <span class="service-tag-label">HVAC &amp; COLD CHAIN</span>
        <h3 class="service-title">
          <a href="<?= site_url('services/refrigeration-ventilation-systems') ?>">Refrigeration &amp; Ventilation Systems</a>
        </h3>
        <p class="service-desc">
          Precision CFM smoke-free exhaust canopies, stainless ducting, and tropicalized commercial sub-zero chillers.
        </p>

        <ul class="service-perks-list list-unstyled d-flex flex-column flex-grow-1 mb-3">
          <li class="d-flex align-items-start">
            <svg class="service-perk-svg" width="15" height="15" viewBox="0 0 16 16" fill="none">
              <circle cx="8" cy="8" r="7.5" fill="#f0f9ff" stroke="#e0f2fe"/>
              <path d="M4.5 8.2L6.8 10.5L11.5 5.8" stroke="#0284c7" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span>SS Baffle Exhaust Hoods</span>
          </li>
          <li class="d-flex align-items-start">
            <svg class="service-perk-svg" width="15" height="15" viewBox="0 0 16 16" fill="none">
              <circle cx="8" cy="8" r="7.5" fill="#f0f9ff" stroke="#e0f2fe"/>
              <path d="M4.5 8.2L6.8 10.5L11.5 5.8" stroke="#0284c7" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span>High-Velocity Centrifugal Fans</span>
          </li>
          <li class="d-flex align-items-start">
            <svg class="service-perk-svg" width="15" height="15" viewBox="0 0 16 16" fill="none">
              <circle cx="8" cy="8" r="7.5" fill="#f0f9ff" stroke="#e0f2fe"/>
              <path d="M4.5 8.2L6.8 10.5L11.5 5.8" stroke="#0284c7" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span>Sub-Zero Chiller Cold Chains</span>
          </li>
        </ul>

        <div class="service-footer position-relative mt-auto">
          <a href="<?= site_url('services/refrigeration-ventilation-systems') ?>" class="service-link-btn w-100 d-inline-flex align-items-center justify-content-between text-decoration-none">
            <span>Consult Ventilation</span>
            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
              <line x1="5" y1="12" x2="19" y2="12"></line>
              <polyline points="12 5 19 12 12 19"></polyline>
            </svg>
          </a>
        </div>

        <!-- Corner Accent Curve -->
        <svg class="service-corner-accent position-absolute bottom-0 end-0 pe-none" width="60" height="20" viewBox="0 0 60 20" fill="none">
          <path d="M0 20C15 20 25 10 40 10C50 10 55 5 60 0" stroke="var(--svc-color)" stroke-width="1.2" opacity="0.25" stroke-dasharray="2 3"/>
        </svg>
      </div>

      <!-- 4. L.P.G. Gas Pipeline Installation -->
      <div class="service-card service-card--lpg" onclick="window.location.href='<?= site_url('services/lpg-gas-pipeline-installation') ?>';">
        <a href="<?= site_url('services/lpg-gas-pipeline-installation') ?>" class="service-card-stretched-link" aria-label="L.P.G. Gas Pipeline Installation"></a>
        <!-- Thematic SVG Watermark in Background -->
        <svg class="service-bg-art" viewBox="0 0 180 180" fill="none" xmlns="http://www.w3.org/2000/svg">
          <line x1="20" y1="40" x2="180" y2="40" stroke="currentColor" stroke-width="2.5"/>
          <line x1="130" y1="40" x2="130" y2="170" stroke="currentColor" stroke-width="2.5"/>
          <line x1="75" y1="40" x2="75" y2="120" stroke="currentColor" stroke-width="2"/>
          <rect x="122" y="32" width="16" height="16" rx="2" stroke="currentColor" stroke-width="1.8"/>
          <circle cx="130" cy="40" r="3" fill="currentColor"/>
          <circle cx="130" cy="110" r="32" stroke="currentColor" stroke-width="1.8"/>
          <circle cx="130" cy="110" r="27" stroke="currentColor" stroke-width="1" stroke-dasharray="3 3"/>
          <circle cx="130" cy="110" r="6" fill="currentColor"/>
          <line x1="130" y1="110" x2="146" y2="94" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
          <path d="M75 125L55 133V155C55 168 75 178 75 178C75 178 95 168 95 155V133L75 125Z" stroke="currentColor" stroke-width="1.6" stroke-linejoin="round"/>
          <path d="M75 142C72 147 70 151 70 154C70 157 72.2 160 75 160C77.8 160 80 157 80 154C80 151 78.5 148 77 146C77 148 75.8 149 75 149C74.2 149 73.5 148.2 73.5 147C73.5 145.8 74.2 143.8 75 142Z" fill="currentColor"/>
        </svg>

        <div class="service-card-top position-relative d-flex align-items-center justify-content-between mb-2">
          <div class="service-icon-box d-flex align-items-center justify-content-center">
            <!-- Custom LPG Pipeline SVG Icon -->
            <svg width="28" height="28" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
              <rect x="4" y="22" width="32" height="7" rx="2" fill="#fff1f2" stroke="#e11d48" stroke-width="2"/>
              <line x1="8" y1="19" x2="8" y2="32" stroke="#e11d48" stroke-width="2.5" stroke-linecap="round"/>
              <line x1="32" y1="19" x2="32" y2="32" stroke="#e11d48" stroke-width="2.5" stroke-linecap="round"/>
              <path d="M16 22V15H24V22" stroke="#e11d48" stroke-width="2"/>
              <circle cx="20" cy="11" r="7" fill="#ffffff" stroke="#e11d48" stroke-width="2"/>
              <circle cx="20" cy="11" r="2" fill="#e11d48"/>
              <line x1="20" y1="11" x2="23" y2="8" stroke="#dc2626" stroke-width="1.8" stroke-linecap="round"/>
              <path d="M20 30C17 33 16 35 16 36.5C16 38.5 17.8 40 20 40C22.2 40 24 38.5 24 36.5C24 35 22.8 33.5 21.5 32C21.5 33.5 20.5 34 20 34C19.5 34 19 33.5 19 32.5C19 31.8 19.5 30.8 20 30Z" fill="#f97316"/>
            </svg>
          </div>
          <span class="service-number-pill rounded-pill">04</span>
        </div>

        <span class="service-tag-label">GAS SAFETY &amp; PESO</span>
        <h3 class="service-title">
          <a href="<?= site_url('services/lpg-gas-pipeline-installation') ?>">L.P.G. Gas Pipeline Installation</a>
        </h3>
        <p class="service-desc">
          CCOE / PESO certified commercial gas piping, multi-cylinder LOT banks, and automatic gas leak detection shutoffs.
        </p>

        <ul class="service-perks-list list-unstyled d-flex flex-column flex-grow-1 mb-3">
          <li class="d-flex align-items-start">
            <svg class="service-perk-svg" width="15" height="15" viewBox="0 0 16 16" fill="none">
              <circle cx="8" cy="8" r="7.5" fill="#fff1f2" stroke="#ffe4e6"/>
              <path d="M4.5 8.2L6.8 10.5L11.5 5.8" stroke="#e11d48" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span>Dual-Stage Pressure Regulators</span>
          </li>
          <li class="d-flex align-items-start">
            <svg class="service-perk-svg" width="15" height="15" viewBox="0 0 16 16" fill="none">
              <circle cx="8" cy="8" r="7.5" fill="#fff1f2" stroke="#ffe4e6"/>
              <path d="M4.5 8.2L6.8 10.5L11.5 5.8" stroke="#e11d48" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span>Flame-Proof Solenoid Valves</span>
          </li>
          <li class="d-flex align-items-start">
            <svg class="service-perk-svg" width="15" height="15" viewBox="0 0 16 16" fill="none">
              <circle cx="8" cy="8" r="7.5" fill="#fff1f2" stroke="#ffe4e6"/>
              <path d="M4.5 8.2L6.8 10.5L11.5 5.8" stroke="#e11d48" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span>Pressure Hydro-Test Audit</span>
          </li>
        </ul>

        <div class="service-footer position-relative mt-auto">
          <a href="<?= site_url('services/lpg-gas-pipeline-installation') ?>" class="service-link-btn w-100 d-inline-flex align-items-center justify-content-between text-decoration-none">
            <span>Consult Gas Pipeline</span>
            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
              <line x1="5" y1="12" x2="19" y2="12"></line>
              <polyline points="12 5 19 12 12 19"></polyline>
            </svg>
          </a>
        </div>

        <!-- Corner Accent Curve -->
        <svg class="service-corner-accent position-absolute bottom-0 end-0 pe-none" width="60" height="20" viewBox="0 0 60 20" fill="none">
          <path d="M0 20C15 20 25 10 40 10C50 10 55 5 60 0" stroke="var(--svc-color)" stroke-width="1.2" opacity="0.25" stroke-dasharray="2 3"/>
        </svg>
      </div>

      <!-- 5. Custom Fabrication & Installation -->
      <div class="service-card service-card--fabrication" onclick="window.location.href='<?= site_url('services/custom-fabrication-installation') ?>';">
        <a href="<?= site_url('services/custom-fabrication-installation') ?>" class="service-card-stretched-link" aria-label="Custom Fabrication & Installation"></a>
        <!-- Thematic SVG Watermark in Background -->
        <svg class="service-bg-art" viewBox="0 0 180 180" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M60 70L125 45L165 65L100 90L60 70Z" stroke="currentColor" stroke-width="1.8" stroke-linejoin="round"/>
          <path d="M60 70V125" stroke="currentColor" stroke-width="1.8"/>
          <path d="M125 45V100" stroke="currentColor" stroke-width="1.5" stroke-dasharray="3 3"/>
          <path d="M165 65V120" stroke="currentColor" stroke-width="1.8"/>
          <path d="M100 90V145" stroke="currentColor" stroke-width="1.8"/>
          <path d="M60 110L100 130L165 105" stroke="currentColor" stroke-width="1.5"/>
          <line x1="30" y1="20" x2="160" y2="20" stroke="currentColor" stroke-width="1.5"/>
          <line x1="30" y1="12" x2="30" y2="28" stroke="currentColor" stroke-width="1.8"/>
          <line x1="70" y1="14" x2="70" y2="20" stroke="currentColor" stroke-width="1.5"/>
          <line x1="110" y1="14" x2="110" y2="20" stroke="currentColor" stroke-width="1.5"/>
          <line x1="150" y1="12" x2="150" y2="28" stroke="currentColor" stroke-width="1.8"/>
          <circle cx="135" cy="140" r="16" stroke="currentColor" stroke-width="1.2" stroke-dasharray="2 3"/>
          <line x1="135" y1="118" x2="135" y2="162" stroke="currentColor" stroke-width="1.2"/>
          <line x1="113" y1="140" x2="157" y2="140" stroke="currentColor" stroke-width="1.2"/>
          <path d="M135 133L137 138L142 140L137 142L135 147L133 142L128 140L133 138L135 133Z" fill="currentColor"/>
        </svg>

        <div class="service-card-top position-relative d-flex align-items-center justify-content-between mb-2">
          <div class="service-icon-box d-flex align-items-center justify-content-center">
            <!-- Custom SS Fabrication SVG Icon -->
            <svg width="28" height="28" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
              <rect x="6" y="14" width="28" height="5" rx="1.5" fill="#f8fafc" stroke="#4f46e5" stroke-width="2"/>
              <line x1="9" y1="19" x2="9" y2="34" stroke="#4f46e5" stroke-width="2" stroke-linecap="round"/>
              <line x1="31" y1="19" x2="31" y2="34" stroke="#4f46e5" stroke-width="2" stroke-linecap="round"/>
              <line x1="9" y1="27" x2="31" y2="27" stroke="#4f46e5" stroke-width="1.8"/>
              <path d="M10 9H30V6H10V9Z" fill="#e0e7ff" stroke="#4f46e5" stroke-width="1.5"/>
              <line x1="14" y1="6" x2="14" y2="8" stroke="#4f46e5" stroke-width="1"/>
              <line x1="18" y1="6" x2="18" y2="8" stroke="#4f46e5" stroke-width="1"/>
              <line x1="22" y1="6" x2="22" y2="8" stroke="#4f46e5" stroke-width="1"/>
              <line x1="26" y1="6" x2="26" y2="8" stroke="#4f46e5" stroke-width="1"/>
              <path d="M26 14L28 10L30 14L34 16L30 18L28 22L26 18L22 16L26 14Z" fill="#f59e0b"/>
            </svg>
          </div>
          <span class="service-number-pill rounded-pill">05</span>
        </div>

        <span class="service-tag-label">CUSTOM SS WORKS</span>
        <h3 class="service-title">
          <a href="<?= site_url('services/custom-fabrication-installation') ?>">Custom Fabrication &amp; Installation</a>
        </h3>
        <p class="service-desc">
          Food-grade SS 304 worktables, storage racks, bain-maries, mobile utility carts, and 24/7 dedicated AMC care.
        </p>

        <ul class="service-perks-list list-unstyled d-flex flex-column flex-grow-1 mb-3">
          <li class="d-flex align-items-start">
            <svg class="service-perk-svg" width="15" height="15" viewBox="0 0 16 16" fill="none">
              <circle cx="8" cy="8" r="7.5" fill="#eef2ff" stroke="#e0e7ff"/>
              <path d="M4.5 8.2L6.8 10.5L11.5 5.8" stroke="#4f46e5" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span>Millimetric Pillar Sizing</span>
          </li>
          <li class="d-flex align-items-start">
            <svg class="service-perk-svg" width="15" height="15" viewBox="0 0 16 16" fill="none">
              <circle cx="8" cy="8" r="7.5" fill="#eef2ff" stroke="#e0e7ff"/>
              <path d="M4.5 8.2L6.8 10.5L11.5 5.8" stroke="#4f46e5" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span>Heavy-Load Soundproof SS</span>
          </li>
          <li class="d-flex align-items-start">
            <svg class="service-perk-svg" width="15" height="15" viewBox="0 0 16 16" fill="none">
              <circle cx="8" cy="8" r="7.5" fill="#eef2ff" stroke="#e0e7ff"/>
              <path d="M4.5 8.2L6.8 10.5L11.5 5.8" stroke="#4f46e5" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span>Scheduled AMC &amp; Fast Spares</span>
          </li>
        </ul>

        <div class="service-footer position-relative mt-auto">
          <a href="<?= site_url('services/custom-fabrication-installation') ?>" class="service-link-btn w-100 d-inline-flex align-items-center justify-content-between text-decoration-none">
            <span>Consult Fabrication</span>
            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
              <line x1="5" y1="12" x2="19" y2="12"></line>
              <polyline points="12 5 19 12 12 19"></polyline>
            </svg>
          </a>
        </div>

        <!-- Corner Accent Curve -->
        <svg class="service-corner-accent position-absolute bottom-0 end-0 pe-none" width="60" height="20" viewBox="0 0 60 20" fill="none">
          <path d="M0 20C15 20 25 10 40 10C50 10 55 5 60 0" stroke="var(--svc-color)" stroke-width="1.2" opacity="0.25" stroke-dasharray="2 3"/>
        </svg>
      </div>

    </div>

    <!-- 5-Step Process Timeline Strip -->
    <div class="service-process-box mt-5">
      <div class="process-box-header text-center mb-4">
        <h4 class="process-box-title mb-1"><i class="bi bi-diagram-3-fill text-gold me-2"></i> Our Turnkey Execution Process</h4>
        <p class="text-muted-light small mb-0">How we turn your vision into an operational commercial kitchen</p>
      </div>

      <div class="row g-3">
        <div class="col-6 col-lg-2-4">
          <div class="process-step-item text-center h-100">
            <div class="step-badge d-inline-block rounded-pill text-uppercase mb-1">Step 1</div>
            <div class="step-title">Site Survey</div>
            <div class="step-desc">On-site space inspection, menu review &amp; capacity analysis</div>
          </div>
        </div>
        <div class="col-6 col-lg-2-4">
          <div class="process-step-item text-center h-100">
            <div class="step-badge d-inline-block rounded-pill text-uppercase mb-1">Step 2</div>
            <div class="step-title">2D/3D CAD Layout</div>
            <div class="step-desc">Optimized workflow zoning, exhaust ducting &amp; utility blueprints</div>
          </div>
        </div>
        <div class="col-6 col-lg-2-4">
          <div class="process-step-item text-center h-100">
            <div class="step-badge d-inline-block rounded-pill text-uppercase mb-1">Step 3</div>
            <div class="step-title">SS 304 Fabrication</div>
            <div class="step-desc">Laser precision cutting, argon TIG welding &amp; QA load testing</div>
          </div>
        </div>
        <div class="col-6 col-lg-2-4">
          <div class="process-step-item text-center h-100">
            <div class="step-badge d-inline-block rounded-pill text-uppercase mb-1">Step 4</div>
            <div class="step-title">On-Site Commissioning</div>
            <div class="step-desc">Equipment placement, gas pipeline testing &amp; ventilation balancing</div>
          </div>
        </div>
        <div class="col-12 col-lg-2-4">
          <div class="process-step-item highlight text-center h-100">
            <div class="step-badge d-inline-block rounded-pill text-uppercase mb-1">Step 5</div>
            <div class="step-title">AMC &amp; Lifelong Care</div>
            <div class="step-desc">Chef orientation, scheduled preventive checkups &amp; spare parts</div>
          </div>
        </div>
      </div>
    </div>

  </div>
</section>