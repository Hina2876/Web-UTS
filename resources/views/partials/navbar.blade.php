{{-- resources/views/partials/navbar.blade.php --}}
<nav id="navbar">
  <a class="nav-logo" href="{{ url('/') }}">
    <div class="dot">
      <svg viewBox="0 0 24 24"><path d="M18.06 22.99h1.66c.84 0 1.53-.64 1.63-1.46L23 5.05h-5V1h-1.97v4.05h-4.97l.3 2.34c1.71.47 3.31 1.32 4.27 2.26 1.44 1.42 2.43 2.89 2.43 5.29v8.05zM1 21.99V21h15.03v.99c0 .55-.45 1-1.01 1H2.01c-.56 0-1.01-.45-1.01-1zm15.03-7c0-3.87-3.38-7-7.52-7-4.14 0-7.51 3.13-7.51 7h15.03zM3 11h8v2H3v-2z"/></svg>
    </div>
    <span>Dapoer Pipin</span>
  </a>

  <a href="#menu" class="nav-cta">Lihat Produk</a>

  <button class="burger" id="burger" aria-label="Buka Menu" aria-expanded="false" aria-controls="navLinks">
    <span></span>
    <span></span>
    <span></span>
  </button>
</nav>

{{-- Mobile menu dikeluarkan dari <nav> agar tidak ikut fixed dan tidak melayang --}}
<div class="mobile-menu-overlay" id="mobileOverlay" aria-hidden="true"></div>
<ul class="nav-links" id="navLinks" role="navigation" aria-label="Menu Utama">
  <li><a href="{{ url('/') }}">Home</a></li>
  <li><a href="#about">Tentang</a></li>
  <li><a href="#menu">Menu</a></li>
  <li><a href="#contact">Kontak</a></li>
</ul>
