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
    'bc_h1' => 'Commercial Bakery Equipment',
    'bc_desc' => 'Industrial Rotary Ovens, Heavy Spiral Dough Mixers, Deck Ovens & Precision Confectionery Machinery',
    'breadcrumbs' => [
        ['name' => 'Bakery Equipment']
    ]
]); ?>

<!-- ==========================================================================
     1. Bakery Product Showcase: Side-Scrolling Gallery (Row 1) & Overview Content (Row 2)
     ========================================================================== -->
<section class="bakery-overview-section" id="bakeryOverview">
  <div class="container">
    
    <!-- Top Header: Title & Side Scroll Arrow Controls -->
    <div class="d-flex flex-wrap align-items-end justify-content-between gap-3 mb-4">
      <div>
        <span class="product-badge-tag mb-2">
          <i class="bi bi-cake2-fill text-gold"></i> OUR BAKERY PRODUCTS
        </span>
        <h2 class="product-section-title mb-1">
          Precision Commercial <span class="text-brand-highlight">Bakery Equipment</span>
        </h2>
        <p class="product-section-subtitle mb-0">
          Scroll sideways to view our heavy industrial baking machines and turnkey fabrication models.
        </p>
      </div>

      <!-- Side Scroll Action Controls (Prev / Next Buttons) -->
      <div class="bakery-scroll-nav d-flex align-items-center gap-2">
        <button type="button" class="btn-scroll-arrow" id="bakeryScrollPrev" aria-label="Scroll Left" title="Scroll Left">
          <i class="bi bi-chevron-left"></i>
        </button>
        <button type="button" class="btn-scroll-arrow" id="bakeryScrollNext" aria-label="Scroll Right" title="Scroll Right">
          <i class="bi bi-chevron-right"></i>
        </button>
      </div>
    </div>

    <!-- ======================================================================
         ROW 1: Side-Scrolling Product Image Gallery
         (To add more images, copy and paste a .bakery-image-card block below)
         ====================================================================== -->
    <div class="bakery-scroll-container position-relative mb-4 pb-2">
      <div class="bakery-scroll-track" id="bakeryScrollTrack">

        <!-- Image 1: Industrial Rotary Rack Oven -->
        <a href="#bakerySpecs" class="bakery-image-card js-jump-link text-decoration-none">
          <div class="bakery-image-frame">
            <span class="bakery-image-tag">Series BK-01</span>
            <img src="<?= base_url('assets/img/products/bakery_rotary_rack_oven.jpg') ?>" 
                 alt="Rotary Rack Oven" class="bakery-card-img" loading="lazy">
          </div>
          <div class="bakery-image-caption">
            <h5>Rotary Rack Oven</h5>
            <p>High-volume bread, bun &amp; cookie baking</p>
          </div>
        </a>

        <!-- Image 2: Heavy-Duty Spiral Dough Mixer -->
        <a href="#bakerySpecs" class="bakery-image-card js-jump-link text-decoration-none">
          <div class="bakery-image-frame">
            <span class="bakery-image-tag">Series BK-02</span>
            <img src="<?= base_url('assets/img/products/bakery_spiral_dough_mixer.jpg') ?>" 
                 alt="Spiral Dough Mixer" class="bakery-card-img" loading="lazy">
          </div>
          <div class="bakery-image-caption">
            <h5>Spiral Dough Mixer</h5>
            <p>Dual-speed heavy dough kneading</p>
          </div>
        </a>

        <!-- Image 3: Commercial 3-Deck Baking Oven -->
        <a href="#bakerySpecs" class="bakery-image-card js-jump-link text-decoration-none">
          <div class="bakery-image-frame">
            <span class="bakery-image-tag">Series BK-03</span>
            <img src="<?= base_url('assets/img/products/bakery_deck_oven.jpg') ?>" 
                 alt="Commercial Deck Oven" class="bakery-card-img" loading="lazy">
          </div>
          <div class="bakery-image-caption">
            <h5>3-Deck Baking Oven</h5>
            <p>Artisan stone-hearth baking chambers</p>
          </div>
        </a>

        <!-- Image 4: Commercial Planetary Mixer -->
        <a href="#bakerySpecs" class="bakery-image-card js-jump-link text-decoration-none">
          <div class="bakery-image-frame">
            <span class="bakery-image-tag">Series BK-04</span>
            <img src="<?= base_url('assets/img/products/bakery_planetary_mixer.jpg') ?>" 
                 alt="Planetary Food Mixer" class="bakery-card-img" loading="lazy">
          </div>
          <div class="bakery-image-caption">
            <h5>Planetary Mixer</h5>
            <p>Creams, batters, cake sponge &amp; whisking</p>
          </div>
        </a>

        <!-- Image 5: Fermentation Proofing Cabinet -->
        <a href="#bakerySpecs" class="bakery-image-card js-jump-link text-decoration-none">
          <div class="bakery-image-frame">
            <span class="bakery-image-tag">Series BK-05</span>
            <img src="<?= base_url('assets/img/products/bakery_proofer_chamber.jpg') ?>" 
                 alt="Fermentation Proofer Cabinet" class="bakery-card-img" loading="lazy">
          </div>
          <div class="bakery-image-caption">
            <h5>Fermentation Proofer</h5>
            <p>Climate-regulated humidity &amp; 38°C proofing</p>
          </div>
        </a>

        <!-- Image 6: Reversible Dough Sheeter -->
        <a href="#bakerySpecs" class="bakery-image-card js-jump-link text-decoration-none">
          <div class="bakery-image-frame">
            <span class="bakery-image-tag">Series BK-06</span>
            <img src="<?= base_url('assets/img/products/bakery_dough_sheeter.jpg') ?>" 
                 alt="Reversible Dough Sheeter" class="bakery-card-img" loading="lazy">
          </div>
          <div class="bakery-image-caption">
            <h5>Dough Sheeter</h5>
            <p>Puff pastry &amp; croissant precision lamination</p>
          </div>
        </a>

        <!-- Image 7: Complete Commercial Bakery Setup -->
        <div class="bakery-image-card">
          <div class="bakery-image-frame">
            <span class="bakery-image-tag">Turnkey Line</span>
            <img src="<?= base_url('assets/img/bakery-equipment.jpg') ?>" 
                 alt="Complete Bakery Equipment Setup" class="bakery-card-img" loading="lazy">
          </div>
          <div class="bakery-image-caption">
            <h5>Complete Bakery Setup</h5>
            <p>Turnkey plant layout, fabrication &amp; commissioning</p>
          </div>
        </div>

      </div>
    </div>

    <!-- ======================================================================
         ROW 2: Bakery Overview & Descriptive Content Area
         (You can add, edit, or customize your content here)
         ====================================================================== -->
    <div class="bakery-content-card">
      <div class="row align-items-center g-4 g-lg-5">
        
        <!-- Left Column: Descriptive Story & Value Proposition -->
        <div class="col-lg-7">
          <div class="bakery-content-header mb-3">
            <span class="product-badge-tag mb-2">
              <i class="bi bi-shield-check text-gold"></i> FOOD-GRADE ENGINEERING
            </span>
            <h3 class="bakery-content-title">
              Engineered For High-Output Bakery Production &amp; Long-Life Performance
            </h3>
          </div>
          
          <div class="bakery-content-text">
            <!-- Edit or add your custom text content here -->
            <p>
              Bijay Enterprises manufactures and supplies high-grade commercial bakery machinery engineered specifically for wholesale bakeries, artisan patisseries, confectionery factories, and industrial food processing units in Siliguri, North Bengal, Sikkim, Bhutan, and the Northeast region.
            </p>
            <p>
              Every unit is built with certified AISI 304 food-grade stainless steel contact zones, heavy rockwool thermal insulation for maximum heat retention, and microprocessor PID controls for precision baking curves. Whether setting up a new production line or upgrading capacity, we deliver direct factory fabrication, customized sizing, and lifetime spares support.
            </p>
          </div>

          <div class="bakery-content-actions mt-4 d-flex flex-wrap gap-3">
            <a href="<?= $whatsapp_base ?>&text=<?= urlencode('Hello Bijay Enterprises, I need details and pricing for commercial bakery equipment.') ?>" 
               target="_blank" rel="noopener" class="btn btn-primary-custom d-inline-flex align-items-center gap-2">
              <i class="bi bi-whatsapp"></i>
              <span>Inquire on WhatsApp</span>
            </a>
          </div>
        </div>

        <!-- Right Column: Engineering Highlights / Key Advantages -->
        <div class="col-lg-5">
          <div class="bakery-features-grid">
            
            <div class="bakery-feature-pill">
              <div class="feature-pill-icon">
                <i class="bi bi-patch-check-fill"></i>
              </div>
              <div class="feature-pill-info">
                <strong>Certified SS 304 Construction</strong>
                <span>Corrosion-free, hygienic food contact surfaces</span>
              </div>
            </div>

            <div class="bakery-feature-pill">
              <div class="feature-pill-icon">
                <i class="bi bi-fire"></i>
              </div>
              <div class="feature-pill-info">
                <strong>Low Energy Consumption</strong>
                <span>100mm rockwool insulation &amp; efficient burners</span>
              </div>
            </div>

            <div class="bakery-feature-pill">
              <div class="feature-pill-icon">
                <i class="bi bi-cpu"></i>
              </div>
              <div class="feature-pill-info">
                <strong>Microprocessor PID Precision</strong>
                <span>Consistent ±2°C temperature &amp; steam timing</span>
              </div>
            </div>

            <div class="bakery-feature-pill">
              <div class="feature-pill-icon">
                <i class="bi bi-tools"></i>
              </div>
              <div class="feature-pill-info">
                <strong>Turnkey Setup &amp; Siliguri AMC</strong>
                <span>CAD design, installation &amp; ready spare parts</span>
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
<section class="product-specs-section" id="bakerySpecs">
  <div class="container">
    
    <div class="text-center mx-auto mb-4" style="max-width: 720px;">
      <span class="product-badge-tag mb-2">
        <i class="bi bi-table text-gold"></i> MODEL COMPARISON MATRIX
      </span>
      <h2 class="product-section-title">
        Quick Comparison of <span class="text-brand-highlight">Bakery Models</span>
      </h2>
      <p class="product-section-subtitle mx-auto">
        A side-by-side technical overview of all bakery equipment models to assist your commercial kitchen planning and equipment sizing.
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
              <th>Temperature / Speed Control</th>
              <th>Key Safety Feature</th>
              <th class="text-center text-nowrap">Action</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>
                <span class="table-model-title">Rotary Rack Oven</span>
                <span class="table-model-sub">Model: RRO-120 Pro</span>
              </td>
              <td>120–200 Loaves (16–18 Trays)</td>
              <td>Diesel / Commercial LPG / 415V Elec</td>
              <td>50°C–300°C Digital PID (±2°C)</td>
              <td>Turntable Slip Clutch &amp; Flame Sensor</td>
              <td class="text-center text-nowrap">
                <button type="button" class="btn btn-matrix-quote js-open-quote" data-model="Rotary Rack Oven">Get Quote</button>
              </td>
            </tr>
            <tr>
              <td>
                <span class="table-model-title">Spiral Dough Mixer</span>
                <span class="table-model-sub">Model: HSM-80 Dual Speed</span>
              </td>
              <td>40kg–80kg Dough (80L Bowl)</td>
              <td>Three Phase 415V (3.5 kW / 5.5 kW)</td>
              <td>Dual-Speed Timer Controlled</td>
              <td>Safety Grid Interlock Microswitch</td>
              <td class="text-center text-nowrap">
                <button type="button" class="btn btn-matrix-quote js-open-quote" data-model="Spiral Dough Mixer">Get Quote</button>
              </td>
            </tr>
            <tr>
              <td>
                <span class="table-model-title">3-Deck Baking Oven</span>
                <span class="table-model-sub">Model: BDO-3D Hearth</span>
              </td>
              <td>6–9 Trays (400x600mm)</td>
              <td>18 kW Electric (415V) or Commercial LPG</td>
              <td>Indep. Top/Bottom PID per Deck</td>
              <td>Refractory Cordierite Stone Hearths</td>
              <td class="text-center text-nowrap">
                <button type="button" class="btn btn-matrix-quote js-open-quote" data-model="3-Deck Baking Oven">Get Quote</button>
              </td>
            </tr>
            <tr>
              <td>
                <span class="table-model-title">Planetary Whipping Mixer</span>
                <span class="table-model-sub">Model: BPM-40 Confectionery</span>
              </td>
              <td>40 Liters (12kg Batter)</td>
              <td>Single Phase 230V / Three Phase 415V</td>
              <td>3 Gear Speeds (108/195/355 RPM)</td>
              <td>Thermal Overload Cutoff Relay</td>
              <td class="text-center text-nowrap">
                <button type="button" class="btn btn-matrix-quote js-open-quote" data-model="Planetary Whipping Mixer">Get Quote</button>
              </td>
            </tr>
            <tr>
              <td>
                <span class="table-model-title">Fermentation Proofer</span>
                <span class="table-model-sub">Model: BPC-32 Proofer</span>
              </td>
              <td>32 Baking Trays (Dual Door)</td>
              <td>2.6 kW Single Phase 230V 50Hz</td>
              <td>Ambient to 50°C &amp; 50%–95% RH</td>
              <td>Automatic Float Water Level Sensor</td>
              <td class="text-center text-nowrap">
                <button type="button" class="btn btn-matrix-quote js-open-quote" data-model="Fermentation Proofer">Get Quote</button>
              </td>
            </tr>
            <tr>
              <td>
                <span class="table-model-title">Reversible Dough Sheeter</span>
                <span class="table-model-sub">Model: BDS-520 Laminator</span>
              </td>
              <td>500mm x 2000mm Conveyor</td>
              <td>0.75 kW Motor (230V / 415V)</td>
              <td>0.5mm to 35mm Micrometer Lever</td>
              <td>Safety Roller Guard &amp; Foot Pedal Halt</td>
              <td class="text-center text-nowrap">
                <button type="button" class="btn btn-matrix-quote js-open-quote" data-model="Reversible Dough Sheeter">Get Quote</button>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>

  </div>
