<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); 

?>

<!-- ==========================================================================
     0. Dynamic Breadcrumbs Section
     ========================================================================== -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => $service['title'],
    'bc_desc' => $service['tagline'],
    'breadcrumbs' => [
        ['name' => $service['title']]
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
              <i class="bi <?= htmlspecialchars($service['icon'] ?? 'bi-cake2-fill') ?> text-gold"></i> <?= htmlspecialchars($service['badge'] ?? 'TURNKEY SERVICE') ?>
            </span>
            <h2 class="service-content-title">
              <?= htmlspecialchars($service['title']) ?>
            </h2>
          </div>
          
          <div class="service-content-text">
            <p class="service-content-lead lead text-dark fw-semibold mb-3">
              <?= htmlspecialchars($service['tagline']) ?>
            </p>
            <p class="service-content-desc text-muted mb-0">
              <?= htmlspecialchars($service['description']) ?>
            </p>
          </div>

          <div class="service-content-actions mt-4 d-flex flex-wrap gap-3">
            <a href="<?= $whatsapphtml ?>&text=<?= urlencode('Hello Bijay Enterprises, I need details on your ' . $service['title'] . ' services.') ?>" 
               target="_blank" rel="noopener" class="btn-service-primary">
              <i class="bi bi-whatsapp"></i>
              <span>Consult on WhatsApp</span>
            </a>
            <button type="button" class="btn-service-secondary js-open-quote" data-model="<?= htmlspecialchars($service['title']) ?>">
              <i class="bi bi-file-earmark-spreadsheet-fill"></i>
              <span>Request Service Proposal</span>
            </button>
          </div>
        </div>

        <!-- Right Column: 4 Feature Highlight Pills -->
        <div class="col-lg-5">
          <div class="service-features-grid">
            <?php if (!empty($service['features'])): ?>
              <?php foreach (array_slice($service['features'], 0, 4) as $idx => $feat): ?>
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
            <?php endif; ?>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>

<!-- ==========================================================================
     2. Turnkey Setup & Execution Workflow (5 Scope Steps)
     ========================================================================== -->
<?php if (!empty($service['scope_list'])): ?>
<section class="service-turnkey-section" id="serviceScope">
  <div class="container">
    
    <div class="text-center mx-auto mb-5" style="max-width: 720px;">
      <span class="service-badge-tag mb-2">
        <i class="bi bi-diagram-3-fill text-gold"></i> TURNKEY SCOPE OF EXECUTION
      </span>
      <h2 class="service-section-title">
        How We Deliver <span class="text-brand-highlight"><?= htmlspecialchars($service['title']) ?></span>
      </h2>
      <p class="service-section-subtitle mx-auto">
        Structured 5-phase engineering methodology ensuring seamless transition from floor plans to commissioned culinary production.
      </p>
    </div>

    <div class="row g-4 justify-content-center">
      <?php foreach ($service['scope_list'] as $sidx => $scope): ?>
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
<?php endif; ?>


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
              <span>DIRECT FACTORY QUOTATION WITHIN 2 HOURS</span>
            </span>
          </div>

          <h3 class="cta-light-title mb-3">
            Planning Your <span class="text-brand-highlight"><?= htmlspecialchars($service['title']) ?> Project?</span>
          </h3>

          <p class="cta-light-desc mb-4">
            Send your room dimensions, project brief, or equipment list directly to our senior fabrication engineers in Siliguri for instant BOQ estimation and factory-gate pricing.
          </p>

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
              <span class="badge bg-white text-secondary border fw-semibold px-2 py-1">Online Now</span>
            </div>

            <a href="<?= $whatsapphtml ?>&text=<?= urlencode('Hello Bijay Enterprises, I need instant consultation and pricing for ' . $service['title'] . '.') ?>" 
               target="_blank" rel="noopener" class="btn-cta-whatsapp mb-3 text-decoration-none">
              <div class="cta-btn-icon"><i class="bi bi-whatsapp"></i></div>
              <div class="cta-btn-text">
                <strong>Connect on WhatsApp</strong>
                <span>Instant reply • Send project details</span>
              </div>
              <i class="bi bi-arrow-right cta-btn-arrow"></i>
            </a>

            <button type="button" class="btn-cta-quote w-100 js-open-quote" data-model="<?= htmlspecialchars($service['title']) ?>">
              <i class="bi bi-file-earmark-spreadsheet-fill text-danger me-2"></i>
              <span>Request Formal BOQ Proposal</span>
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
     5. Interactive Modal Opener Script
     ========================================================================== -->
<script>
document.addEventListener('DOMContentLoaded', function () {
  document.querySelectorAll('.js-open-quote').forEach(function (btn) {
    btn.addEventListener('click', function () {
      var modelName = this.getAttribute('data-model') || 'Service Inquiry';
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
