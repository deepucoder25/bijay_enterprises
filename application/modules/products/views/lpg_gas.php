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
    'bc_h1' => 'Commercial L.P.G. Gas Pipeline Installation',
    'bc_desc' => 'Certified Commercial LPG Manifold Banks, Pipeline Networks & Gas Leak Detectors for Commercial Kitchens',
    'breadcrumbs' => [
        ['name' => 'LPG Gas Pipeline']
    ]
]); ?>

<!-- ==========================================================================
     1. Product Showcase: Side-Scrolling Gallery (Row 1) & Overview Content (Row 2)
     ========================================================================== -->
<section class="bakery-overview-section" id="gasOverview">
  <div class="container">
    
    <!-- Top Header: Title & Side Scroll Arrow Controls -->
    <div class="d-flex flex-wrap align-items-end justify-content-between gap-3 mb-4">
      <div>
        <span class="product-badge-tag mb-2">
          <i class="bi bi-shield-lock-fill text-gold"></i> CCOE &amp; PESO SAFETY COMPLIANCE
        </span>
        <h2 class="product-section-title mb-1">
          Explore Our <span class="text-brand-highlight">LPG Gas Pipeline Systems</span>
        </h2>
        <p class="product-section-subtitle mb-0">
          Heavy Class C seamless pipelines, cylinder manifolds, pressure reduction stations, and automatic gas leak alarms.
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

        <!-- Image 1: Commercial Cylinder Manifold Bank -->
        <a href="#gasSpecs" class="bakery-image-card js-jump-link text-decoration-none">
          <div class="bakery-image-frame">
            <span class="bakery-image-tag">Series GP-01</span>
            <img src="<?= base_url('assets/img/gas-pipeline.jpg') ?>" 
                 alt="Commercial Cylinder Manifold Bank" class="bakery-card-img" loading="lazy">
          </div>
          <div class="bakery-image-caption">
            <h5>Cylinder Manifold Bank</h5>
            <p>Dual-arm 4 to 20+ cylinder VOT/LOT headers</p>
          </div>
        </a>

        <!-- Image 2: Two-Stage Pressure Regulator -->
        <a href="#gasSpecs" class="bakery-image-card js-jump-link text-decoration-none">
          <div class="bakery-image-frame">
            <span class="bakery-image-tag">Series GP-02</span>
            <img src="<?= base_url('assets/img/gas-pipeline.jpg') ?>" 
                 alt="Two-Stage Pressure Regulator Station" class="bakery-card-img" loading="lazy">
          </div>
          <div class="bakery-image-caption">
            <h5>Pressure Regulators</h5>
            <p>1st &amp; 2nd stage steady gas flow reduction</p>
          </div>
        </a>

        <!-- Image 3: Class C Seamless Steel Pipeline -->
        <a href="#gasSpecs" class="bakery-image-card js-jump-link text-decoration-none">
          <div class="bakery-image-frame">
            <span class="bakery-image-tag">Series GP-03</span>
            <img src="<?= base_url('assets/img/gas-pipeline.jpg') ?>" 
                 alt="Class C Seamless Steel Pipeline" class="bakery-card-img" loading="lazy">
          </div>
          <div class="bakery-image-caption">
            <h5>Seamless Gas Pipeline</h5>
            <p>Heavy IS:1239 high-pressure forged steel</p>
          </div>
        </a>

        <!-- Image 4: Gas Leak Detection & Alarm Panel -->
        <a href="#gasSpecs" class="bakery-image-card js-jump-link text-decoration-none">
          <div class="bakery-image-frame">
            <span class="bakery-image-tag">Series GP-04</span>
            <img src="<?= base_url('assets/img/gas-pipeline.jpg') ?>" 
                 alt="Gas Leak Detection Panel" class="bakery-card-img" loading="lazy">
          </div>
          <div class="bakery-image-caption">
            <h5>Leak Detectors &amp; Alarms</h5>
            <p>Catalytic hydrocarbon sensor linked to siren</p>
          </div>
        </a>

        <!-- Image 5: Emergency Solenoid Shutoff Valve -->
        <a href="#gasSpecs" class="bakery-image-card js-jump-link text-decoration-none">
          <div class="bakery-image-frame">
            <span class="bakery-image-tag">Series GP-05</span>
            <img src="<?= base_url('assets/img/gas-pipeline.jpg') ?>" 
                 alt="Emergency Solenoid Shutoff Valve" class="bakery-card-img" loading="lazy">
          </div>
          <div class="bakery-image-caption">
            <h5>Auto Solenoid Valves</h5>
            <p>Trips gas supply in 0.5 sec during any leak</p>
          </div>
        </a>

        <!-- Image 6: Appliance Isolation Ball Valves & Hoses -->
        <a href="#gasSpecs" class="bakery-image-card js-jump-link text-decoration-none">
          <div class="bakery-image-frame">
            <span class="bakery-image-tag">Series GP-06</span>
            <img src="<?= base_url('assets/img/gas-pipeline.jpg') ?>" 
                 alt="Appliance Isolation Valves" class="bakery-card-img" loading="lazy">
          </div>
          <div class="bakery-image-caption">
            <h5>Appliance Isolation Valves</h5>
            <p>Quarter-turn forged valves &amp; SS braided hoses</p>
          </div>
        </a>

        <!-- Image 7: Turnkey Pipeline Project -->
        <div class="bakery-image-card">
          <div class="bakery-image-frame">
            <span class="bakery-image-tag">Turnkey Line</span>
            <img src="<?= base_url('assets/img/gas-pipeline.jpg') ?>" 
                 alt="Turnkey LPG Pipeline Project Setup" class="bakery-card-img" loading="lazy">
          </div>
          <div class="bakery-image-caption">
            <h5>Turnkey Gas Manifold</h5>
            <p>Pressure testing, safety certification &amp; handover</p>
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
              <i class="bi bi-shield-check text-gold"></i> CERTIFIED INDUSTRIAL GAS SAFETY
            </span>
            <h3 class="bakery-content-title">
              Engineered For Uninterrupted Kitchen Gas Supply &amp; Zero-Leak Safety
            </h3>
          </div>
          
          <div class="bakery-content-text">
            <p>
              Cooking gas safety and pressure stability are paramount in high-output hotel and commercial kitchens. Bijay Enterprises provides turnkey commercial LPG pipeline installations including cylinder manifold banks (VOT/LOT), seamless schedule pipes, emergency shutoff systems, and safety compliance documentation.
            </p>
            <p>
              Conforming strictly to IS:1239 Part 1 and PESO guidelines, our pipelines feature forged A105 socket weld fittings, two-stage pressure regulation, electronic hydrocarbon leak sensors with auto-shutoff solenoids, and 25 kg/cm² hydrostatic pressure tests before client commissioning.
            </p>
          </div>

          <div class="bakery-content-actions mt-4 d-flex flex-wrap gap-3">
            <a href="<?= $whatsapp_base ?>&text=<?= urlencode('Hello Bijay Enterprises, I need details and pricing for commercial LPG gas pipeline installation.') ?>" 
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
                <strong>IS:1239 Class C Seamless Piping</strong>
                <span>Heavy forged carbon steel pipes tested to 25 kg/cm²</span>
              </div>
            </div>

            <div class="bakery-feature-pill">
              <div class="feature-pill-icon">
                <i class="bi bi-shield-fill-check"></i>
              </div>
              <div class="feature-pill-info">
                <strong>Dual Arm VOT &amp; LOT Manifolds</strong>
                <span>Continuous gas delivery during cylinder changeovers</span>
              </div>
            </div>

            <div class="bakery-feature-pill">
              <div class="feature-pill-icon">
                <i class="bi bi-exclamation-triangle-fill"></i>
              </div>
              <div class="feature-pill-info">
                <strong>Microprocessor Gas Leak Alarms</strong>
                <span>Continuous hydrocarbon monitoring with loud audio sirens</span>
              </div>
            </div>

            <div class="bakery-feature-pill">
              <div class="feature-pill-icon">
                <i class="bi bi-tools"></i>
              </div>
              <div class="feature-pill-info">
                <strong>0.5s Solenoid Emergency Shutoff</strong>
                <span>Instant automated gas line isolation &amp; Siliguri AMC</span>
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
<section class="product-specs-section" id="gasSpecs">
  <div class="container">
    
    <div class="text-center mx-auto mb-4" style="max-width: 720px;">
      <span class="product-badge-tag mb-2">
        <i class="bi bi-table text-gold"></i> MODEL COMPARISON MATRIX
      </span>
      <h2 class="product-section-title">
        Quick Comparison of <span class="text-brand-highlight">Gas Pipeline Hardware</span>
      </h2>
      <p class="product-section-subtitle mx-auto">
        A side-by-side technical overview of all manifold bank components, pressure regulators, and automated safety valves.
      </p>
    </div>

    <div class="product-matrix-card">
      <div class="table-responsive">
        <table class="product-matrix-table table align-middle">
          <thead>
            <tr>
              <th>Equipment Model</th>
              <th>Cylinder / Flow Rating</th>
              <th>Pipeline Standard</th>
              <th>Working Pressure Range</th>
              <th>Key Safety Feature</th>
              <th class="text-center text-nowrap">Action</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>
                <span class="table-model-title">Dual Arm Cylinder Manifold</span>
                <span class="table-model-sub">Model: GMB-10C (5+5 Dual Bank)</span>
              </td>
              <td>10 Commercial Cylinders (5 Active / 5 Reserve)</td>
              <td>Seamless Heavy IS:1239 Class C Header</td>
              <td>High Pressure Cylinder Pressure (7 bar)</td>
              <td>NRV Non-Return Check Valves per Arm</td>
              <td class="text-center text-nowrap">
                <button type="button" class="btn btn-matrix-quote js-open-quote" data-model="Cylinder Manifold Bank">Get Quote</button>
              </td>
            </tr>
            <tr>
              <td>
                <span class="table-model-title">Two-Stage Pressure Regulating Station</span>
                <span class="table-model-sub">Model: PRS-50 High Flow</span>
              </td>
              <td>Flow: Up to 50 kg/hr LPG Vapor</td>
              <td>Heavy Forged Cast Steel Regulator Body</td>
              <td>1st Stage: 1 kg/cm² | 2nd Stage: 300 mm WC</td>
              <td>Integrated Over-Pressure Slam-Shut Cutoff Valve</td>
              <td class="text-center text-nowrap">
                <button type="button" class="btn btn-matrix-quote js-open-quote" data-model="Two-Stage Pressure Regulator">Get Quote</button>
              </td>
            </tr>
            <tr>
              <td>
                <span class="table-model-title">Seamless Kitchen Gas Piping Line</span>
                <span class="table-model-sub">Model: SGL-25 Class C</span>
              </td>
              <td>1/2", 3/4", 1" &amp; 1.5" Nominal Bore</td>
              <td>Heavy Forged "C" Class Seamless (Yellow Coded)</td>
              <td>Tested to 25 kg/cm² Hydrostatic Pressure</td>
              <td>3000 PSI Forged Socket Weld &amp; Heavy Union Joints</td>
              <td class="text-center text-nowrap">
                <button type="button" class="btn btn-matrix-quote js-open-quote" data-model="Seamless Gas Pipeline">Get Quote</button>
              </td>
            </tr>
            <tr>
              <td>
                <span class="table-model-title">Electronic Gas Leak Detector System</span>
                <span class="table-model-sub">Model: GLD-4Z Quad Sensor</span>
              </td>
              <td>4 to 8 Standalone Catalytic Sensors</td>
              <td>Wall &amp; Floor Mount Hydrocarbon Sniffers</td>
              <td>Detects 10% LEL (Lower Explosive Limit)</td>
              <td>Audio-Visual 95dB Siren + Remote Solenoid Trigger</td>
              <td class="text-center text-nowrap">
                <button type="button" class="btn btn-matrix-quote js-open-quote" data-model="Gas Leak Detector System">Get Quote</button>
              </td>
            </tr>
            <tr>
              <td>
                <span class="table-model-title">Auto Solenoid Emergency Shutoff Valve</span>
                <span class="table-model-sub">Model: ESS-100 Fast Shut</span>
              </td>
              <td>1" to 2" Line Flanged / Threaded Body</td>
              <td>Flameproof Ex d IIC Certified Solenoid Coil</td>
              <td>Fast Close < 0.5s / Manual Reset Lever</td>
              <td>Fail-Safe Normally Closed Spring Return Design</td>
              <td class="text-center text-nowrap">
                <button type="button" class="btn btn-matrix-quote js-open-quote" data-model="Emergency Solenoid Valve">Get Quote</button>
              </td>
            </tr>
            <tr>
              <td>
                <span class="table-model-title">SS Braided Pigtails &amp; Burner Hoses</span>
                <span class="table-model-sub">Model: BPH-SS Wire Armor</span>
              </td>
              <td>Flexible 1m &amp; 1.5m Lengths (Burst: 100 bar)</td>
              <td>Corrugated SS Inner with Dual Wire Braiding</td>
              <td>Rated to 25 bar Continuous High Pressure</td>
              <td>Anti-Kink Brass Bullnose &amp; Nut Couplings</td>
              <td class="text-center text-nowrap">
                <button type="button" class="btn btn-matrix-quote js-open-quote" data-model="Braided Gas Pigtails">Get Quote</button>
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
        How We Execute Your <span class="text-brand-highlight">LPG Pipeline Project</span>
      </h2>
      <p class="product-section-subtitle mx-auto">
        From kitchen burner BTU gas sizing to certified pipe welding, 25 kg/cm² pressure testing, and fire safety compliance.
      </p>
    </div>

    <div class="row g-4">
      
      <div class="col-sm-6 col-lg-3">
        <div class="turnkey-step-card">
          <div class="turnkey-step-header">
            <span class="turnkey-num-badge">01</span>
            <h4 class="turnkey-title">Burner BTU Load Sizing</h4>
          </div>
          <p class="turnkey-desc">
            We calculate cumulative gas consumption across all ranges, tandoors, and ovens to determine manifold cylinder size.
          </p>
        </div>
      </div>

      <div class="col-sm-6 col-lg-3">
        <div class="turnkey-step-card">
          <div class="turnkey-step-header">
            <span class="turnkey-num-badge">02</span>
            <h4 class="turnkey-title">Isometric Safety CAD</h4>
          </div>
          <p class="turnkey-desc">
            AutoCAD drawings route pipes away from electric cabling, ensuring proper ventilation, slopes, and isolation valves.
          </p>
        </div>
      </div>

      <div class="col-sm-6 col-lg-3">
        <div class="turnkey-step-card">
          <div class="turnkey-step-header">
            <span class="turnkey-num-badge">03</span>
            <h4 class="turnkey-title">Certified Pipeline Welding</h4>
          </div>
          <p class="turnkey-desc">
            Class C seamless pipeline fabrication with forged fittings, heavy pipe clamping, and anti-corrosive primer coating.
          </p>
        </div>
      </div>

      <div class="col-sm-6 col-lg-3">
        <div class="turnkey-step-card">
          <div class="turnkey-step-header">
            <span class="turnkey-num-badge">04</span>
            <h4 class="turnkey-title">Pressure Test &amp; NOC Handover</h4>
          </div>
          <p class="turnkey-desc">
            24-hour hydrostatic and soap bubble leak test, sensor calibration, fire safety certificate, and AMC support.
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
            Planning Commercial <span class="text-brand-highlight">LPG Gas Pipeline Installation?</span>
          </h3>

          <p class="cta-light-desc mb-4">
            Send your kitchen cooking line burner count, cylinder storage location, or architectural plan directly to our certified gas pipeline engineers in Siliguri for instant BOQ estimation and project pricing.
          </p>

          <!-- Perks Checklist -->
          <div class="cta-perks-row d-flex flex-wrap gap-2">
            <div class="cta-perk-badge">
              <i class="bi bi-check-circle-fill text-success"></i>
              <span>Free Gas Load Sizing</span>
            </div>
            <div class="cta-perk-badge">
              <i class="bi bi-check-circle-fill text-success"></i>
              <span>PESO &amp; IS:1239 Standards</span>
            </div>
            <div class="cta-perk-badge">
              <i class="bi bi-check-circle-fill text-success"></i>
              <span>Siliguri On-Site AMC &amp; Testing</span>
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
            <a href="<?= $whatsapp_base ?>&text=<?= urlencode('Hello Bijay Enterprises, I need instant quotation and sizing for commercial LPG gas pipeline installation.') ?>" 
               target="_blank" rel="noopener" class="btn-cta-whatsapp mb-2.5 text-decoration-none">
              <div class="cta-btn-icon">
                <i class="bi bi-whatsapp"></i>
              </div>
              <div class="cta-btn-text">
                <strong>Connect on WhatsApp</strong>
                <span>Instant reply • Send kitchen layout</span>
              </div>
              <i class="bi bi-arrow-right cta-btn-arrow"></i>
            </a>

            <!-- Secondary Formal BOQ Quote Action -->
            <button type="button" class="btn-cta-quote w-100 js-open-quote" data-model="Complete LPG Gas Pipeline Setup">
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
      var modelName = this.getAttribute('data-model') || 'LPG Gas Pipeline System';
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