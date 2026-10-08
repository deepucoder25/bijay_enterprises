<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); 

?>

<!-- ==========================================================================
     0. Dynamic Breadcrumbs Section
     ========================================================================== -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'Commercial Refrigeration Equipment',
    'bc_desc' => 'Tropicalized +43°C Commercial Cold Storage Chillers, Deep Freezers & Undercounter Prep Tables',
    'breadcrumbs' => [
        ['name' => 'Refrigeration Equipment']
    ]
]); ?>

<!-- ==========================================================================
     1. Product Showcase: Side-Scrolling Gallery (Row 1) & Overview Content (Row 2)
     ========================================================================== -->
<section class="bakery-overview-section" id="refrigerationOverview">
  <div class="container">
    
    <!-- Top Header: Title & Side Scroll Arrow Controls -->
    <div class="d-flex flex-wrap align-items-end justify-content-between gap-3 mb-4">
      <div>
        <span class="product-badge-tag mb-2">
          <i class="bi bi-snow text-gold"></i> TROPICALIZED COLD STORAGE
        </span>
        <h2 class="product-section-title mb-1">
          Explore Our <span class="text-brand-highlight">Refrigeration Series</span>
        </h2>
        <p class="product-section-subtitle mb-0">
          Heavy-duty commercial upright chillers, blast freezers, prep counters, and water coolers built for +43°C ambient heat.
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

        <!-- Image 1: 2-Door Worktop Refrigerator -->
        <a href="#refrigerationSpecs" class="bakery-image-card js-jump-link text-decoration-none">
          <div class="bakery-image-frame">
            <span class="bakery-image-tag">Series RF-01</span>
            <img src="<?= base_url('assets/img/refrigeration-equipment.jpg') ?>" 
                 alt="2-Door Worktop Refrigerator" class="bakery-card-img" loading="lazy">
          </div>
          <div class="bakery-image-caption">
            <h5>2-Door Worktop Refrigerator</h5>
            <p>Undercounter prep chiller with stainless splashback</p>
          </div>
        </a>

        <!-- Image 2: Curved Glass Chest Freezer -->
        <a href="#refrigerationSpecs" class="bakery-image-card js-jump-link text-decoration-none">
          <div class="bakery-image-frame">
            <span class="bakery-image-tag">Series RF-02</span>
            <img src="<?= base_url('assets/img/refrigeration-equipment1.jpg') ?>" 
                 alt="Curved Glass Chest Freezer 110L" class="bakery-card-img" loading="lazy">
          </div>
          <div class="bakery-image-caption">
            <h5>Curved Glass Chest Freezer</h5>
            <p>Capacity: 110L • Sliding curved glass top display freezer</p>
          </div>
        </a>

        <!-- Image 3: Four Door Vertical Deep Fridge -->
        <a href="#refrigerationSpecs" class="bakery-image-card js-jump-link text-decoration-none">
          <div class="bakery-image-frame">
            <span class="bakery-image-tag">Series RF-03</span>
            <img src="<?= base_url('assets/img/refrigeration-equipment2.jpg') ?>" 
                 alt="Four Door Vertical Deep Fridge 50x29x80" class="bakery-card-img" loading="lazy">
          </div>
          <div class="bakery-image-caption">
            <h5>Four Door Vertical Deep Fridge</h5>
            <p>Size: 50"L × 29"W × 80"H • 4-door sub-zero reach-in storage</p>
          </div>
        </a>

        <!-- Image 4: Double Door Vertical Refrigerator -->
        <a href="#refrigerationSpecs" class="bakery-image-card js-jump-link text-decoration-none">
          <div class="bakery-image-frame">
            <span class="bakery-image-tag">Series RF-04</span>
            <img src="<?= base_url('assets/img/refrigeration-equipment3.jpg') ?>" 
                 alt="Double Door Vertical Refrigerator 50x29x80" class="bakery-card-img" loading="lazy">
          </div>
          <div class="bakery-image-caption">
            <h5>Double Door Vertical Refrigerator</h5>
            <p>Size: 50"L × 29"W × 80"H • 2-door commercial chiller cabinet</p>
          </div>
        </a>

        <!-- Image 5: Double Door Chiller / Refrigerator -->
        <a href="#refrigerationSpecs" class="bakery-image-card js-jump-link text-decoration-none">
          <div class="bakery-image-frame">
            <span class="bakery-image-tag">Series RF-05</span>
            <img src="<?= base_url('assets/img/refrigeration-equipment4.jpg') ?>" 
                 alt="Double Door Chiller Refrigerator 28x29x80" class="bakery-card-img" loading="lazy">
          </div>
          <div class="bakery-image-caption">
            <h5>Double Door Chiller / Refrigerator</h5>
            <p>Size: 28"L × 29"W × 80"H • Slim dual-door reach-in chiller</p>
          </div>
        </a>

        <!-- Image 6: Work Top Refrigerator with Shelf -->
        <a href="#refrigerationSpecs" class="bakery-image-card js-jump-link text-decoration-none">
          <div class="bakery-image-frame">
            <span class="bakery-image-tag">Series RF-06</span>
            <img src="<?= base_url('assets/img/refrigeration-equipment5.jpg') ?>" 
                 alt="Work Top Refrigerator with Overhead Shelf 72x26x34+15+10" class="bakery-card-img" loading="lazy">
          </div>
          <div class="bakery-image-caption">
            <h5>Work Top Refrigerator with Shelf</h5>
            <p>Size: 72"L × 26"W × 34"H + 15" + 10" • 2-tier overhead rack</p>
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
              <i class="bi bi-shield-check text-gold"></i> FOOD-GRADE STAINLESS COLD ENGINEERING
            </span>
            <h3 class="bakery-content-title">
              Engineered For Extreme Kitchen Heat &amp; Unbroken Cold-Chain Reliability
            </h3>
          </div>
          
          <div class="bakery-content-text">
            <p>
              Bijay Enterprises manufactures and supplies tropicalized commercial refrigeration systems engineered specifically for hot commercial kitchen environments with ambient tolerance up to +43°C. Serving restaurants, hotels, resorts, and catering plants in Siliguri, North Bengal, Sikkim, and Bhutan.
            </p>
            <p>
              Every unit incorporates authentic Emerson Copeland and Embraco compressors, 100% inner-grooved seamless copper tubing, 60–80mm high-density cyclopentane PUF thermal insulation, and Carel/Dixell microprocessor controllers. We provide custom sizing and ready replacement parts.
            </p>
          </div>

          <div class="bakery-content-actions mt-4 d-flex flex-wrap gap-3">
            <a href="<?= $whatsapphtml ?>&text=<?= urlencode('Hello Bijay Enterprises, I need details and pricing for commercial refrigeration equipment.') ?>" 
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
                <strong>Emerson &amp; Embraco Compressors</strong>
                <span>Heavy-duty tropicalized motors rated for +43°C ambient</span>
              </div>
            </div>

            <div class="bakery-feature-pill">
              <div class="feature-pill-icon">
                <i class="bi bi-snow2"></i>
              </div>
              <div class="feature-pill-info">
                <strong>100% Copper Tube Coils</strong>
                <span>Inner-grooved seamless copper tubing &amp; wide fin condensers</span>
              </div>
            </div>

            <div class="bakery-feature-pill">
              <div class="feature-pill-icon">
                <i class="bi bi-shield-shaded"></i>
              </div>
              <div class="feature-pill-info">
                <strong>High-Density Cyclopentane PUF</strong>
                <span>60mm–80mm injection insulation with zero thermal leakage</span>
              </div>
            </div>

            <div class="bakery-feature-pill">
              <div class="feature-pill-icon">
                <i class="bi bi-tools"></i>
              </div>
              <div class="feature-pill-info">
                <strong>Carel Microprocessor PID &amp; Spares</strong>
                <span>Auto-defrost, digital LED displays &amp; Siliguri AMC</span>
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
<section class="product-specs-section" id="refrigerationSpecs">
  <div class="container">
    
    <div class="text-center mx-auto mb-4" style="max-width: 720px;">
      <span class="product-badge-tag mb-2">
        <i class="bi bi-table text-gold"></i> MODEL COMPARISON MATRIX
      </span>
      <h2 class="product-section-title">
        Quick Comparison of <span class="text-brand-highlight">Refrigeration Models</span>
      </h2>
      <p class="product-section-subtitle mx-auto">
        A side-by-side technical overview of all commercial chillers, freezers, and cold prep tables to assist your kitchen storage planning.
      </p>
    </div>

    <div class="product-matrix-card">
      <div class="table-responsive">
        <table class="product-matrix-table table align-middle">
          <thead>
            <tr>
              <th>Equipment Model</th>
              <th>Storage Capacity</th>
              <th>Temperature Range</th>
              <th>Compressor &amp; Refrigerant</th>
              <th>Key Safety Feature</th>
              <th class="text-center text-nowrap">Action</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>
                <span class="table-model-title">2-Door Worktop Refrigerator</span>
                <span class="table-model-sub">Model: WTR-2D Undercounter</span>
              </td>
              <td>Standard Prep Counter / 2 Doors</td>
              <td>+2°C to +8°C Uniform Cold</td>
              <td>High-Efficiency Tropicalized Compressor</td>
              <td>Stainless Splashback &amp; Magnetic Door Gaskets</td>
              <td class="text-center text-nowrap">
                <button type="button" class="btn btn-matrix-quote js-open-quote" data-model="2-Door Worktop Refrigerator">Get Quote</button>
              </td>
            </tr>
            <tr>
              <td>
                <span class="table-model-title">Curved Glass Chest Freezer</span>
                <span class="table-model-sub">Model: CGF-110L Display</span>
              </td>
              <td>110 Liters Storage Capacity</td>
              <td>-18°C to -24°C Deep Freezing</td>
              <td>Heavy Hermetic Low-Noise Compressor</td>
              <td>Sliding Curved Glass Lid &amp; Internal Basket</td>
              <td class="text-center text-nowrap">
                <button type="button" class="btn btn-matrix-quote js-open-quote" data-model="Curved Glass Chest Freezer">Get Quote</button>
              </td>
            </tr>
            <tr>
              <td>
                <span class="table-model-title">Four Door Vertical Deep Fridge</span>
                <span class="table-model-sub">Model: VDF-4D 50x29x80</span>
              </td>
              <td>50"L × 29"W × 80"H (4 Solid Doors)</td>
              <td>-18°C to -22°C Sub-Zero Storage</td>
              <td>Embraco Heavy-Duty Tropicalized Motor</td>
              <td>Heated Perimeter Door Gaskets &amp; Auto Defrost</td>
              <td class="text-center text-nowrap">
                <button type="button" class="btn btn-matrix-quote js-open-quote" data-model="Four Door Vertical Deep Fridge">Get Quote</button>
              </td>
            </tr>
            <tr>
              <td>
                <span class="table-model-title">Double Door Vertical Refrigerator</span>
                <span class="table-model-sub">Model: VDR-2D 50x29x80</span>
              </td>
              <td>50"L × 29"W × 80"H (2 Large Doors)</td>
              <td>+2°C to +8°C Chilled Storage</td>
              <td>Emerson Copeland Forced-Air Cooling</td>
              <td>Digital Thermostat PID &amp; Reversible Doors</td>
              <td class="text-center text-nowrap">
                <button type="button" class="btn btn-matrix-quote js-open-quote" data-model="Double Door Vertical Refrigerator">Get Quote</button>
              </td>
            </tr>
            <tr>
              <td>
                <span class="table-model-title">Double Door Chiller / Refrigerator</span>
                <span class="table-model-sub">Model: DDC-28 Slim Vertical</span>
              </td>
              <td>28"L × 29"W × 80"H (Compact Footprint)</td>
              <td>+2°C to +8°C Upright Chilling</td>
              <td>Low-Power Sub-Tropicalized Compressor</td>
              <td>Multi-Level Adjustable Wire Shelves &amp; Locks</td>
              <td class="text-center text-nowrap">
                <button type="button" class="btn btn-matrix-quote js-open-quote" data-model="Double Door Chiller Refrigerator">Get Quote</button>
              </td>
            </tr>
            <tr>
              <td>
                <span class="table-model-title">Work Top Refrigerator with Shelf</span>
                <span class="table-model-sub">Model: WTR-72 Overhead 2-Tier</span>
              </td>
              <td>72"L × 26"W × 34"H + 15" + 10"</td>
              <td>+2°C to +8°C Food Prep &amp; Storage</td>
              <td>Undercounter Heavy-Duty R134a Compressor</td>
              <td>Dual-Tier SS Shelving &amp; Prep Worktop</td>
              <td class="text-center text-nowrap">
                <button type="button" class="btn btn-matrix-quote js-open-quote" data-model="Work Top Refrigerator with Shelf">Get Quote</button>
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
        How We Execute Your <span class="text-brand-highlight">Refrigeration Setup</span>
      </h2>
      <p class="product-section-subtitle mx-auto">
        From cold chain thermal load sizing to factory PUF injection, leak vacuum testing, and on-site commissioning.
      </p>
    </div>

    <div class="row g-4">
      
      <div class="col-sm-6 col-lg-3">
        <div class="turnkey-step-card">
          <div class="turnkey-step-header">
            <span class="turnkey-num-badge">01</span>
            <h4 class="turnkey-title">Thermal Load Calculation</h4>
          </div>
          <p class="turnkey-desc">
            We evaluate daily food turnover, kitchen ambient temperature, and calculate compressor BTU rating.
          </p>
        </div>
      </div>

      <div class="col-sm-6 col-lg-3">
        <div class="turnkey-step-card">
          <div class="turnkey-step-header">
            <span class="turnkey-num-badge">02</span>
            <h4 class="turnkey-title">AutoCAD Floor Placement</h4>
          </div>
          <p class="turnkey-desc">
            Blueprints optimize kitchen ventilation clearance, condenser airflow, and chef preparation reach.
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
            High-density PUF injection, laser-cut SS 304 casing, nitrogen pressure test, and 24-hour test chilling cycle.
          </p>
        </div>
      </div>

      <div class="col-sm-6 col-lg-3">
        <div class="turnkey-step-card">
          <div class="turnkey-step-header">
            <span class="turnkey-num-badge">04</span>
            <h4 class="turnkey-title">Site Erection &amp; AMC</h4>
          </div>
          <p class="turnkey-desc">
            Leveling fitment, electrical surge testing, temperature pull-down check, and factory warranty AMC support.
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
            Planning to Setup or Upgrade <span class="text-brand-highlight">Commercial Cold Storage?</span>
          </h3>

          <p class="cta-light-desc mb-4">
            Send your cold storage capacity requirements, kitchen room layout, or equipment list directly to our senior refrigeration engineers in Siliguri for instant BOQ estimation and factory-gate pricing.
          </p>

          <!-- Perks Checklist -->
          <div class="cta-perks-row d-flex flex-wrap gap-2">
            <div class="cta-perk-badge">
              <i class="bi bi-check-circle-fill text-success"></i>
              <span>Free Cold Load Sizing</span>
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
            <a href="<?= $whatsapphtml ?>&text=<?= urlencode('Hello Bijay Enterprises, I need instant quotation and sizing for commercial refrigeration equipment.') ?>" 
               target="_blank" rel="noopener" class="btn-cta-whatsapp mb-2.5 text-decoration-none">
              <div class="cta-btn-icon">
                <i class="bi bi-whatsapp"></i>
              </div>
              <div class="cta-btn-text">
                <strong>Connect on WhatsApp</strong>
                <span>Instant reply • Send kitchen photos</span>
              </div>
              <i class="bi bi-arrow-right cta-btn-arrow"></i>
            </a>

            <!-- Secondary Formal BOQ Quote Action -->
            <button type="button" class="btn-cta-quote w-100 js-open-quote" data-model="Complete Refrigeration Setup">
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
      var modelName = this.getAttribute('data-model') || 'Refrigeration Equipment';
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
