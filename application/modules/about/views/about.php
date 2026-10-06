<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- ==========================================================================
     Breadcrumbs Section
     ========================================================================== -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'About Bijay Enterprises',
    'bc_desc' => 'Eastern India’s Leading Manufacturer of Commercial Kitchen Equipment, Industrial Bakery Machinery & Turnkey SS 304 Fabrication Since 1996.',
    'breadcrumbs' => [
        ['name' => 'About Us']
    ]
]); ?>

<!-- ==========================================================================
     1. Company Story & Heritage Hero Section
     ========================================================================== -->
<section class="about-hero-section">
  <div class="container">
    <div class="row align-items-center g-4 g-lg-5">
      
      <!-- Left Column: Narrative & Credentials -->
      <div class="col-lg-6 order-2 order-lg-1">
        <div class="about-hero-content">
          <div class="d-inline-flex align-items-center gap-2 mb-3">
            <span class="about-badge-tag">
              <i class="bi bi-patch-check-fill"></i> ESTABLISHED 1996 • <?= $experience ?> YEARS EXCELLENCE
            </span>
          </div>

          <h2 class="about-hero-title">
            Engineering High-Performance <span class="about-title-highlight">Commercial Kitchens</span> Built For Non-Stop Reliability
          </h2>

          <p class="about-hero-lead">
            Headquartered in Siliguri (West Bengal), <strong><?= htmlspecialchars($company3) ?></strong> has grown into Eastern India's most respected turnkey manufacturer of certified food-grade SS 304 culinary machinery, high-volume bakery plants, custom exhaust systems, and PESO-compliant LPG pipeline infrastructure.
          </p>

          <p class="about-hero-desc">
            Over the past three decades, we have partnered with executive chefs, luxury hotel chains, multi-cuisine restaurants, cloud kitchen aggregators, and institutional hospitals. We transform raw culinary blueprints into high-efficiency, hygienically superior kitchens engineered to withstand 24/7 commercial stress.
          </p>

          <!-- Core Value Checklist -->
          <div class="d-flex flex-column gap-3 mb-4">
            <div class="d-flex align-items-start gap-3">
              <span class="about-check-icon rounded-circle d-flex align-items-center justify-content-center flex-shrink-0"><i class="bi bi-shield-check"></i></span>
              <div class="about-check-text">
                <strong>Certified Food-Grade SS 304:</strong> Heavy-gauge, non-magnetic stainless steel with lifetime rust resistance.
              </div>
            </div>
            <div class="d-flex align-items-start gap-3">
              <span class="about-check-icon rounded-circle d-flex align-items-center justify-content-center flex-shrink-0"><i class="bi bi-cpu"></i></span>
              <div class="about-check-text">
                <strong>Custom Precision Fabrication:</strong> Millimeter-accurate CAD blueprints, seamless argon TIG welding, and laser finish.
              </div>
            </div>
            <div class="d-flex align-items-start gap-3">
              <span class="about-check-icon rounded-circle d-flex align-items-center justify-content-center flex-shrink-0"><i class="bi bi-fire"></i></span>
              <div class="about-check-text">
                <strong>Safety-Certified Infrastructure:</strong> Turnkey kitchen exhaust ventilation and PESO-compliant central LPG gas pipeline banks.
              </div>
            </div>
          </div>

          <!-- Action Buttons -->
          <div class="about-hero-actions d-flex flex-wrap align-items-center gap-3 pt-3">
            <button type="button" class="btn-about-primary" data-bs-toggle="modal" data-bs-target="#qteModal">
              <i class="bi bi-file-earmark-text-fill"></i>
              <span>Get Factory Direct Quote</span>
            </button>
            <a <?= $phonehtml ?> class="btn-about-outline" title="Call Senior Engineer">
              <i class="bi bi-telephone-fill"></i>
              <span>Call: <?= $phone ?></span>
            </a>
          </div>

        </div>
      </div>

      <!-- Right Column: Visual Stage & Experience Cards -->
      <div class="col-lg-6 order-1 order-lg-2">
        <div class="about-media-stage position-relative">
          <div class="about-media-frame">
            <img src="<?= base_url('assets/img/about_factory.jpg') ?>" 
                 alt="<?= htmlspecialchars($company3) ?> Manufacturing Facility" 
                 class="img-fluid about-factory-img w-100" 
                 loading="lazy">
            <div class="about-media-overlay"></div>
          </div>

          <!-- Floating Experience Badge (Bottom Right) -->
          <div class="about-floating-experience">
            <div class="about-exp-icon">
              <i class="bi bi-award-fill"></i>
            </div>
            <div class="about-exp-content">
              <span class="about-exp-number"><?= $experience ?></span>
              <span class="about-exp-label">Years of Engineering Excellence (Since 1996)</span>
            </div>
          </div>

          <!-- Floating Quality Chip (Top Left) -->
          <div class="about-floating-quality">
            <i class="bi bi-patch-check-fill text-gold"></i>
            <div>
              <div class="about-quality-title">SS 304 Food-Grade Certified</div>
              <div class="about-quality-sub">Heavy Gauge • Laser Cut • Argon TIG Weld</div>
            </div>
          </div>

          <!-- Corner Accent Ribbon (Bottom Left) -->
          <div class="about-floating-stat-pill">
            <i class="bi bi-geo-alt-fill text-primary-brand"></i>
            <span>Siliguri • Eastern India Facility</span>
          </div>

        </div>
      </div>

    </div>
  </div>
