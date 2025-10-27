<?php
if (session_status() === PHP_SESSION_NONE) {
  session_start();
}

/* TAMBAH BARIS INI: sesuaikan nama folder project-mu */
define('BASE_PATH', '/healthy-drinks');  // <-- ganti kalau nama foldermu beda

function login_admin($id, $username) {
  session_regenerate_id(true);
  $_SESSION['admin_id'] = $id;
  $_SESSION['admin_user'] = $username;
}

function require_admin() {
  if (empty($_SESSION['admin_id'])) {
    header("Location: " . BASE_PATH . "/login.php");  // <-- sebelumnya "/login.php"
    exit;
  }
}

function logout_admin() {
  $_SESSION = [];
  if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
      $params["path"], $params["domain"], $params["secure"], $params["httponly"]);
  }
  session_destroy();
}
