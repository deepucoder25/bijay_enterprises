<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); 

// Set Contact Link Variables with Safety Fallbacks
$phone_clean = isset($phone) ? preg_replace('/[^0-9]/', '', $phone) : '9832030973';
$whatsapp_clean = isset($whatsapp) ? preg_replace('/[^0-9]/', '', $whatsapp) : '9832030973';
$phone_href = "tel:" . $phone_clean;
$whatsapp_base = "https://api.whatsapp.com/send?phone=91" . $whatsapp_clean;
?>

<!-- ==========================================================================
     0. Dynamic Breadcrumbs Section
     ========================================================================== -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'Commercial Kitchen Equipment',
    'bc_desc' => 'Heavy-Duty Culinary Equipment Built for 24/7 High-Volume Commercial Cooking & Food Processing',
    'breadcrumbs' => [
        ['name' => 'Commercial Kitchen Equipment']
    ]
]); ?>

<!-- ==========================================================================
     1. Product Showcase: Side-Scrolling Gallery (Row 1) & Overview Content (Row 2)
     ========================================================================== -->
<section class="bakery-overview-section" id="kitchenOverview">
  <div class="container">
    
    <!-- Top Header: Title & Side Scroll Arrow Controls -->
    <div class="d-flex flex-wrap align-items-end justify-content-between gap-3 mb-4">
      <div>
        <span class="product-badge-tag mb-2">
          <i class="bi bi-fire text-gold"></i> HEAVY-DUTY COOKING SYSTEMS
        </span>
        <h2 class="product-section-title mb-1">
          Explore Our <span class="text-brand-highlight">Commercial Kitchen Series</span>
        </h2>
        <p class="product-section-subtitle mb-0">
          Precision-engineered SS 304 cooking ranges, wok stations, tandoors, and bulk culinary systems fabricated in Siliguri.
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

        <!-- Image 1: Indian & Continental Gas Cooking Range -->
        <a href="#kitchenSpecs" class="bakery-image-card js-jump-link text-decoration-none">
          <div class="bakery-image-frame">
            <span class="bakery-image-tag">Series CK-01</span>
            <img src="<?= base_url('assets/img/kitchen_equipment.jpg') ?>" 
                 alt="Indian & Continental Cooking Range" class="bakery-card-img" loading="lazy">
          </div>
          <div class="bakery-image-caption">
            <h5>Gas Cooking Ranges</h5>
            <p>2, 3, 4 &amp; 6 heavy cast iron burners</p>
          </div>
        </a>

        <!-- Image 2: High-Pressure Chinese Wok Station -->
        <a href="#kitchenSpecs" class="bakery-image-card js-jump-link text-decoration-none">
          <div class="bakery-image-frame">
            <span class="bakery-image-tag">Series CK-02</span>
            <img src="<?= base_url('assets/img/kitchen_equipment.jpg') ?>" 
                 alt="High-Pressure Chinese Wok Station" class="bakery-card-img" loading="lazy">
          </div>
          <div class="bakery-image-caption">
            <h5>Chinese Wok Station</h5>
            <p>High-heat jet burners &amp; water wash cooling</p>
          </div>
        </a>

        <!-- Image 3: Stainless Steel Insulated Tandoor -->
        <a href="#kitchenSpecs" class="bakery-image-card js-jump-link text-decoration-none">
          <div class="bakery-image-frame">
            <span class="bakery-image-tag">Series CK-03</span>
            <img src="<?= base_url('assets/img/kitchen_equipment.jpg') ?>" 
                 alt="SS Insulated Clay Tandoor" class="bakery-card-img" loading="lazy">
          </div>
          <div class="bakery-image-caption">
            <h5>SS Clay Tandoor</h5>
            <p>Square &amp; round pots with mineral insulation</p>
          </div>
        </a>

        <!-- Image 4: Commercial Deep Fryer & Griddle -->
        <a href="#kitchenSpecs" class="bakery-image-card js-jump-link text-decoration-none">
          <div class="bakery-image-frame">
            <span class="bakery-image-tag">Series CK-04</span>
            <img src="<?= base_url('assets/img/kitchen_equipment.jpg') ?>" 
                 alt="Commercial Deep Fryer & Griddle" class="bakery-card-img" loading="lazy">
          </div>
          <div class="bakery-image-caption">
            <h5>Deep Fryers &amp; Griddles</h5>
            <p>Thermostatic control &amp; cold zone sediment traps</p>
          </div>
        </a>

        <!-- Image 5: Bulk Cooking Stock Pot Stove -->
        <a href="#kitchenSpecs" class="bakery-image-card js-jump-link text-decoration-none">
          <div class="bakery-image-frame">
            <span class="bakery-image-tag">Series CK-05</span>
            <img src="<?= base_url('assets/img/kitchen_equipment.jpg') ?>" 
                 alt="Commercial Stock Pot Stove" class="bakery-card-img" loading="lazy">
          </div>
          <div class="bakery-image-caption">
            <h5>Stock Pot Stoves</h5>
            <p>Heavy payload bulk catering &amp; gravy boiling</p>
          </div>
        </a>

        <!-- Image 6: Tilting Boiling Pan -->
        <a href="#kitchenSpecs" class="bakery-image-card js-jump-link text-decoration-none">
          <div class="bakery-image-frame">
            <span class="bakery-image-tag">Series CK-06</span>
            <img src="<?= base_url('assets/img/kitchen_equipment.jpg') ?>" 
                 alt="Tilting Braising & Boiling Pan" class="bakery-card-img" loading="lazy">
          </div>
          <div class="bakery-image-caption">
            <h5>Tilting Braising Pan</h5>
            <p>Manual &amp; motorized worm gear tilting</p>
          </div>
        </a>

        <!-- Image 7: Turnkey Kitchen Setup -->
        <div class="bakery-image-card">
          <div class="bakery-image-frame">
            <span class="bakery-image-tag">Turnkey Line</span>
            <img src="<?= base_url('assets/img/kitchen_equipment.jpg') ?>" 
                 alt="Turnkey Commercial Kitchen Setup" class="bakery-card-img" loading="lazy">
          </div>
          <div class="bakery-image-caption">
            <h5>Turnkey Kitchen Setup</h5>
            <p>Custom layout, fabrication &amp; commissioning</p>
          </div>
        </div>

      </div>
    </div>

    <!-- ROW 2: Overview & Descriptive Content Area -->
    <div class="bakery-content-card">
      <div class="row align-items-center g-4 g-lg-5">
        
        <!-- Left Column: Story & WhatsApp CTA -->
        <div class="col-lg-7">
          <div class="bakery-content-header mb-3">
            <span class="product-badge-tag mb-2">
              <i class="bi bi-shield-check text-gold"></i> FOOD-GRADE SS 304 ENGINEERING
            </span>
            <h3 class="bakery-content-title">
              Engineered For High-Output Culinary Operations &amp; Seamless Hygiene
            </h3>
          </div>
          
          <div class="bakery-content-text">
            <p>
              Bijay Enterprises manufactures and supplies heavy-gauge Food Grade SS 304 commercial cooking ranges, Chinese high-heat wok burners, tandoor ovens, and deep fryers engineered for top restaurants, hotels, banquet halls, and cloud kitchens across North Bengal, Sikkim, Bhutan, and the Northeast.
            </p>
            <p>
              Every unit is built with 16 &amp; 18 SWG certified AISI 304 non-magnetic stainless steel, laser-cut seamless spill trays, individual pilot valves, and heavy-duty cast iron pan supports. We provide direct factory fabrication, custom dimensions, and long-term spare parts support.
            </p>
          </div>

          <div class="bakery-content-actions mt-4 d-flex flex-wrap gap-3">
            <a href="<?= $whatsapp_base ?>&text=<?= urlencode('Hello Bijay Enterprises, I need details and pricing for commercial kitchen equipment.') ?>" 
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
                <strong>Certified SS 304 Construction</strong>
                <span>16 &amp; 18 SWG non-magnetic hygienic food contact</span>
              </div>
            </div>

            <div class="bakery-feature-pill">
              <div class="feature-pill-icon">
                <i class="bi bi-fire"></i>
              </div>
              <div class="feature-pill-info">
                <strong>High-BTU Heavy Burners</strong>
                <span>Cast brass &amp; T-burners with individual pilot valves</span>
              </div>
            </div>

            <div class="bakery-feature-pill">
              <div class="feature-pill-icon">
                <i class="bi bi-droplet-half"></i>
              </div>
              <div class="feature-pill-info">
                <strong>Integrated Splashback &amp; Faucets</strong>
                <span>Swivel water taps &amp; stainless grease drainage troughs</span>
              </div>
            </div>

            <div class="bakery-feature-pill">
              <div class="feature-pill-icon">
                <i class="bi bi-tools"></i>
              </div>
              <div class="feature-pill-info">
                <strong>Turnkey Kitchen CAD &amp; AMC</strong>
                <span>Custom AutoCAD layout, installation &amp; ready spares</span>
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
<section class="product-specs-section" id="kitchenSpecs">
  <div class="container">
    
    <div class="text-center mx-auto mb-4" style="max-width: 720px;">
      <span class="product-badge-tag mb-2">
        <i class="bi bi-table text-gold"></i> MODEL COMPARISON MATRIX
      </span>
      <h2 class="product-section-title">
        Quick Comparison of <span class="text-brand-highlight">Kitchen Cooking Models</span>
      </h2>
      <p class="product-section-subtitle mx-auto">
        A side-by-side technical overview of all commercial kitchen equipment models to assist your culinary space planning and capacity sizing.
      </p>
    </div>

    <div class="product-matrix-card">
      <div class="table-responsive">
        <table class="product-matrix-table table align-middle">
          <thead>
            <tr>
              <th>Equipment Model</th>
              <th>Standard Capacity</th>
              <th>Fuel / Power Source</th>
              <th>Specifications / Burners</th>
              <th>Key Safety Feature</th>
              <th class="text-center text-nowrap">Action</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>
                <span class="table-model-title">4-Burner Gas Range with Oven</span>
                <span class="table-model-sub">Model: CKR-4B Range Master</span>
              </td>
              <td>4 Heavy Pots + 100L Bottom Oven</td>
              <td>LPG / PNG Gas Manifold (40 kW)</td>
              <td>Heavy Cast Iron Pan Supports &amp; Pilot Knobs</td>
              <td>Flame Failure Device &amp; Insulated Front Handles</td>
              <td class="text-center text-nowrap">
                <button type="button" class="btn btn-matrix-quote js-open-quote" data-model="4-Burner Gas Range">Get Quote</button>
              </td>
            </tr>
            <tr>
              <td>
                <span class="table-model-title">Chinese Wok Cooking Station</span>
                <span class="table-model-sub">Model: CWS-2B Turbo Jet</span>
              </td>
              <td>2 Main Woks + 1 Soup Pot Station</td>
              <td>High-Pressure LPG / PNG (Commercial)</td>
              <td>Air-Assisted High-Heat Turbo Jet Burners</td>
              <td>Water Curtain Backsplash &amp; Auto Fuel Cutoff</td>
              <td class="text-center text-nowrap">
                <button type="button" class="btn btn-matrix-quote js-open-quote" data-model="Chinese Wok Cooking Station">Get Quote</button>
              </td>
            </tr>
            <tr>
              <td>
                <span class="table-model-title">SS Insulated Clay Tandoor</span>
                <span class="table-model-sub">Model: SCT-36 Square Tandoor</span>
              </td>
              <td>36" External SS / 30" Handcrafted Clay Pot</td>
              <td>Charcoal Fuel or High-Pressure Gas Burner</td>
              <td>Dual-Layer Mineral Wool 1200°C Thermal Barrier</td>
              <td>Heavy SS Casters with Swivel Locks &amp; Skewer Lid</td>
              <td class="text-center text-nowrap">
                <button type="button" class="btn btn-matrix-quote js-open-quote" data-model="SS Clay Tandoor">Get Quote</button>
              </td>
            </tr>
            <tr>
              <td>
                <span class="table-model-title">Commercial Double Deep Fryer</span>
                <span class="table-model-sub">Model: CDF-28 Dual Tank</span>
              </td>
              <td>14L + 14L Dual Independent Wells</td>
              <td>Electric 3-Phase 415V (12 kW) or Commercial LPG</td>
              <td>Precision Thermostat 50°C–200°C Range</td>
              <td>Cold Zone Sediment Trap &amp; Over-Temperature Trip</td>
              <td class="text-center text-nowrap">
                <button type="button" class="btn btn-matrix-quote js-open-quote" data-model="Commercial Double Deep Fryer">Get Quote</button>
              </td>
            </tr>
            <tr>
              <td>
                <span class="table-model-title">Heavy-Duty Stock Pot Stove</span>
                <span class="table-model-sub">Model: SPS-80 Bulk Cooker</span>
              </td>
              <td>Up to 150L Heavy Stock &amp; Gravy Pots</td>
              <td>High-BTU Cast Iron M2 / T-Burners (LPG)</td>
              <td>16 SWG SS Reinforced Top Frame Structure</td>
              <td>Spill Catch Pan &amp; Industrial Isolation Valve</td>
              <td class="text-center text-nowrap">
                <button type="button" class="btn btn-matrix-quote js-open-quote" data-model="Stock Pot Stove">Get Quote</button>
              </td>
            </tr>
            <tr>
              <td>
                <span class="table-model-title">Commercial Tilting Boiling Pan</span>
                <span class="table-model-sub">Model: TBP-120 Bratt Pan</span>
              </td>
              <td>120 Liters Net Stainless Bowl</td>
              <td>Three Phase 415V Electric or High-Heat LPG</td>
              <td>Precision Worm Gear Mechanical Handwheel Tilt</td>
              <td>Balanced Counterweighted Spring Lid &amp; Safety Halt</td>
              <td class="text-center text-nowrap">
                <button type="button" class="btn btn-matrix-quote js-open-quote" data-model="Tilting Boiling Pan">Get Quote</button>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>

  </div>
