<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- ==========================================================================
     Breadcrumbs Section (Light BG + SVG Design)
     ========================================================================== -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'Client Testimonials & Verified Reviews',
    'bc_desc' => 'Read firsthand feedback from executive chefs, five-star hotel chains, commercial bakery plant owners, and hospital dietary departments across Eastern India.',
    'breadcrumbs' => [
        ['name' => 'Testimonials']
    ]
]); ?>

<!-- ==========================================================================
     Testimonials Page Main Section
     ========================================================================== -->
<section class="testimonials-page-section">
  <div class="container">

    <!-- 1. Executive Rating Summary Strip -->
    <div class="testi-summary-card mb-5">
      <div class="row align-items-center g-4 text-center text-lg-start">
        
        <!-- Overall Score -->
        <div class="col-lg-4 text-center border-lg-end">
          <div class="d-flex align-items-baseline justify-content-center gap-2">
            <span class="testi-score-val">4.9</span>
            <span class="testi-score-max">/ 5.0</span>
          </div>
          <div class="d-flex align-items-center justify-content-center gap-1 my-2">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="#f59e0b" stroke="#f59e0b"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
            <svg width="20" height="20" viewBox="0 0 24 24" fill="#f59e0b" stroke="#f59e0b"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
            <svg width="20" height="20" viewBox="0 0 24 24" fill="#f59e0b" stroke="#f59e0b"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
            <svg width="20" height="20" viewBox="0 0 24 24" fill="#f59e0b" stroke="#f59e0b"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
            <svg width="20" height="20" viewBox="0 0 24 24" fill="#f59e0b" stroke="#f59e0b"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
          </div>
          <div class="testi-rating-caption">
            Over 500+ Successful Commercial Installations
          </div>
        </div>

        <!-- Metric Badges -->
        <div class="col-lg-8">
          <div class="row g-3 text-center">
            
            <div class="col-sm-4">
              <div class="testi-stat-box">
                <div class="testi-stat-icon">
                  <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="8" r="7"/><polyline points="8.21 13.89 7 23 12 20 17 23 15.79 13.88"/></svg>
                </div>
                <div class="testi-stat-num"><?= $experience ?> Years</div>
                <div class="testi-stat-label">Engineering Legacy (Est. 1996)</div>
              </div>
            </div>

            <div class="col-sm-4">
              <div class="testi-stat-box">
                <div class="testi-stat-icon">
                  <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                </div>
                <div class="testi-stat-num">100% SS 304</div>
                <div class="testi-stat-label">Certified Food Grade</div>
              </div>
            </div>

            <div class="col-sm-4">
              <div class="testi-stat-box">
                <div class="testi-stat-icon">
                  <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect width="20" height="14" x="2" y="5" rx="2"/><line x1="2" y1="10" x2="22" y2="10"/></svg>
                </div>
                <div class="testi-stat-num">Factory Direct</div>
                <div class="testi-stat-label">Wholesale Transparent Pricing</div>
              </div>
            </div>

          </div>
        </div>

      </div>
    </div>

    <!-- 2. Testimonials Grid -->
    <div class="row g-4 mb-5">
      
      <!-- Card 1 -->
      <div class="col-md-6 col-lg-4">
        <div class="testi-client-card h-100">
          <div class="testi-card-top">
            <div class="testi-stars">
              <span class="star-icon">&#9733;</span><span class="star-icon">&#9733;</span><span class="star-icon">&#9733;</span><span class="star-icon">&#9733;</span><span class="star-icon">&#9733;</span>
            </div>
            <span class="testi-project-pill">HOTEL BANQUET KITCHEN</span>
          </div>
          <p class="testi-review-body">
            “Bijay Enterprises engineered our entire hotel banquet line with food-grade SS 304 four-burner cooking ranges and custom duct exhaust hoods. Even during peak Himalayan tourist season with continuous 24/7 service, their machinery delivers exceptional thermal output and stability.”
          </p>
          <div class="testi-author-strip">
            <div class="testi-author-avatar">AM</div>
            <div class="testi-author-info">
              <div class="author-name">Executive Chef Anirban Mukherjee</div>
              <div class="author-org">Mayfair Heritage Resort &amp; Hotel, Darjeeling</div>
            </div>
          </div>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="col-md-6 col-lg-4">
        <div class="testi-client-card h-100">
          <div class="testi-card-top">
            <div class="testi-stars">
              <span class="star-icon">&#9733;</span><span class="star-icon">&#9733;</span><span class="star-icon">&#9733;</span><span class="star-icon">&#9733;</span><span class="star-icon">&#9733;</span>
            </div>
            <span class="testi-project-pill">INDUSTRIAL BAKERY PLANT</span>
          </div>
          <p class="testi-review-body">
            “We purchased a diesel rotary rack oven and heavy-duty spiral dough mixer from their Siliguri plant. The temperature distribution and crust consistency have drastically improved our daily bakery production. Truly Eastern India's top machinery builder.”
          </p>
          <div class="testi-author-strip">
            <div class="testi-author-avatar">VS</div>
            <div class="testi-author-info">
              <div class="author-name">Vikram Singhania</div>
              <div class="author-org">Flurys Bakery Franchise Facility, Siliguri</div>
            </div>
          </div>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="col-md-6 col-lg-4">
        <div class="testi-client-card h-100">
          <div class="testi-card-top">
            <div class="testi-stars">
              <span class="star-icon">&#9733;</span><span class="star-icon">&#9733;</span><span class="star-icon">&#9733;</span><span class="star-icon">&#9733;</span><span class="star-icon">&#9733;</span>
            </div>
            <span class="testi-project-pill">TURNKEY RESTAURANT SETUP</span>
          </div>
          <p class="testi-review-body">
            “Working with Bijay Enterprises made our restaurant launch completely stress-free. They managed CAD layout planning, PESO-compliant LPG manifold pipeline installation, and custom Bain-Marie display warmers. Professional execution from blueprint to commissioning.”
          </p>
          <div class="testi-author-strip">
            <div class="testi-author-avatar">PA</div>
            <div class="testi-author-info">
              <div class="author-name">Pooja Agarwal</div>
              <div class="author-org">Spicy Treat Multi-Cuisine Cafe, Gangtok (Sikkim)</div>
            </div>
          </div>
        </div>
      </div>

      <!-- Card 4 -->
      <div class="col-md-6 col-lg-4">
        <div class="testi-client-card h-100">
          <div class="testi-card-top">
            <div class="testi-stars">
              <span class="star-icon">&#9733;</span><span class="star-icon">&#9733;</span><span class="star-icon">&#9733;</span><span class="star-icon">&#9733;</span><span class="star-icon">&#9733;</span>
            </div>
            <span class="testi-project-pill">INSTITUTIONAL HOSPITAL WING</span>
          </div>
          <p class="testi-review-body">
            “Our hospital dietary unit mandated certified non-magnetic SS 304 food-grade stainless steel to comply with strict medical hygiene norms. Bijay Enterprises fabricated seamless argon TIG welded preparation tables, pot sinks, and double steam boilers with laser finish.”
          </p>
          <div class="testi-author-strip">
            <div class="testi-author-avatar">SS</div>
            <div class="testi-author-info">
              <div class="author-name">Dr. Subhash Sen</div>
              <div class="author-org">Heritage Multi-Specialty Hospital, Jalpaiguri</div>
            </div>
          </div>
        </div>
      </div>

      <!-- Card 5 -->
      <div class="col-md-6 col-lg-4">
        <div class="testi-client-card h-100">
          <div class="testi-card-top">
            <div class="testi-stars">
              <span class="star-icon">&#9733;</span><span class="star-icon">&#9733;</span><span class="star-icon">&#9733;</span><span class="star-icon">&#9733;</span><span class="star-icon">&#9733;</span>
            </div>
            <span class="testi-project-pill">CLOUD KITCHEN COMMISSARY</span>
          </div>
          <p class="testi-review-body">
            “Running 6 delivery brands from one central production unit requires relentless equipment stamina. Their custom Chinese wok burners, deep fat fryers, and high-CFM exhaust blowers maintain high thermal efficiency while keeping the staff kitchen cool and smoke-free.”
          </p>
          <div class="testi-author-strip">
            <div class="testi-author-avatar">KC</div>
            <div class="testi-author-info">
              <div class="author-name">Kunal Chakraborty</div>
              <div class="author-org">Cloud Eats Central Commissary Kitchen, Kolkata</div>
            </div>
          </div>
        </div>
      </div>

      <!-- Card 6 -->
      <div class="col-md-6 col-lg-4">
        <div class="testi-client-card h-100">
          <div class="testi-card-top">
            <div class="testi-stars">
              <span class="star-icon">&#9733;</span><span class="star-icon">&#9733;</span><span class="star-icon">&#9733;</span><span class="star-icon">&#9733;</span><span class="star-icon">&#9733;</span>
            </div>
            <span class="testi-project-pill">HOTEL REFRIGERATION &amp; PREP</span>
          </div>
          <p class="testi-review-body">
            “Their under-counter refrigeration tables and walk-in cold room shelving matched our tight kitchen blueprint with millimeter precision. The cooling retention and stainless steel finish are exceptional. Their engineers provide prompt after-sales support.”
          </p>
          <div class="testi-author-strip">
            <div class="testi-author-avatar">TN</div>
            <div class="testi-author-info">
              <div class="author-name">Tenzing Norbu</div>
              <div class="author-org">The Himalayan Pines Boutique Hotel, Kalimpong</div>
            </div>
          </div>
        </div>
      </div>

    </div>

    <!-- 3. Bottom CTA Banner -->
    <div class="testi-cta-banner">
      <div class="row align-items-center g-4 text-center text-lg-start">
        <div class="col-lg-8">
          <span class="testi-cta-tag">PLAN YOUR COMMERCIAL KITCHEN WITH CONFIDENCE</span>
          <h2 class="testi-cta-title">Ready to Upgrade Your Kitchen Equipment?</h2>
          <p class="testi-cta-desc mb-0">Join 500+ successful restaurants, bakeries, and hotels across Eastern India. Get factory-direct quotes and custom CAD planning.</p>
        </div>
        <div class="col-lg-4 text-lg-end">
          <div class="d-flex flex-wrap gap-2 justify-content-center justify-content-lg-end">
            <button type="button" class="btn-testi-primary d-inline-flex align-items-center gap-2" data-bs-toggle="modal" data-bs-target="#qteModal">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/></svg>
              <span>Request Factory Quote</span>
            </button>
            <a <?= $phonehtml ?> class="btn-testi-outline d-inline-flex align-items-center gap-2 text-decoration-none">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
              <span>Call Senior Engineer</span>
            </a>
          </div>
        </div>
      </div>
    </div>

  </div>
</section>