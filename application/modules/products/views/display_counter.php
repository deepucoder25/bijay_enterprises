<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); 

?>

<!-- ==========================================================================
     0. Dynamic Breadcrumbs Section
     ========================================================================== -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'Commercial Display Counters & Showcases',
    'bc_desc' => 'Luxury Curved Glass Food Showcases & Heated Presentation Stations with Warm LED Accents',
    'breadcrumbs' => [
        ['name' => 'Display Counters']
    ]
]); ?>

<!-- ==========================================================================
     1. Product Showcase: Side-Scrolling Gallery (Row 1) & Overview Content (Row 2)
     ========================================================================== -->
<section class="bakery-overview-section" id="displayOverview">
  <div class="container">
    
    <!-- Top Header: Title & Side Scroll Arrow Controls -->
    <div class="d-flex flex-wrap align-items-end justify-content-between gap-3 mb-4">
      <div>
        <span class="product-badge-tag mb-2">
          <i class="bi bi-shop text-gold"></i> LUXURY MERCHANDISING SHOWCASES
        </span>
        <h2 class="product-section-title mb-1">
          Explore Our <span class="text-brand-highlight">Display Counter Series</span>
        </h2>
        <p class="product-section-subtitle mb-0">
          Toughened curved glass showcases, heated food warmers, bain maries, and confectionery displays fabricated in Siliguri.
        </p>
      </div>

      <!-- Scroll Action Buttons -->
      <div class="bakery-scroll-nav d-flex align-items-center gap-2">
        <button type="button" class="btn-scroll-arrow scroll-arrow-btn" id="bakeryScrollPrev" aria-label="Scroll Left" title="Scroll Left">
          <i class="bi bi-chevron-left"></i>
        </button>
        <button type="button" class="btn-scroll-arrow scroll-arrow-btn" id="bakeryScrollNext" aria-label="Scroll Right" title="Scroll Right">
          <i class="bi bi-chevron-right"></i>
        </button>
      </div>
    </div>

    <!-- ROW 1: Side-Scrolling Product Image Gallery -->
    <div class="bakery-scroll-container position-relative mb-4 pb-2">
      <div class="bakery-scroll-track" id="bakeryScrollTrack">

        <!-- Image 1: Curved Corner Display Counter -->
        <a href="#displaySpecs" class="bakery-image-card js-jump-link text-decoration-none">
          <div class="bakery-image-frame">
            <span class="bakery-image-tag">Series DC-01</span>
            <img src="<?= base_url('assets/img/display-counter.jpg') ?>" 
                 alt="Curved Corner Display Counter" class="bakery-card-img" loading="lazy">
          </div>
          <div class="bakery-image-caption">
            <h5>Curved Corner Display Counter</h5>
            <p>Panoramic curved glass corner sweet &amp; bakery showcase</p>
          </div>
        </a>

        <!-- Image 2: Straight Glass Display Counter -->
        <a href="#displaySpecs" class="bakery-image-card js-jump-link text-decoration-none">
          <div class="bakery-image-frame">
            <span class="bakery-image-tag">Series DC-02</span>
            <img src="<?= base_url('assets/img/display_counter1.jpg') ?>" 
                 alt="Straight Glass Display Counter 60x26x52" class="bakery-card-img" loading="lazy">
          </div>
          <div class="bakery-image-caption">
            <h5>Straight Glass Display Counter</h5>
            <p>Size: 60"L × 26"W × 52"H • 3-tier illuminated glass showcase</p>
          </div>
        </a>

        <!-- Image 3: Straight Glass L Type Display Counter -->
        <a href="#displaySpecs" class="bakery-image-card js-jump-link text-decoration-none">
          <div class="bakery-image-frame">
            <span class="bakery-image-tag">Series DC-03</span>
            <img src="<?= base_url('assets/img/display_counter2.jpg') ?>" 
                 alt="Straight Glass L Type Display Counter" class="bakery-card-img" loading="lazy">
          </div>
          <div class="bakery-image-caption">
            <h5>L-Type Straight Glass Counter</h5>
            <p>Straight glass L-type modular counter with decorative LED front</p>
          </div>
        </a>

        <!-- Image 4: Confectionery Showcase -->
        <a href="#displaySpecs" class="bakery-image-card js-jump-link text-decoration-none">
          <div class="bakery-image-frame">
            <span class="bakery-image-tag">Series DC-04</span>
            <img src="<?= base_url('assets/img/display_counter3.jpg') ?>" 
                 alt="Confectionery Showcase Counter" class="bakery-card-img" loading="lazy">
          </div>
          <div class="bakery-image-caption">
            <h5>Confectionery Showcase Counter</h5>
            <p>Curved front refrigerated glass display with multi-tier racks</p>
          </div>
        </a>

        <!-- Image 5: Chaat Counter -->
        <a href="#displaySpecs" class="bakery-image-card js-jump-link text-decoration-none">
          <div class="bakery-image-frame">
            <span class="bakery-image-tag">Series DC-05</span>
            <img src="<?= base_url('assets/img/display_counter4.jpg') ?>" 
                 alt="Commercial Chaat Counter" class="bakery-card-img" loading="lazy">
          </div>
          <div class="bakery-image-caption">
            <h5>Commercial Chaat Counter</h5>
            <p>Curved sneeze guard glass • Stainless steel food pan wells</p>
          </div>
        </a>

        <!-- Image 6: Square Glass Display Counter with Backlit Pattern -->
        <a href="#displaySpecs" class="bakery-image-card js-jump-link text-decoration-none">
          <div class="bakery-image-frame">
            <span class="bakery-image-tag">Series DC-06</span>
            <img src="<?= base_url('assets/img/display_counter5.jpg') ?>" 
                 alt="Square Glass Display Counter" class="bakery-card-img" loading="lazy">
          </div>
          <div class="bakery-image-caption">
            <h5>Square Glass Display Counter</h5>
            <p>4-side glass display with warm LED backlit decorative pattern</p>
          </div>
        </a>

      </div>
    </div>

    <!-- ROW 2: Overview & Descriptive Content Area -->
    <div class="bakery-content-card">
      <div class="row align-items-center g-4 g-lg-5">
        
        <!-- Left Column: Story & WhatsApp CTA -->
        <div class="col-lg-7">
          <div class="bakery-content-header mb-3">
            <span class="product-badge-tag mb-2">
              <i class="bi bi-shield-check text-gold"></i> FOOD-GRADE ENGINEERING &amp; LUXURY FINISH
            </span>
            <h3 class="bakery-content-title">
              Engineered For Elegant Food Merchandising &amp; Peak Temperature Control
            </h3>
          </div>
          
          <div class="bakery-content-text">
            <p>
              Elevate your front-of-house food presentation with Bijay Enterprises custom fabricated hot and cold food display counters, luxury pastry showcases, curved glass sweet counters, and wet/dry bain maries designed for cafes, confectioneries, sweet shops, and live restaurant counters.
            </p>
            <p>
              Each counter features condensation-free heated toughened glass, high-lumen warm LED illumination across every tier, premium AISI 304 food-grade stainless steel framing, and options for Corian or Italian marble fascia integration. We fabricate to exact store CAD dimensions.
            </p>
          </div>

          <div class="bakery-content-actions mt-4 d-flex flex-wrap gap-3">
            <a href="<?= $whatsapphtml ?>&text=<?= urlencode('Hello Bijay Enterprises, I need details and pricing for commercial display counters.') ?>" 
               target="_blank" rel="noopener" class="btn btn-primary-custom d-inline-flex align-items-center gap-2">
              <i class="bi bi-whatsapp"></i>
              <span>Inquire on WhatsApp</span>
            </a>
          </div>
        </div>

        <!-- Right Column: 4 Feature Highlight Pills -->
        <div class="col-lg-5">
          <div class="bakery-features-grid">
            
            <div class="bakery-feature-pill">
              <div class="feature-pill-icon">
                <i class="bi bi-patch-check-fill"></i>
              </div>
              <div class="feature-pill-info">
                <strong>Toughened Condensation-Free Glass</strong>
                <span>8mm / 10mm curved &amp; flat glass with defogging heaters</span>
              </div>
            </div>

            <div class="bakery-feature-pill">
              <div class="feature-pill-icon">
                <i class="bi bi-thermometer-half"></i>
              </div>
              <div class="feature-pill-info">
                <strong>Dual Hot &amp; Cold Preservation</strong>
                <span>+2°C to +8°C chilled pastry &amp; +65°C to +85°C hot snacks</span>
              </div>
            </div>

            <div class="bakery-feature-pill">
              <div class="feature-pill-icon">
                <i class="bi bi-lightbulb-fill"></i>
              </div>
              <div class="feature-pill-info">
                <strong>Warm Golden LED Showcase Lights</strong>
                <span>Low-heat, food-safe high CRI lights on every tier</span>
              </div>
            </div>

            <div class="bakery-feature-pill">
              <div class="feature-pill-icon">
                <i class="bi bi-tools"></i>
              </div>
              <div class="feature-pill-info">
                <strong>Custom Architectural Dimensions</strong>
                <span>Tailored front fascia, Corian trims &amp; Siliguri AMC</span>
              </div>
            </div>

          </div>
        </div>

      </div>
    </div>

  </div>