</section>

<!-- ==========================================================================
     3. Turnkey Kitchen Setup Workflow
     ========================================================================== -->
<section class="product-turnkey-section">
  <div class="container">
    
    <div class="text-center mx-auto mb-5" style="max-width: 720px;">
      <span class="product-badge-tag mb-2">
        <i class="bi bi-diagram-3-fill text-gold"></i> FACTORY FABRICATION &amp; INSTALLATION
      </span>
      <h2 class="product-section-title">
        How We Execute Your <span class="text-brand-highlight">Commercial Kitchen Setup</span>
      </h2>
      <p class="product-section-subtitle mx-auto">
        From restaurant menu analysis and CAD blueprints to factory laser fabrication, burner testing, and chef handover.
      </p>
    </div>

    <div class="row g-4">
      
      <div class="col-sm-6 col-lg-3">
        <div class="turnkey-step-card">
          <div class="turnkey-step-header">
            <span class="turnkey-num-badge">01</span>
            <h4 class="turnkey-title">Menu &amp; Capacity Sizing</h4>
          </div>
          <p class="turnkey-desc">
            We evaluate your peak meal count, menu requirements, and cooking zones to calculate exact burner ratings and gas manifold draw.
          </p>
        </div>
      </div>

      <div class="col-sm-6 col-lg-3">
        <div class="turnkey-step-card">
          <div class="turnkey-step-header">
            <span class="turnkey-num-badge">02</span>
            <h4 class="turnkey-title">AutoCAD Floor Plan Layout</h4>
          </div>
          <p class="turnkey-desc">
            Custom architectural drawings mapping raw storage, hot cooking line, plating counter, dishwashing, and waste flow channels.
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
            Precision CNC fiber laser cutting, seamless TIG welding, and complete gas pressure stress testing before factory dispatch.
          </p>
        </div>
      </div>

      <div class="col-sm-6 col-lg-3">
        <div class="turnkey-step-card">
          <div class="turnkey-step-header">
            <span class="turnkey-num-badge">04</span>
            <h4 class="turnkey-title">On-Site Erection &amp; AMC</h4>
          </div>
          <p class="turnkey-desc">
            Complete pipeline plumbing, leveling, flame calibration, trial run with your culinary brigade, and warranty support.
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
            Planning to Setup or Modernize Your <span class="text-brand-highlight">Commercial Kitchen?</span>
          </h3>

          <p class="cta-light-desc mb-4">
            Send your kitchen floor plan dimensions, equipment wish list, or restaurant concept directly to our senior fabrication engineers in Siliguri for instant BOQ estimation and factory-gate pricing.
          </p>

          <!-- Perks Checklist -->
          <div class="cta-perks-row d-flex flex-wrap gap-2">
            <div class="cta-perk-badge">
              <i class="bi bi-check-circle-fill text-success"></i>
              <span>Free 2D CAD Kitchen Layout</span>
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
            <a href="<?= $whatsapp_base ?>&text=<?= urlencode('Hello Bijay Enterprises, I need instant quotation and layout planning for commercial kitchen equipment.') ?>" 
               target="_blank" rel="noopener" class="btn-cta-whatsapp mb-2.5 text-decoration-none">
              <div class="cta-btn-icon">
                <i class="bi bi-whatsapp"></i>
              </div>
              <div class="cta-btn-text">
                <strong>Connect on WhatsApp</strong>
                <span>Instant reply • Send floor photos</span>
              </div>
              <i class="bi bi-arrow-right cta-btn-arrow"></i>
            </a>

            <!-- Secondary Formal BOQ Quote Action -->
            <button type="button" class="btn-cta-quote w-100 js-open-quote" data-model="Complete Kitchen Setup">
              <i class="bi bi-file-earmark-spreadsheet-fill text-danger me-2"></i>
              <span>Request Formal BOQ Proposal</span>
            </button>

            <!-- Direct Phone Fallback -->
            <div class="cta-phone-note text-center mt-3 pt-2.5 border-top">
              <span class="text-muted small">Prefer a phone call? </span>
              <a href="<?= $phone_href ?>" class="cta-phone-link fw-bold small">
                <i class="bi bi-telephone-fill me-1"></i>+91 <?= $phone_clean ?>
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
      var modelName = this.getAttribute('data-model') || 'Commercial Kitchen Equipment';
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
