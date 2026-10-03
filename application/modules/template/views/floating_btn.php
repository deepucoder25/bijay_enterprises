<?php
?>

<!-- ==========================================================================
     Dual-Side Floating Icon Buttons
     Left: Get Quote & Call (Click to show both numbers)
     Right: WhatsApp (Click to show both numbers)
     ========================================================================== -->

<!-- Left Side Floating Action Buttons (Get Quote & Call - Icon Only) -->
<aside class="fab-dock fab-dock-left" aria-label="Quick Action Buttons">
  
  <!-- 1. Get Quote Circular Icon Button (Opens contacts/quotemodal on CLICK) -->
  <button type="button" class="fab-circle fab-circle-quote" id="fabQuoteTrigger" data-bs-toggle="modal" data-bs-target="#qteModal" title="Get Quote" aria-label="Get Quote">
    <i class="bi bi-file-earmark-text-fill"></i>
    <span class="fab-tooltip fab-tooltip-right">Get Quote</span>
  </button>

  <!-- 2. Call Circular Icon Button with Dual-Number Popover (Opens on CLICK) -->
  <div class="fab-dropdown-wrap" id="fabCallDropdown">
    <button type="button" class="fab-circle fab-circle-call" id="fabCallTrigger" aria-expanded="false" aria-haspopup="true" aria-label="Call Bijay Enterprises" title="Call Us (Click for numbers)">
      <i class="bi bi-telephone-fill icon-default"></i>
      <i class="bi bi-x-lg icon-close"></i>
      <span class="fab-beacon-ring"></span>
      <span class="fab-tooltip fab-tooltip-right">Call Us</span>
    </button>

    <!-- Call Dual-Number Popover Card -->
    <div class="fab-popover-card fab-call-card" id="fabCallCard" role="region" aria-label="Call Phone Numbers">
      <div class="fab-card-top">
        <div class="fab-card-title-group">
          <span class="fab-card-subtitle"><i class="bi bi-telephone-fill me-1"></i> Direct Factory Contact</span>
          <h5 class="fab-card-title">Call Our Engineers</h5>
        </div>
        <button type="button" class="fab-close-btn" aria-label="Close call options" onclick="closeAllFabPopovers()">&times;</button>
      </div>

      <div class="fab-card-channels">
        <!-- Number 1 -->
        <a <?= $phonehtml ?> class="fab-channel-link">
          <div class="channel-badge-icon call-primary">
            <i class="bi bi-telephone-outbound-fill"></i>
          </div>
          <div class="channel-details">
            <span class="channel-department">Sales &amp; Project Quotes</span>
            <strong class="channel-phone"><?= $phone ?></strong>
          </div>
          <span class="channel-action-tag">Call <i class="bi bi-telephone-fill ms-1"></i></span>
        </a>

        <!-- Number 2 -->
        <a <?= $phonehtml1 ?> class="fab-channel-link">
          <div class="channel-badge-icon call-secondary">
            <i class="bi bi-telephone-outbound-fill"></i>
          </div>
          <div class="channel-details">
            <span class="channel-department">Technical &amp; Factory Head</span>
            <strong class="channel-phone"><?= $phone1 ?></strong>
          </div>
          <span class="channel-action-tag">Call <i class="bi bi-telephone-fill ms-1"></i></span>
        </a>
      </div>

      <div class="fab-card-bottom">
        <span class="fab-status-indicator"><span class="status-dot"></span> Mon – Sat: 9:00 AM – 8:00 PM</span>
      </div>
    </div>
  </div>

</aside>