</section>

<!-- ==========================================================================
     2. Technical Comparison Matrix Table
     ========================================================================== -->
<section class="product-specs-section" id="displaySpecs">
  <div class="container">
    
    <div class="text-center mx-auto mb-4" style="max-width: 720px;">
      <span class="product-badge-tag mb-2">
        <i class="bi bi-table text-gold"></i> MODEL COMPARISON MATRIX
      </span>
      <h2 class="product-section-title">
        Quick Comparison of <span class="text-brand-highlight">Display Counter Models</span>
      </h2>
      <p class="product-section-subtitle mx-auto">
        A side-by-side technical overview of all hot and cold display counter models to assist your store planning and merchandising sizing.
      </p>
    </div>

    <div class="product-matrix-card">
      <div class="table-responsive">
        <table class="product-matrix-table table align-middle">
          <thead>
            <tr>
              <th>Equipment Model</th>
              <th>Standard Length / Capacity</th>
              <th>Temperature Zone</th>
              <th>Cooling / Heating Source</th>
              <th>Glass &amp; Lighting</th>
              <th class="text-center text-nowrap">Action</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>
                <span class="table-model-title">Curved Corner Display Counter</span>
                <span class="table-model-sub">Model: CDC-Corner Showcase</span>
              </td>
              <td>Custom Corner Arc / Multi-Tier Glass</td>
              <td>+2°C to +8°C or Ambient Display</td>
              <td>Emerson Forced-Air / Static Chiller</td>
              <td>10mm Panoramic Curved Toughened Glass + LED</td>
              <td class="text-center text-nowrap">
                <button type="button" class="btn btn-matrix-quote js-open-quote" data-model="Curved Corner Display Counter">Get Quote</button>
              </td>
            </tr>
            <tr>
              <td>
                <span class="table-model-title">Straight Glass Display Counter</span>
                <span class="table-model-sub">Model: SGC-60 Straight Glass</span>
              </td>
              <td>60"L × 26"W × 52"H / 3 Glass Tiers</td>
              <td>+2°C to +8°C Chilled / Ambient</td>
              <td>High-Efficiency Tropicalized Compressor</td>
              <td>Flat Polished Edge Tempered Glass + Warm LED</td>
              <td class="text-center text-nowrap">
                <button type="button" class="btn btn-matrix-quote js-open-quote" data-model="Straight Glass Display Counter">Get Quote</button>
              </td>
            </tr>
            <tr>
              <td>
                <span class="table-model-title">L-Type Straight Glass Counter</span>
                <span class="table-model-sub">Model: LGC-Modular L-Shape</span>
              </td>
              <td>Custom L-Shape Configuration &amp; Shelving</td>
              <td>Multi-Zone Chilled &amp; Dry Ambient</td>
              <td>Dual Zone Independent Compressors</td>
              <td>Straight Glass with Custom Front Illuminated Fascia</td>
              <td class="text-center text-nowrap">
                <button type="button" class="btn btn-matrix-quote js-open-quote" data-model="L-Type Straight Glass Counter">Get Quote</button>
              </td>
            </tr>
            <tr>
              <td>
                <span class="table-model-title">Confectionery Showcase Counter</span>
                <span class="table-model-sub">Model: CSC-Curved Confectionery</span>
              </td>
              <td>4ft to 6ft Length / 3 Tier Shelving</td>
              <td>+2°C to +6°C Humidity-Balanced Cold</td>
              <td>Low-Noise Chiller with Auto Condensate Evaporator</td>
              <td>Curved Front Glass with Uniform Cake Shelf Lighting</td>
              <td class="text-center text-nowrap">
                <button type="button" class="btn btn-matrix-quote js-open-quote" data-model="Confectionery Showcase Counter">Get Quote</button>
              </td>
            </tr>
            <tr>
              <td>
                <span class="table-model-title">Commercial Chaat Counter</span>
                <span class="table-model-sub">Model: CCC-48 Chaat Station</span>
              </td>
              <td>48" to 72" Length / Integrated GN Pan Wells</td>
              <td>Ambient Serving / Insulated Ice Wells</td>
              <td>Self-Contained Hygienic Drainage System</td>
              <td>Curved Hygienic Sneeze Guard Glass + SS Pick-Up Counter</td>
              <td class="text-center text-nowrap">
                <button type="button" class="btn btn-matrix-quote js-open-quote" data-model="Commercial Chaat Counter">Get Quote</button>
              </td>
            </tr>
            <tr>
              <td>
                <span class="table-model-title">Square Glass Display Counter</span>
                <span class="table-model-sub">Model: SDC-Backlit Floral Luxe</span>
              </td>
              <td>4ft / 5ft Length / 3 Level Shelves</td>
              <td>+2°C to +8°C Chilled Pastry Display</td>
              <td>Heavy Hermetic Sealed R134a Compressor</td>
              <td>4-Side Frameless Glass + Backlit Laser-Cut LED Panel</td>
              <td class="text-center text-nowrap">
                <button type="button" class="btn btn-matrix-quote js-open-quote" data-model="Square Glass Display Counter">Get Quote</button>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>

  </div>
