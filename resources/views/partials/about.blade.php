{{-- resources/views/partials/about.blade.php --}}
<section id="about">

  <div class="about-ring about-ring-1" aria-hidden="true"></div>
  <div class="about-ring about-ring-2" aria-hidden="true"></div>

  <div class="about-inner">

    {{-- KOLOM KIRI — teks ─────────────────────────────────────────── --}}
    <div class="about-text-col reveal">

      <div class="section-tag">Tentang Kami</div>

      <h2 class="section-title">
        Rasa Asli Pempek,<br>
        <em>Kualitas Terjaga</em>
      </h2>

      <p class="section-sub" style="text-align:left; margin-left:0; max-width:480px;">
        Dapoer Pipin adalah usaha kuliner rumahan yang hadir sejak 2020 di Prabumulih.
        Kami berkomitmen menyajikan aneka pempek dengan bahan segar, proses higienis,
        dan cuko khas rumahan agar setiap gigitan terasa autentik.
      </p>

      <div class="about-features">

        <div class="feature-item">
          <img src="{{ asset('images/fish.png') }}" alt="Ikan">
          <div class="feature-body">
            <h4>Ikan Segar Pilihan</h4>
            <p>Bahan baku segar setiap hari agar rasa pempek tetap gurih dan konsisten.</p>
          </div>
        </div>

        <div class="feature-item">
          <img src="{{ asset('images/cooking.png') }}" alt="Resep">
          <div class="feature-body">
            <h4>Racikan Resep Keluarga</h4>
            <p>Adonan khas keluarga menghasilkan tekstur lembut dan cita rasa yang unik.</p>
          </div>
        </div>

        <div class="feature-item">
          <img src="{{ asset('images/package.png') }}" alt="Pack">
          <div class="feature-body">
            <h4>Pengemasan Aman & Rapi</h4>
            <p>Dikemas higienis supaya tetap segar, aman dibawa, dan siap dinikmati kapan saja.</p>
          </div>
        </div>

      </div>
    </div>


    {{-- KOLOM KANAN — grid foto diced ──────────────────────────────── --}}
    <div class="about-img-col reveal">

      {{-- Grid 2×2 dengan efek mask --}}
      <div class="about-diced-grid">

        {{-- Sel 1: kiri atas --}}
        <div class="diced-cell">
        
          <div class="diced-label">Kapal Selam</div>
        </div>

        {{-- Sel 2: kanan atas --}}
        <div class="diced-cell">
         
          <div class="diced-label">Lenjer</div>
        </div>

        {{-- Sel 3: kiri bawah --}}
        <div class="diced-cell">
          
          <div class="diced-label">Adaan</div>
        </div>

        {{-- Sel 4: kanan bawah --}}
        <div class="diced-cell">
          
          <div class="diced-label">Cuko Khas</div>
        </div>

      </div>{{-- /.about-diced-grid --}}

    </div>{{-- /.about-img-col --}}

  </div>{{-- /.about-inner --}}

</section>