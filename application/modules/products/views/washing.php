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
    'bc_h1' => 'Commercial Washing & Hygiene Equipment',
    'bc_desc' => 'Seamless Pot Wash Sinks, Dishwasher In-feed Benches & Waste Scrap Tables in Food-Grade SS 304',
    'breadcrumbs' => [
        ['name' => 'Washing Equipment']
    ]
]); ?>

<!-- ==========================================================================
     1. Product Showcase: Side-Scrolling Gallery (Row 1) & Overview Content (Row 2)
     ========================================================================== -->
<section class="bakery-overview-section" id="washingOverview">
  <div class="container">
    
    <!-- Top Header: Title & Side Scroll Arrow Controls -->
    <div class="d-flex flex-wrap align-items-end justify-content-between gap-3 mb-4">
      <div>
        <span class="product-badge-tag mb-2">
          <i class="bi bi-droplet-half text-gold"></i> SANITARY WAREWASHING FABRICATION
        </span>
        <h2 class="product-section-title mb-1">
          Explore Our <span class="text-brand-highlight">Washing Equipment Series</span>
        </h2>
        <p class="product-section-subtitle mb-0">
          Heavy SS 304 pot wash sinks, pre-rinse dish scraper tables, mobile trolleys, and grease interceptors fabricated in Siliguri.
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

        <!-- Image 1: Triple Bowl Deep Pot Wash Sink -->
        <a href="#washingSpecs" class="bakery-image-card js-jump-link text-decoration-none">
          <div class="bakery-image-frame">
            <span class="bakery-image-tag">Series WS-01</span>
            <img src="<?= base_url('assets/img/washing-equipment.jpg') ?>" 
                 alt="Triple Bowl Pot Wash Sink" class="bakery-card-img" loading="lazy">
          </div>
          <div class="bakery-image-caption">
            <h5>Triple Bowl Pot Sink</h5>
            <p>Wash, rinse &amp; sanitize bowls with pre-rinse faucet</p>
          </div>
        </a>

        <!-- Image 2: Double Bowl Sink with Drain Board -->
        <a href="#washingSpecs" class="bakery-image-card js-jump-link text-decoration-none">
          <div class="bakery-image-frame">
            <span class="bakery-image-tag">Series WS-02</span>
            <img src="<?= base_url('assets/img/washing-equipment.jpg') ?>" 
                 alt="Double Bowl Sink with Drainboard" class="bakery-card-img" loading="lazy">
          </div>
          <div class="bakery-image-caption">
            <h5>Double Bowl Sink</h5>
            <p>Seamless bowls with ribbed drying drainboard</p>
          </div>
        </a>

        <!-- Image 3: Dishwasher Entry & Exit Landing Table -->
        <a href="#washingSpecs" class="bakery-image-card js-jump-link text-decoration-none">
          <div class="bakery-image-frame">
            <span class="bakery-image-tag">Series WS-03</span>
            <img src="<?= base_url('assets/img/washing-equipment.jpg') ?>" 
                 alt="Dishwasher Infeed and Outfeed Table" class="bakery-card-img" loading="lazy">
          </div>
          <div class="bakery-image-caption">
            <h5>Dishwasher Tables</h5>
            <p>Slotted rack slide guide for hood dishwashers</p>
          </div>
        </a>

        <!-- Image 4: Soiled Plate Scrap Table with Chute -->
        <a href="#washingSpecs" class="bakery-image-card js-jump-link text-decoration-none">
          <div class="bakery-image-frame">
            <span class="bakery-image-tag">Series WS-04</span>
            <img src="<?= base_url('assets/img/washing-equipment.jpg') ?>" 
                 alt="Soiled Plate Scrap Table" class="bakery-card-img" loading="lazy">
          </div>
          <div class="bakery-image-caption">
            <h5>Plate Scrap Table</h5>
            <p>Garbage chute hole &amp; dish rack sorting shelf</p>
          </div>
        </a>

        <!-- Image 5: Under-Sink SS Grease Trap -->
        <a href="#washingSpecs" class="bakery-image-card js-jump-link text-decoration-none">
          <div class="bakery-image-frame">
            <span class="bakery-image-tag">Series WS-05</span>
            <img src="<?= base_url('assets/img/washing-equipment.jpg') ?>" 
                 alt="Under-Sink Stainless Grease Trap" class="bakery-card-img" loading="lazy">
          </div>
          <div class="bakery-image-caption">
            <h5>Grease Interceptors</h5>
            <p>Multi-baffle grease separation preventing jams</p>
          </div>
        </a>

        <!-- Image 6: Mobile Plate & Tray Landing Trolley -->
        <a href="#washingSpecs" class="bakery-image-card js-jump-link text-decoration-none">
          <div class="bakery-image-frame">
            <span class="bakery-image-tag">Series WS-06</span>
            <img src="<?= base_url('assets/img/washing-equipment.jpg') ?>" 
                 alt="Mobile Plate & Tray Trolley" class="bakery-card-img" loading="lazy">
          </div>
          <div class="bakery-image-caption">
            <h5>Tray &amp; Plate Trolleys</h5>
            <p>Swiveling non-marking wheels with foot brakes</p>
          </div>
        </a>

        <!-- Image 7: Turnkey Dishwash Setup -->
        <div class="bakery-image-card">
          <div class="bakery-image-frame">
            <span class="bakery-image-tag">Turnkey Line</span>
            <img src="<?= base_url('assets/img/washing-equipment.jpg') ?>" 
                 alt="Turnkey Dishwashing Area Setup" class="bakery-card-img" loading="lazy">
          </div>
          <div class="bakery-image-caption">
            <h5>Turnkey Warewash Line</h5>
            <p>Plumbing layout, scrap zone &amp; clean rack storage</p>
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
              <i class="bi bi-shield-check text-gold"></i> FOOD-GRADE HYGIENIC FABRICATION
            </span>
            <h3 class="bakery-content-title">
              Engineered For High-Capacity Dishwashing &amp; Commercial Sanitary Standards
            </h3>
          </div>
          
          <div class="bakery-content-text">
            <p>
              Meeting strict clinical food hygiene and hospital NABH sanitation standards requires robust, non-corrosive warewashing equipment. Bijay Enterprises manufactures seamless deep pot wash sinks, pre-rinse dish scraper tables, mobile plate trolleys, and grease interceptors in Siliguri.
            </p>
            <p>
              Constructed with certified AISI 304 food-grade stainless steel with deep-drawn seamless bowls, anti-splash front aprons, sound-deadened bowl bottoms preventing metallic clatter, and heavy 38mm tubular legs with cross bracings. Customized to fit any kitchen plumbing layout.
            </p>
          </div>

          <div class="bakery-content-actions mt-4 d-flex flex-wrap gap-3">
            <a href="<?= $whatsapp_base ?>&text=<?= urlencode('Hello Bijay Enterprises, I need details and pricing for commercial washing and sink equipment.') ?>" 
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
                <span>16 &amp; 18 SWG non-magnetic, corrosion-free sanitary steel</span>
              </div>
            </div>

            <div class="bakery-feature-pill">
              <div class="feature-pill-icon">
                <i class="bi bi-volume-mute-fill"></i>
              </div>
              <div class="feature-pill-info">
                <strong>Sound-Deadened Bowl Bottoms</strong>
                <span>Undercoated dampening pads prevent loud dishwashing clatter</span>
              </div>
            </div>

            <div class="bakery-feature-pill">
              <div class="feature-pill-icon">
                <i class="bi bi-water"></i>
              </div>
              <div class="feature-pill-info">
                <strong>High Backsplash &amp; Overflow Aprons</strong>
                <span>150mm splash guard protecting back walls from dirty water</span>
              </div>
            </div>

            <div class="bakery-feature-pill">
              <div class="feature-pill-icon">
                <i class="bi bi-tools"></i>
              </div>
              <div class="feature-pill-info">
                <strong>Adjustable Bullet Leveling Feet</strong>
                <span>Heavy 38mm SS tubular legs with nylon leveling adjusters</span>
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
<section class="product-specs-section" id="washingSpecs">
  <div class="container">
    
    <div class="text-center mx-auto mb-4" style="max-width: 720px;">
      <span class="product-badge-tag mb-2">
        <i class="bi bi-table text-gold"></i> MODEL COMPARISON MATRIX
      </span>
      <h2 class="product-section-title">
        Quick Comparison of <span class="text-brand-highlight">Washing Equipment Models</span>
      </h2>
      <p class="product-section-subtitle mx-auto">
        A side-by-side technical overview of all stainless steel sink units, dishwasher tables, and grease interceptors.
      </p>
    </div>

    <div class="product-matrix-card">
      <div class="table-responsive">
        <table class="product-matrix-table table align-middle">
          <thead>
            <tr>
              <th>Equipment Model</th>
              <th>Dimensions / Bowl Size</th>
              <th>Bowl Configuration</th>
              <th>Material &amp; Gauge</th>
              <th>Key Plumbing Feature</th>
              <th class="text-center text-nowrap">Action</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>
                <span class="table-model-title">Single Bowl Pot Wash Sink</span>
                <span class="table-model-sub">Model: SWS-1B Big Bowl</span>
              </td>
              <td>24" x 24" x 34" (Bowl: 20"x20"x16" Deep)</td>
              <td>1 Extra-Deep Pot Washing Bowl</td>
              <td>16 SWG Food Grade AISI 304 SS</td>
              <td>SS Lever Waste Coupling with Strainer Basket</td>
              <td class="text-center text-nowrap">
                <button type="button" class="btn btn-matrix-quote js-open-quote" data-model="Single Bowl Pot Wash Sink">Get Quote</button>
              </td>
            </tr>
            <tr>
              <td>
                <span class="table-model-title">Double Bowl Sink with Drainboard</span>
                <span class="table-model-sub">Model: DWS-2B Drain Board</span>
              </td>
              <td>60" x 24" x 34" (Dual 18"x18"x14" Bowls)</td>
              <td>2 Bowls + Left/Right Drying Drainboard</td>
              <td>16/18 SWG Certified Stainless Steel</td>
              <td>Dual Water Mixer Tap &amp; 150mm High Backsplash</td>
              <td class="text-center text-nowrap">
                <button type="button" class="btn btn-matrix-quote js-open-quote" data-model="Double Bowl Sink with Drainboard">Get Quote</button>
              </td>
            </tr>
            <tr>
              <td>
                <span class="table-model-title">Triple Bowl Sanitizing Pot Station</span>
                <span class="table-model-sub">Model: TWS-3B Three Stage</span>
              </td>
              <td>84" x 28" x 34" (Three 22"x22"x16" Bowls)</td>
              <td>Wash, Rinse, &amp; Sanitize 3-Bay Unit</td>
              <td>Heavy 16 SWG SS 304 Full Welded</td>
              <td>Overhead Spring Pre-Rinse Shower Faucet</td>
              <td class="text-center text-nowrap">
                <button type="button" class="btn btn-matrix-quote js-open-quote" data-model="Triple Bowl Pot Wash Sink">Get Quote</button>
              </td>
            </tr>
            <tr>
              <td>
                <span class="table-model-title">Dishwasher Infeed &amp; Outfeed Benches</span>
                <span class="table-model-sub">Model: DWT-IO Hood Match</span>
              </td>
              <td>Custom 48" to 72" Track Guide Tables</td>
              <td>Pre-Scrap Infeed Table + Clean Rack Outfeed</td>
              <td>Seamless Heavy SS 304 Track Lip</td>
              <td>Integrated Pre-Rinse Sink &amp; Scrap Chute Ring</td>
              <td class="text-center text-nowrap">
                <button type="button" class="btn btn-matrix-quote js-open-quote" data-model="Dishwasher Landing Tables">Get Quote</button>
              </td>
            </tr>
            <tr>
              <td>
                <span class="table-model-title">Under-Sink Stainless Grease Trap</span>
                <span class="table-model-sub">Model: SGT-50 Grease Interceptor</span>
              </td>
              <td>50 to 150 Liters Flow Capacity (25 GPM)</td>
              <td>3 Removable Baffle Separation Chambers</td>
              <td>Corrosion-Resistant SS 304 with Air-Tight Lid</td>
              <td>Removable Solids Strainer &amp; Odor-Proof Gasket</td>
              <td class="text-center text-nowrap">
                <button type="button" class="btn btn-matrix-quote js-open-quote" data-model="Stainless Steel Grease Trap">Get Quote</button>
              </td>
            </tr>
            <tr>
              <td>
                <span class="table-model-title">Mobile Utensil Landing Trolley</span>
                <span class="table-model-sub">Model: MUT-3T 3-Tier Cart</span>
              </td>
              <td>36" x 24" x 36" (3 Pressed SS Shelves)</td>
              <td>3 Heavy Pressed Trays (150kg Payload)</td>
              <td>Heavy 25mm Round Tubular SS 304 Frame</td>
              <td>4 Swivel Castors (2 with Total Lock Brakes)</td>
              <td class="text-center text-nowrap">
                <button type="button" class="btn btn-matrix-quote js-open-quote" data-model="Utensil Landing Trolley">Get Quote</button>
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
        How We Execute Your <span class="text-brand-highlight">Washing Area Setup</span>
      </h2>
      <p class="product-section-subtitle mx-auto">
        From soiled ware volume estimation and plumbing CAD routing to factory deep-draw fabrication and on-site leveling.
      </p>
    </div>

    <div class="row g-4">
      
      <div class="col-sm-6 col-lg-3">
        <div class="turnkey-step-card">
          <div class="turnkey-step-header">
            <span class="turnkey-num-badge">01</span>
            <h4 class="turnkey-title">Warewashing Volume Sizing</h4>
          </div>
          <p class="turnkey-desc">
            We evaluate your peak plate count, pot dimensions, and wash cycles to calculate sink bay count and rack landing lengths.
          </p>
        </div>
      </div>

      <div class="col-sm-6 col-lg-3">
        <div class="turnkey-step-card">
          <div class="turnkey-step-header">
            <span class="turnkey-num-badge">02</span>
            <h4 class="turnkey-title">Plumbing &amp; Waste CAD Flow</h4>
          </div>
          <p class="turnkey-desc">
            AutoCAD layout maps soil intake, pre-rinse shower, dish machine entry, clean rack storage, and grease interceptor drains.
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
            Deep-drawn SS 304 pressing, robotic TIG corner welding, satin polishing, sound dampening, and leak hydrostatic test.
          </p>
        </div>
      </div>

      <div class="col-sm-6 col-lg-3">
        <div class="turnkey-step-card">
          <div class="turnkey-step-header">
            <span class="turnkey-num-badge">04</span>
            <h4 class="turnkey-title">Plumbing Fitment &amp; Leveling</h4>
          </div>
          <p class="turnkey-desc">
            On-site drain coupling, water mixer fitting, floor bullet leveling, slope gradient check, and warranty spares support.
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
            Planning Pot Wash &amp; <span class="text-brand-highlight">Dishwashing Area Fabrication?</span>
          </h3>

          <p class="cta-light-desc mb-4">
            Send your kitchen wash area dimensions, plumbing connection points, or required sink unit counts directly to our fabrication engineers in Siliguri for instant BOQ estimation and factory pricing.
          </p>

          <!-- Perks Checklist -->
          <div class="cta-perks-row d-flex flex-wrap gap-2">
            <div class="cta-perk-badge">
              <i class="bi bi-check-circle-fill text-success"></i>
              <span>Free Warewash CAD Plan</span>
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
            <a href="<?= $whatsapp_base ?>&text=<?= urlencode('Hello Bijay Enterprises, I need instant quotation and sizing for commercial washing and sink equipment.') ?>" 
               target="_blank" rel="noopener" class="btn-cta-whatsapp mb-2.5 text-decoration-none">
              <div class="cta-btn-icon">
                <i class="bi bi-whatsapp"></i>
              </div>
              <div class="cta-btn-text">
                <strong>Connect on WhatsApp</strong>
                <span>Instant reply • Send area photos</span>
              </div>
              <i class="bi bi-arrow-right cta-btn-arrow"></i>
            </a>

            <!-- Secondary Formal BOQ Quote Action -->
            <button type="button" class="btn-cta-quote w-100 js-open-quote" data-model="Complete Washing Equipment Setup">
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
      var modelName = this.getAttribute('data-model') || 'Washing Equipment';
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
