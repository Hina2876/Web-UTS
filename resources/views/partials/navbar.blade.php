{{-- resources/views/partials/navbar.blade.php --}}

{{-- ── Progress bar baca halaman ── --}}
<div class="nav-progress" id="navProgress"></div>

<nav id="navbar">

  {{-- Logo --}}
  <a class="nav-logo" href="{{ url('/') }}" aria-label="Dapoer Pipin - Beranda">
    <div class="nav-logo-mark">
      <img src="{{ asset('images/icon_header.png') }}" alt="Dapoer Pipin">
    </div>
    <div class="nav-logo-text">
      Dapoer <span>Pipin</span>
    </div>
  </a>

  {{-- ── Pill Navigation (Smart TOC) ── --}}
  <div class="nav-pill-wrap" role="navigation" aria-label="Menu Utama">
    <ul class="nav-pill" id="navPill">
      <li><a href="{{ url('/') }}" data-section="hero"    class="nav-pill-link active">Home</a></li>
      <li><a href="#about"         data-section="about"   class="nav-pill-link">Tentang</a></li>
      <li><a href="#menu"          data-section="menu"    class="nav-pill-link">Menu</a></li>
      <li><a href="#contact"       data-section="contact" class="nav-pill-link">Kontak</a></li>
      {{-- Cursor geser (framer-motion style — pure CSS/JS) --}}
      <li class="nav-pill-cursor" id="navCursor" aria-hidden="true"></li>
    </ul>
  </div>

  {{-- CTA + Burger --}}
  <div class="nav-right">
    <button class="burger" id="burger" aria-label="Buka Menu" aria-expanded="false" aria-controls="mobileNav">
      <span></span><span></span><span></span>
    </button>
  </div>

</nav>

{{-- ── Mobile Drawer ── --}}
<div class="mobile-menu-overlay" id="mobileOverlay" aria-hidden="true"></div>

<div class="mobile-nav" id="mobileNav" aria-hidden="true" role="navigation" aria-label="Menu Mobile">
  <div class="mobile-nav-header">
    <div class="mobile-nav-brand">
      <div class="nav-logo-mark small">
        <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M18.06 22.99h1.66c.84 0 1.53-.64 1.63-1.46L23 5.05h-5V1h-1.97v4.05h-4.97l.3 2.34c1.71.47 3.31 1.32 4.27 2.26 1.44 1.42 2.43 2.89 2.43 5.29v8.05zM1 21.99V21h15.03v.99c0 .55-.45 1-1.01 1H2.01c-.56 0-1.01-.45-1.01-1zm15.03-7c0-3.87-3.38-7-7.52-7-4.14 0-7.51 3.13-7.51 7h15.03zM3 11h8v2H3v-2z"/></svg>
      </div>
      <span>Dapoer <strong>Pipin</strong></span>
    </div>
    <button class="mobile-nav-close" id="mobileClose" aria-label="Tutup Menu">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M18 6L6 18M6 6l12 12"/></svg>
    </button>
  </div>

  <ul class="mobile-nav-links">
    <li><a href="{{ url('/') }}"  data-section="hero">    <span class="mobile-nav-num">01</span> Home</a></li>
    <li><a href="#about"          data-section="about">   <span class="mobile-nav-num">02</span> Tentang Kami</a></li>
    <li><a href="#menu"           data-section="menu">    <span class="mobile-nav-num">03</span> Menu</a></li>
    <li><a href="#service"        data-section="service"> <span class="mobile-nav-num">04</span> Layanan</a></li>
    <li><a href="#contact"        data-section="contact"> <span class="mobile-nav-num">05</span> Kontak</a></li>
  </ul>

  <a href="https://wa.me/6285609145305?text=Halo%20Dapoer%20Pipin%2C%20saya%20ingin%20memesan"
     class="mobile-nav-wa" target="_blank" rel="noopener noreferrer">
    <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
    Chat di WhatsApp
  </a>
</div>