</section>

<!-- ==========================================================================
     3. Turnkey Setup Workflow
     ========================================================================== -->
<section class="product-turnkey-section">
  <div class="container">
    
    <div class="text-center mx-auto mb-5" style="max-width: 720px;">
      <span class="product-badge-tag mb-2">
        <i class="bi bi-diagram-3-fill text-gold"></i> FACTORY FABRICATION &amp; INSTALLATION
      </span>
      <h2 class="product-section-title">
        How We Execute Your <span class="text-brand-highlight">Display Counter Setup</span>
      </h2>
      <p class="product-section-subtitle mx-auto">
        From architectural showroom measurements and 3D CAD design to factory precision assembly, glass fitting, and site delivery.
      </p>
    </div>

    <div class="row g-4">
      
      <div class="col-sm-6 col-lg-3">
        <div class="turnkey-step-card">
          <div class="turnkey-step-header">
            <span class="turnkey-num-badge">01</span>
            <h4 class="turnkey-title">Store Layout &amp; Sizing</h4>
          </div>
          <p class="turnkey-desc">
            We evaluate your store front footfall, food items (pastries, sweets, savory), and calculate exact linear counter feet.
          </p>
        </div>
      </div>

      <div class="col-sm-6 col-lg-3">
        <div class="turnkey-step-card">
          <div class="turnkey-step-header">
            <span class="turnkey-num-badge">02</span>
            <h4 class="turnkey-title">3D CAD Glass Blueprints</h4>
          </div>
          <p class="turnkey-desc">
            Custom AutoCAD and 3D mockups mapping glass curvature, LED channels, billing corner, and customer queue flows.
          </p>
        </div>
      </div>

      <div class="col-sm-6 col-lg-3">
        <div class="turnkey-step-card">
          <div class="turnkey-step-header">
            <span class="turnkey-num-badge">03</span>
            <h4 class="turnkey-title">Siliguri Factory Build</h4>
          </div>
          <p class="turnkey-desc">
            CNC fiber laser cutting, SS 304 satin polishing, precision refrigeration piping, and electrical insulation tests.
          </p>
        </div>
      </div>

      <div class="col-sm-6 col-lg-3">
        <div class="turnkey-step-card">
          <div class="turnkey-step-header">
            <span class="turnkey-num-badge">04</span>
            <h4 class="turnkey-title">Plug-and-Play Fitment</h4>
          </div>
          <p class="turnkey-desc">
            Safe on-site delivery, electrical hookup, temperature stability verification, and ongoing warranty spares support.
          </p>
        </div>
      </div>

    </div>

  </div>
