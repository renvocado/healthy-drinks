<?php
require __DIR__.'/../inc/auth.php'; 
require_admin();
require __DIR__.'/../inc/db.php';
require __DIR__.'/../inc/functions.php';

$sort = $_GET['sort'] ?? 'created_desc';
switch ($sort) {
  case 'name_asc':  $order = 'name ASC'; break;
  case 'name_desc': $order = 'name DESC'; break;
  case 'goal_asc':  $order = 'goal ASC, name ASC'; break;
  default:          $order = 'created_at DESC';
}
$rows = $pdo->query("SELECT * FROM recipes ORDER BY $order")->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kelola Resep - Admin Healthy Drinks</title>
    <link rel="stylesheet" href="../assets/style.css">
</head>
<body>
    <div class="container">
        <header class="admin-header">
            <div class="admin-welcome">
                <h1>Kelola Resep</h1>
                <p>Kelola semua resep minuman sehat</p>
            </div>
            <nav class="admin-nav">
                <a href="dashboard.php" class="btn btn-secondary">← Kembali</a>
            </nav>
        </header>

        <div class="admin-toolbar">
            <a href="recipe_form.php" class="btn btn-primary">+ Tambah Resep</a>
            <form method="get" class="sort-form">
                <label>Urutkan:</label>
                <select name="sort" onchange="this.form.submit()" class="sort-select">
                    <option value="created_desc" <?= $sort==='created_desc'?'selected':'' ?>>Terbaru</option>
                    <option value="name_asc"     <?= $sort==='name_asc'?'selected':'' ?>>Nama A→Z</option>
                    <option value="name_desc"    <?= $sort==='name_desc'?'selected':'' ?>>Nama Z→A</option>
                    <option value="goal_asc"     <?= $sort==='goal_asc'?'selected':'' ?>>Goal (A→Z)</option>
                </select>
            </form>
        </div>

        <?php if (!$rows): ?>
            <div class="empty-state">
                <div class="empty-icon">🍹</div>
                <h3>Belum ada resep</h3>
                <p>Mulai dengan menambahkan resep pertama Anda.</p>
                <a href="recipe_form.php" class="btn btn-primary">Tambah Resep</a>
            </div>
        <?php else: ?>
            <div class="table-container">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Gambar</th>
                            <th>Nama Resep</th>
                            <th>Goal</th>
                            <th>Kalori</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($rows as $r): 
                            $img = $r['image'];
                            if ($img && !preg_match('#^https?://#', $img)) {
                                $img = '../' . ltrim($img, '/');
                            }
                        ?>
                        <tr>
                            <td>
                                <img src="<?= h($img) ?>" alt="<?= h($r['name']) ?>" class="table-thumb">
                            </td>
                            <td>
                                <strong><?= h($r['name']) ?></strong>
                                <div class="table-meta"><?= h($r['serving_desc']) ?></div>
                            </td>
                            <td>
                                <span class="goal-badge goal-<?= h($r['goal']) ?>"><?= strtoupper(h($r['goal'])) ?></span>
                            </td>
                            <td><?= (int)$r['cal_per_serv'] ?> kkal</td>
                            <td>
                                <div class="action-buttons">
                                    <a class="btn btn-sm btn-secondary" href="recipe_form.php?id=<?= (int)$r['id'] ?>">Edit</a>
                                    <a class="btn btn-sm btn-danger" href="delete_recipe.php?id=<?= (int)$r['id'] ?>" onclick="return confirm('Hapus resep ini?')">Hapus</a>
                                </div>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        <?php endif; ?>
    </div>
</body>
</html>