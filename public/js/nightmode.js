/* public/js/nightmode.js — Dapoer Pipin: Smart Auto Night Mode
   ─────────────────────────────────────────────────────────────────
   Logika:
   - Jam 18:00 – 23:59  →  night mode ON
   - Jam 00:00 – 06:00  →  night mode ON  (dini hari)
   - Jam 06:01 – 17:59  →  night mode OFF (siang hari)

   Class .night-mode ditambah/hapus di <body>.
   Dicek setiap menit agar transisi terjadi tepat waktu.
   Tidak ada toggle, tidak ada localStorage — murni waktu lokal.
   ──────────────────────────────────────────────────────────────── */

(function () {
  'use strict';

  /**
   * Kembalikan true jika sekarang termasuk jam malam (18:00–06:00).
   */
  function isNightTime() {
    const hour = new Date().getHours(); // 0–23 waktu lokal user
    return hour >= 18 || hour < 6;
  }

  /**
   * Terapkan atau cabut class .night-mode pada <body>.
   * Transisi CSS (1.2s ease) yang akan menganimasikan perubahannya.
   */
  function applyNightMode() {
    if (isNightTime()) {
      document.body.classList.add('night-mode');
    } else {
      document.body.classList.remove('night-mode');
    }
  }

  /**
   * Hitung berapa milidetik sampai menit berikutnya,
   * supaya pengecekan berjalan tepat di pergantian menit, bukan drift.
   */
  function msUntilNextMinute() {
    const now  = new Date();
    const secs = now.getSeconds();
    const ms   = now.getMilliseconds();
    return (60 - secs) * 1000 - ms;
  }

  /**
   * Jalankan applyNightMode() sekarang, lalu jadwalkan ulang
   * tepat di awal setiap menit berikutnya.
   */
  function scheduleCheck() {
    applyNightMode();

    // Tunggu sampai menit berikutnya, lalu pakai setInterval 60s
    setTimeout(function () {
      applyNightMode();
      setInterval(applyNightMode, 60 * 1000);
    }, msUntilNextMinute());
  }

  // Jalankan segera saat DOM siap
  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', scheduleCheck);
  } else {
    // DOM sudah siap (script dipasang di bawah body)
    scheduleCheck();
  }

})();