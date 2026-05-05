/* public/js/app.js */

document.addEventListener('DOMContentLoaded', () => {

  /* ── NAVBAR SCROLL EFFECT ── */
  const nav = document.getElementById('navbar');
  window.addEventListener('scroll', () => {
    nav.classList.toggle('scrolled', window.scrollY > 20);
  }, { passive: true });

  /* ── BURGER MENU ── */
  const burger       = document.getElementById('burger');
  const navLinks     = document.getElementById('navLinks');
  const overlay      = document.getElementById('mobileOverlay');

  function openMenu() {
    navLinks.classList.add('open');
    overlay.classList.add('active');
    burger.classList.add('open');
    burger.setAttribute('aria-expanded', 'true');
    navLinks.setAttribute('aria-hidden', 'false');
    document.body.style.overflow = 'hidden'; // cegah scroll background
  }

  function closeMenu() {
    navLinks.classList.remove('open');
    overlay.classList.remove('active');
    burger.classList.remove('open');
    burger.setAttribute('aria-expanded', 'false');
    navLinks.setAttribute('aria-hidden', 'true');
    document.body.style.overflow = '';
  }

  burger.addEventListener('click', () => {
    navLinks.classList.contains('open') ? closeMenu() : openMenu();
  });

  // Tutup saat klik overlay
  overlay.addEventListener('click', closeMenu);

  // Tutup saat klik link navigasi
  navLinks.querySelectorAll('a').forEach(a => {
    a.addEventListener('click', closeMenu);
  });

  // Tutup saat tekan Escape
  document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape') closeMenu();
  });

  /* ── REVEAL ON SCROLL ── */
  const reveals = document.querySelectorAll('.reveal');
  const revealObserver = new IntersectionObserver((entries) => {
    entries.forEach((entry, i) => {
      if (entry.isIntersecting) {
        setTimeout(() => entry.target.classList.add('visible'), i * 60);
        revealObserver.unobserve(entry.target);
      }
    });
  }, { threshold: 0.12 });

  reveals.forEach(el => revealObserver.observe(el));

});

/* ── ORDER VIA WHATSAPP ── */
function pesan(item) {
  const msg = encodeURIComponent(
    `Halo Dapoer Pipin! Saya ingin memesan *${item}*. Bisa diinfokan ketersediaan dan pengiriman?`
  );
  window.open(`https://wa.me/62812xxxx?text=${msg}`, '_blank');
}