</section>

<!-- ==========================================================================
     4. High-Conversion Consultation & Direct Quote CTA Banner (Light Console Design)
     ========================================================================== -->
<section class="product-cta-section product-cta-light">
  <div class="container">
    <div class="product-cta-card-light">
      <div class="row align-items-center g-4 g-xl-5">
        
        <!-- Left Column: Value Proposition & Deliverables -->
        <div class="col-lg-7">
          <div class="d-inline-flex align-items-center gap-2 mb-3">
            <span class="cta-light-badge">
              <i class="bi bi-clock-history text-gold"></i>
              <span>DIRECT FACTORY QUOTATION WITHIN 2 HOURS</span>
            </span>
          </div>

          <h3 class="cta-light-title mb-3">
            Planning to Upgrade Your <span class="text-brand-highlight">Retail Food Display Counters?</span>
          </h3>

          <p class="cta-light-desc mb-4">
            Send your shop dimensions, glass curvature preferences, or equipment list directly to our senior fabrication engineers in Siliguri for instant BOQ estimation and factory-gate pricing.
          </p>

          <!-- Perks Checklist -->
          <div class="cta-perks-row d-flex flex-wrap gap-2">
            <div class="cta-perk-badge">
              <i class="bi bi-check-circle-fill text-success"></i>
              <span>Free 3D Architectural CAD</span>
            </div>
            <div class="cta-perk-badge">
              <i class="bi bi-check-circle-fill text-success"></i>
              <span>Direct Factory-Gate Rates</span>
            </div>
            <div class="cta-perk-badge">
              <i class="bi bi-check-circle-fill text-success"></i>
              <span>Siliguri On-Site AMC &amp; Spares</span>
            </div>
          </div>
        </div>

        <!-- Right Column: Quick Action Console -->
        <div class="col-lg-5">
          <div class="cta-action-console">
            <div class="d-flex align-items-center justify-content-between mb-3">
              <div class="d-flex align-items-center gap-2">
                <span class="cta-status-dot"></span>
                <span class="cta-console-title">Siliguri Technical Desk</span>
              </div>
              <span class="badge bg-white text-secondary border fw-semibold px-2.5 py-1">Online Now</span>
            </div>

            <!-- Primary WhatsApp Action -->
            <a href="<?= $whatsapphtml ?>&text=<?= urlencode('Hello Bijay Enterprises, I need instant quotation and layout planning for food display counters.') ?>" 
               target="_blank" rel="noopener" class="btn-cta-whatsapp mb-2.5 text-decoration-none">
              <div class="cta-btn-icon">
                <i class="bi bi-whatsapp"></i>
              </div>
              <div class="cta-btn-text">
                <strong>Connect on WhatsApp</strong>
                <span>Instant reply • Send shop photos</span>
              </div>
              <i class="bi bi-arrow-right cta-btn-arrow"></i>
            </a>

            <!-- Secondary Formal BOQ Quote Action -->
            <button type="button" class="btn-cta-quote w-100 js-open-quote" data-model="Complete Display Counter Setup">
              <i class="bi bi-file-earmark-spreadsheet-fill text-danger me-2"></i>
              <span>Request Formal BOQ Proposal</span>
            </button>

            <!-- Direct Phone Fallback -->
            <div class="cta-phone-note text-center mt-3 pt-2.5 border-top">
              <span class="text-muted small">Prefer a phone call? </span>
              <a <?= $phonehtml ?> class="cta-phone-link fw-bold small">
                <i class="bi bi-telephone-fill me-1"></i><?= $phone ?>
              </a>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>

