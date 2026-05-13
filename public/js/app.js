/* public/js/app.js — Dapoer Pipin */

document.addEventListener('DOMContentLoaded', () => {

  /* ================================================================
     NAVBAR SCROLL EFFECT
     ================================================================ */
  const nav = document.getElementById('navbar');
  window.addEventListener('scroll', () => {
    nav.classList.toggle('scrolled', window.scrollY > 20);
  }, { passive: true });

  /* ================================================================
     READING PROGRESS BAR
     ================================================================ */
  const progressBar = document.getElementById('navProgress');
  if (progressBar) {
    window.addEventListener('scroll', () => {
      const docH   = document.documentElement.scrollHeight - window.innerHeight;
      const pct    = docH > 0 ? (window.scrollY / docH) * 100 : 0;
      progressBar.style.width = pct + '%';
    }, { passive: true });
  }

  /* ================================================================
     PILL NAV — CURSOR SLIDER (framer-motion style, pure JS)
     ================================================================ */
  const pillLinks  = document.querySelectorAll('.nav-pill-link');
  const cursor     = document.getElementById('navCursor');
  const pill       = document.getElementById('navPill');

  function moveCursorTo(el) {
    if (!cursor || !pill || !el) return;
    const pillRect = pill.getBoundingClientRect();
    const elRect   = el.getBoundingClientRect();
    const innerH   = pill.clientHeight - 10; // padding 5px top+bottom

    cursor.style.opacity = '1';
    cursor.style.height  = innerH + 'px';
    cursor.style.left    = (elRect.left - pillRect.left) + 'px';
    cursor.style.width   = elRect.width + 'px';
  }

  function hideCursor() {
    // Kursor tetap di posisi active, tidak hilang saat mouse leave
    const activeLink = document.querySelector('.nav-pill-link.active');
    if (activeLink) moveCursorTo(activeLink);
  }

  // Hover: geser cursor ke link yang di-hover
  pillLinks.forEach(link => {
    link.addEventListener('mouseenter', () => moveCursorTo(link));
  });

  // Mouse leave pill: kembalikan ke active
  pill && pill.addEventListener('mouseleave', hideCursor);

  // Init cursor di posisi active
  const initActive = document.querySelector('.nav-pill-link.active');
  if (initActive) {
    // Tunggu setelah render agar getBoundingClientRect akurat
    requestAnimationFrame(() => {
      cursor && (cursor.style.transition = 'none');
      moveCursorTo(initActive);
      requestAnimationFrame(() => {
        if (cursor) cursor.style.transition = '';
      });
    });
  }

  /* ================================================================
     SMART TOC — IntersectionObserver (active link saat scroll)
     ================================================================ */
  const sections     = document.querySelectorAll('section[id], .hero');
  const allNavLinks  = document.querySelectorAll('.nav-pill-link, .mobile-nav-links a');

  // Map section id → nav link href
  // .hero tidak punya id; diberi data-section="hero" di link
  function setActiveLink(sectionId) {
    allNavLinks.forEach(link => {
      const target = link.dataset.section || link.getAttribute('href')?.replace('#', '');
      const isActive = (target === sectionId) ||
                       (sectionId === '' && target === 'hero'); // hero = home

      link.classList.toggle('active', isActive);
    });

    // Pindahkan pill cursor ke active link
    const activeLink = document.querySelector('.nav-pill-link.active');
    if (activeLink) moveCursorTo(activeLink);
  }

  // Gunakan rootMargin agar trigger saat section masuk ~30% dari atas
  const tocObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        const id = entry.target.id || 'hero';
        setActiveLink(id);
      }
    });
  }, {
    rootMargin: '-25% 0px -60% 0px',
    threshold: 0
  });

  // Observe semua section + .hero
  sections.forEach(s => tocObserver.observe(s));
  const heroEl = document.querySelector('.hero');
  if (heroEl && !heroEl.id) tocObserver.observe(heroEl);

  /* ================================================================
     BURGER MENU — MOBILE DRAWER
     ================================================================ */
  const burger      = document.getElementById('burger');
  const mobileNav   = document.getElementById('mobileNav');
  const overlay     = document.getElementById('mobileOverlay');
  const closeBtn    = document.getElementById('mobileClose');

  function openMenu() {
    mobileNav?.classList.add('open');
    overlay?.classList.add('active');
    burger?.classList.add('open');
    burger?.setAttribute('aria-expanded', 'true');
    mobileNav?.setAttribute('aria-hidden', 'false');
    document.body.style.overflow = 'hidden';
  }

  function closeMenu() {
    mobileNav?.classList.remove('open');
    overlay?.classList.remove('active');
    burger?.classList.remove('open');
    burger?.setAttribute('aria-expanded', 'false');
    mobileNav?.setAttribute('aria-hidden', 'true');
    document.body.style.overflow = '';
  }

  burger?.addEventListener('click', () => {
    mobileNav?.classList.contains('open') ? closeMenu() : openMenu();
  });
  overlay?.addEventListener('click', closeMenu);
  closeBtn?.addEventListener('click', closeMenu);

  // Tutup saat klik link mobile
  document.querySelectorAll('.mobile-nav-links a, .mobile-nav-wa').forEach(a => {
    a.addEventListener('click', closeMenu);
  });

  document.addEventListener('keydown', e => {
    if (e.key === 'Escape') closeMenu();
  });

  /* ================================================================
     REVEAL ON SCROLL
     ================================================================ */
  const reveals = document.querySelectorAll('.reveal');
  const revealObserver = new IntersectionObserver((entries) => {
    entries.forEach((entry, i) => {
      if (entry.isIntersecting) {
        setTimeout(() => entry.target.classList.add('visible'), i * 60);
        revealObserver.unobserve(entry.target);
      }
    });
  }, { threshold: 0.1 });

  reveals.forEach(el => revealObserver.observe(el));

  /* ================================================================
     RECALCULATE PILL CURSOR ON RESIZE
     ================================================================ */
  let resizeTimer;
  window.addEventListener('resize', () => {
    clearTimeout(resizeTimer);
    resizeTimer = setTimeout(() => {
      const activeLink = document.querySelector('.nav-pill-link.active');
      if (activeLink && cursor) {
        cursor.style.transition = 'none';
        moveCursorTo(activeLink);
        requestAnimationFrame(() => { cursor.style.transition = ''; });
      }
    }, 120);
  });

});

/* ================================================================
   ORDER VIA WHATSAPP
   ================================================================ */
function pesan(item) {
  const msg = encodeURIComponent(
    `Halo Dapoer Pipin! Saya ingin memesan *${item}*. Bisa diinfokan ketersediaan dan harganya?`
  );
  window.open(`https://wa.me/6281377573903?text=${msg}`, '_blank');
}