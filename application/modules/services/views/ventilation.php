<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); 

?>

<!-- ==========================================================================
     0. Dynamic Breadcrumbs Section
     ========================================================================== -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => $service['title'] ?? 'Refrigeration & Ventilation Systems',
    'bc_desc' => $service['tagline'] ?? 'High-CFM Commercial Kitchen Exhaust Hoods, Ducting & Walk-In Cold Rooms in Siliguri',
    'breadcrumbs' => [
        ['name' => $service['title'] ?? 'Refrigeration & Ventilation Systems']
    ]
]); ?>

<!-- ==========================================================================
     1. Service Overview & Engineering Highlights
     ========================================================================== -->
<section class="service-overview-section" id="serviceOverview">
  <div class="container">
    <div class="service-content-card">
      <div class="row align-items-center g-4 g-lg-5">
        
        <!-- Left Column: Story & Deliverables -->
        <div class="col-lg-7">
          <div class="service-content-header mb-3">
            <span class="service-badge-tag mb-2">
              <i class="bi <?= htmlspecialchars($service['icon'] ?? 'bi-wind') ?> text-gold"></i> <?= htmlspecialchars($service['badge'] ?? 'HIGH-CFM HVAC & COLD CHAIN') ?>
            </span>
            <h2 class="service-content-title">
              <?= htmlspecialchars($service['title'] ?? 'Refrigeration & Ventilation Systems') ?>
            </h2>
          </div>
          
          <div class="service-content-text">
            <p class="service-content-lead lead text-dark fw-semibold mb-3">
              <?= htmlspecialchars($service['tagline'] ?? 'High-CFM Kitchen Exhaust Hoods, Stainless Ducting & Commercial Cold Chain Systems') ?>
            </p>
            <p class="service-content-desc text-muted mb-0">
              <?= htmlspecialchars($service['description'] ?? 'Optimal indoor air quality and precision temperature management are vital for culinary productivity and food hygiene. Bijay Enterprises engineers commercial SS 304 exhaust hoods, removable grease baffle filters, heavy GI/SS ductwork, and high-velocity SISW/DIDW centrifugal blowers across Siliguri, North Bengal, Sikkim, Bhutan, and Bihar. Simultaneously, we design tropicalized sub-zero walk-in cold rooms, upright reach-in chillers, deep freezers, and undercounter prep tables engineered to maintain sub-zero temperatures even in 43°C peak summer heat.') ?>
            </p>
          </div>

          <div class="service-content-actions mt-4 d-flex flex-wrap gap-3">
            <a href="<?= $whatsapphtml ?>&text=<?= urlencode('Hello Bijay Enterprises, I need details on your ' . ($service['title'] ?? 'Ventilation & Refrigeration') . ' services.') ?>" 
               target="_blank" rel="noopener" class="btn-service-primary">
              <i class="bi bi-whatsapp"></i>
              <span>Consult on WhatsApp</span>
            </a>
            <button type="button" class="btn-service-secondary js-open-quote" data-model="<?= htmlspecialchars($service['title'] ?? 'Refrigeration & Ventilation Systems') ?>">
              <i class="bi bi-file-earmark-spreadsheet-fill"></i>
              <span>Request HVAC Proposal</span>
            </button>
          </div>
        </div>

        <!-- Right Column: 4 Feature Highlight Pills -->
        <div class="col-lg-5">
          <div class="service-features-grid">
            <?php 
            $features = !empty($service['features']) ? $service['features'] : [
                'Engineered CFM airflow balancing extracting 98% of airborne grease, soot, and excess heat',
                'Food Grade SS 304 baffle filters with continuous perimeter grease collection troughs',
                'Heavy-gauge galvanized iron (GI) and SS 304 welded exhaust ducting meeting fire codes',
                'Tropicalized commercial compressors with eco-friendly refrigerants and digital thermostats'
            ];
            foreach (array_slice($features, 0, 4) as $idx => $feat): 
            ?>
              <div class="service-feature-pill">
                <div class="feature-pill-icon">
                  <i class="bi bi-patch-check-fill"></i>
                </div>
                <div class="feature-pill-info">
                  <strong>Capability <?= sprintf('%02d', $idx + 1) ?></strong>
                  <span><?= htmlspecialchars($feat) ?></span>
                </div>
              </div>
            <?php endforeach; ?>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>

<!-- ==========================================================================
     2. Turnkey Setup & Execution Workflow (5 Scope Steps)
     ========================================================================== -->
