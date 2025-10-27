<?php 
error_reporting(E_ALL); 
ini_set('display_errors', 1); 

require __DIR__.'/inc/db.php'; 

// Mulai session
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Redirect jika sudah login
if (isset($_SESSION['admin_id'])) {
    header("Location: admin/dashboard.php");
    exit;
}

$error = "";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $u = trim($_POST['username'] ?? "");
    $p = $_POST['password'] ?? "";
    
    $stmt = $pdo->prepare("SELECT * FROM admins WHERE username=?");
    $stmt->execute([$u]);
    $admin = $stmt->fetch(PDO::FETCH_ASSOC);
    
    if ($admin) {
        // Gunakan password_verify untuk memeriksa password
        if (password_verify($p, $admin['password_hash'])) {
            // Login berhasil
            $_SESSION['admin_id'] = $admin['id'];
            $_SESSION['admin_username'] = $admin['username'];
            header("Location: admin/dashboard.php");
            exit;
        } else {
            $error = "Password salah!";
        }
    } else {
        $error = "Username tidak ditemukan!";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Admin - HealthyBite Drinks</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
    <div class="login-container">
        <div class="login-card">
            <div class="login-header">
                <a href="index.php" class="back-home">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M19 12H5M12 19L5 12L12 5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    Kembali ke Beranda
                </a>
                <div class="login-logo">
                    <div class="logo-icon">🔐</div>
                    <h1>Login Admin</h1>
                    <p>Masuk ke panel administrasi HealthyBite</p>

                </div>
            </div>

            <?php if($error): ?>
                <div class="alert alert-error">
                    <div class="alert-icon">⚠️</div>
                    <div class="alert-content">
                        <strong>Login Gagal</strong>
                        <p><?= htmlspecialchars($error) ?></p>
                    </div>
                </div>
            <?php endif; ?>

            <form method="post" class="login-form">
                <div class="form-group">
                    <label for="username" class="form-label">Username</label>
                    <div class="input-wrapper">
                        <div class="input-icon">👤</div>
                        <input 
                            type="text" 
                            id="username" 
                            name="username" 
                            required 
                            placeholder="Masukkan username"
                            class="form-input"
                            value="<?= htmlspecialchars($_POST['username'] ?? '') ?>"
                        >
                    </div>
                </div>

                <div class="form-group">
                    <label for="password" class="form-label">Password</label>
                    <div class="input-wrapper">
                        <div class="input-icon">🔒</div>
                        <input 
                            type="password" 
                            id="password" 
                            name="password" 
                            required 
                            placeholder="Masukkan password"
                            class="form-input"
                        >
                    </div>
                </div>

                <button type="submit" class="btn btn-primary btn-login">
                    <span class="btn-text">Masuk</span>
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M5 12H19M19 12L12 5M19 12L12 19" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </button>
            </form>

            <div class="login-footer">
                <p class="security-note">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 22C12 22 20 18 20 12V5L12 2L4 5V12C4 18 12 22 12 22Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    Akses terbatas untuk administrator saja
                </p>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const inputs = document.querySelectorAll('.form-input');
            inputs.forEach(input => {
                input.addEventListener('focus', function() {
                    this.parentElement.classList.add('focused');
                });
                
                input.addEventListener('blur', function() {
                    if (!this.value) {
                        this.parentElement.classList.remove('focused');
                    }
                });

                if (input.value) {
                    input.parentElement.classList.add('focused');
                }
            });

            const loginForm = document.querySelector('.login-form');
            loginForm.addEventListener('submit', function() {
                const btn = this.querySelector('.btn-login');
                const btnText = btn.querySelector('.btn-text');
                btnText.textContent = 'Memproses...';
                btn.disabled = true;
            });
        });
    </script>
</body>
</html>