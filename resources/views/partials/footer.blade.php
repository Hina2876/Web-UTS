{{-- resources/views/partials/footer.blade.php --}}
<footer>
  <div class="footer-top">
    <div class="footer-brand">
      <span class="footer-chip">Pempek Khas Palembang</span>
      <div class="logo-text">Dapoer <span>Pipin</span></div>
      <p>Menyajikan aneka pempek autentik dengan bahan segar dan cuko rumahan khas untuk keluarga di Palembang dan sekitarnya.</p>
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
    <p>Dibuat untuk pecinta pempek di Prabumulih</p>
  </div>
</footer>
