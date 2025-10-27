<?php
require __DIR__.'/../inc/auth.php'; 
require_admin();
require __DIR__.'/../inc/db.php';

$msg = $err = "";
if ($_SERVER['REQUEST_METHOD']==='POST'){
  $old = $_POST['old'] ?? '';
  $new = $_POST['new'] ?? '';
  $rep = $_POST['re']  ?? '';

  if (strlen($new) < 6) {
    $err = "Password minimal 6 karakter.";
  } elseif ($new !== $rep) {
    $err = "Konfirmasi password tidak sama.";
  } else {
    $stmt = $pdo->prepare("SELECT * FROM admins WHERE id=?");
    $stmt->execute([$_SESSION['admin_id']]);
    $me = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$me || !password_verify($old, $me['password_hash'])) {
      $err = "Password lama salah.";
    } else {
      $upd = $pdo->prepare("UPDATE admins SET password_hash=? WHERE id=?");
      $upd->execute([password_hash($new, PASSWORD_DEFAULT), $_SESSION['admin_id']]);
      $msg = "Password berhasil diganti ✅";
    }
  }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ganti Password - Admin HealthyBite</title>
    <link rel="stylesheet" href="../assets/style.css">
</head>
<body>
    <div class="container">
        <header class="admin-header">
            <div class="admin-welcome">
                <h1>Ganti Password</h1>
                <p>Ubah password akun administrator</p>
            </div>
            <nav class="admin-nav">
                <a href="dashboard.php" class="btn btn-secondary">Kembali</a>
            </nav>
        </header>

        <div class="form-container">
            <?php if($msg): ?>
                <div class="alert alert-success">
                    <div class="alert-icon">✅</div>
                    <div class="alert-content">
                        <strong>Berhasil!</strong>
                        <p><?= htmlspecialchars($msg) ?></p>
                    </div>
                </div>
            <?php endif; ?>

            <?php if($err): ?>
                <div class="alert alert-error">
                    <div class="alert-icon">⚠️</div>
                    <div class="alert-content">
                        <strong>Error</strong>
                        <p><?= htmlspecialchars($err) ?></p>
                    </div>
                </div>
            <?php endif; ?>

            <form method="post" class="form">
                <div class="form-group">
                    <label for="old" class="form-label">Password Lama</label>
                    <input type="password" id="old" name="old" required class="form-input">
                </div>

                <div class="form-group">
                    <label for="new" class="form-label">Password Baru</label>
                    <input type="password" id="new" name="new" required class="form-input" minlength="6">
                </div>

                <div class="form-group">
                    <label for="re" class="form-label">Ulangi Password Baru</label>
                    <input type="password" id="re" name="re" required class="form-input" minlength="6">
                </div>

                <button type="submit" class="btn btn-primary">Simpan Password</button>
            </form>
        </div>
    </div>
</body>
</html>