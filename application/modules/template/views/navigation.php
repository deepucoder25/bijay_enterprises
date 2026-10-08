<body>
<?php
$ci =& get_instance();
$class = strtolower($ci->router->fetch_class());
$method = strtolower($ci->router->fetch_method());
$segment1 = $ci->uri->segment(1);


// Determine if current page is home (where slider exists)
$is_home = empty($segment1) || $segment1 === 'home' || ($class === 'home' && $method === 'index');

// Determine active navigation item
$active_tab = '';
if ($is_home) {
  $active_tab = 'home';
} elseif ($segment1 === 'faqs' || ($class === 'about' && $method === 'faqs')) {
  $active_tab = 'faqs';
} elseif ($segment1 === 'testimonials' || ($class === 'about' && $method === 'testimonials')) {
  $active_tab = 'testimonials';
} elseif ($class === 'about' || in_array($segment1, ['about-us', 'why-choose-us'])) {
  $active_tab = 'about';
} elseif ($class === 'services' || in_array($segment1, ['our-services'])) {
  $active_tab = 'services';
} elseif ($class === 'contacts' || $segment1 === 'contact-us') {
  $active_tab = 'contact';
}

// SEO Friendly SiteNavigationElement Schema
$nav_schema = [
  "@context" => "https://schema.org",
  "@graph" => [
    ["@type" => "SiteNavigationElement", "name" => "Home", "url" => site_url()],
    ["@type" => "SiteNavigationElement", "name" => "About Us", "url" => site_url('about-us')],
    ["@type" => "SiteNavigationElement", "name" => "Product Catalogue", "url" => site_url('#catalogueShowcase')],
    ["@type" => "SiteNavigationElement", "name" => "Our Services", "url" => site_url('#servicesShowcase')],
    ["@type" => "SiteNavigationElement", "name" => "Testimonials", "url" => site_url('testimonials')],
    ["@type" => "SiteNavigationElement", "name" => "FAQs", "url" => site_url('faqs')],
    ["@type" => "SiteNavigationElement", "name" => "Contact Us", "url" => site_url('contact-us')]
  ]
];
?>
<script type="application/ld+json">
<?= json_encode($nav_schema, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES) ?>
</script>

