<div class="modal fade contact-custom-modal" id="qteModal" tabindex="-1" aria-labelledby="qteModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content quote-modal-box shadow-2xl">
      
      <!-- Modal Header -->
      <div class="quote-modal-header">
        <div class="quote-header-title-wrap">
          <span class="quote-header-badge"><i class="bi bi-shield-check me-1"></i> Instant Factory Quote</span>
          <h4 class="quote-modal-title" id="qteModalLabel">Get Commercial Kitchen Quote</h4>
          <p class="quote-modal-sub">Direct factory response from our fabrication engineers within 2 hours.</p>
        </div>
        <button type="button" class="btn-close btn-close-white quote-modal-close" data-bs-dismiss="modal" aria-label="Close" onclick="if(typeof setClose==='function')setClose()"></button>
      </div>

      <!-- Modal Body Form -->
      <div class="quote-modal-body">
        <form id="quotemodal" class="ajax-form" data-url="<?= site_url('contacts/booking') ?>" data-result="resultquotemodal" onsubmit="return false;">
          <div class="row g-3">
            
            <!-- Full Name -->
            <div class="col-md-6">
              <div class="quote-field-group">
                <label class="quote-field-label">Your Name <span class="text-danger">*</span></label>
                <div class="quote-input-wrap">
                  <i class="bi bi-person-fill quote-field-ico"></i>
                  <input type="text" class="form-control quote-input" name="name" placeholder="e.g. Rahul Sharma" required>
                </div>
              </div>
            </div>

            <!-- Mobile Phone -->
            <div class="col-md-6">
              <div class="quote-field-group">
                <label class="quote-field-label">Mobile Number <span class="text-danger">*</span></label>
                <div class="quote-input-wrap">
                  <i class="bi bi-telephone-fill quote-field-ico"></i>
                  <input type="tel" class="form-control quote-input" name="phone" placeholder="10-digit Mobile" maxlength="10" required>
                </div>
              </div>
            </div>

            <input type="hidden" name="email" value="">

            <!-- City / Location -->
            <div class="col-md-6">
              <div class="quote-field-group">
                <label class="quote-field-label">City / Location</label>
                <div class="quote-input-wrap">
                  <i class="bi bi-geo-alt-fill quote-field-ico"></i>
                  <input type="text" class="form-control quote-input" name="mfrom" placeholder="e.g. Siliguri / Kolkata">
                </div>
              </div>
            </div>

            <!-- Equipment Required / Project -->
            <div class="col-md-6">
              <div class="quote-field-group">
                <label class="quote-field-label">Equipment / Project</label>
                <div class="quote-input-wrap">
                  <i class="bi bi-gear-fill quote-field-ico"></i>
                  <input type="text" class="form-control quote-input" name="mto" placeholder="e.g. Bakery / Restaurant Setup">
                </div>
              </div>
            </div>

            <!-- Message / Specifications -->
            <div class="col-12">
              <div class="quote-field-group">
                <label class="quote-field-label">Requirements / Layout Details</label>
                <div class="quote-input-wrap top-aligned">
                  <i class="bi bi-chat-text-fill quote-field-ico"></i>
                  <textarea name="message" class="form-control quote-textarea" rows="3" placeholder="Describe equipment needed, SS grade, kitchen size, or custom fabrication..."></textarea>
                </div>
              </div>
            </div>

          </div>

          <!-- Submit Buttons -->
          <div class="mt-4">
            <button id="submitbquotemodal" type="submit" class="quote-submit-btn">
              <span>Submit Quote Request</span>
              <i class="bi bi-send-fill ms-1"></i>
            </button>
          </div>

          <!-- Result Container for AJAX response -->
          <div id="resultquotemodal" class="mt-3"></div>
        </form>
      </div>

      <!-- Modal Footer -->
      <div class="quote-modal-footer text-center">
        <div class="quote-direct-call">
          <i class="bi bi-telephone-outbound-fill text-gold"></i>
          <span>Need immediate quote? Call: <a href="tel:+919474771671" class="text-gold fw-bold">+91 9474771671</a></span>
        </div>
      </div>

    </div>
  </div>
</div>