<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- ==========================================================================
     Breadcrumbs Section (Light BG + SVG Design)
     ========================================================================== -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'Terms and Conditions',
    'bc_desc' => 'Commercial terms, custom SS 304 fabrication guidelines, quotation validity, delivery logistics, warranties, and commissioning terms of Bijay Enterprises.',
    'breadcrumbs' => [
        ['name' => 'Terms and Conditions']
    ]
]); ?>

<!-- ==========================================================================
     Terms and Conditions Main Section
     ========================================================================== -->
<section class="legal-page-section">
  <div class="container">
    <div class="row g-4">
      
      <!-- Left Sticky Navigation Sidebar -->
      <div class="col-lg-4 col-xl-3">
        <div class="legal-sidebar-sticky">
          
          <div class="legal-nav-card">
            <div class="legal-nav-header d-flex align-items-center gap-2">
              <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/></svg>
              <span>Terms Navigation</span>
            </div>
            <ul class="legal-nav-list list-unstyled p-0 m-0 d-flex flex-column gap-1">
              <li>
                <a href="#terms-intro" class="legal-nav-link d-flex align-items-center gap-2 text-decoration-none active">
                  <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><line x1="12" y1="16" x2="12" y2="12"/><line x1="12" y1="8" x2="12.01" y2="8"/></svg>
                  <span>1. Agreement &amp; Overview</span>
                </a>
              </li>
              <li>
                <a href="#terms-quotes" class="legal-nav-link d-flex align-items-center gap-2 text-decoration-none">
                  <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect width="20" height="14" x="2" y="5" rx="2"/><line x1="2" y1="10" x2="22" y2="10"/></svg>
                  <span>2. Quotations &amp; GST</span>
                </a>
              </li>
              <li>
                <a href="#terms-cad" class="legal-nav-link d-flex align-items-center gap-2 text-decoration-none">
                  <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect width="18" height="18" x="3" y="3" rx="2"/><path d="M3 9h18"/><path d="M9 21V9"/></svg>
                  <span>3. SS 304 &amp; CAD Design</span>
                </a>
              </li>
              <li>
                <a href="#terms-payment" class="legal-nav-link d-flex align-items-center gap-2 text-decoration-none">
                  <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="12" y1="1" x2="12" y2="23"/><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/></svg>
                  <span>4. Payment Milestones</span>
                </a>
              </li>
              <li>
                <a href="#terms-delivery" class="legal-nav-link d-flex align-items-center gap-2 text-decoration-none">
                  <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect width="16" height="12" x="1" y="3" rx="2"/><polygon points="16 8 20 8 23 11 23 16 16 16 16 8"/><circle cx="5.5" cy="18.5" r="2.5"/><circle cx="18.5" cy="18.5" r="2.5"/></svg>
                  <span>5. Dispatch &amp; Logistics</span>
                </a>
              </li>
              <li>
                <a href="#terms-safety" class="legal-nav-link d-flex align-items-center gap-2 text-decoration-none">
                  <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M8.5 14.5A2.5 2.5 0 0 0 11 12c0-1.38-.5-2-1-3-1.072-2.143-.224-4.054 2-6 .5 2.5 2 4.9 4 6.5 2 1.6 3 3.5 3 5.5a7 7 0 1 1-14 0c0-1.153.433-2.294 1-3a2.5 2.5 0 0 0 2.5 2.5z"/></svg>
                  <span>6. Installation &amp; LPG Safety</span>
                </a>
              </li>
              <li>
                <a href="#terms-warranty" class="legal-nav-link d-flex align-items-center gap-2 text-decoration-none">
                  <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                  <span>7. 1-Year Warranty &amp; AMC</span>
                </a>
              </li>
              <li>
                <a href="#terms-jurisdiction" class="legal-nav-link d-flex align-items-center gap-2 text-decoration-none">
                  <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polygon points="16.24 7.76 14.12 14.12 7.76 16.24 9.88 9.88 16.24 7.76"/></svg>
                  <span>8. Jurisdiction &amp; Legal</span>
                </a>
              </li>
            </ul>
          </div>

          <!-- Quick Assistance Box -->
          <div class="legal-support-card">
            <div class="legal-support-title">Have Order Inquiries?</div>
            <p class="legal-support-desc mb-3">Talk directly with our project billing and commercial sales engineers.</p>
            <a <?= $phonehtml ?> class="legal-support-btn d-inline-flex align-items-center justify-content-center gap-2 w-100 text-decoration-none">
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
              <span>Call <?= htmlspecialchars($phone) ?></span>
            </a>
          </div>

        </div>
      </div>

      <!-- Right Main Content Card -->
      <div class="col-lg-8 col-xl-9">
        <div class="legal-content-card">
          
          <!-- Meta Date Banner -->
          <div class="legal-meta-banner d-flex flex-wrap align-items-center justify-content-between gap-3">
            <div class="legal-meta-badge d-inline-flex align-items-center gap-2">
              <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
              <span>Effective Date: <strong>October 2026</strong></span>
            </div>
            <div class="legal-meta-org">
              <?= htmlspecialchars($company3) ?> &bull; Works: Siliguri, West Bengal
            </div>
          </div>

          <!-- Section 1 -->
          <div class="legal-section-block" id="terms-intro">
            <h2 class="legal-section-title">
              <span class="legal-sec-num">01</span>
              <span>Agreement to Terms &amp; Company Overview</span>
            </h2>
            <p class="legal-paragraph">
              These Terms and Conditions govern all commercial transactions, quotations, custom stainless steel fabrication contracts, turnkey commercial kitchen layouts, equipment sales, and on-site engineering commissioning executed by <strong><?= htmlspecialchars($company3) ?></strong> (hereinafter referred to as the <em>"Manufacturer"</em>).
            </p>
            <p class="legal-paragraph">
              By confirming an equipment order, approving a Bill of Quantities (BOQ), transferring advance payment, or signing a formal purchase order, the purchasing client (whether an individual, hotelier, restaurateur, institution, or commercial contractor) unconditionally accepts and agrees to be bound by these commercial terms.
            </p>
          </div>

          <!-- Section 2 -->
          <div class="legal-section-block" id="terms-quotes">
            <h2 class="legal-section-title">
              <span class="legal-sec-num">02</span>
              <span>Quotations, Pricing &amp; GST Applicability</span>
            </h2>
            <p class="legal-paragraph">
              All official commercial estimates are formulated on factory-direct wholesale parameters:
            </p>
            <ul class="legal-list">
              <li class="legal-list-item">
                <span class="legal-list-bullet"><svg viewBox="0 0 24 24" fill="none" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg></span>
                <div><strong>Quotation Validity:</strong> Quotations remain valid for <strong>30 calendar days</strong> from the date of issue. Because stainless steel raw material (SS 304 coils and sheets) is indexed to global commodity pricing, quotes may be re-indexed after 30 days if an advance deposit has not been received.</div>
              </li>
              <li class="legal-list-item">
                <span class="legal-list-bullet"><svg viewBox="0 0 24 24" fill="none" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg></span>
                <div><strong>Taxes (GST):</strong> Goods and Services Tax (GST) is levied at the statutory rate (currently 18% on commercial kitchen machinery and food preparation equipment) and will be indicated on proforma and tax invoices.</div>
              </li>
              <li class="legal-list-item">
                <span class="legal-list-bullet"><svg viewBox="0 0 24 24" fill="none" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg></span>
                <div><strong>Freight &amp; Unloading:</strong> Unless explicitly itemized as <em>"FOR Destination"</em>, quotations are Ex-Works Siliguri. Transit freight and destination offloading charges are billed separately or arranged directly by the purchaser.</div>
              </li>
            </ul>
          </div>

          <!-- Section 3 -->
          <div class="legal-section-block" id="terms-cad">
            <h2 class="legal-section-title">
              <span class="legal-sec-num">03</span>
              <span>Custom SS 304 Fabrication &amp; CAD Layout Blueprints</span>
            </h2>
            <p class="legal-paragraph">
              Bijay Enterprises engineers equipment built to exact architectural dimensions:
            </p>
            <ul class="legal-list">
              <li class="legal-list-item">
                <span class="legal-list-bullet"><svg viewBox="0 0 24 24" fill="none" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg></span>
                <div><strong>Material Authenticity:</strong> All fabricated items specified as SS 304 use non-magnetic, certified food-grade Austenitic stainless steel (18/8 Chrome-Nickel composition) meeting HACCP and FSSAI standards.</div>
              </li>
              <li class="legal-list-item">
                <span class="legal-list-bullet"><svg viewBox="0 0 24 24" fill="none" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg></span>
                <div><strong>CAD Drawing Sign-Off:</strong> Prior to CNC laser cutting and argon welding, 2D/3D layout drawings or dimension sheets must be reviewed and approved by the client or their designated site architect. Once manufacturing begins, alterations to length, depth, or bowl configurations will incur additional fabrication charges.</div>
              </li>
              <li class="legal-list-item">
                <span class="legal-list-bullet"><svg viewBox="0 0 24 24" fill="none" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg></span>
                <div><strong>Dimensional Tolerance:</strong> Standard sheet metal fabrication tolerances are &plusmn;2 mm to allow proper on-site modular joining and pass-through counter alignment.</div>
              </li>
            </ul>
          </div>

          <!-- Section 4 -->
          <div class="legal-section-block" id="terms-payment">
            <h2 class="legal-section-title">
              <span class="legal-sec-num">04</span>
              <span>Commercial Payment Milestones</span>
            </h2>
            <p class="legal-paragraph">
              To support continuous raw material procurement and precision factory scheduling, orders follow standard engineering milestones:
            </p>
            <ul class="legal-list">
              <li class="legal-list-item">
                <span class="legal-list-bullet"><svg viewBox="0 0 24 24" fill="none" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg></span>
                <div><strong>Order Confirmation Advance:</strong> <strong>50% advance deposit</strong> upon signing of the purchase order or approval of CAD drawings to initiate steel procurement and CNC laser programming.</div>
              </li>
              <li class="legal-list-item">
                <span class="legal-list-bullet"><svg viewBox="0 0 24 24" fill="none" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg></span>
                <div><strong>Fabrication Progress / Inspection:</strong> <strong>40% payment</strong> upon completion of core welding and mechanical assembly (clients are invited to physically inspect machinery at our Siliguri plant or review HD video demonstration).</div>
              </li>
              <li class="legal-list-item">
                <span class="legal-list-bullet"><svg viewBox="0 0 24 24" fill="none" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg></span>
                <div><strong>Pre-Dispatch Balance:</strong> Remaining <strong>10% balance</strong> cleared prior to factory loading and release of commercial transport lorry receipts (LR) or e-way bills.</div>
              </li>
            </ul>
          </div>

          <!-- Section 5 -->
          <div class="legal-section-block" id="terms-delivery">
            <h2 class="legal-section-title">
              <span class="legal-sec-num">05</span>
              <span>Manufacturing Lead Times, Dispatch &amp; Logistics</span>
            </h2>
            <p class="legal-paragraph">
              Standard fabrication lead times range from <strong>10 to 25 business days</strong> depending on project scale, custom specifications, and bakery plant machinery requirements.
            </p>
            <div class="legal-callout-box">
              <p>
                <strong>Delivery Access &amp; Unloading:</strong> Heavy machinery (rotary ovens, four-burner cooking ranges, cold rooms) is transported via enclosed or open commercial freight trucks. The buyer is responsible for ensuring clear vehicle site access, wide door pass-throughs, and arranging local labor/forklift for physical ground unloading.
              </p>
            </div>
            <p class="legal-paragraph">
              We dispatch daily across West Bengal, Sikkim, Bihar, Assam, Meghalaya, Tripura, Odisha, and provide cross-border export documentation for clients in Bhutan and Nepal.
            </p>
          </div>

          <!-- Section 6 -->
          <div class="legal-section-block" id="terms-safety">
            <h2 class="legal-section-title">
              <span class="legal-sec-num">06</span>
              <span>On-Site Installation, Commissioning &amp; LPG Safety</span>
            </h2>
            <p class="legal-paragraph">
              When turnkey installation is contracted, our senior technicians execute on-site positioning, leveling, burner calibration, and exhaust duct connections subject to the following customer prerequisites:
            </p>
            <ul class="legal-list">
              <li class="legal-list-item">
                <span class="legal-list-bullet"><svg viewBox="0 0 24 24" fill="none" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg></span>
                <div><strong>Utility Readiness:</strong> The client must ensure civil site readiness, including adequate 3-phase/single-phase power points with MCBs, plumbing water inlet lines, floor grease trap drains, and gas bank manifolds prior to engineer arrival.</div>
              </li>
              <li class="legal-list-item">
                <span class="legal-list-bullet"><svg viewBox="0 0 24 24" fill="none" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg></span>
                <div><strong>PESO LPG Pipeline Standards:</strong> All commercial gas piping must strictly follow Petroleum and Explosives Safety Organisation (PESO) norms. Bijay Enterprises technicians will test all joints with nitrogen pressure leak testing before firing cooking ranges.</div>
              </li>
            </ul>
          </div>

          <!-- Section 7 -->
          <div class="legal-section-block" id="terms-warranty">
            <h2 class="legal-section-title">
              <span class="legal-sec-num">07</span>
              <span>1-Year Comprehensive Manufacturer Warranty &amp; AMC</span>
            </h2>
            <p class="legal-paragraph">
              Bijay Enterprises stands firmly behind its craftsmanship:
            </p>
            <ul class="legal-list">
              <li class="legal-list-item">
                <span class="legal-list-bullet"><svg viewBox="0 0 24 24" fill="none" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg></span>
                <div><strong>Warranty Coverage:</strong> All manufactured equipment carries a <strong>1-Year Warranty</strong> against structural fabrication defects, faulty argon TIG weld seams, and manufacturing flaws in mechanical drive motors and blowers.</div>
              </li>
              <li class="legal-list-item">
                <span class="legal-list-bullet"><svg viewBox="0 0 24 24" fill="none" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg></span>
                <div><strong>Warranty Exclusions:</strong> Damage resulting from severe electrical voltage fluctuations, water ingress into motor housings, use of corrosive hydrochloric/bleach cleaning acids on stainless steel, unauthorized repairs by third-party technicians, or physical transit drops caused by client unloading is not covered.</div>
              </li>
              <li class="legal-list-item">
                <span class="legal-list-bullet"><svg viewBox="0 0 24 24" fill="none" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg></span>
                <div><strong>Annual Maintenance Contracts (AMC):</strong> Following the expiration of the primary 1-year warranty, clients may subscribe to our comprehensive or non-comprehensive AMC plans for quarterly preventive inspections and genuine factory spare parts support.</div>
              </li>
            </ul>
          </div>

          <!-- Section 8 -->
          <div class="legal-section-block" id="terms-jurisdiction">
            <h2 class="legal-section-title">
              <span class="legal-sec-num">08</span>
              <span>Governing Law &amp; Legal Jurisdiction</span>
            </h2>
            <p class="legal-paragraph">
              These terms shall be governed by and construed in accordance with the laws of India. Any legal dispute, controversy, or claim arising out of or relating to commercial transactions, equipment fabrication, or service delivery by Bijay Enterprises shall be subject to the exclusive jurisdiction of the competent civil courts at <strong>Siliguri, District Darjeeling, West Bengal</strong>.
            </p>

            <div class="legal-contact-grid mt-4">
              <div class="legal-contact-item">
                <div class="legal-contact-label">Corporate &amp; Works Address</div>
                <div class="legal-contact-val"><?= htmlspecialchars($address) ?></div>
              </div>
              <div class="legal-contact-item">
                <div class="legal-contact-label">Official Inquiries Email</div>
                <div class="legal-contact-val"><a <?= $mailhtml ?> class="text-dark text-decoration-none"><?= htmlspecialchars($mail) ?></a></div>
              </div>
              <div class="legal-contact-item">
                <div class="legal-contact-label">Direct Sales &amp; Orders</div>
                <div class="legal-contact-val"><a <?= $phonehtml ?> class="text-dark text-decoration-none"><?= htmlspecialchars($phone) ?></a></div>
              </div>
              <div class="legal-contact-item">
                <div class="legal-contact-label">Instant WhatsApp Desk</div>
                <div class="legal-contact-val"><a href="<?= $whatsapphtml ?>" target="_blank" rel="noopener noreferrer" class="text-success text-decoration-none font-weight-bold">Chat with Commercial Team</a></div>
              </div>
            </div>

          </div>

        </div>
      </div>

    </div>
  </div>
</section>