<!-- Right Side Floating Action Button (WhatsApp - Icon Only - Opens on CLICK) -->
<aside class="fab-dock fab-dock-right" aria-label="WhatsApp Quick Contact">
  
  <div class="fab-dropdown-wrap fab-dropdown-right" id="fabWaDropdown">
    <!-- WhatsApp Dual-Number Popover Card -->
    <div class="fab-popover-card fab-wa-card" id="fabWaCard" role="region" aria-label="WhatsApp Numbers">
      <div class="fab-card-top wa-header-bg">
        <div class="wa-header-avatar">
          <i class="bi bi-whatsapp"></i>
        </div>
        <div class="fab-card-title-group">
          <h5 class="fab-card-title text-white">Chat on WhatsApp</h5>
          <span class="wa-live-badge"><span class="wa-live-dot"></span> Replies within 5 mins</span>
        </div>
        <button type="button" class="fab-close-btn text-white" aria-label="Close WhatsApp options" onclick="closeAllFabPopovers()">&times;</button>
      </div>

      <div class="fab-card-channels">
        <!-- Number 1 -->
        <a href="<?= $whatsapphtml1 ?>" target="_blank" rel="noopener" class="fab-channel-link wa-channel">
          <div class="channel-badge-icon wa-primary">
            <i class="bi bi-whatsapp"></i>
          </div>
          <div class="channel-details">
            <span class="channel-department">Sales &amp; Project Quotes</span>
            <strong class="channel-phone"><?= $phone ?></strong>
          </div>
          <span class="channel-action-tag wa-tag">Chat <i class="bi bi-whatsapp ms-1"></i></span>
        </a>

        <!-- Number 2 -->
        <a href="<?= $whatsapphtml1 ?>" target="_blank" rel="noopener" class="fab-channel-link wa-channel">
          <div class="channel-badge-icon wa-primary">
            <i class="bi bi-whatsapp"></i>
          </div>
          <div class="channel-details">
            <span class="channel-department">Technical &amp; Layout Support</span>
            <strong class="channel-phone"><?= $phone1 ?></strong>
          </div>
          <span class="channel-action-tag wa-tag">Chat <i class="bi bi-whatsapp ms-1"></i></span>
        </a>
      </div>

      <div class="fab-card-bottom">
        <span class="text-muted-xs"><i class="bi bi-shield-check text-success me-1"></i> Official Verified WhatsApp Lines</span>
      </div>
    </div>

    <!-- WhatsApp Trigger Circular Icon Button -->
    <button type="button" class="fab-circle fab-circle-wa" id="fabWaTrigger" aria-expanded="false" aria-haspopup="true" aria-label="Chat on WhatsApp" title="WhatsApp Us (Click for numbers)">
      <i class="bi bi-whatsapp icon-default"></i>
      <i class="bi bi-x-lg icon-close"></i>
      <span class="fab-beacon-ring wa-ring"></span>
      <span class="fab-online-dot"></span>
      <span class="fab-tooltip fab-tooltip-left">WhatsApp</span>
    </button>
  </div>

</aside>

<!-- Click-to-Show-Numbers Interactive Logic -->
<script>
document.addEventListener('DOMContentLoaded', function () {
  const callDropdown = document.getElementById('fabCallDropdown');
  const callTrigger = document.getElementById('fabCallTrigger');
  const waDropdown = document.getElementById('fabWaDropdown');
  const waTrigger = document.getElementById('fabWaTrigger');

  function closeAll() {
    if (callDropdown) {
      callDropdown.classList.remove('is-open');
      callTrigger && callTrigger.setAttribute('aria-expanded', 'false');
    }
    if (waDropdown) {
      waDropdown.classList.remove('is-open');
      waTrigger && waTrigger.setAttribute('aria-expanded', 'false');
    }
  }

  window.closeAllFabPopovers = closeAll;

  // Toggle Call card exclusively on CLICK
  if (callTrigger && callDropdown) {
    callTrigger.addEventListener('click', function (e) {
      e.preventDefault();
      e.stopPropagation();
      const isOpen = callDropdown.classList.contains('is-open');
      closeAll();
      if (!isOpen) {
        callDropdown.classList.add('is-open');
        callTrigger.setAttribute('aria-expanded', 'true');
      }
    });
  }

  // Open Quote Modal on CLICK
  const quoteTrigger = document.getElementById('fabQuoteTrigger');
  if (quoteTrigger) {
    quoteTrigger.addEventListener('click', function (e) {
      e.preventDefault();
      closeAll();
      const modalEl = document.getElementById('qteModal');
      if (modalEl && typeof bootstrap !== 'undefined' && bootstrap.Modal) {
        const modal = bootstrap.Modal.getOrCreateInstance(modalEl);
        modal.show();
      } else if (typeof $ !== 'undefined' && typeof $.fn.modal !== 'undefined') {
        $('#qteModal').modal('show');
      }
    });
  }

  // Toggle WhatsApp card exclusively on CLICK
  if (waTrigger && waDropdown) {
    waTrigger.addEventListener('click', function (e) {
      e.preventDefault();
      e.stopPropagation();
      const isOpen = waDropdown.classList.contains('is-open');
      closeAll();
      if (!isOpen) {
        waDropdown.classList.add('is-open');
        waTrigger.setAttribute('aria-expanded', 'true');
      }
    });
  }

  // Prevent clicks inside popover card from closing it
  document.querySelectorAll('.fab-popover-card').forEach(function(card) {
    card.addEventListener('click', function(e) {
      e.stopPropagation();
    });
  });

  // Close when clicking anywhere outside
  document.addEventListener('click', function (e) {
    if (!e.target.closest('.fab-dock')) {
      closeAll();
    }
  });

  // Close on Escape key
  document.addEventListener('keydown', function (e) {
    if (e.key === 'Escape') {
      closeAll();
    }
  });
});
</script>
