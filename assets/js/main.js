/**
 * Bijay Enterprises - Main Application Script
 * Combined lightweight slider controller for Product Catalogue & Customer Reviews
 */

(function () {
  'use strict';

  /**
   * Reusable Touch Swipe Helper
   */
  function addSwipeListener(element, onSwipeLeft, onSwipeRight, threshold) {
    if (!element) return;
    threshold = threshold || 40;
    var startX = 0;
    element.addEventListener('touchstart', function (e) {
      startX = e.touches[0].clientX;
    }, { passive: true });
    element.addEventListener('touchend', function (e) {
      var diff = startX - e.changedTouches[0].clientX;
      if (Math.abs(diff) > threshold) {
        if (diff > 0) {
          onSwipeLeft();
        } else {
          onSwipeRight();
        }
      }
    }, { passive: true });
  }

  /**
   * 1. Product Catalogue Slider
   */
  function initProductSlider() {
    var viewport = document.getElementById('productSliderViewport');
    var track = document.getElementById('productSliderTrack');
    var dotsContainer = document.getElementById('productSliderDots');
    var prevBtn = document.getElementById('productBottomPrevBtn');
    var nextBtn = document.getElementById('productBottomNextBtn');
    if (!viewport || !track) return;

    var items = Array.from(track.children);
    if (!items.length) return;
    var currentIndex = 0;

    function getVisible() {
      return window.innerWidth > 991 ? 3 : (window.innerWidth > 640 ? 2 : 1);
    }

    function getMax() {
      return Math.max(0, items.length - getVisible());
    }

    function goTo(idx) {
      var max = getMax();
      currentIndex = idx > max ? 0 : (idx < 0 ? max : idx);
      var step = items[0] ? (items[0].offsetWidth + 24) : 0;
      track.style.transform = 'translateX(-' + (currentIndex * step) + 'px)';
      if (dotsContainer) {
        dotsContainer.querySelectorAll('.product-slider-dot').forEach(function (d, i) {
          d.classList.toggle('is-active', i === currentIndex);
        });
      }
    }

    function renderDots() {
      if (!dotsContainer) return;
      var max = getMax();
      dotsContainer.innerHTML = Array.from({ length: max + 1 }, function (_, i) {
        return '<button type="button" class="product-slider-dot' + (i === currentIndex ? ' is-active' : '') + '" aria-label="Slide ' + (i + 1) + '"></button>';
      }).join('');
      dotsContainer.querySelectorAll('.product-slider-dot').forEach(function (dot, i) {
        dot.onclick = function () { goTo(i); };
      });
    }

    if (prevBtn) {
      prevBtn.addEventListener('click', function () { goTo(currentIndex - 1); });
    }
    if (nextBtn) {
      nextBtn.addEventListener('click', function () { goTo(currentIndex + 1); });
    }

    addSwipeListener(viewport, function () { goTo(currentIndex + 1); }, function () { goTo(currentIndex - 1); });

    var timer = setInterval(function () { goTo(currentIndex + 1); }, 4500);
    viewport.addEventListener('mouseenter', function () { clearInterval(timer); });
    viewport.addEventListener('mouseleave', function () {
      clearInterval(timer);
      timer = setInterval(function () { goTo(currentIndex + 1); }, 4500);
    });

    window.addEventListener('resize', function () {
      renderDots();
      goTo(currentIndex);
    });

    renderDots();
    goTo(0);
  }

  /**
   * 2. Customer Reviews / Testimonials Slider
   */
  function initReviewsSlider() {
    var viewport = document.getElementById('reviewsSliderViewport');
    var track = document.getElementById('reviewsSliderTrack');
    var prevBtn = document.getElementById('reviewPrevBtn');
    var nextBtn = document.getElementById('reviewNextBtn');
    var dots = document.querySelectorAll('#reviewsDots .slider-dot');
    if (!viewport || !track) return;

    var items = Array.from(track.querySelectorAll('.review-slider-item'));
    if (!items.length) return;
    var currentIndex = 1; // Default to second review centered

    function goTo(idx) {
      currentIndex = (idx + items.length) % items.length;
      var item = items[currentIndex];
      if (!item) return;

      var offset = (viewport.clientWidth / 2) - (item.offsetLeft + item.offsetWidth / 2);
      track.style.transform = 'translateX(' + offset + 'px)';

      var prevNeighbor = (currentIndex - 1 + items.length) % items.length;
      var nextNeighbor = (currentIndex + 1) % items.length;

      items.forEach(function (it, i) {
        it.classList.toggle('is-focused', i === currentIndex);
        it.classList.toggle('is-neighbor', i === prevNeighbor || i === nextNeighbor);
      });

      dots.forEach(function (dot, i) {
        dot.classList.toggle('is-active', i === currentIndex);
      });
    }

    if (prevBtn) {
      prevBtn.addEventListener('click', function () { goTo(currentIndex - 1); });
    }
    if (nextBtn) {
      nextBtn.addEventListener('click', function () { goTo(currentIndex + 1); });
    }

    dots.forEach(function (dot, i) {
      dot.onclick = function () { goTo(i); };
    });

    items.forEach(function (item, i) {
      item.addEventListener('click', function () { goTo(i); });
    });

    addSwipeListener(viewport, function () { goTo(currentIndex + 1); }, function () { goTo(currentIndex - 1); });

    var timer = setInterval(function () { goTo(currentIndex + 1); }, 5000);
    viewport.addEventListener('mouseenter', function () { clearInterval(timer); });
    viewport.addEventListener('mouseleave', function () {
      clearInterval(timer);
      timer = setInterval(function () { goTo(currentIndex + 1); }, 5000);
    });

    window.addEventListener('resize', function () { goTo(currentIndex); });

    setTimeout(function () { goTo(1); }, 50);
  }

  // Initialize both when DOM is ready
  document.addEventListener('DOMContentLoaded', function () {
    initProductSlider();
    initReviewsSlider();
  });
})();