</section>

<!-- ==========================================================================
     3. Turnkey Bakery Setup Workflow
     ========================================================================== -->
<section class="product-turnkey-section">
  <div class="container">
    
    <div class="text-center mx-auto mb-5" style="max-width: 720px;">
      <span class="product-badge-tag mb-2">
        <i class="bi bi-diagram-3-fill text-gold"></i> FACTORY FABRICATION &amp; INSTALLATION
      </span>
      <h2 class="product-section-title">
        How We Execute Your <span class="text-brand-highlight">Commercial Bakery Setup</span>
      </h2>
      <p class="product-section-subtitle mx-auto">
        From initial bakery floor plan CAD blueprints to precision Siliguri factory fabrication, firing tests, and on-site baker training.
      </p>
    </div>

    <div class="row g-4">
      
      <div class="col-sm-6 col-lg-3">
        <div class="turnkey-step-card">
          <div class="turnkey-step-header">
            <span class="turnkey-num-badge">01</span>
            <h4 class="turnkey-title">Capacity &amp; BOQ Sizing</h4>
          </div>
          <p class="turnkey-desc">
            We evaluate your daily target loaf and pastry count to calculate precise oven tray volume, mixer capacity, and power draw.
          </p>
        </div>
      </div>

      <div class="col-sm-6 col-lg-3">
        <div class="turnkey-step-card">
          <div class="turnkey-step-header">
            <span class="turnkey-num-badge">02</span>
            <h4 class="turnkey-title">CAD Floor Plan Layout</h4>
          </div>
          <p class="turnkey-desc">
            Custom AutoCAD layout maps workflow from flour storage to dough mixing, proofing, oven baking, slicing, and packing zones.
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
            CNC laser-cut AISI 304 steel fabrication followed by a 4-hour pre-dispatch thermal stress and burner firing test.
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
            Complete chimney ducting, gas piping connection, test bake batch with your head baker, and ongoing AMC warranty support.
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
        
        <!-- Left Column: Value Proposition & Engineering Deliverables -->
        <div class="col-lg-7">
          <div class="d-inline-flex align-items-center gap-2 mb-3">
            <span class="cta-light-badge">
              <i class="bi bi-clock-history text-gold"></i>
              <span>DIRECT FACTORY QUOTATION WITHIN 2 HOURS</span>
            </span>
          </div>

          <h3 class="cta-light-title mb-3">
            Planning to Setup or Upgrade Your <span class="text-brand-highlight">Commercial Bakery?</span>
          </h3>

          <p class="cta-light-desc mb-4">
            Send your room dimensions, floor sketches, or equipment list directly to our senior fabrication engineers in Siliguri for instant BOQ estimation, capacity sizing, and direct factory pricing.
          </p>

          <!-- Perks Checklist -->
          <div class="cta-perks-row d-flex flex-wrap gap-2">
            <div class="cta-perk-badge">
              <i class="bi bi-check-circle-fill text-success"></i>
              <span>Free 2D CAD Layout</span>
            </div>
            <div class="cta-perk-badge">
              <i class="bi bi-check-circle-fill text-success"></i>
              <span>Direct Factory-Gate Rates</span>
            </div>
            <div class="cta-perk-badge">
              <i class="bi bi-check-circle-fill text-success"></i>
              <span>Siliguri On-Site AMC</span>
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
            <a href="<?= $whatsapp_base ?>&text=<?= urlencode('Hello Bijay Enterprises, I need instant quotation and layout planning for commercial bakery equipment.') ?>" 
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
            <button type="button" class="btn-cta-quote w-100 js-open-quote" data-model="Complete Bakery Setup">
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
      var modelName = this.getAttribute('data-model') || 'Bakery Equipment';
      var modalEl = document.getElementById('qteModal');
      if (modalEl && typeof bootstrap !== 'undefined' && bootstrap.Modal) {
        var modalInstance = bootstrap.Modal.getOrCreateInstance(modalEl);
        modalInstance.show();

        // If an input exists for equipment/project, set it
        var equipInput = modalEl.querySelector('input[name="mequip"]') || modalEl.querySelector('input[name="mfrom"]');
        if (equipInput && !equipInput.value) {
          equipInput.value = modelName;
        }
      }
    });
  });

});
</script>
