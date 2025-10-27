<?php
function h($s){ return htmlspecialchars($s, ENT_QUOTES, 'UTF-8'); }

function calories_for_servings($baseCal, $servings){
  $s = max(1, (int)$servings);
  return $baseCal * $s;
}

function find_recipe(PDO $pdo, $id){
  $stmt = $pdo->prepare("SELECT * FROM recipes WHERE id=?");
  $stmt->execute([$id]);
  $r = $stmt->fetch(PDO::FETCH_ASSOC);
  if (!$r) return null;

  $ing = $pdo->prepare("SELECT content FROM recipe_ingredients WHERE recipe_id=?");
  $ing->execute([$id]);  $r['ingredients'] = $ing->fetchAll(PDO::FETCH_COLUMN);

  $stp = $pdo->prepare("SELECT step_no,content FROM recipe_steps WHERE recipe_id=? ORDER BY step_no ASC");
  $stp->execute([$id]);  $r['steps'] = $stp->fetchAll(PDO::FETCH_ASSOC);

  return $r;
}
