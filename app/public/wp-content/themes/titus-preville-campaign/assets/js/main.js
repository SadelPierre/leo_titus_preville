/**
 * Titus Preville Campaign — Main JavaScript
 */
(function () {
  'use strict';

  // ─── DOM Ready ──────────────────────────────────────────────
  document.addEventListener('DOMContentLoaded', function () {
    initStickyHeader();
    initMobileMenu();
    initSmoothScroll();
    initFadeIn();
    initFormEnhancements();
  });

  // ─── Sticky Header ──────────────────────────────────────────
  function initStickyHeader() {
    var header = document.querySelector('.site-header');
    if (!header) return;

    var scrollThreshold = 80;

    function onScroll() {
      if (window.scrollY > scrollThreshold) {
        header.classList.add('scrolled');
      } else {
        header.classList.remove('scrolled');
      }
    }

    window.addEventListener('scroll', onScroll, { passive: true });
    onScroll();
  }

  // ─── Mobile Menu ────────────────────────────────────────────
  function initMobileMenu() {
    var toggle   = document.querySelector('.menu-toggle');
    var mobile   = document.querySelector('.mobile-menu');
    var overlay  = document.querySelector('.mobile-menu-overlay');
    var closeBtn = document.querySelector('.mobile-close');
    var menuLinks = document.querySelectorAll('.mobile-menu a');

    if (!toggle || !mobile) return;

    function openMenu() {
      mobile.classList.add('active');
      toggle.classList.add('active');
      if (overlay) overlay.classList.add('active');
      toggle.setAttribute('aria-expanded', 'true');
      document.body.style.overflow = 'hidden';
    }

    function closeMenu() {
      mobile.classList.remove('active');
      toggle.classList.remove('active');
      if (overlay) overlay.classList.remove('active');
      toggle.setAttribute('aria-expanded', 'false');
      document.body.style.overflow = '';
    }

    toggle.addEventListener('click', function () {
      var isOpen = mobile.classList.contains('active');
      if (isOpen) { closeMenu(); } else { openMenu(); }
    });

    if (closeBtn) closeBtn.addEventListener('click', closeMenu);
    if (overlay)  overlay.addEventListener('click', closeMenu);

    menuLinks.forEach(function (link) {
      link.addEventListener('click', closeMenu);
    });

    document.addEventListener('keydown', function (e) {
      if (e.key === 'Escape' && mobile.classList.contains('active')) {
        closeMenu();
        toggle.focus();
      }
    });
  }

  // ─── Smooth Scroll ──────────────────────────────────────────
  function initSmoothScroll() {
    var links = document.querySelectorAll('a[href^="#"]');
    var headerHeight = 80;

    links.forEach(function (link) {
      link.addEventListener('click', function (e) {
        var hash = this.getAttribute('href');
        if (hash === '#' || hash === '#0') return;

        var target = document.querySelector(hash);
        if (!target) return;

        e.preventDefault();
        var top = target.getBoundingClientRect().top + window.scrollY - headerHeight;
        window.scrollTo({ top: top, behavior: 'smooth' });

        // Update URL without jumping
        if (history.pushState) {
          history.pushState(null, null, hash);
        }
      });
    });
  }

  // ─── Fade-In on Scroll ──────────────────────────────────────
  function initFadeIn() {
    var elements = document.querySelectorAll('.fade-in');
    if (!elements.length) return;

    if ('IntersectionObserver' in window) {
      var observer = new IntersectionObserver(function (entries) {
        entries.forEach(function (entry) {
          if (entry.isIntersecting) {
            entry.target.classList.add('visible');
            observer.unobserve(entry.target);
          }
        });
      }, { threshold: 0.12, rootMargin: '0px 0px -40px 0px' });

      elements.forEach(function (el) {
        observer.observe(el);
      });
    } else {
      // Fallback: just show all
      elements.forEach(function (el) {
        el.classList.add('visible');
      });
    }
  }

  // ─── Form Enhancements ──────────────────────────────────────
  function initFormEnhancements() {
    var form = document.querySelector('.tpc-contact-form');
    if (!form) return;

    form.addEventListener('submit', function (e) {
      e.preventDefault();
      var submitBtn = form.querySelector('[type="submit"]');
      if (submitBtn) {
        var originalText = submitBtn.textContent;
        submitBtn.textContent = 'Sending…';
        submitBtn.disabled = true;

        // Restore after 3s (replace with real form handler)
        setTimeout(function () {
          submitBtn.textContent = originalText;
          submitBtn.disabled = false;
          var msg = form.querySelector('.form-success-msg');
          if (msg) msg.style.display = 'block';
        }, 2000);
      }
    });
  }

})();