</section>

<!-- ==========================================================================
     2. Metrics & Milestones Counter Strip
     ========================================================================== -->
<section class="about-metrics-section">
  <div class="container">
    <div class="row g-3 g-lg-4">
      
      <div class="col-sm-6 col-lg-3">
        <div class="about-metric-card h-100">
          <div class="d-flex align-items-center justify-content-center gap-3 mb-2">
            <div class="about-metric-icon mb-0 flex-shrink-0">
              <i class="bi bi-calendar2-check-fill"></i>
            </div>
            <div class="about-metric-val mb-0"><?= $experience ?></div>
          </div>
          <div class="about-metric-title">Years of Legacy</div>
          <p class="about-metric-desc mb-0">Pioneering commercial kitchen engineering across Eastern India since 1996.</p>
        </div>
      </div>

      <div class="col-sm-6 col-lg-3">
        <div class="about-metric-card h-100">
          <div class="d-flex align-items-center justify-content-center gap-3 mb-2">
            <div class="about-metric-icon mb-0 flex-shrink-0">
              <i class="bi bi-buildings-fill"></i>
            </div>
            <div class="about-metric-val mb-0">500+</div>
          </div>
          <div class="about-metric-title">Kitchens Commissioned</div>
          <p class="about-metric-desc mb-0">Installed in luxury hotels, multi-cuisine restaurants, cloud kitchens & hospitals.</p>
        </div>
      </div>

      <div class="col-sm-6 col-lg-3">
        <div class="about-metric-card h-100">
          <div class="d-flex align-items-center justify-content-center gap-3 mb-2">
            <div class="about-metric-icon mb-0 flex-shrink-0">
              <i class="bi bi-gear-wide-connected"></i>
            </div>
            <div class="about-metric-val mb-0">150+</div>
          </div>
          <div class="about-metric-title">Machinery Models</div>
          <p class="about-metric-desc mb-0">Proprietary cooking ranges, bakery ovens, display warmers & refrigeration prep tables.</p>
        </div>
      </div>

      <div class="col-sm-6 col-lg-3">
        <div class="about-metric-card h-100">
          <div class="d-flex align-items-center justify-content-center gap-3 mb-2">
            <div class="about-metric-icon mb-0 flex-shrink-0">
              <i class="bi bi-shield-fill-check"></i>
            </div>
            <div class="about-metric-val mb-0">100%</div>
          </div>
          <div class="about-metric-title">SS 304 Food-Grade</div>
          <p class="about-metric-desc mb-0">Uncompromised certified stainless steel with zero rust and maximum heat retention.</p>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- ==========================================================================
     3. Four Core Engineering Pillars
     ========================================================================== -->
