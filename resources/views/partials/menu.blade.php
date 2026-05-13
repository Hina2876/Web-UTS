{{-- resources/views/partials/menu.blade.php --}}
<section id="menu">

  <div class="menu-header">
    <div class="section-tag reveal">Produk Kami</div>
    <h2 class="section-title reveal">Aneka <em>Pempek</em></h2>
    <p class="section-sub reveal">
      Pilihan pempek khas kami dibuat dari ikan segar, bumbu autentik,
      dan cuko rumahan yang nikmat.
    </p>
  </div>

  <div class="menu-grid">

    <div class="menu-card reveal">
      <div class="menu-img">
        <img src="{{ asset('images/pempek-telur.jpeg') }}" alt="Pempek Telur" loading="lazy">
        <div class="menu-img-overlay" aria-hidden="true"></div>
        <span class="menu-badge">Favorit</span>
      </div>
      <div class="menu-body">
        <h3>Pempek Telur</h3>
        <p>Pempek isi telur yang lembut di dalam, dipadukan cuko segar dengan rasa pedas manis seimbang.</p>
      </div>
    </div>

    <div class="menu-card reveal">
      <div class="menu-img">
        <img src="{{ asset('images/lenjer-kecil.jpeg') }}" alt="Pempek Lenjer Kecil" loading="lazy">
        <div class="menu-img-overlay" aria-hidden="true"></div>
      </div>
      <div class="menu-body">
        <h3>Pempek Lenjer Kecil</h3>
        <p>Lenjer ukuran kecil yang praktis, cocok untuk camilan keluarga atau suguhan saat acara.</p>
      </div>
    </div>

    <div class="menu-card reveal">
      <div class="menu-img">
        <img src="{{ asset('images/pempek-kulit.jpeg') }}" alt="Pempek Kulit" loading="lazy">
        <div class="menu-img-overlay" aria-hidden="true"></div>
      </div>
      <div class="menu-body">
        <h3>Pempek Kulit</h3>
        <p>Dari campuran ikan dan kulit ikan pilihan, menghadirkan rasa gurih yang lebih kaya dan unik.</p>
      </div>
    </div>

    <div class="menu-card reveal">
      <div class="menu-img">
        <img src="{{ asset('images/pempek-adaan.jpeg') }}" alt="Pempek Adaan" loading="lazy">
        <div class="menu-img-overlay" aria-hidden="true"></div>
      </div>
      <div class="menu-body">
        <h3>Pempek Adaan</h3>
        <p>Pempek bulat dengan aroma bawang yang khas, lembut dan gurih saat disajikan hangat.</p>
      </div>
    </div>

  </div>
</section>