<!-- ==========================================================================
     5. Interactive Client-Side Handlers & Smooth Jump
     ========================================================================== -->
<script>
document.addEventListener('DOMContentLoaded', function () {
  
  // 1. Side-Scrolling Product Image Track Controller
  (function initBakeryScroll() {
    var track = document.getElementById('bakeryScrollTrack');
    var prevBtn = document.getElementById('bakeryScrollPrev');
    var nextBtn = document.getElementById('bakeryScrollNext');
    if (!track) return;

    var scrollStep = 300;

    if (prevBtn) {
      prevBtn.addEventListener('click', function () {
        track.scrollBy({ left: -scrollStep, behavior: 'smooth' });
      });
    }

    if (nextBtn) {
      nextBtn.addEventListener('click', function () {
        track.scrollBy({ left: scrollStep, behavior: 'smooth' });
      });
    }

    // Desktop Mouse Drag to Scroll
    var isDown = false;
    var startX, scrollLeft;

    track.addEventListener('mousedown', function (e) {
      isDown = true;
      startX = e.pageX - track.offsetLeft;
      scrollLeft = track.scrollLeft;
      track.classList.add('is-dragging');
    });

    track.addEventListener('mouseleave', function () {
      isDown = false;
      track.classList.remove('is-dragging');
    });

    track.addEventListener('mouseup', function () {
      isDown = false;
      track.classList.remove('is-dragging');
    });

    track.addEventListener('mousemove', function (e) {
      if (!isDown) return;
      e.preventDefault();
      var x = e.pageX - track.offsetLeft;
      var walk = (x - startX) * 1.5;
      track.scrollLeft = scrollLeft - walk;
    });
  })();

  // 2. Smooth Scroll for Jump Links
  document.querySelectorAll('.js-jump-link').forEach(function (link) {
    link.addEventListener('click', function (e) {
      var targetId = this.getAttribute('href');
      if (targetId && targetId.startsWith('#')) {
        var targetEl = document.querySelector(targetId);
        if (targetEl) {
          e.preventDefault();
          targetEl.scrollIntoView({ behavior: 'smooth', block: 'start' });
        }
      }
    });
  });

  // 3. Open Quote Modal & Pre-fill Model Name
  document.querySelectorAll('.js-open-quote').forEach(function (btn) {
    btn.addEventListener('click', function () {
      var modelName = this.getAttribute('data-model') || 'Display Counter Equipment';
      var modalEl = document.getElementById('qteModal');
      if (modalEl && typeof bootstrap !== 'undefined' && bootstrap.Modal) {
        var modalInstance = bootstrap.Modal.getOrCreateInstance(modalEl);
        modalInstance.show();

        var equipInput = modalEl.querySelector('input[name="mequip"]') || modalEl.querySelector('input[name="mfrom"]');
        if (equipInput && !equipInput.value) {
          equipInput.value = modelName;
        }
      }
    });
  });

});
</script>