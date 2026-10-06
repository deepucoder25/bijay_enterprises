<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- ==========================================================================
     Breadcrumbs Section (Light BG + SVG Design)
     ========================================================================== -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'Frequently Asked Questions (FAQs)',
    'bc_desc' => 'Transparent technical details on our certified food-grade SS 304 culinary machinery, turnkey CAD kitchen planning, PESO-compliant LPG infrastructure, warranties, and factory direct quotes.',
    'breadcrumbs' => [
        ['name' => 'Frequently Asked Questions']
    ]
]); ?>

<!-- ==========================================================================
     FAQs Page Main Section
     ========================================================================== -->
<section class="faqs-page-section">
  <div class="container">



    <!-- Accordion Wrapper -->
    <div class="row justify-content-center">
      <div class="col-lg-10">
        
        <div class="accordion d-flex flex-column gap-3" id="mainFaqAccordion">
          
          <!-- FAQ 1: Quality -->
          <div class="faq-card-item" data-category="quality">
            <h2 class="accordion-header" id="faqHead1">
              <button class="accordion-button faq-acc-btn shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#faqCol1" aria-expanded="true" aria-controls="faqCol1">
                <span class="faq-badge-num">01</span>
                <span class="faq-question-text">What grade of stainless steel do you use for your commercial kitchen equipment?</span>
              </button>
            </h2>
            <div id="faqCol1" class="accordion-collapse collapse show" aria-labelledby="faqHead1" data-bs-parent="#mainFaqAccordion">
              <div class="accordion-body faq-acc-body">
                We strictly fabricate using certified <strong>Food-Grade SS 304</strong> (and SS 316 for specialized coastal or chemical setups). Unlike low-cost 202 grades that quickly rust, oxidize, and pit when exposed to spices, acidic marinades, and high moisture, SS 304 is 100% non-magnetic, rust-proof, and designed to withstand heavy 24/7 commercial stress while adhering to strict FSSAI and HACCP food hygiene norms.
              </div>
            </div>
          </div>

          <!-- FAQ 2: Turnkey CAD -->
          <div class="faq-card-item" data-category="turnkey">
            <h2 class="accordion-header" id="faqHead2">
              <button class="accordion-button faq-acc-btn shadow-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCol2" aria-expanded="false" aria-controls="faqCol2">
                <span class="faq-badge-num">02</span>
                <span class="faq-question-text">Do you provide custom 2D &amp; 3D CAD kitchen layouts for new restaurants &amp; hotels?</span>
              </button>
            </h2>
            <div id="faqCol2" class="accordion-collapse collapse" aria-labelledby="faqHead2" data-bs-parent="#mainFaqAccordion">
              <div class="accordion-body faq-acc-body">
                Yes, turnkey CAD engineering is our core specialty. Our senior mechanical and culinary layout engineers analyze your architectural plans or conduct on-site laser measurements in Siliguri and across Eastern India. We prepare comprehensive CAD blueprints outlining cooking lines, food preparation prep zones, dishwashing sanitization bays, exhaust hood CFM calculations, and plumbing/gas manifold routes for maximum chef efficiency.
              </div>
            </div>
          </div>

          <!-- FAQ 3: Safety & Exhaust -->
          <div class="faq-card-item" data-category="safety">
            <h2 class="accordion-header" id="faqHead3">
              <button class="accordion-button faq-acc-btn shadow-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCol3" aria-expanded="false" aria-controls="faqCol3">
                <span class="faq-badge-num">03</span>
                <span class="faq-question-text">Are your commercial LPG gas pipelines and exhaust hoods safety certified?</span>
              </button>
            </h2>
            <div id="faqCol3" class="accordion-collapse collapse" aria-labelledby="faqHead3" data-bs-parent="#mainFaqAccordion">
              <div class="accordion-body faq-acc-body">
                Yes. Our commercial LPG gas installations comply with <strong>PESO (Petroleum and Explosives Safety Organisation)</strong> standards and IS guidelines, utilizing seamless carbon steel Schedule 40 pipes, certified two-stage pressure regulators, and auto shut-off solenoid leak detectors. Our kitchen exhaust hoods feature stainless steel baffle grease filters and dynamically balanced centrifugal blowers to ensure smoke-free kitchens.
              </div>
            </div>
          </div>

          <!-- FAQ 4: Bakery Plants -->
          <div class="faq-card-item" data-category="turnkey">
            <h2 class="accordion-header" id="faqHead4">
              <button class="accordion-button faq-acc-btn shadow-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCol4" aria-expanded="false" aria-controls="faqCol4">
                <span class="faq-badge-num">04</span>
                <span class="faq-question-text">Do you manufacture industrial bakery machinery as well?</span>
              </button>
            </h2>
            <div id="faqCol4" class="accordion-collapse collapse" aria-labelledby="faqHead4" data-bs-parent="#mainFaqAccordion">
              <div class="accordion-body faq-acc-body">
                Yes, Bijay Enterprises is Eastern India’s prominent builder of high-volume industrial bakery machinery. Our portfolio includes heavy-duty rotary rack baking ovens (diesel/gas/electric), spiral dough kneaders, planetary mixers, automatic bread slicers, dough sheeters, and humidity-controlled proofing chambers built for 24/7 baking throughput.
              </div>
            </div>
          </div>

          <!-- FAQ 5: Service & Warranty -->
          <div class="faq-card-item" data-category="service">
            <h2 class="accordion-header" id="faqHead5">
              <button class="accordion-button faq-acc-btn shadow-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCol5" aria-expanded="false" aria-controls="faqCol5">
                <span class="faq-badge-num">05</span>
                <span class="faq-question-text">What warranty and after-sales service do you provide?</span>
              </button>
            </h2>
            <div id="faqCol5" class="accordion-collapse collapse" aria-labelledby="faqHead5" data-bs-parent="#mainFaqAccordion">
              <div class="accordion-body faq-acc-body">
                Every commercial cooking range, oven, and refrigeration unit manufactured at our works carries a <strong>1-Year Comprehensive Manufacturer Warranty</strong> against mechanical and fabrication defects. Furthermore, our dedicated service engineering fleet provides on-call emergency repairs, preventive AMC (Annual Maintenance Contracts), and genuine spare parts dispatch across Eastern India.
              </div>
            </div>
          </div>

          <!-- FAQ 6: Custom Dimensions -->
          <div class="faq-card-item" data-category="quality">
            <h2 class="accordion-header" id="faqHead6">
              <button class="accordion-button faq-acc-btn shadow-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCol6" aria-expanded="false" aria-controls="faqCol6">
                <span class="faq-badge-num">06</span>
                <span class="faq-question-text">Can equipment be custom-built to match our specific kitchen space constraints?</span>
              </button>
            </h2>
            <div id="faqCol6" class="accordion-collapse collapse" aria-labelledby="faqHead6" data-bs-parent="#mainFaqAccordion">
              <div class="accordion-body faq-acc-body">
                Custom millimeter-precision fabrication is our hallmark. We understand that every commercial kitchen footprint is unique. Whether you require custom-length work tables with sink bowls, multi-tier overhead pass-through shelves, narrow cooking ranges, or custom display counters, our CNC laser cutters and TIG welding engineers build to your exact dimensions.
              </div>
            </div>
          </div>

          <!-- FAQ 7: Delivery & Supply Regions -->
          <div class="faq-card-item" data-category="service">
            <h2 class="accordion-header" id="faqHead7">
              <button class="accordion-button faq-acc-btn shadow-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCol7" aria-expanded="false" aria-controls="faqCol7">
                <span class="faq-badge-num">07</span>
                <span class="faq-question-text">What regions do you supply and install across?</span>
              </button>
            </h2>
            <div id="faqCol7" class="accordion-collapse collapse" aria-labelledby="faqHead7" data-bs-parent="#mainFaqAccordion">
              <div class="accordion-body faq-acc-body">
                From our strategic hub in Siliguri, we dispatch and execute on-site turnkey installation across <strong>West Bengal, Sikkim, Bihar, Assam, Meghalaya, Tripura, Odisha</strong>, as well as cross-border hospitality projects in <strong>Bhutan and Nepal</strong>. Safe transit packaging and logistics are arranged directly by our operations team.
              </div>
            </div>
          </div>

          <!-- FAQ 8: Factory Visit -->
          <div class="faq-card-item" data-category="quality">
            <h2 class="accordion-header" id="faqHead8">
              <button class="accordion-button faq-acc-btn shadow-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCol8" aria-expanded="false" aria-controls="faqCol8">
                <span class="faq-badge-num">08</span>
                <span class="faq-question-text">Can we visit your Siliguri manufacturing facility to inspect machinery in person?</span>
              </button>
            </h2>
            <div id="faqCol8" class="accordion-collapse collapse" aria-labelledby="faqHead8" data-bs-parent="#mainFaqAccordion">
              <div class="accordion-body faq-acc-body">
                Yes! We warmly welcome hoteliers, executive chefs, bakery owners, and franchise consultants to visit our Siliguri manufacturing plant at Jhankar More, 4th Mahananda Bridge. You can inspect raw SS 304 sheet gauges, witness our live CNC laser cutting &amp; argon welding processes, and examine finished machinery before placement.
              </div>
            </div>
          </div>

        </div>

      </div>
    </div>

    <!-- Quick Support Help Card -->
    <div class="faq-help-card mt-5">
      <div class="row align-items-center g-4">
        <div class="col-lg-8">
          <div class="d-flex align-items-center gap-3 mb-2">
            <div class="faq-help-icon">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"/><line x1="12" y1="17" x2="12.01" y2="17"/></svg>
            </div>
            <div>
              <h3 class="faq-help-title mb-1">Still Have Questions About Your Commercial Kitchen?</h3>
              <p class="faq-help-desc mb-0">Our senior mechanical engineers are available for direct technical phone and site consultation.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 text-lg-end">
          <div class="d-flex flex-wrap gap-2 justify-content-lg-end">
            <a <?= $phonehtml ?> class="faq-help-btn-primary">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
              <span>Call: <?= htmlspecialchars($phone) ?></span>
            </a>
            <a href="<?= $whatsapphtml ?>" target="_blank" rel="noopener noreferrer" class="faq-help-btn-wa">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M3 21l1.65-3.8a9 9 0 1 1 3.4 2.9L3 21"/><path d="M9 10a.5.5 0 0 0 1 0V9a.5.5 0 0 0-1 0v1a5 5 0 0 0 5 5h1a.5.5 0 0 0 0-1h-1a.5.5 0 0 0 0 1"/></svg>
              <span>WhatsApp Us</span>
            </a>
          </div>
        </div>
      </div>
    </div>

  </div>
</section>