<!-- Main Header / Navigation -->
<header id="mainHeader" class="site-header header-solid">
  <!-- Top Utility Bar (scrolls with page) -->
  <div class="top-utility-bar" id="topUtilityBar">
    <div class="container-fluid px-3 px-xl-5">
      <div class="topbar-content">
        <div class="topbar-left">
          <a <?= $phonehtml ?> class="topbar-item" title="Call Us">
            <i class="bi bi-telephone-fill icon-gold"></i>
            <span class="topbar-text"><?= $phone ?></span>
          </a>
          <span class="topbar-sep d-none d-md-inline">|</span>
          <a href="<?= $mailhtml ?>" class="topbar-item d-none d-md-inline-flex" title="Email Us">
            <i class="bi bi-envelope-fill icon-gold"></i>
            <span class="topbar-text"><?=$mail ?></span>
          </a>
          <span class="topbar-sep d-none d-xl-inline">|</span>
          <span class="topbar-item d-none d-xl-inline-flex text-muted-white">
            <i class="bi bi-geo-alt-fill icon-gold"></i>
            <span class="topbar-text">Siliguri, Darjeeling (WB)</span>
          </span>
        </div>

        <div class="topbar-right">
          <div class="topbar-badge d-none d-sm-inline-flex">
            <i class="bi bi-award-fill"></i>
            <span>30+ Years Commercial Kitchen Mfg</span>
          </div>
          <a href="<?= $whatsapphtml ?>" target="_blank" rel="noopener" class="topbar-wa-link" title="Chat on WhatsApp">
            <i class="bi bi-whatsapp"></i>
            <span>WhatsApp Us</span>
          </a>
        </div>
      </div>
    </div>
  </div>

  <!-- Primary Navigation Bar (sticks when reaching top) -->
  <nav class="navbar-container" id="mainNavbar">
    <div class="container-fluid px-3 px-xl-5">
      <div class="nav-flex-wrapper">
        <!-- Logo -->
        <a href="<?= site_url() ?>" class="brand-link" aria-label="<?= htmlspecialchars($company3) ?>">
          <img src="<?= base_url('assets/img/logo/logo.png') ?>" alt="<?= htmlspecialchars($company3) ?>" class="header-logo">
        </a>

        <!-- Desktop Navigation Items -->
        <div class="nav-desktop-menu d-none d-lg-flex">
          <ul class="main-nav-links">
            <li class="nav-item">
              <a href="<?= site_url() ?>" class="nav-link <?= $active_tab === 'home' ? 'active' : '' ?>">
                <span>Home</span>
              </a>
            </li>

            <li class="nav-item">
              <a href="<?= site_url('about-us') ?>" class="nav-link <?= $active_tab === 'about' ? 'active' : '' ?>">
                <span>About Us</span>
              </a>
            </li>

            <!-- Dropdown: Product Catalogue (Screenshot 1) -->
            <li class="nav-item dropdown has-megamenu">
              <a href="#catalogueShowcase" class="nav-link dropdown-toggle" id="catalogueDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <span>Product Catalogue</span>
                <i class="bi bi-chevron-down nav-caret"></i>
              </a>
              <div class="dropdown-menu custom-dropdown-box shadow-lg" aria-labelledby="catalogueDropdown">
                <div class="dropdown-box-header">
                  <div class="dropdown-tag">Manufactured by <?= htmlspecialchars($company3) ?></div>
                  <h6 class="dropdown-title">Commercial Product Catalogue</h6>
                  <div class="dropdown-gold-line"></div>
                </div>
                <div class="dropdown-items-grid">
                  <a href="<?= site_url('products/commercial-kitchen-equipment') ?>" class="dropdown-menu-item">
                    <span class="gold-bullet-dot"></span>
                    <span class="item-title">Commercial Kitchen Equipment</span>
                  </a>
                  <a href="<?= site_url('products/bakery-equipment') ?>" class="dropdown-menu-item">
                    <span class="gold-bullet-dot"></span>
                    <span class="item-title">Bakery Equipment</span>
                  </a>
                  <a href="<?= site_url('products/display-counter') ?>" class="dropdown-menu-item">
                    <span class="gold-bullet-dot"></span>
                    <span class="item-title">Display Counter</span>
                  </a>
                  <a href="<?= site_url('products/refrigeration-equipment') ?>" class="dropdown-menu-item">
                    <span class="gold-bullet-dot"></span>
                    <span class="item-title">Refrigeration Equipment</span>
                  </a>
                  <a href="<?= site_url('products/kitchen-ventilation-system') ?>" class="dropdown-menu-item">
                    <span class="gold-bullet-dot"></span>
                    <span class="item-title">Kitchen Ventilation System</span>
                  </a>
                  <a href="<?= site_url('products/washing-equipment') ?>" class="dropdown-menu-item">
                    <span class="gold-bullet-dot"></span>
                    <span class="item-title">Washing Equipment</span>
                  </a>
                  <a href="<?= site_url('products/lpg-gas-pipeline-installation') ?>" class="dropdown-menu-item">
                    <span class="gold-bullet-dot"></span>
                    <span class="item-title">L.P.G. Gas Pipeline Installation</span>
                  </a>
                </div>
              </div>
            </li>

            <!-- Dropdown: Our Services (Screenshot 2) -->
            <li class="nav-item dropdown has-megamenu">
              <a href="<?= site_url('services') ?>" class="nav-link dropdown-toggle <?= $active_tab === 'services' ? 'active' : '' ?>" id="servicesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <span>Our Services</span>
                <i class="bi bi-chevron-down nav-caret"></i>
              </a>
              <div class="dropdown-menu custom-dropdown-box shadow-lg" aria-labelledby="servicesDropdown">
                <div class="dropdown-box-header">
                  <div class="dropdown-tag">End-to-End Solutions</div>
                  <h6 class="dropdown-title text-gold-accent">OUR SERVICES</h6>
                  <div class="dropdown-gold-line"></div>
                </div>
                <div class="dropdown-items-grid">
                  <a href="<?= site_url('services/commercial-kitchen-equipment') ?>" class="dropdown-menu-item">
                    <span class="gold-bullet-dot"></span>
                    <span class="item-title">Commercial Kitchen Equipment</span>
                  </a>
                  <a href="<?= site_url('services/bakery-food-service-equipment') ?>" class="dropdown-menu-item">
                    <span class="gold-bullet-dot"></span>
                    <span class="item-title">Bakery & Food Service Equipment</span>
                  </a>
                  <a href="<?= site_url('services/refrigeration-ventilation-systems') ?>" class="dropdown-menu-item">
                    <span class="gold-bullet-dot"></span>
                    <span class="item-title">Refrigeration & Ventilation Systems</span>
                  </a>
                  <a href="<?= site_url('services/lpg-gas-pipeline-installation') ?>" class="dropdown-menu-item">
                    <span class="gold-bullet-dot"></span>
                    <span class="item-title">L.P.G. Gas Pipeline Installation</span>
                  </a>
                  <a href="<?= site_url('services/custom-fabrication-installation') ?>" class="dropdown-menu-item">
                    <span class="gold-bullet-dot"></span>
                    <span class="item-title">Custom Fabrication & Installation</span>
                  </a>
                </div>
              </div>
            </li>

            <li class="nav-item">
              <a href="<?= site_url('testimonials') ?>" class="nav-link <?= $active_tab === 'testimonials' ? 'active' : '' ?>">
                <span>Testimonials</span>
              </a>
            </li>

            <li class="nav-item">
              <a href="<?= site_url('faqs') ?>" class="nav-link <?= $active_tab === 'faqs' ? 'active' : '' ?>">
                <span>FAQs</span>
              </a>
            </li>

            <li class="nav-item">
              <a href="<?= site_url('contact-us') ?>" class="nav-link <?= $active_tab === 'contact' ? 'active' : '' ?>">
                <span>Contact Us</span>
              </a>
            </li>
          </ul>
        </div>

        <!-- Right Header Action Buttons -->
        <div class="nav-action-buttons">
          <a <?= $phonehtml ?> class="btn-nav-call d-none d-sm-inline-flex" title="Call Us Directly">
            <i class="bi bi-telephone-fill"></i>
            <span class="call-text">
              <span class="call-small">Call Us Now</span>
              <span class="call-number"><?= $phone ?></span>
            </span>
          </a>

          <!-- Mobile Hamburger Toggle -->
          <button class="mobile-nav-toggle d-lg-none" id="mobileMenuOpenBtn" type="button" aria-label="Open Navigation Menu">
            <span class="toggle-bar"></span>
            <span class="toggle-bar"></span>
            <span class="toggle-bar"></span>
          </button>
        </div>
      </div>
    </div>
  </nav>
