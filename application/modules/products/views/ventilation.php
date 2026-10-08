<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); 

?>

<!-- ==========================================================================
     0. Dynamic Breadcrumbs Section
     ========================================================================== -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'Kitchen Ventilation & Exhaust Systems',
    'bc_desc' => 'High-CFM Commercial Exhaust Hoods, Centrifugal Blowers & Grease-Free Air Management Systems',
    'breadcrumbs' => [
        ['name' => 'Kitchen Ventilation']
    ]
]); ?>

<!-- ==========================================================================
     1. Product Showcase: Side-Scrolling Gallery (Row 1) & Overview Content (Row 2)
     ========================================================================== -->
<section class="bakery-overview-section" id="ventilationOverview">
  <div class="container">
    
    <!-- Top Header: Title & Side Scroll Arrow Controls -->
    <div class="d-flex flex-wrap align-items-end justify-content-between gap-3 mb-4">
      <div>
        <span class="product-badge-tag mb-2">
          <i class="bi bi-wind text-gold"></i> INDUSTRIAL AIRFLOW &amp; SAFETY
        </span>
        <h2 class="product-section-title mb-1">
          Explore Our <span class="text-brand-highlight">Ventilation Series</span>
        </h2>
        <p class="product-section-subtitle mb-0">
          Heavy-gauge SS 304 exhaust hoods, centrifugal blowers, ductwork, and fresh air systems fabricated in Siliguri.
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

        <!-- Image 1: Commercial Bowl Chopper -->
        <a href="#ventilationSpecs" class="bakery-image-card js-jump-link text-decoration-none">
          <div class="bakery-image-frame">
            <span class="bakery-image-tag">Series KV-01</span>
            <img src="<?= base_url('assets/img/kitchen-ventilation.jpg') ?>" 
                 alt="Commercial Bowl Chopper Machine" class="bakery-card-img" loading="lazy">
          </div>
          <div class="bakery-image-caption">
            <h5>Commercial Bowl Chopper</h5>
            <p>Heavy SS rotating bowl cutter for vegetables &amp; meat</p>
          </div>
        </a>

        <!-- Image 2: Round SS Clay Tandoor -->
        <a href="#ventilationSpecs" class="bakery-image-card js-jump-link text-decoration-none">
          <div class="bakery-image-frame">
            <span class="bakery-image-tag">Series KV-02</span>
            <img src="<?= base_url('assets/img/kitchen-equipment1.jpg') ?>" 
                 alt="Round SS Clay Tandoor 30x30x34" class="bakery-card-img" loading="lazy">
          </div>
          <div class="bakery-image-caption">
            <h5>Round SS Clay Tandoor</h5>
            <p>Size: 30"L × 30"W × 34"H • Castor wheels &amp; insulated pot</p>
          </div>
        </a>

        <!-- Image 3: Soil Dish Table with Garbage -->
        <a href="#ventilationSpecs" class="bakery-image-card js-jump-link text-decoration-none">
          <div class="bakery-image-frame">
            <span class="bakery-image-tag">Series KV-03</span>
            <img src="<?= base_url('assets/img/kitchen-equipment2.jpg') ?>" 
                 alt="Soil Dish Table with Garbage 48x24x34+15" class="bakery-card-img" loading="lazy">
          </div>
          <div class="bakery-image-caption">
            <h5>Soil Dish Table with Garbage</h5>
            <p>Size: 48"L × 24"W × 34"H + 15" • Overhead shelf &amp; scrap chute</p>
          </div>
        </a>

        <!-- Image 4: Four Door Vertical Deep Fridge -->
        <a href="#ventilationSpecs" class="bakery-image-card js-jump-link text-decoration-none">
          <div class="bakery-image-frame">
            <span class="bakery-image-tag">Series KV-04</span>
            <img src="<?= base_url('assets/img/kitchen-equipment3.jpg') ?>" 
                 alt="Four Door Vertical Deep Fridge 50x29x80" class="bakery-card-img" loading="lazy">
          </div>
          <div class="bakery-image-caption">
            <h5>Four Door Vertical Deep Fridge</h5>
            <p>Size: 50"L × 29"W × 80"H • Sub-zero upright commercial storage</p>
          </div>
        </a>

        <!-- Image 5: Double Deck Baking Oven with Trolley -->
        <a href="#ventilationSpecs" class="bakery-image-card js-jump-link text-decoration-none">
          <div class="bakery-image-frame">
            <span class="bakery-image-tag">Series KV-05</span>
            <img src="<?= base_url('assets/img/kitchen-equipment4.jpg') ?>" 
                 alt="Double Deck Baking Oven with Trolley" class="bakery-card-img" loading="lazy">
          </div>
          <div class="bakery-image-caption">
            <h5>Double Deck Baking Oven</h5>
            <p>Dough Wt: 30–100g • Dual decks with mobile trolley</p>
          </div>
        </a>

        <!-- Image 6: Planetary Food Mixer -->
        <a href="#ventilationSpecs" class="bakery-image-card js-jump-link text-decoration-none">
          <div class="bakery-image-frame">
            <span class="bakery-image-tag">Series KV-06</span>
            <img src="<?= base_url('assets/img/kitchen-equipment5.jpg') ?>" 
                 alt="Planetary Food Mixer 10 to 50 Liters" class="bakery-card-img" loading="lazy">
          </div>
          <div class="bakery-image-caption">
            <h5>Planetary Food Mixer</h5>
            <p>Capacity: 10L – 50L • Whisk, beater &amp; spiral hook</p>
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
              <i class="bi bi-shield-check text-gold"></i> CERTIFIED FIRE &amp; SMOKE ENGINEERING
            </span>
            <h3 class="bakery-content-title">
              Engineered For High-CFM Smoke Extraction &amp; Balanced Kitchen Air
            </h3>
          </div>
          
          <div class="bakery-content-text">
            <p>
              A clean, smoke-free kitchen is critical for chef productivity, indoor air quality, and municipal fire safety. Bijay Enterprises manufactures commercial kitchen exhaust hoods with removable stainless steel baffle grease filters, heavy-gauge galvanized iron (GI) ducting, and vibration-dampened centrifugal blowers.
            </p>
            <p>
              Every exhaust system is custom engineered to capture up to 95% of airborne grease vapors, preventing oily chimney fires and building code violations. We supply matched fresh-air make-up systems, electrostatic precipitators (ESP), and complete rooftop chimney duct risers in Siliguri and neighboring regions.
            </p>
          </div>

          <div class="bakery-content-actions mt-4 d-flex flex-wrap gap-3">
            <a href="<?= $whatsapphtml ?>&text=<?= urlencode('Hello Bijay Enterprises, I need details and pricing for kitchen ventilation and exhaust systems.') ?>" 
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
                <strong>Grease-Tight All-Welded SS 304</strong>
                <span>Leak-proof perimeter gutter with drain coupling</span>
              </div>
            </div>

            <div class="bakery-feature-pill">
              <div class="feature-pill-icon">
                <i class="bi bi-funnel-fill"></i>
              </div>
              <div class="feature-pill-info">
                <strong>Removable SS Baffle Filters</strong>
                <span>Captures 95% of airborne oil droplets &amp; easy cleaning</span>
              </div>
            </div>

            <div class="bakery-feature-pill">
              <div class="feature-pill-icon">
                <i class="bi bi-fan"></i>
              </div>
              <div class="feature-pill-info">
                <strong>High Static Pressure Centrifugal Fans</strong>
                <span>Dynamically balanced SISW impellers with TEFC motors</span>
              </div>
            </div>

            <div class="bakery-feature-pill">
              <div class="feature-pill-icon">
                <i class="bi bi-tools"></i>
              </div>
              <div class="feature-pill-info">
                <strong>Turnkey Air Balance &amp; AMC</strong>
                <span>AutoCAD duct routing, air balancing &amp; Siliguri AMC</span>
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
<section class="product-specs-section" id="ventilationSpecs">
  <div class="container">
    
    <div class="text-center mx-auto mb-4" style="max-width: 720px;">
      <span class="product-badge-tag mb-2">
        <i class="bi bi-table text-gold"></i> MODEL COMPARISON MATRIX
      </span>
      <h2 class="product-section-title">
        Quick Comparison of <span class="text-brand-highlight">Ventilation Equipment</span>
      </h2>
      <p class="product-section-subtitle mx-auto">
        A side-by-side technical overview of all exhaust hood models, centrifugal fans, and air scrubbers to assist your HVAC planning.
      </p>
    </div>

    <div class="product-matrix-card">
      <div class="table-responsive">
        <table class="product-matrix-table table align-middle">
          <thead>
            <tr>
              <th>Equipment Model</th>
              <th>Standard Capacity / Size</th>
              <th>Power / Fuel Source</th>
              <th>Specifications / Drive</th>
              <th>Key Safety Feature</th>
              <th class="text-center text-nowrap">Action</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>
                <span class="table-model-title">Commercial Bowl Chopper</span>
                <span class="table-model-sub">Model: KBC-01 Heavy Duty</span>
              </td>
              <td>Commercial Food &amp; Meat Processing</td>
              <td>230V / 415V Dual Speed Motor</td>
              <td>Rotating SS Cutter Bowl &amp; Curved Blades</td>
              <td>Safety Cover Interlock &amp; Emergency Halt</td>
              <td class="text-center text-nowrap">
                <button type="button" class="btn btn-matrix-quote js-open-quote" data-model="Commercial Bowl Chopper">Get Quote</button>
              </td>
            </tr>
            <tr>
              <td>
                <span class="table-model-title">Round SS Clay Tandoor</span>
                <span class="table-model-sub">Model: CKR-TR30 Round Pot</span>
              </td>
              <td>30"L × 30"W × 34"H External Frame</td>
              <td>Charcoal / High-Pressure Gas Burner</td>
              <td>Heavy Castor Wheels &amp; Ash Clean Vent</td>
              <td>Dual Mineral Insulation &amp; Secure Skewer Lid</td>
              <td class="text-center text-nowrap">
                <button type="button" class="btn btn-matrix-quote js-open-quote" data-model="Round SS Clay Tandoor">Get Quote</button>
              </td>
            </tr>
            <tr>
              <td>
                <span class="table-model-title">Soil Dish Table with Garbage</span>
                <span class="table-model-sub">Model: CKS-DT48 Scrap Station</span>
              </td>
              <td>48"L × 24"W × 34"H + 15" Overhead Rack</td>
              <td>Scraps Chute &amp; Waste Bin Well</td>
              <td>16 SWG Certified SS 304 Construction</td>
              <td>Integrated Overhead Plate Rack &amp; Chute</td>
              <td class="text-center text-nowrap">
                <button type="button" class="btn btn-matrix-quote js-open-quote" data-model="Soil Dish Table with Garbage">Get Quote</button>
              </td>
            </tr>
            <tr>
              <td>
                <span class="table-model-title">Four Door Vertical Deep Fridge</span>
                <span class="table-model-sub">Model: CKF-4D Sub-Zero</span>
              </td>
              <td>50"L × 29"W × 80"H (4 Solid Doors)</td>
              <td>-18°C to -22°C Deep Freezing</td>
              <td>Heavy Tropicalized Compressor Motor</td>
              <td>Heated Door Gaskets &amp; Auto Defrost Timer</td>
              <td class="text-center text-nowrap">
                <button type="button" class="btn btn-matrix-quote js-open-quote" data-model="Four Door Vertical Deep Fridge">Get Quote</button>
              </td>
            </tr>
            <tr>
              <td>
                <span class="table-model-title">Double Deck Baking Oven</span>
                <span class="table-model-sub">Model: CKO-2D Trolley Oven</span>
              </td>
              <td>Dough Wt: 30–100g (4–6 Baking Trays)</td>
              <td>Commercial LPG / 415V Electric</td>
              <td>Independent Chamber Temperature PID</td>
              <td>Mobile Wheel Trolley Base &amp; Overheat Safety</td>
              <td class="text-center text-nowrap">
                <button type="button" class="btn btn-matrix-quote js-open-quote" data-model="Double Deck Baking Oven">Get Quote</button>
              </td>
            </tr>
            <tr>
              <td>
                <span class="table-model-title">Planetary Food Mixer</span>
                <span class="table-model-sub">Model: CKM-50 Multi-Speed</span>
              </td>
              <td>10 Liters to 50 Liters Bowl Capacity</td>
              <td>Single Phase 230V / 3 Phase 415V</td>
              <td>3 Variable Gear Speeds (Whisk, Beater, Hook)</td>
              <td>Thermal Overload Protection &amp; Bowl Safety Wire</td>
              <td class="text-center text-nowrap">
                <button type="button" class="btn btn-matrix-quote js-open-quote" data-model="Planetary Food Mixer">Get Quote</button>
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
        How We Execute Your <span class="text-brand-highlight">Ventilation System</span>
      </h2>
      <p class="product-section-subtitle mx-auto">
        From kitchen CFM air volume calculations to factory laser hood fabrication, chimney riser routing, and dynamic balancing.
      </p>
    </div>

    <div class="row g-4">
      
      <div class="col-sm-6 col-lg-3">
        <div class="turnkey-step-card">
          <div class="turnkey-step-header">
            <span class="turnkey-num-badge">01</span>
            <h4 class="turnkey-title">CFM Volume Calculation</h4>
          </div>
          <p class="turnkey-desc">
            We evaluate heat load from tandoors, ranges, and woks to determine exact CFM and static pressure resistance.
          </p>
        </div>
      </div>

      <div class="col-sm-6 col-lg-3">
        <div class="turnkey-step-card">
          <div class="turnkey-step-header">
            <span class="turnkey-num-badge">02</span>
            <h4 class="turnkey-title">AutoCAD Duct Routing</h4>
          </div>
          <p class="turnkey-desc">
            Isometric blueprints map shortest chimney riser routes, minimal elbow loss, and fresh air supply diffusers.
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
            CNC lock-formed GI ducts, all-welded SS 304 canopy hoods, and dynamic balancing tests of blower impellers.
          </p>
        </div>
      </div>

      <div class="col-sm-6 col-lg-3">
        <div class="turnkey-step-card">
          <div class="turnkey-step-header">
            <span class="turnkey-num-badge">04</span>
            <h4 class="turnkey-title">On-Site Erection &amp; Balance</h4>
          </div>
          <p class="turnkey-desc">
            Complete rooftop fan mounting, electrical starter panel hookup, anemometer velocity test, and AMC warranty.
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
            Planning Kitchen <span class="text-brand-highlight">Exhaust Hoods &amp; Ventilation Ducting?</span>
          </h3>

          <p class="cta-light-desc mb-4">
            Send your kitchen cooking line dimensions, building floor heights, or duct routing drawings directly to our HVAC engineers in Siliguri for instant CFM estimation and factory-gate pricing.
          </p>

          <!-- Perks Checklist -->
          <div class="cta-perks-row d-flex flex-wrap gap-2">
            <div class="cta-perk-badge">
              <i class="bi bi-check-circle-fill text-success"></i>
              <span>Free Kitchen CFM Sizing</span>
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
            <a href="<?= $whatsapphtml ?>&text=<?= urlencode('Hello Bijay Enterprises, I need instant quotation and CFM sizing for kitchen exhaust ventilation.') ?>" 
               target="_blank" rel="noopener" class="btn-cta-whatsapp mb-2.5 text-decoration-none">
              <div class="cta-btn-icon">
                <i class="bi bi-whatsapp"></i>
              </div>
              <div class="cta-btn-text">
                <strong>Connect on WhatsApp</strong>
                <span>Instant reply • Send kitchen drawings</span>
              </div>
              <i class="bi bi-arrow-right cta-btn-arrow"></i>
            </a>

            <!-- Secondary Formal BOQ Quote Action -->
            <button type="button" class="btn-cta-quote w-100 js-open-quote" data-model="Complete Ventilation System">
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
      var modelName = this.getAttribute('data-model') || 'Kitchen Ventilation System';
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