<section class="about-pillars-section">
  <div class="container">
    
    <div class="about-section-header text-center mx-auto">
      <span class="about-badge-tag mb-2">
        <i class="bi bi-cpu-fill"></i> OUR ENGINEERING STANDARDS
      </span>
      <h2 class="about-section-title">
        The Four Cornerstones of <span class="about-title-highlight">Every Machine We Build</span>
      </h2>
      <p class="about-section-subtitle">
        We do not compromise on raw material gauge, burner BTU capacity, or safety tolerances. Every piece of equipment leaving our Siliguri factory is built to endure non-stop commercial service.
      </p>
    </div>

    <div class="row g-4 mt-2">
      
      <!-- Pillar 1 -->
      <div class="col-md-6 col-lg-3">
        <div class="about-pillar-card h-100">
          <div class="d-flex align-items-center justify-content-between mb-3">
            <div class="d-flex align-items-center gap-2">
              <div class="about-pillar-icon mb-0 flex-shrink-0">
                <i class="bi bi-shield-check"></i>
              </div>
              <h3 class="about-pillar-title mb-0">Certified SS 304 Steel</h3>
            </div>
            <div class="about-pillar-num mb-0">01</div>
          </div>
          <p class="about-pillar-desc">
            Manufactured exclusively from certified food-grade AISI 304 stainless steel. Highly resistant to harsh food acids, intense grease fires, and frequent alkaline sanitation without pitting or rusting.
          </p>
          <ul class="about-pillar-specs list-unstyled p-0 m-0 d-flex flex-column gap-2">
            <li class="d-flex align-items-center gap-2"><i class="bi bi-check2"></i> Zero corrosion &amp; rust guarantee</li>
            <li class="d-flex align-items-center gap-2"><i class="bi bi-check2"></i> 16 &amp; 18 heavy-gauge steel sheets</li>
            <li class="d-flex align-items-center gap-2"><i class="bi bi-check2"></i> Ultra-hygienic satin polish</li>
          </ul>
        </div>
      </div>

      <!-- Pillar 2 -->
      <div class="col-md-6 col-lg-3">
        <div class="about-pillar-card h-100">
          <div class="d-flex align-items-center justify-content-between mb-3">
            <div class="d-flex align-items-center gap-2">
              <div class="about-pillar-icon mb-0 flex-shrink-0">
                <i class="bi bi-rulers"></i>
              </div>
              <h3 class="about-pillar-title mb-0">Laser CNC Precision</h3>
            </div>
            <div class="about-pillar-num mb-0">02</div>
          </div>
          <p class="about-pillar-desc">
            CNC laser-cut components, robotic press brake bending, and argon shielded TIG welding eliminate crevices, food trap corners, and structural wobbling under heavy cooking pots.
          </p>
          <ul class="about-pillar-specs list-unstyled p-0 m-0 d-flex flex-column gap-2">
            <li class="d-flex align-items-center gap-2"><i class="bi bi-check2"></i> Millimeter-level CAD precision</li>
            <li class="d-flex align-items-center gap-2"><i class="bi bi-check2"></i> Seamless hygienic ground joints</li>
            <li class="d-flex align-items-center gap-2"><i class="bi bi-check2"></i> High structural weight capacity</li>
          </ul>
        </div>
      </div>

      <!-- Pillar 3 -->
      <div class="col-md-6 col-lg-3">
        <div class="about-pillar-card h-100">
          <div class="d-flex align-items-center justify-content-between mb-3">
            <div class="d-flex align-items-center gap-2">
              <div class="about-pillar-icon mb-0 flex-shrink-0">
                <i class="bi bi-fire"></i>
              </div>
              <h3 class="about-pillar-title mb-0">High-Heat Output</h3>
            </div>
            <div class="about-pillar-num mb-0">03</div>
          </div>
          <p class="about-pillar-desc">
            Engineered with high-BTU heavy-duty cast iron burners, pilot flame assemblies, and industrial refractory chamber bricks for maximum thermal retention and lower LPG gas consumption.
          </p>
          <ul class="about-pillar-specs list-unstyled p-0 m-0 d-flex flex-column gap-2">
            <li class="d-flex align-items-center gap-2"><i class="bi bi-check2"></i> High-efficiency combustion mixing</li>
            <li class="d-flex align-items-center gap-2"><i class="bi bi-check2"></i> Instant heat recovery for rush hours</li>
            <li class="d-flex align-items-center gap-2"><i class="bi bi-check2"></i> Up to 25% lower LPG fuel burn</li>
          </ul>
        </div>
      </div>

      <!-- Pillar 4 -->
      <div class="col-md-6 col-lg-3">
        <div class="about-pillar-card h-100">
          <div class="d-flex align-items-center justify-content-between mb-3">
            <div class="d-flex align-items-center gap-2">
              <div class="about-pillar-icon mb-0 flex-shrink-0">
                <i class="bi bi-wrench-adjustable-circle-fill"></i>
              </div>
              <h3 class="about-pillar-title mb-0">Turnkey Support</h3>
            </div>
            <div class="about-pillar-num mb-0">04</div>
          </div>
          <p class="about-pillar-desc">
            Comprehensive pre-dispatch fire and pressure testing followed by on-site turnkey installation, staff operational training, and rapid AMC support across West Bengal, Sikkim, Assam, and Bihar.
          </p>
          <ul class="about-pillar-specs list-unstyled p-0 m-0 d-flex flex-column gap-2">
            <li class="d-flex align-items-center gap-2"><i class="bi bi-check2"></i> Complete ducting &amp; LPG piping</li>
            <li class="d-flex align-items-center gap-2"><i class="bi bi-check2"></i> Readily available spare components</li>
            <li class="d-flex align-items-center gap-2"><i class="bi bi-check2"></i> Same-day breakdown assistance</li>
          </ul>
        </div>
      </div>

    </div>

  </div>
