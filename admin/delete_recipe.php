<?php
require __DIR__.'/../inc/auth.php'; require_admin();
require __DIR__.'/../inc/db.php';
$id = (int)($_GET['id'] ?? 0);
if ($id>0){
  $pdo->prepare("DELETE FROM recipes WHERE id=?")->execute([$id]);
}
header("Location: recipes.php");
exit;
