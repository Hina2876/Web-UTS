{{-- resources/views/partials/contact.blade.php --}}
<section id="contact">

  {{-- Decorative floating rings --}}
  <div class="contact-ring contact-ring-1"></div>
  <div class="contact-ring contact-ring-2"></div>
  <div class="contact-ring contact-ring-3"></div>

  <div class="section-tag reveal">Hubungi Kami</div>
  <h2 class="section-title reveal">Pesan Pempek <em>Lebih Mudah</em></h2>
  <p class="section-sub reveal">Untuk pemesanan harian, acara keluarga, atau pertanyaan seputar produk.</p>

  <div class="contact-inner">

    {{-- ── Info Card (kiri) ─────────────────────────────────── --}}
    <div class="contact-info-card reveal">

      <p class="contact-info-card-title">Informasi Kontak</p>

      <div class="contact-item">
        <div class="contact-ic">
          <img src="{{ asset('images/map.png') }}" alt="Lokasi" width="24" height="24">
        </div>
        <div class="contact-text-wrap">
          <h4>Lokasi</h4>
          <p>Perum Griya Sejahtera II Blok D No. 09<br>RT.02 RW.05</p>
        </div>
      </div>

      <div class="contact-item">
        <div class="contact-ic">
          <img src="{{ asset('images/whatsapp.png') }}" alt="WhatsApp" width="24" height="24">
        </div>
        <div class="contact-text-wrap">
          <h4>Telepon / WhatsApp</h4>
          <p>0856 0914 5305</p>
        </div>
      </div>

      {{-- Tombol social cepat --}}
      <div class="contact-social-row">
        <a href="https://wa.me/6285609145305"
           class="contact-social-btn"
           target="_blank" rel="noopener noreferrer">
          <img src="{{ asset('images/whatsapp.png') }}" alt="" width="16" height="16">
          WhatsApp
        </a>
      </div>

    </div>{{-- /contact-info-card --}}

    {{-- ── CTA Panel (kanan) ────────────────────────────────── --}}
    <div class="contact-cta-panel reveal">
     {{-- Peta --}}
<div class="contact-map-wrap">
  <p class="contact-map-label">Temukan Kami</p>
  <div class="contact-map-embed">
    <iframe
      src="https://maps.google.com/maps?q=-3.4103806,104.2718396&z=18&output=embed"
      width="600"
      height="450"
      style="border:0;"
      allowfullscreen=""
      loading="lazy"
      referrerpolicy="no-referrer-when-downgrade">
    </iframe>
    <div class="contact-map-badge">
      <span></span>
      Dapoer Pipin
    </div>
  </div>
</div>

    </div>{{-- /contact-cta-panel --}}

  </div>{{-- /contact-inner --}}
</section>