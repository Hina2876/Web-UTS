{{-- resources/views/partials/hero.blade.php --}}

{{-- ── Dekorasi ring ── --}}
<div class="hero-ring hero-ring-1" aria-hidden="true"></div>
<div class="hero-ring hero-ring-2" aria-hidden="true"></div>
<div class="hero-ring hero-ring-3" aria-hidden="true"></div>

<div class="hero">

  {{-- KOLOM TEKS ─────────────────────────────────────────────────── --}}
  <div class="hero-text">

    <div class="hero-eyebrow">
      <span class="dot"></span>
      Spesialis Aneka Pempek Palembang
    </div>

    <h1>
      Pempek Premium<br>
      <em>Rasa Otentik</em>
    </h1>

    <p class="hero-sub">
      Dapoer Pipin menghadirkan aneka pempek khas dengan bahan segar,
      racikan resep keluarga, dan cuko rumahan yang seimbang untuk menemani
      momen makan Anda setiap hari.
    </p>

    <div class="hero-pills">
      <span class="pill">
      <img src="{{ asset('images/fish.png') }}" alt="Ikan">  
      Ikan Segar Pilihan
    </span>
      <span class="pill">
        <img src="{{ asset('images/chili.png') }}" alt="Spicy">
        Cuko Khas Rumahan
      </span>
      <span class="pill">
      <img src="{{ asset('images/leaf.png') }}" alt="Leaf">  
      Fresh Setiap Hari
      </span>
    </div>

    <div class="hero-btns">
      <a href="#menu" class="btn-primary">
        <svg viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
          <path d="M3 4a1 1 0 011-1h12a1 1 0 011 1v2a1 1 0 01-.293.707L13 10.414V17a1 1 0 01-.553.894l-4 2A1 1 0 017 19v-8.586L3.293 6.707A1 1 0 013 6V4z"/>
        </svg>
        Lihat Menu
      </a>
      <a href="#contact" class="btn-secondary">Hubungi Kami →</a>
    </div>
  </div>{{-- /.hero-text --}}

  {{-- KOLOM VISUAL ───────────────────────────────────────────────── --}}
  <div class="hero-visual">

    {{-- Gambar utama --}}
    <div class="hero-img-wrap">
      <img
        src="{{ asset('images/main.jpeg') }}"
        alt="Pempek segar khas Dapoer Pipin Prabumulih"
        loading="eager"
      >
      <div class="hero-img-overlay" aria-hidden="true"></div>
    </div>

  </div>{{-- /.hero-visual --}}

</div>{{-- /.hero --}}
</div>