<?php 
$scope_list = !empty($service['scope_list']) ? $service['scope_list'] : [
    ['title' => 'CFM Aerodynamic Exhaust Load Calculations', 'desc' => 'Accurate volumetric calculations ensuring adequate capture velocity across high-heat wok ranges, deep fryers, and tandoors.'],
    ['title' => 'Custom SS 304 Hood Fabrication & Guttering', 'desc' => 'Manufactured with seamless welded corners, perimeter grease collection gutters, and heat-resistant vapor-proof LED lights.'],
    ['title' => 'Low-Noise Centrifugal Blower Installation', 'desc' => 'Dynamically balanced forward/backward curved centrifugal blowers with anti-vibration spring dampers and weather cowls.'],
    ['title' => 'Commercial Cold Room & Chiller Setup', 'desc' => 'High-density 100mm PUF panel insulated walk-in chillers and upright reach-in commercial refrigerators with digital controllers.'],
    ['title' => 'Routine Duct Degreasing & Refrigerant AMC', 'desc' => 'Scheduled preventive duct inspections, blower belt tension adjustments, filter cleaning, and compressor coil maintenance.']
];
?>
<section class="service-turnkey-section" id="serviceScope">
  <div class="container">
    
    <div class="text-center mx-auto mb-5" style="max-width: 720px;">
      <span class="service-badge-tag mb-2">
        <i class="bi bi-diagram-3-fill text-gold"></i> HVAC &amp; COLD CHAIN METHODOLOGY
      </span>
      <h2 class="service-section-title">
        How We Deliver <span class="text-brand-highlight"><?= htmlspecialchars($service['title'] ?? 'Ventilation & Refrigeration') ?></span>
      </h2>
      <p class="service-section-subtitle mx-auto">
        End-to-end 5-phase engineering flow guaranteeing thermal comfort, smoke-free work environments, and unbroken cold preservation.
      </p>
    </div>

    <div class="row g-4 justify-content-center">
      <?php foreach ($scope_list as $sidx => $scope): ?>
        <div class="col-md-6 col-lg-4">
          <div class="turnkey-step-card">
            <div class="turnkey-step-header">
              <span class="turnkey-num-badge"><?= sprintf('%02d', $sidx + 1) ?></span>
              <h4 class="turnkey-title"><?= htmlspecialchars($scope['title']) ?></h4>
            </div>
            <p class="turnkey-desc">
              <?= htmlspecialchars($scope['desc']) ?>
            </p>
          </div>
        </div>
      <?php endforeach; ?>
    </div>

  </div>
</section>

<!-- ==========================================================================
     3. Consultation & Direct BOQ Proposal Console (Light Design)
     ========================================================================== -->
<section class="service-cta-section" id="serviceConsultation">
  <div class="container">
    <div class="service-cta-card-light">
      <div class="row align-items-center g-4 g-xl-5">
        
        <!-- Left Column: Value Proposition -->
        <div class="col-lg-7">
          <div class="d-inline-flex align-items-center gap-2 mb-3">
            <span class="cta-light-badge">
              <i class="bi bi-clock-history text-gold"></i>
              <span>HVAC &amp; COLD ROOM ESTIMATION WITHIN 2 HOURS</span>
            </span>
          </div>

          <h3 class="cta-light-title mb-3">
            Planning Kitchen <span class="text-brand-highlight">Exhaust or Cold Storage?</span>
          </h3>

          <p class="cta-light-desc mb-4">
            Send your kitchen dimensions, ceiling height, and cooking equipment details directly to our ventilation and cold chain engineers in Siliguri for exact CFM sizing, duct routing, and factory-gate quotation.
          </p>

          <div class="cta-perks-row d-flex flex-wrap gap-2">
            <div class="cta-perk-badge">
              <i class="bi bi-check-circle-fill text-success"></i>
              <span>High-CFM Balanced Flow</span>
            </div>
            <div class="cta-perk-badge">
              <i class="bi bi-check-circle-fill text-success"></i>
              <span>SS 304 Baffle Filters</span>
            </div>
            <div class="cta-perk-badge">
              <i class="bi bi-check-circle-fill text-success"></i>
              <span>Tropicalized Heavy Duty Units</span>
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
              <span class="badge bg-white text-secondary border fw-semibold px-2 py-1">Online Now</span>
            </div>

            <a href="<?= $whatsapphtml ?>&text=<?= urlencode('Hello Bijay Enterprises, I need instant consultation and pricing for ' . ($service['title'] ?? 'Refrigeration & Ventilation') . '.') ?>" 
               target="_blank" rel="noopener" class="btn-cta-whatsapp mb-3 text-decoration-none">
              <div class="cta-btn-icon"><i class="bi bi-whatsapp"></i></div>
              <div class="cta-btn-text">
                <strong>Connect on WhatsApp</strong>
                <span>Instant reply • Send kitchen dimensions</span>
              </div>
              <i class="bi bi-arrow-right cta-btn-arrow"></i>
            </a>

            <button type="button" class="btn-cta-quote w-100 js-open-quote" data-model="<?= htmlspecialchars($service['title'] ?? 'Refrigeration & Ventilation Systems') ?>">
              <i class="bi bi-file-earmark-spreadsheet-fill text-danger me-2"></i>
              <span>Request Formal HVAC Proposal</span>
            </button>

            <div class="cta-phone-note text-center mt-3 pt-2 border-top">
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
     4. Interactive Modal Opener Script
     ========================================================================== -->
<script>
document.addEventListener('DOMContentLoaded', function () {
  document.querySelectorAll('.js-open-quote').forEach(function (btn) {
    btn.addEventListener('click', function () {
      var modelName = this.getAttribute('data-model') || 'HVAC & Cold Room Inquiry';
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
