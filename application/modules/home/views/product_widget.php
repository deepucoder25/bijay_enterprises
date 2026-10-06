<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- ==========================================================================
     Product Catalogue Showcase Section (Single Row with Slide Animation)
     ========================================================================== -->
<section class="home-section catalogue-section" id="catalogueShowcase">
  <div class="container">
    
    <!-- Section Header -->
    <div class="section-header text-center mb-4">
      <div class="d-inline-block mb-2">
        <span class="section-tag">
          <i class="bi bi-gear-wide-connected text-gold"></i> INDUSTRIAL PRODUCT CATALOGUE
        </span>
      </div>
      <h2 class="section-main-title">
        Manufactured For Heavy-Duty <span class="text-brand-highlight">Commercial Reliability</span>
      </h2>
      <p class="section-subtitle mx-auto">
        Certified Food-Grade SS 304 stainless steel machinery engineered for 24/7 high-volume culinary operations, supreme thermal retention, and effortless sanitization.
      </p>
    </div>

    <!-- Product Slider Single Row Wrapper -->
    <div class="position-relative w-100">
      
      <!-- Top Row Controls: Badge -->
      <div class="d-flex align-items-center justify-content-between flex-wrap gap-2 mb-3">
        <div class="product-slider-count-badge">
          <i class="bi bi-grid-3x3-gap-fill text-gold"></i>
          <span>7 Manufacturing Categories</span>
        </div>
      </div>


      <!-- Single Row Viewport with Slide Animation Track -->
      <div class="product-slider-viewport" id="productSliderViewport">
        <div class="product-slider-track" id="productSliderTrack">
          
          <!-- 1. Commercial Kitchen Equipment -->
          <div class="product-slider-item" data-index="0">
            <div class="product-clean-card h-100">
              <div class="product-clean-media position-relative w-100 overflow-hidden">
                <a href="<?= site_url('commercial-kitchen-equipment') ?>" class="d-block w-100 h-100 position-relative" title="Commercial Kitchen Equipment">
                  <span class="product-clean-tag"><i class="bi bi-cpu"></i> SERIES 01</span>
                  <span class="product-pedestal-shadow"></span>
                  <img src="<?= base_url('assets/img/kitchen_equipment.jpg') ?>" 
                       alt="Commercial Kitchen Equipment" 
                       class="product-clean-img w-100 h-100" loading="lazy">
                  <span class="product-clean-badge d-inline-flex align-items-center"><i class="bi bi-shield-check"></i> SS 304</span>
                </a>
              </div>
              <div class="product-clean-body d-flex flex-column flex-grow-1">
                <div class="product-clean-eyebrow">
                  <span class="product-eyebrow-dot"></span>
                  <span>Heavy-Duty Culinary</span>
                </div>
                <h3 class="product-clean-title">
                  <a href="<?= site_url('commercial-kitchen-equipment') ?>">Commercial Kitchen Equipment</a>
                </h3>
                <p class="product-clean-desc">
                  Heavy-duty cooking ranges, high-heat Chinese wok stations, tandoors &amp; commercial fryers.
                </p>
                <div class="product-clean-specs">
                  <span class="product-spec-pill"><i class="bi bi-check2-circle text-gold"></i> SS 304 Grade</span>
                  <span class="product-spec-pill"><i class="bi bi-fire text-danger"></i> High BTU</span>
                  <span class="product-spec-pill"><i class="bi bi-rulers"></i> Custom Sizing</span>
                </div>
                <div class="product-clean-divider"></div>
                <div class="mt-auto">
                  <a href="<?= site_url('commercial-kitchen-equipment') ?>" class="btn-clean-explore text-decoration-none">
                    <span class="btn-clean-text">Explore Products</span>
                    <span class="btn-clean-arrow"><i class="bi bi-arrow-right"></i></span>
                  </a>
                </div>
              </div>
            </div>
          </div>

          <!-- 2. Bakery Equipment -->
          <div class="product-slider-item" data-index="1">
            <div class="product-clean-card h-100">
              <div class="product-clean-media position-relative w-100 overflow-hidden">
                <a href="<?= site_url('bakery-equipment') ?>" class="d-block w-100 h-100 position-relative" title="Bakery Equipment">
                  <span class="product-clean-tag"><i class="bi bi-cpu"></i> SERIES 02</span>
                  <span class="product-pedestal-shadow"></span>
                  <img src="<?= base_url('assets/img/bakery-equipment.jpg') ?>" 
                       alt="Bakery Equipment" 
                       class="product-clean-img w-100 h-100" loading="lazy">
                  <span class="product-clean-badge d-inline-flex align-items-center"><i class="bi bi-cake2-fill"></i> Automated PID</span>
                </a>
              </div>
              <div class="product-clean-body d-flex flex-column flex-grow-1">
                <div class="product-clean-eyebrow">
                  <span class="product-eyebrow-dot"></span>
                  <span>Baking &amp; Processing</span>
                </div>
                <h3 class="product-clean-title">
                  <a href="<?= site_url('bakery-equipment') ?>">Bakery Equipment</a>
                </h3>
                <p class="product-clean-desc">
                  Industrial rotary ovens, planetary whipping mixers, dough kneaders &amp; proofing chambers.
                </p>
                <div class="product-clean-specs">
                  <span class="product-spec-pill"><i class="bi bi-thermometer-sun text-gold"></i> Digital PID Heat</span>
                  <span class="product-spec-pill"><i class="bi bi-speedometer2"></i> High Torque</span>
                  <span class="product-spec-pill"><i class="bi bi-shield-check"></i> Heavy Gauge SS</span>
                </div>
                <div class="product-clean-divider"></div>
                <div class="mt-auto">
                  <a href="<?= site_url('bakery-equipment') ?>" class="btn-clean-explore text-decoration-none">
                    <span class="btn-clean-text">Explore Products</span>
                    <span class="btn-clean-arrow"><i class="bi bi-arrow-right"></i></span>
                  </a>
                </div>
              </div>
            </div>
          </div>

          <!-- 3. Display Counter -->
          <div class="product-slider-item" data-index="2">
            <div class="product-clean-card h-100">
              <div class="product-clean-media position-relative w-100 overflow-hidden">
                <a href="<?= site_url('display-counter') ?>" class="d-block w-100 h-100 position-relative" title="Display Counter">
                  <span class="product-clean-tag"><i class="bi bi-cpu"></i> SERIES 03</span>
                  <span class="product-pedestal-shadow"></span>
                  <img src="<?= base_url('assets/img/display-counter.jpg') ?>" 
                       alt="Display Counter" 
                       class="product-clean-img w-100 h-100" loading="lazy">
                  <span class="product-clean-badge d-inline-flex align-items-center"><i class="bi bi-lightbulb-fill"></i> Glass &amp; LED</span>
                </a>
              </div>
              <div class="product-clean-body d-flex flex-column flex-grow-1">
                <div class="product-clean-eyebrow">
                  <span class="product-eyebrow-dot"></span>
                  <span>Showcase &amp; Display</span>
                </div>
                <h3 class="product-clean-title">
                  <a href="<?= site_url('display-counter') ?>">Display Counter</a>
                </h3>
                <p class="product-clean-desc">
                  Curved &amp; flat glass heated showcase warmers, chilled pastry cases &amp; bain marie counters.
                </p>
                <div class="product-clean-specs">
                  <span class="product-spec-pill"><i class="bi bi-lightbulb text-gold"></i> Warm LED Stage</span>
                  <span class="product-spec-pill"><i class="bi bi-layers"></i> Toughened Glass</span>
                  <span class="product-spec-pill"><i class="bi bi-snow2 text-primary"></i> Hot &amp; Cold</span>
                </div>
                <div class="product-clean-divider"></div>
                <div class="mt-auto">
                  <a href="<?= site_url('display-counter') ?>" class="btn-clean-explore text-decoration-none">
                    <span class="btn-clean-text">Explore Products</span>
                    <span class="btn-clean-arrow"><i class="bi bi-arrow-right"></i></span>
                  </a>
                </div>
              </div>
            </div>
          </div>

          <!-- 4. Refrigeration Equipment -->
          <div class="product-slider-item" data-index="3">
            <div class="product-clean-card h-100">
              <div class="product-clean-media position-relative w-100 overflow-hidden">
                <a href="<?= site_url('refrigeration-equipment') ?>" class="d-block w-100 h-100 position-relative" title="Refrigeration Equipment">
                  <span class="product-clean-tag"><i class="bi bi-cpu"></i> SERIES 04</span>
                  <span class="product-pedestal-shadow"></span>
                  <img src="<?= base_url('assets/img/refrigeration-equipment.jpg') ?>" 
                       alt="Refrigeration Equipment" 
                       class="product-clean-img w-100 h-100" loading="lazy">
                  <span class="product-clean-badge d-inline-flex align-items-center"><i class="bi bi-snow"></i> Tropicalized</span>
                </a>
              </div>
              <div class="product-clean-body d-flex flex-column flex-grow-1">
                <div class="product-clean-eyebrow">
                  <span class="product-eyebrow-dot"></span>
                  <span>Commercial Cold Chain</span>
                </div>
                <h3 class="product-clean-title">
                  <a href="<?= site_url('refrigeration-equipment') ?>">Refrigeration Equipment</a>
                </h3>
                <p class="product-clean-desc">
                  Commercial upright chillers, sub-zero freezers, blast chillers &amp; undercounter prep tables.
                </p>
                <div class="product-clean-specs">
                  <span class="product-spec-pill"><i class="bi bi-snow text-primary"></i> Sub-Zero Deep Chill</span>
                  <span class="product-spec-pill"><i class="bi bi-cpu text-gold"></i> Micro-Controller</span>
                  <span class="product-spec-pill"><i class="bi bi-lightning-charge"></i> Eco Efficient</span>
                </div>
                <div class="product-clean-divider"></div>
                <div class="mt-auto">
                  <a href="<?= site_url('refrigeration-equipment') ?>" class="btn-clean-explore text-decoration-none">
                    <span class="btn-clean-text">Explore Products</span>
                    <span class="btn-clean-arrow"><i class="bi bi-arrow-right"></i></span>
                  </a>
                </div>
              </div>
            </div>
          </div>

          <!-- 5. Kitchen Ventilation System -->
          <div class="product-slider-item" data-index="4">
            <div class="product-clean-card h-100">
              <div class="product-clean-media position-relative w-100 overflow-hidden">
                <a href="<?= site_url('kitchen-ventilation-system') ?>" class="d-block w-100 h-100 position-relative" title="Kitchen Ventilation System">
                  <span class="product-clean-tag"><i class="bi bi-cpu"></i> SERIES 05</span>
                  <span class="product-pedestal-shadow"></span>
                  <img src="<?= base_url('assets/img/kitchen-ventilation.jpg') ?>" 
                       alt="Kitchen Ventilation System" 
                       class="product-clean-img w-100 h-100" loading="lazy">
                  <span class="product-clean-badge d-inline-flex align-items-center"><i class="bi bi-wind"></i> SS Baffle</span>
                </a>
              </div>
              <div class="product-clean-body d-flex flex-column flex-grow-1">
                <div class="product-clean-eyebrow">
                  <span class="product-eyebrow-dot"></span>
                  <span>Air Quality &amp; Safety</span>
                </div>
                <h3 class="product-clean-title">
                  <a href="<?= site_url('kitchen-ventilation-system') ?>">Kitchen Ventilation System</a>
                </h3>
                <p class="product-clean-desc">
                  Commercial exhaust hoods, grease baffle filters, GI ductwork &amp; centrifugal blowers.
                </p>
                <div class="product-clean-specs">
                  <span class="product-spec-pill"><i class="bi bi-wind text-info"></i> High CFM Exhaust</span>
                  <span class="product-spec-pill"><i class="bi bi-funnel text-gold"></i> SS Grease Baffles</span>
                  <span class="product-spec-pill"><i class="bi bi-shield-check"></i> Fire-Rated Ducting</span>
                </div>
                <div class="product-clean-divider"></div>
                <div class="mt-auto">
                  <a href="<?= site_url('kitchen-ventilation-system') ?>" class="btn-clean-explore text-decoration-none">
                    <span class="btn-clean-text">Explore Products</span>
                    <span class="btn-clean-arrow"><i class="bi bi-arrow-right"></i></span>
                  </a>
                </div>
              </div>
            </div>
          </div>

          <!-- 6. Washing Equipment -->
          <div class="product-slider-item" data-index="5">
            <div class="product-clean-card h-100">
              <div class="product-clean-media position-relative w-100 overflow-hidden">
                <a href="<?= site_url('washing-equipment') ?>" class="d-block w-100 h-100 position-relative" title="Washing Equipment">
                  <span class="product-clean-tag"><i class="bi bi-cpu"></i> SERIES 06</span>
                  <span class="product-pedestal-shadow"></span>
                  <img src="<?= base_url('assets/img/washing-equipment.jpg') ?>" 
                       alt="Washing Equipment" 
                       class="product-clean-img w-100 h-100" loading="lazy">
                  <span class="product-clean-badge d-inline-flex align-items-center"><i class="bi bi-droplet-half"></i> SS Warewash</span>
                </a>
              </div>
              <div class="product-clean-body d-flex flex-column flex-grow-1">
                <div class="product-clean-eyebrow">
                  <span class="product-eyebrow-dot"></span>
                  <span>Sanitization &amp; Pot Wash</span>
                </div>
                <h3 class="product-clean-title">
                  <a href="<?= site_url('washing-equipment') ?>">Washing Equipment</a>
                </h3>
                <p class="product-clean-desc">
                  Deep pot wash sinks, soiled scrap tables, dish landing benches &amp; grease interceptors.
                </p>
                <div class="product-clean-specs">
                  <span class="product-spec-pill"><i class="bi bi-droplet text-primary"></i> Anti-Splash Sinks</span>
                  <span class="product-spec-pill"><i class="bi bi-shield-check text-gold"></i> SS 304 Heavy Gauge</span>
                  <span class="product-spec-pill"><i class="bi bi-filter-circle"></i> Grease Trap Ready</span>
                </div>
                <div class="product-clean-divider"></div>
                <div class="mt-auto">
                  <a href="<?= site_url('washing-equipment') ?>" class="btn-clean-explore text-decoration-none">
                    <span class="btn-clean-text">Explore Products</span>
                    <span class="btn-clean-arrow"><i class="bi bi-arrow-right"></i></span>
                  </a>
                </div>
              </div>
            </div>
          </div>

          <!-- 7. L.P.G. Gas Pipeline Installation -->
          <div class="product-slider-item" data-index="6">
            <div class="product-clean-card h-100">
              <div class="product-clean-media position-relative w-100 overflow-hidden">
                <a href="<?= site_url('lpg-gas-pipeline-installation') ?>" class="d-block w-100 h-100 position-relative" title="L.P.G. Gas Pipeline Installation">
                  <span class="product-clean-tag"><i class="bi bi-cpu"></i> SERIES 07</span>
                  <span class="product-pedestal-shadow"></span>
                  <img src="<?= base_url('assets/img/gas-pipeline.jpg') ?>" 
                       alt="L.P.G. Gas Pipeline Installation" 
                       class="product-clean-img w-100 h-100" loading="lazy">
                  <span class="product-clean-badge d-inline-flex align-items-center"><i class="bi bi-shield-lock-fill"></i> Certified PESO</span>
                </a>
              </div>
              <div class="product-clean-body d-flex flex-column flex-grow-1">
                <div class="product-clean-eyebrow">
                  <span class="product-eyebrow-dot"></span>
                  <span>Safety &amp; Infrastructure</span>
                </div>
                <h3 class="product-clean-title">
                  <a href="<?= site_url('lpg-gas-pipeline-installation') ?>">L.P.G. Gas Pipeline</a>
                </h3>
                <p class="product-clean-desc">
                  Turnkey cylinder manifold banks, forged seamless schedule piping &amp; leak auto-shutoff.
                </p>
                <div class="product-clean-specs">
                  <span class="product-spec-pill"><i class="bi bi-patch-check-fill text-gold"></i> PESO Certified</span>
                  <span class="product-spec-pill"><i class="bi bi-bell-fill text-danger"></i> Auto Leak Shutoff</span>
                  <span class="product-spec-pill"><i class="bi bi-diagram-3"></i> Schedule 40 Seamless</span>
                </div>
                <div class="product-clean-divider"></div>
                <div class="mt-auto">
                  <a href="<?= site_url('lpg-gas-pipeline-installation') ?>" class="btn-clean-explore text-decoration-none">
                    <span class="btn-clean-text">Explore Products</span>
                    <span class="btn-clean-arrow"><i class="bi bi-arrow-right"></i></span>
                  </a>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>

      <!-- Bottom Controls: Previous Button + Dots + Next Button -->
      <div class="d-flex align-items-center justify-content-center flex-wrap gap-3 mt-4">
        <button type="button" class="btn-product-nav-pill" id="productBottomPrevBtn" aria-label="Previous Product Slide">
          <i class="bi bi-arrow-left"></i>
          <span>Previous</span>
        </button>

        <div class="d-flex align-items-center justify-content-center gap-2 m-0" id="productSliderDots"></div>

        <button type="button" class="btn-product-nav-pill" id="productBottomNextBtn" aria-label="Next Product Slide">
          <span>Next</span>
          <i class="bi bi-arrow-right"></i>
        </button>
      </div>

    </div>

    <!-- Bottom Showcase Banner -->
    <div class="catalogue-bottom-banner w-100 mt-5">
      <div class="row align-items-center g-3">
        <div class="col-lg-8 text-center text-lg-start">
          <h4 class="catalogue-banner-title mb-1"><i class="bi bi-gear-fill text-gold me-2"></i> Custom Stainless Steel Fabrication Available</h4>
          <p class="catalogue-banner-desc mb-0">Have unique room dimensions or specific chef requirements? We custom fabricate any SS 304 equipment to exact millimetric drawings.</p>
        </div>
        <div class="col-lg-4 text-center text-lg-end">
          <a href="<?= $whatsapphtml ?>" target="_blank" rel="noopener" class="btn-home-whatsapp" title="Send Floor Plan on WhatsApp">
            <i class="bi bi-whatsapp"></i>
            <span>Send Floor Plan on WhatsApp</span>
          </a>
        </div>
    </div>

  </div>
</section>