</section>

<!-- ==========================================================================
     4. Mission & Vision Statement Section
     ========================================================================== -->
<section class="about-mission-section">
  <div class="container">
    <div class="row g-4 align-items-stretch">
      
      <div class="col-lg-6">
        <div class="about-statement-card mission-card h-100">
          <div class="d-flex align-items-center gap-3 mb-3">
            <div class="statement-icon-box mb-0 flex-shrink-0">
              <i class="bi bi-compass-fill"></i>
            </div>
            <div class="statement-header-text">
              <span class="statement-tag mb-1 d-block">OUR MISSION</span>
              <h3 class="statement-title mb-0">Built To Endure The Toughest Kitchen Hours</h3>
            </div>
          </div>
          <p class="statement-desc">
            To engineer heavy-duty, energy-efficient commercial kitchen machinery and safety infrastructure that empowers chefs and restaurateurs to deliver culinary excellence without mechanical downtime, excessive gas burn, or safety hazards.
          </p>
          <div class="statement-feature-list d-flex flex-column gap-2">
            <div class="statement-pill d-flex align-items-center gap-2"><i class="bi bi-check-circle-fill"></i> Zero Downtime Engineering</div>
            <div class="statement-pill d-flex align-items-center gap-2"><i class="bi bi-check-circle-fill"></i> Energy &amp; Fuel Conservation</div>
            <div class="statement-pill d-flex align-items-center gap-2"><i class="bi bi-check-circle-fill"></i> 100% Food-Grade Integrity</div>
          </div>
        </div>
      </div>

      <div class="col-lg-6">
        <div class="about-statement-card vision-card h-100">
          <div class="d-flex align-items-center gap-3 mb-3">
            <div class="statement-icon-box mb-0 flex-shrink-0">
              <i class="bi bi-eye-fill"></i>
            </div>
            <div class="statement-header-text">
              <span class="statement-tag mb-1 d-block">OUR VISION</span>
              <h3 class="statement-title mb-0">Eastern India’s Most Trusted Culinary Infrastructure Leader</h3>
            </div>
          </div>
          <p class="statement-desc">
            To set the benchmark for commercial culinary fabrication in Eastern India, Bhutan, and Nepal through continuous CNC automation, smart kitchen integration, and unmatched turnkey customer service.
          </p>
          <div class="statement-feature-list d-flex flex-column gap-2">
            <div class="statement-pill d-flex align-items-center gap-2"><i class="bi bi-check-circle-fill"></i> Turnkey Project Delivery</div>
            <div class="statement-pill d-flex align-items-center gap-2"><i class="bi bi-check-circle-fill"></i> Modern CNC Automation</div>
            <div class="statement-pill d-flex align-items-center gap-2"><i class="bi bi-check-circle-fill"></i> Regional Rapid Support Network</div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- ==========================================================================
     6. Industries & Clients We Serve
     ========================================================================== -->
