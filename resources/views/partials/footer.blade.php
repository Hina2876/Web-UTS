{{-- resources/views/partials/footer.blade.php --}}
<footer>

  {{-- Decorative floating rings (selaras dengan contact section) --}}
  <div class="footer-ring footer-ring-1"></div>
  <div class="footer-ring footer-ring-2"></div>
  <div class="footer-ring footer-ring-3"></div>

  <div class="footer-top">
    <div class="footer-brand">
      <span class="footer-chip">Pempek Khas Palembang</span>
      <div class="logo-text">Dapoer <span>Pipin</span></div>
      <p>Menyajikan aneka pempek autentik dengan bahan segar dan cuko rumahan khas untuk keluarga di Palembang dan sekitarnya.</p>
      <div class="footer-socials">
        <a href="https://wa.me/6281377573903" class="social-btn" target="_blank" rel="noopener noreferrer" aria-label="WhatsApp">
          <img src="{{ asset('images/whatsapp.png') }}" alt="WA" width="18" height="18">
        </a>
        <a href="https://www.facebook.com/Pipinumisahirah" class="social-btn" target="_blank" rel="noopener noreferrer" aria-label="Facebook">
          <img src="{{ asset('images/facebook.png') }}" alt="FB" width="18" height="18">
        </a>
      </div>
    </div>

    <div class="footer-links">
      <h4>Menu Cepat</h4>
      <a href="{{ url('/') }}">Beranda</a>
      <a href="#about">Tentang Kami</a>
      <a href="#menu">Produk Kami</a>
      <a href="#contact">Kontak</a>
    </div>
  </div>

  <div class="footer-bottom">
    <p>© {{ date('Y') }} Dapoer Pipin. Semua hak dilindungi.</p>
  </div>

</footer>