</header>

<!-- Mobile Navigation Drawer -->
<div class="mobile-nav-overlay" id="mobileNavOverlay"></div>
<aside class="mobile-nav-drawer" id="mobileNavDrawer" aria-label="Mobile Navigation">
  <div class="mobile-drawer-header">
    <a href="<?= site_url() ?>" class="mobile-drawer-logo" aria-label="<?= htmlspecialchars($company3) ?>">
      <span class="mobile-logo-badge">
        <img src="<?= base_url('assets/img/logo/logo.png') ?>" alt="<?= htmlspecialchars($company3) ?>">
      </span>
    </a>
    <button class="mobile-drawer-close" id="mobileMenuCloseBtn" type="button" aria-label="Close Navigation Menu">
      <i class="bi bi-x-lg"></i>
    </button>
  </div>

  <div class="mobile-drawer-body">
    <!-- Quick Action Cards -->
    <div class="mobile-quick-actions">
      <a <?= $phonehtml ?> class="mobile-action-card phone" title="Call Bijay Enterprises">
        <div class="action-icon-pill">
          <i class="bi bi-telephone-fill"></i>
        </div>
        <span class="action-label">Call Now</span>
        <span class="action-micro">Instant</span>
      </a>

      <a href="<?= $whatsapphtml ?>" target="_blank" rel="noopener" class="mobile-action-card whatsapp" title="Chat on WhatsApp">
        <div class="action-icon-pill">
          <i class="bi bi-whatsapp"></i>
        </div>
        <span class="action-label">WhatsApp</span>
        <span class="action-micro">Chat</span>
      </a>

      <button type="button" class="mobile-action-card quote" id="drawerQuoteBtn" data-bs-toggle="modal" data-bs-target="#qteModal" title="Get Free Factory Quote">
        <div class="action-icon-pill">
          <i class="bi bi-file-earmark-text-fill"></i>
        </div>
        <span class="action-label">Get Quote</span>
        <span class="action-micro">Free Est.</span>
      </button>
    </div>

    <!-- Navigation List with Icon Badges -->
    <ul class="mobile-menu-list">
      <li class="mobile-menu-item">
        <a href="<?= site_url() ?>" class="mobile-menu-link <?= $active_tab === 'home' ? 'active' : '' ?>">
          <span class="menu-icon-box"><i class="bi bi-house-door-fill"></i></span>
          <span class="menu-label">Home</span>
        </a>
      </li>

      <li class="mobile-menu-item">
        <a href="<?= site_url('about-us') ?>" class="mobile-menu-link <?= $active_tab === 'about' ? 'active' : '' ?>">
          <span class="menu-icon-box"><i class="bi bi-info-circle-fill"></i></span>
          <span class="menu-label">About Us</span>
        </a>
      </li>

      <!-- Product Catalogue Accordion Item -->
      <li class="mobile-menu-item has-accordion">
        <button class="mobile-accordion-toggle" type="button" aria-expanded="false">
          <span class="toggle-content">
            <span class="menu-icon-box"><i class="bi bi-grid-fill"></i></span>
            <span class="menu-label">Product Catalogue</span>
          </span>
          <span class="accordion-badge-pill">7 Items</span>
          <i class="bi bi-chevron-down accordion-arrow"></i>
        </button>
        <div class="mobile-accordion-content">
          <ul class="mobile-sub-menu">
            <li><a href="<?= site_url('products/commercial-kitchen-equipment') ?>"><span class="gold-bullet-dot"></span> Commercial Kitchen Equipment</a></li>
            <li><a href="<?= site_url('products/bakery-equipment') ?>"><span class="gold-bullet-dot"></span> Bakery Equipment</a></li>
            <li><a href="<?= site_url('products/display-counter') ?>"><span class="gold-bullet-dot"></span> Display Counter</a></li>
            <li><a href="<?= site_url('products/refrigeration-equipment') ?>"><span class="gold-bullet-dot"></span> Refrigeration Equipment</a></li>
            <li><a href="<?= site_url('products/kitchen-ventilation-system') ?>"><span class="gold-bullet-dot"></span> Kitchen Ventilation System</a></li>
            <li><a href="<?= site_url('products/washing-equipment') ?>"><span class="gold-bullet-dot"></span> Washing Equipment</a></li>
            <li><a href="<?= site_url('products/lpg-gas-pipeline-installation') ?>"><span class="gold-bullet-dot"></span> L.P.G. Gas Pipeline Installation</a></li>
          </ul>
        </div>
      </li>

      <!-- Our Services Accordion Item -->
      <li class="mobile-menu-item has-accordion">
        <button class="mobile-accordion-toggle" type="button" aria-expanded="false">
          <span class="toggle-content">
            <span class="menu-icon-box"><i class="bi bi-gear-wide-connected"></i></span>
            <span class="menu-label">Our Services</span>
          </span>
          <span class="accordion-badge-pill">5 Services</span>
          <i class="bi bi-chevron-down accordion-arrow"></i>
        </button>
        <div class="mobile-accordion-content">
          <ul class="mobile-sub-menu">
            <li><a href="<?= site_url('services/commercial-kitchen-equipment') ?>"><span class="gold-bullet-dot"></span> Commercial Kitchen Equipment</a></li>
            <li><a href="<?= site_url('services/bakery-food-service-equipment') ?>"><span class="gold-bullet-dot"></span> Bakery &amp; Food Service Equipment</a></li>
            <li><a href="<?= site_url('services/refrigeration-ventilation-systems') ?>"><span class="gold-bullet-dot"></span> Refrigeration &amp; Ventilation Systems</a></li>
            <li><a href="<?= site_url('services/lpg-gas-pipeline-installation') ?>"><span class="gold-bullet-dot"></span> L.P.G. Gas Pipeline Installation</a></li>
            <li><a href="<?= site_url('services/custom-fabrication-installation') ?>"><span class="gold-bullet-dot"></span> Custom Fabrication &amp; Installation</a></li>
          </ul>
        </div>
      </li>

      <li class="mobile-menu-item">
        <a href="<?= site_url('testimonials') ?>" class="mobile-menu-link <?= $active_tab === 'testimonials' ? 'active' : '' ?>">
          <span class="menu-icon-box"><i class="bi bi-chat-quote-fill"></i></span>
          <span class="menu-label">Testimonials</span>
        </a>
      </li>

      <li class="mobile-menu-item">
        <a href="<?= site_url('faqs') ?>" class="mobile-menu-link <?= $active_tab === 'faqs' ? 'active' : '' ?>">
          <span class="menu-icon-box"><i class="bi bi-question-circle-fill"></i></span>
          <span class="menu-label">FAQs</span>
        </a>
      </li>

      <li class="mobile-menu-item">
        <a href="<?= site_url('contact-us') ?>" class="mobile-menu-link <?= $active_tab === 'contact' ? 'active' : '' ?>">
          <span class="menu-icon-box"><i class="bi bi-telephone-fill"></i></span>
          <span class="menu-label">Contact Us</span>
        </a>
      </li>
    </ul>
  </div>
