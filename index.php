<?php 
require __DIR__.'/inc/db.php'; 
require __DIR__.'/inc/functions.php'; 
require __DIR__.'/inc/header.php'; 
?>

<main class="container">
  <div class="hero-section">
    <div class="hero-content">
      <h2>Minuman sehat, mood oke, hidup asik ✨</h2>
      <p>Nikmati berbagai resep jus dan smoothie sehat untuk berbagai kebutuhan. Tanpa login untuk pengguna. Admin bisa login untuk kelola resep.</p>
      <div class="hero-actions">
        <a class="btn btn-primary" href="login.php">Login Admin</a>
        <a class="btn btn-secondary" href="recommend.php?all=1">Lihat Semua Resep</a>
      </div>
    </div>
  </div>

  <section class="featured-section">
    <h3>Pilih Tujuan Kesehatan Anda</h3>
    <div class="goals-grid">
      <a href="recommend.php?goal=detox" class="goal-card" data-aos="fade-up">
        <div class="goal-icon">🌿</div>
        <h4>Detox</h4>
        <p>Bersihkan tubuh dari racun</p>
      </a>
      <a href="recommend.php?goal=energy" class="goal-card" data-aos="fade-up" data-aos-delay="100">
        <div class="goal-icon">⚡</div>
        <h4>Energy</h4>
        <p>Tingkatkan energi harian</p>
      </a>
      <a href="recommend.php?goal=diet" class="goal-card" data-aos="fade-up" data-aos-delay="200">
        <div class="goal-icon">🥗</div>
        <h4>Diet</h4>
        <p>Bantu program penurunan berat badan</p>
      </a>
      <a href="recommend.php?goal=relax" class="goal-card" data-aos="fade-up" data-aos-delay="300">
        <div class="goal-icon">😌</div>
        <h4>Relax</h4>
        <p>Tenangkan pikiran dan tubuh</p>
      </a>
    </div>
  </section>
</main>

<?php require __DIR__.'/inc/footer.php'; ?>