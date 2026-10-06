<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- ==========================================================================
     Breadcrumbs Section (Light BG + SVG Design)
     ========================================================================== -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'Privacy Policy',
    'bc_desc' => 'Transparent policies on data protection, commercial quote requests, CAD blueprints, and business confidentiality at Bijay Enterprises.',
    'breadcrumbs' => [
        ['name' => 'Privacy Policy']
    ]
]); ?>

<!-- ==========================================================================
     Privacy Policy Main Section
     ========================================================================== -->
<section class="legal-page-section">
  <div class="container">
    <div class="row g-4">
      
      <!-- Left Sticky Navigation Sidebar -->
      <div class="col-lg-4 col-xl-3">
        <div class="legal-sidebar-sticky">
          
          <div class="legal-nav-card">
            <div class="legal-nav-header d-flex align-items-center gap-2">
              <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
              <span>Policy Navigation</span>
            </div>
            <ul class="legal-nav-list list-unstyled p-0 m-0 d-flex flex-column gap-1">
              <li>
                <a href="#sec-intro" class="legal-nav-link d-flex align-items-center gap-2 text-decoration-none active">
                  <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><line x1="12" y1="16" x2="12" y2="12"/><line x1="12" y1="8" x2="12.01" y2="8"/></svg>
                  <span>1. Introduction</span>
                </a>
              </li>
              <li>
                <a href="#sec-collect" class="legal-nav-link d-flex align-items-center gap-2 text-decoration-none">
                  <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/></svg>
                  <span>2. Data We Collect</span>
                </a>
              </li>
              <li>
                <a href="#sec-use" class="legal-nav-link d-flex align-items-center gap-2 text-decoration-none">
                  <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/></svg>
                  <span>3. How We Use Data</span>
                </a>
              </li>
              <li>
                <a href="#sec-cad" class="legal-nav-link d-flex align-items-center gap-2 text-decoration-none">
                  <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect width="18" height="18" x="3" y="3" rx="2"/><path d="M3 9h18"/><path d="M9 21V9"/></svg>
                  <span>4. CAD &amp; Blueprint Privacy</span>
                </a>
              </li>
              <li>
                <a href="#sec-security" class="legal-nav-link d-flex align-items-center gap-2 text-decoration-none">
                  <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect width="18" height="11" x="3" y="11" rx="2" ry="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg>
                  <span>5. Data Security</span>
                </a>
              </li>
              <li>
                <a href="#sec-sharing" class="legal-nav-link d-flex align-items-center gap-2 text-decoration-none">
                  <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
                  <span>6. Third-Party Logistics</span>
                </a>
              </li>
              <li>
                <a href="#sec-cookies" class="legal-nav-link d-flex align-items-center gap-2 text-decoration-none">
                  <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><circle cx="12" cy="10" r="1"/><circle cx="8" cy="14" r="1"/><circle cx="15" cy="15" r="1"/></svg>
                  <span>7. Cookies &amp; Logs</span>
                </a>
              </li>
              <li>
                <a href="#sec-contact" class="legal-nav-link d-flex align-items-center gap-2 text-decoration-none">
                  <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
                  <span>8. Grievance &amp; Contact</span>
                </a>
              </li>
            </ul>
          </div>

          <!-- Quick Assistance Box -->
          <div class="legal-support-card">
            <div class="legal-support-title">Have Privacy Inquiries?</div>
            <p class="legal-support-desc mb-3">Directly connect with our administrative and engineering office at Siliguri works.</p>
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
          <div class="legal-section-block" id="sec-intro">
            <h2 class="legal-section-title">
              <span class="legal-sec-num">01</span>
              <span>Introduction &amp; Scope of Policy</span>
            </h2>
            <p class="legal-paragraph">
              At <strong><?= htmlspecialchars($company3) ?></strong>, we are committed to safeguarding the privacy, confidentiality, and commercial security of our clients, hotel partners, executive chefs, culinary consultants, and website visitors. Established in 1996 in Siliguri, West Bengal, we manufacture high-performance commercial kitchen equipment, certified Food-Grade SS 304 machinery, and industrial bakery plants.
            </p>
            <p class="legal-paragraph">
              This Privacy Policy details how we collect, handle, store, and protect information gathered through our website, digital quotation inquiry forms, WhatsApp consultations, and direct on-site architectural surveys across West Bengal, Sikkim, Bihar, Assam, and neighboring regions.
            </p>
          </div>

          <!-- Section 2 -->
          <div class="legal-section-block" id="sec-collect">
            <h2 class="legal-section-title">
              <span class="legal-sec-num">02</span>
              <span>Information We Collect</span>
            </h2>
            <p class="legal-paragraph">
              To process engineering estimates, custom fabrication orders, and site commissioning requests, we collect specific commercial information:
            </p>
            <ul class="legal-list">
              <li class="legal-list-item">
                <span class="legal-list-bullet"><svg viewBox="0 0 24 24" fill="none" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg></span>
                <div><strong>Client Identity &amp; Contact:</strong> Full name, company or restaurant trade name, contact telephone number, official email address, and physical business installation address.</div>
              </li>
              <li class="legal-list-item">
                <span class="legal-list-bullet"><svg viewBox="0 0 24 24" fill="none" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg></span>
                <div><strong>Kitchen Technical Specifications:</strong> Project category (hotel, restaurant, cloud kitchen, bakery, hospital), required equipment dimensions, utility capacities (LPG burner KW, single/three-phase electrical load), and equipment layout requirements.</div>
              </li>
              <li class="legal-list-item">
                <span class="legal-list-bullet"><svg viewBox="0 0 24 24" fill="none" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg></span>
                <div><strong>Architectural &amp; CAD Data:</strong> Building floor blueprints, 2D AutoCAD drawings, site laser measurements, plumbing and LPG line intake positions provided for turnkey design calculations.</div>
              </li>
              <li class="legal-list-item">
                <span class="legal-list-bullet"><svg viewBox="0 0 24 24" fill="none" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg></span>
                <div><strong>Taxation &amp; Invoicing Details:</strong> Goods and Services Tax Identification Number (GSTIN), corporate billing address, and bank payment transfer transaction references.</div>
              </li>
            </ul>
          </div>

          <!-- Section 3 -->
          <div class="legal-section-block" id="sec-use">
            <h2 class="legal-section-title">
              <span class="legal-sec-num">03</span>
              <span>How We Use Your Commercial Data</span>
            </h2>
            <p class="legal-paragraph">
              The data you provide is utilized solely for technical engineering, manufacturing precision, logistics coordination, and customer support:
            </p>
            <ul class="legal-list">
              <li class="legal-list-item">
                <span class="legal-list-bullet"><svg viewBox="0 0 24 24" fill="none" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg></span>
                <div>Preparing accurate factory-direct quotations, Bill of Quantities (BOQ), and equipment manufacturing schedules.</div>
              </li>
              <li class="legal-list-item">
                <span class="legal-list-bullet"><svg viewBox="0 0 24 24" fill="none" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg></span>
                <div>Conducting 2D/3D CAD layout engineering, CFM exhaust duct calculations, and PESO-compliant LPG manifold route design.</div>
              </li>
              <li class="legal-list-item">
                <span class="legal-list-bullet"><svg viewBox="0 0 24 24" fill="none" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg></span>
                <div>Arranging freight transit packaging, logistics transit permits, e-way bills, and on-site machinery unloading.</div>
              </li>
              <li class="legal-list-item">
                <span class="legal-list-bullet"><svg viewBox="0 0 24 24" fill="none" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg></span>
                <div>Registering official 1-Year Manufacturer Warranties, issuing service certificates, and scheduling preventive AMC maintenance.</div>
              </li>
            </ul>
          </div>

          <!-- Section 4 -->
          <div class="legal-section-block" id="sec-cad">
            <h2 class="legal-section-title">
              <span class="legal-sec-num">04</span>
              <span>Confidentiality of Architectural &amp; CAD Blueprints</span>
            </h2>
            <p class="legal-paragraph">
              We treat all customer architectural drawings, bakery production line formulations, proprietary prep workflows, and kitchen floor blueprints with absolute confidentiality.
            </p>
            <div class="legal-callout-box">
              <p>
                <strong>Non-Disclosure Guarantee:</strong> <?= htmlspecialchars($company3) ?> does not publish, share, distribute, or license your private architectural plans, proprietary commissary layouts, or custom kitchen diagrams to any competitors or third-party marketing entities.
              </p>
            </div>
          </div>

          <!-- Section 5 -->
          <div class="legal-section-block" id="sec-security">
            <h2 class="legal-section-title">
              <span class="legal-sec-num">05</span>
              <span>Data Protection &amp; Technical Security</span>
            </h2>
            <p class="legal-paragraph">
              We enforce industry-standard technical and operational security measures to protect your inquiries and contact records against unauthorized access, alteration, disclosure, or destruction:
            </p>
            <ul class="legal-list">
              <li class="legal-list-item">
                <span class="legal-list-bullet"><svg viewBox="0 0 24 24" fill="none" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg></span>
                <div><strong>SSL / TLS Encryption:</strong> All web submissions and quotation inquiries are transmitted through secure cryptographic protocols.</div>
              </li>
              <li class="legal-list-item">
                <span class="legal-list-bullet"><svg viewBox="0 0 24 24" fill="none" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg></span>
                <div><strong>Role-Based Access:</strong> Only authorized engineering, production, and billing personnel are granted access to project inquiry databases.</div>
              </li>
              <li class="legal-list-item">
                <span class="legal-list-bullet"><svg viewBox="0 0 24 24" fill="none" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg></span>
                <div><strong>No Selling of Data:</strong> We never sell, rent, or trade your contact records, telephone numbers, or emails to telemarketers.</div>
              </li>
            </ul>
          </div>

          <!-- Section 6 -->
          <div class="legal-section-block" id="sec-sharing">
            <h2 class="legal-section-title">
              <span class="legal-sec-num">06</span>
              <span>Third-Party Logistics &amp; Legal Disclosures</span>
            </h2>
            <p class="legal-paragraph">
              We only share pertinent details with trusted third parties strictly necessary to fulfill your commercial purchase:
            </p>
            <ul class="legal-list">
              <li class="legal-list-item">
                <span class="legal-list-bullet"><svg viewBox="0 0 24 24" fill="none" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg></span>
                <div><strong>Commercial Freight Carriers:</strong> Destination address and site coordinator contact numbers are provided to registered transport logistics carriers for safe heavy-machinery delivery across West Bengal, Sikkim, Assam, Bihar, and Nepal/Bhutan border transit.</div>
              </li>
              <li class="legal-list-item">
                <span class="legal-list-bullet"><svg viewBox="0 0 24 24" fill="none" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg></span>
                <div><strong>Statutory Tax Compliance:</strong> Invoicing and GST records are shared with Indian tax authorities and banking channels in accordance with the Central Goods and Services Tax (CGST) Act.</div>
              </li>
            </ul>
          </div>

          <!-- Section 7 -->
          <div class="legal-section-block" id="sec-cookies">
            <h2 class="legal-section-title">
              <span class="legal-sec-num">07</span>
              <span>Cookies &amp; Digital Web Analytics</span>
            </h2>
            <p class="legal-paragraph">
              Our website uses basic operational cookies and web server logs to improve browsing speed, retain form session tokens, and analyze aggregate visitor traffic (such as browser type, operating system, and geographic region). These cookies do not extract personal files or confidential data from your computing device. You may disable cookies through your browser preferences at any time.
            </p>
          </div>

          <!-- Section 8 -->
          <div class="legal-section-block" id="sec-contact">
            <h2 class="legal-section-title">
              <span class="legal-sec-num">08</span>
              <span>Grievance Redressal &amp; Works Contact</span>
            </h2>
            <p class="legal-paragraph">
              If you have any questions regarding this Privacy Policy, wish to update your commercial contact records, or require verification of data records, please contact our administrative desk:
            </p>
            
            <div class="legal-contact-grid">
              <div class="legal-contact-item">
                <div class="legal-contact-label">Manufacturing Plant &amp; Office</div>
                <div class="legal-contact-val"><?= htmlspecialchars($address) ?></div>
              </div>
              <div class="legal-contact-item">
                <div class="legal-contact-label">Official Correspondence Email</div>
                <div class="legal-contact-val"><a <?= $mailhtml ?> class="text-dark text-decoration-none"><?= htmlspecialchars($mail) ?></a></div>
              </div>
              <div class="legal-contact-item">
                <div class="legal-contact-label">Technical Phone Line</div>
                <div class="legal-contact-val"><a <?= $phonehtml ?> class="text-dark text-decoration-none"><?= htmlspecialchars($phone) ?></a></div>
              </div>
              <div class="legal-contact-item">
                <div class="legal-contact-label">Instant WhatsApp Support</div>
                <div class="legal-contact-val"><a href="<?= $whatsapphtml ?>" target="_blank" rel="noopener noreferrer" class="text-success text-decoration-none font-weight-bold">Chat with Engineering Team</a></div>
              </div>
            </div>

          </div>

        </div>
      </div>

    </div>
  </div>
</section>