</aside>

<!-- Navbar & Mobile Menu Interaction Script -->
<script>
document.addEventListener('DOMContentLoaded', function () {
  const header = document.getElementById('mainHeader');
  const topbar = document.getElementById('topUtilityBar');
  const mainNavbar = document.getElementById('mainNavbar');
  const openBtn = document.getElementById('mobileMenuOpenBtn');
  const closeBtn = document.getElementById('mobileMenuCloseBtn');
  const drawer = document.getElementById('mobileNavDrawer');
  const overlay = document.getElementById('mobileNavOverlay');
  const isHome = <?= $is_home ? 'true' : 'false' ?>;

  // Header scroll transition: topbar scrolls off with page, main navbar goes to top and sticks
  function handleNavbarScroll() {
    if (!mainNavbar) return;
    const topbarHeight = topbar ? topbar.offsetHeight : 36;
    if (window.scrollY >= topbarHeight) {
      if (!mainNavbar.classList.contains('is-sticky')) {
        mainNavbar.classList.add('is-sticky');
        if (header) header.style.paddingBottom = mainNavbar.offsetHeight + 'px';
      }
    } else {
      if (mainNavbar.classList.contains('is-sticky')) {
        mainNavbar.classList.remove('is-sticky');
        if (header) header.style.paddingBottom = '0px';
      }
    }
  }

  window.addEventListener('scroll', handleNavbarScroll, { passive: true });
  handleNavbarScroll(); // Initial check on load

  // Mobile Drawer Toggle
  function openMobileMenu() {
    if (drawer && overlay) {
      drawer.classList.add('open');
      overlay.classList.add('active');
      document.body.classList.add('body-menu-locked');
    }
  }

  function closeMobileMenu() {
    if (drawer && overlay) {
      drawer.classList.remove('open');
      overlay.classList.remove('active');
      document.body.classList.remove('body-menu-locked');
    }
  }

  if (openBtn) openBtn.addEventListener('click', openMobileMenu);
  if (closeBtn) closeBtn.addEventListener('click', closeMobileMenu);
  if (overlay) overlay.addEventListener('click', closeMobileMenu);

  document.addEventListener('keydown', function (e) {
    if (e.key === 'Escape') closeMobileMenu();
  });

  // Close drawer when Quote Modal is clicked to prevent stacking
  const drawerQuoteBtn = document.getElementById('drawerQuoteBtn');
  if (drawerQuoteBtn) {
    drawerQuoteBtn.addEventListener('click', function () {
      closeMobileMenu();
    });
  }

  // Auto close drawer when regular navigation links are clicked
  if (drawer) {
    drawer.querySelectorAll('.mobile-menu-link, .mobile-sub-menu a').forEach(function (link) {
      link.addEventListener('click', function () {
        closeMobileMenu();
      });
    });
  }

  // Mobile Accordion Dropdowns
  document.querySelectorAll('.mobile-accordion-toggle').forEach(function (button) {
    button.addEventListener('click', function () {
      const parent = button.closest('.mobile-menu-item');
      const isOpen = parent.classList.contains('active');

      // Close all other accordions
      document.querySelectorAll('.mobile-menu-item.has-accordion').forEach(function (item) {
        if (item !== parent) item.classList.remove('active');
      });

      parent.classList.toggle('active', !isOpen);
    });
  });
});
</script>