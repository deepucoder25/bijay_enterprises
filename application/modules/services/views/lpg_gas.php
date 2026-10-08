<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); 

?>

<!-- ==========================================================================
     0. Dynamic Breadcrumbs Section
     ========================================================================== -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => $service['title'] ?? 'L.P.G. Gas Pipeline Installation',
    'bc_desc' => $service['tagline'] ?? 'PESO-Certified Commercial LPG Manifold Banks & High-Pressure Pipeline Engineering',
    'breadcrumbs' => [
        ['name' => $service['title'] ?? 'L.P.G. Gas Pipeline Installation']
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
              <i class="bi <?= htmlspecialchars($service['icon'] ?? 'bi-shield-lock-fill') ?> text-gold"></i> <?= htmlspecialchars($service['badge'] ?? 'PESO & FIRE NOC CERTIFIED') ?>
            </span>
            <h2 class="service-content-title">
              <?= htmlspecialchars($service['title'] ?? 'L.P.G. Gas Pipeline Installation') ?>
            </h2>
          </div>
          
          <div class="service-content-text">
            <p class="service-content-lead lead text-dark fw-semibold mb-3">
              <?= htmlspecialchars($service['tagline'] ?? 'Certified Commercial LPG Manifold Banks, Seamless Schedule Piping & Auto-Leak Protection') ?>
            </p>
            <p class="service-content-desc text-muted mb-0">
              <?= htmlspecialchars($service['description'] ?? 'Gas safety in high-output commercial kitchens requires zero-tolerance engineering precision. Bijay Enterprises provides turnkey commercial LPG pipeline installations across Siliguri, North Bengal, Sikkim, Bhutan, and Bihar. Our certified installations encompass multi-cylinder VOT/LOT manifold banks, Class C seamless carbon steel pipes, two-stage pressure regulator manifolds, automatic hydrocarbon gas leak sensor networks, and high-speed emergency solenoid shut-off valves compliant with PESO, CCOE, and Fire Department NOC guidelines.') ?>
            </p>
          </div>

          <div class="service-content-actions mt-4 d-flex flex-wrap gap-3">
            <a href="<?= $whatsapphtml ?>&text=<?= urlencode('Hello Bijay Enterprises, I need details on your ' . ($service['title'] ?? 'LPG Gas Pipeline') . ' installation services.') ?>" 
               target="_blank" rel="noopener" class="btn-service-primary">
              <i class="bi bi-whatsapp"></i>
              <span>Consult on WhatsApp</span>
            </a>
            <button type="button" class="btn-service-secondary js-open-quote" data-model="<?= htmlspecialchars($service['title'] ?? 'LPG Gas Pipeline Installation') ?>">
              <i class="bi bi-file-earmark-spreadsheet-fill"></i>
              <span>Request Pipeline Proposal</span>
            </button>
          </div>
        </div>

        <!-- Right Column: 4 Feature Highlight Pills -->
        <div class="col-lg-5">
          <div class="service-features-grid">
            <?php 
            $features = !empty($service['features']) ? $service['features'] : [
                'Dual-arm commercial cylinder manifold headers (VOT/LOT) allowing uninterrupted swaps',
                'Forged Class C seamless carbon steel pipes conforming to IS:1239 / ASTM A106 codes',
                'Two-stage pressure reduction: 1st stage reduces tank pressure; 2nd stage stabilizes line',
                'Hydrocarbon sensor network connected to automatic solenoid shutoff valves tripping in 0.5s'
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
    ['title' => 'Kitchen Gas Flow & Peak BTU Sizing Audit', 'desc' => 'Calculating total BTU/kW requirements of all burners, ovens, and tandoors to correctly size manifold headers and pipe diameters.'],
    ['title' => 'PESO Compliant Cylinder Storage Yard Setup', 'desc' => 'Building well-ventilated external cylinder manifold yards with safety blast walls, wire cages, and earthing pits.'],
    ['title' => 'High-Pressure Schedule Piping Welding', 'desc' => 'Certified argon TIG socket weld and forged 3000 PSI high-pressure fittings with anti-corrosive primer coating.'],
    ['title' => 'Automatic Safety Interlock Commissioning', 'desc' => 'Wiring gas leak sensors with audible sirens, flashing strobes, and emergency manual push-button shut-off valves.'],
    ['title' => 'Pressure Hydro-Testing (25 kg/cm²) & Safety Audit', 'desc' => 'Complete documented testing report ensuring total safety before gas is commissioned into the kitchen.']
];
?>
<section class="service-turnkey-section" id="serviceScope">
  <div class="container">
    
    <div class="text-center mx-auto mb-5" style="max-width: 720px;">
      <span class="service-badge-tag mb-2">
        <i class="bi bi-diagram-3-fill text-gold"></i> SAFETY ENGINEERING METHODOLOGY
      </span>
      <h2 class="service-section-title">
        How We Deliver <span class="text-brand-highlight"><?= htmlspecialchars($service['title'] ?? 'LPG Gas Pipelines') ?></span>
      </h2>
      <p class="service-section-subtitle mx-auto">
        Certified 5-tier safety installation methodology meeting stringent PESO norms and local fire safety compliance.
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
              <span>CERTIFIED SAFETY PROPOSAL WITHIN 2 HOURS</span>
            </span>
          </div>

          <h3 class="cta-light-title mb-3">
            Planning an <span class="text-brand-highlight">L.P.G. Gas Pipeline System?</span>
          </h3>

          <p class="cta-light-desc mb-4">
            Connect with our certified gas safety engineers in Siliguri. Share your burner equipment count or site layout for an instant technical schematic, pipe gauge sizing, and transparent cost estimate.
          </p>

          <div class="cta-perks-row d-flex flex-wrap gap-2">
            <div class="cta-perk-badge">
              <i class="bi bi-check-circle-fill text-success"></i>
              <span>PESO / CCOE Standards</span>
            </div>
            <div class="cta-perk-badge">
              <i class="bi bi-check-circle-fill text-success"></i>
              <span>25 kg/cm² Hydrostatic Tested</span>
            </div>
            <div class="cta-perk-badge">
              <i class="bi bi-check-circle-fill text-success"></i>
              <span>Auto-Leak Solenoid Cut-Off</span>
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

            <a href="<?= $whatsapphtml ?>&text=<?= urlencode('Hello Bijay Enterprises, I need consultation on commercial LPG gas pipeline installation for ' . ($service['title'] ?? 'LPG Pipeline') . '.') ?>" 
               target="_blank" rel="noopener" class="btn-cta-whatsapp mb-3 text-decoration-none">
              <div class="cta-btn-icon"><i class="bi bi-whatsapp"></i></div>
              <div class="cta-btn-text">
                <strong>Connect on WhatsApp</strong>
                <span>Instant reply • Send kitchen layout</span>
              </div>
              <i class="bi bi-arrow-right cta-btn-arrow"></i>
            </a>

            <button type="button" class="btn-cta-quote w-100 js-open-quote" data-model="<?= htmlspecialchars($service['title'] ?? 'LPG Gas Pipeline Installation') ?>">
              <i class="bi bi-file-earmark-spreadsheet-fill text-danger me-2"></i>
              <span>Request Pipeline Cost Estimate</span>
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
      var modelName = this.getAttribute('data-model') || 'LPG Pipeline Inquiry';
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