<section class="about-clients-section">
  <div class="container">
    
    <div class="about-section-header text-center mx-auto mb-4">
      <span class="about-badge-tag mb-2">
        <i class="bi bi-diagram-3-fill"></i> SECTORS WE EMPOWER
      </span>
      <h2 class="about-section-title">
        Designed For High-Output <span class="about-title-highlight">Hospitality &amp; Institutions</span>
      </h2>
      <p class="about-section-subtitle">
        From boutique bakeries to 5-star banquet suites, our custom SS 304 equipment is the operational backbone for varied culinary establishments.
      </p>
    </div>

    <div class="row g-3 g-md-4">
      
      <div class="col-6 col-md-4 col-lg-2">
        <div class="about-client-type-card text-center h-100">
          <div class="client-type-icon"><i class="bi bi-cup-hot-fill"></i></div>
          <h4 class="client-type-name">Restaurants &amp; Cafes</h4>
          <span class="client-type-sub">Fine Dining &amp; QSR</span>
        </div>
      </div>

      <div class="col-6 col-md-4 col-lg-2">
        <div class="about-client-type-card text-center h-100">
          <div class="client-type-icon"><i class="bi bi-buildings-fill"></i></div>
          <h4 class="client-type-name">Hotels &amp; Resorts</h4>
          <span class="client-type-sub">Banquets &amp; Suites</span>
        </div>
      </div>

      <div class="col-6 col-md-4 col-lg-2">
        <div class="about-client-type-card text-center h-100">
          <div class="client-type-icon"><i class="bi bi-cloud-check-fill"></i></div>
          <h4 class="client-type-name">Cloud Kitchens</h4>
          <span class="client-type-sub">High-Volume Delivery</span>
        </div>
      </div>

      <div class="col-6 col-md-4 col-lg-2">
        <div class="about-client-type-card text-center h-100">
          <div class="client-type-icon"><i class="bi bi-cake2-fill"></i></div>
          <h4 class="client-type-name">Bakery Plants</h4>
          <span class="client-type-sub">Industrial Confectionery</span>
        </div>
      </div>

      <div class="col-6 col-md-4 col-lg-2">
        <div class="about-client-type-card text-center h-100">
          <div class="client-type-icon"><i class="bi bi-hospital-fill"></i></div>
          <h4 class="client-type-name">Hospitals</h4>
          <span class="client-type-sub">Hygienic Dietary Messes</span>
        </div>
      </div>

      <div class="col-6 col-md-4 col-lg-2">
        <div class="about-client-type-card text-center h-100">
          <div class="client-type-icon"><i class="bi bi-mortarboard-fill"></i></div>
          <h4 class="client-type-name">Campuses &amp; MNCs</h4>
          <span class="client-type-sub">Institutional Pantries</span>
        </div>
      </div>

    </div>

  </div>
</section>

<!-- ==========================================================================
     7. High-Conversion Consultation & Factory CTA
     ========================================================================== -->
<section class="about-cta-section">
  <div class="container">
    <div class="about-cta-card">
      <div class="row align-items-center g-4">
        
        <div class="col-lg-8 text-center text-lg-start">
          <div class="d-inline-flex align-items-center gap-2 mb-2">
            <span class="cta-mini-badge"><i class="bi bi-gear-fill text-gold"></i> CONSULT FACTORY ENGINEERS</span>
          </div>
          <h3 class="about-cta-title">
            Planning a New Commercial Kitchen or Upgrading Your Setup?
          </h3>
          <p class="about-cta-desc mb-0">
            Talk directly with our senior kitchen fabrication engineers. Get a custom CAD floor plan layout, equipment list, and millimetric fabrication quote tailored to your exact budget.
          </p>
        </div>

        <div class="col-lg-4 text-center text-lg-end">
          <div class="d-flex flex-column gap-2 justify-content-center justify-content-lg-end">
            <button type="button" class="btn-about-primary w-100" data-bs-toggle="modal" data-bs-target="#qteModal">
              <i class="bi bi-file-earmark-text-fill"></i>
              <span>Get Free Kitchen Plan &amp; Quote</span>
            </button>
            
            <div class="d-flex gap-2">
              <a href="<?= $whatsapphtml ?>" target="_blank" rel="noopener" class="btn-about-whatsapp flex-grow-1 text-center justify-content-center" title="Send Floor Plan on WhatsApp">
                <i class="bi bi-whatsapp"></i>
                <span>WhatsApp</span>
              </a>
              
              <a <?= $phonehtml ?> class="btn-about-phone flex-grow-1 text-center justify-content-center" title="Call Senior Engineer">
                <i class="bi bi-telephone-fill"></i>
                <span>Call Us</span>
              </a>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>