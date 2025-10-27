<?php
require __DIR__.'/inc/db.php'; 
require __DIR__.'/inc/functions.php';
require __DIR__.'/inc/header.php';

$id = (int)($_GET['id'] ?? 0);
$recipe = find_recipe($pdo, $id);
if (!$recipe) die("Resep tidak ditemukan.");

$serv = max(1, (int)($_GET['serv'] ?? 1));
$total = calories_for_servings($recipe['cal_per_serv'], $serv);

// ambil goal dari URL; kalau tak ada, pakai goal resep
$goalParam = $_GET['goal'] ?? ($recipe['goal'] ?? 'detox');
$backUrl   = "recommend.php?goal=" . urlencode($goalParam);

// Tentukan ikon berdasarkan goal
$goalIcons = [
    'detox' => '🌿',
    'energy' => '⚡', 
    'diet' => '🥗',
    'relax' => '😌'
];
$goalIcon = $goalIcons[$goalParam] ?? '🍹';
?>

<main class="container">
  <div class="recipe-header">
    <div class="back-nav">
      <a href="<?= $backUrl ?>" class="btn-back">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M19 12H5M12 19L5 12L12 5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
        Kembali ke <?= ucfirst($goalParam) ?>
      </a>
    </div>
  </div>

  <div class="recipe-detail">
    <div class="recipe-image-section">
      <div class="recipe-image-container">
        <img src="<?= h($recipe['image']) ?>" alt="<?= h($recipe['name']) ?>" class="recipe-image">
        <div class="recipe-badge">
          <span class="badge-icon"><?= $goalIcon ?></span>
          <?= strtoupper($goalParam) ?>
        </div>
      </div>
      
      <div class="recipe-meta">
        <div class="meta-item">
          <div class="meta-icon">🥄</div>
          <div class="meta-content">
            <span class="meta-label">Porsi</span>
            <span class="meta-value"><?= h($recipe['serving_desc']) ?></span>
          </div>
        </div>
        
        <div class="meta-item">
          <div class="meta-icon">🔥</div>
          <div class="meta-content">
            <span class="meta-label">Kalori per Porsi</span>
            <span class="meta-value"><?= (int)$recipe['cal_per_serv'] ?> kkal</span>
          </div>
        </div>
      </div>
    </div>

    <div class="recipe-content">
      <div class="recipe-title-section">
        <h1 class="recipe-title"><?= h($recipe['name']) ?></h1>
        <p class="recipe-description">Resep sehat dan menyegarkan untuk tujuan <?= $goalParam ?> Anda.</p>
      </div>

      <div class="calculator-card">
        <h3 class="calculator-title">Kalkulator Porsi</h3>
        <form class="calculator-form" method="get">
          <input type="hidden" name="id" value="<?= (int)$recipe['id'] ?>">
          <div class="calculator-inputs">
            <div class="input-group">
              <label class="input-label">Jumlah Porsi</label>
              <input type="number" min="1" max="10" name="serv" value="<?= $serv ?>" class="serving-input">
            </div>
            <button type="submit" class="btn btn-primary calculator-btn">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M9 7H15C16.1046 7 17 7.89543 17 9V15C17 16.1046 16.1046 17 15 17H9C7.89543 17 7 16.1046 7 15V9C7 7.89543 7.89543 7 9 7Z" stroke="currentColor" stroke-width="2"/>
                <path d="M14 10L10 14M10 10L14 14" stroke="currentColor" stroke-width="2"/>
              </svg>
              Hitung
            </button>
          </div>
        </form>
        
        <div class="total-calories">
          <div class="total-label">Total Kalori</div>
          <div class="total-value"><?= (int)$total ?> kkal</div>
        </div>
      </div>

      <div class="ingredients-section">
        <div class="section-header">
          <h2 class="section-title">Bahan-bahan</h2>
          <div class="section-icon">🥬</div>
        </div>
        <ul class="ingredients-list">
          <?php foreach($recipe['ingredients'] as $i): ?>
            <li class="ingredient-item">
              <span class="ingredient-bullet">•</span>
              <span class="ingredient-text"><?= h($i) ?></span>
            </li>
          <?php endforeach; ?>
        </ul>
      </div>

      <div class="steps-section">
  <div class="section-header">
    <h2 class="section-title">Langkah Pembuatan</h2>
    <div class="section-icon">👩‍🍳</div>
  </div>
  <ul class="steps-list">
    <?php foreach($recipe['steps'] as $step): ?>
      <li class="step-item">
        <span class="step-bullet">•</span>
        <div class="step-content"><?= h($step['content']) ?></div>
      </li>
    <?php endforeach; ?>
  </ul>
</div>
    </div>
  </div>
</main>

<?php require __DIR__.'/inc/footer.php'; ?>