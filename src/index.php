<?php
require 'db.php';

$recipes = $pdo->query("SELECT * FROM recipes ORDER BY id DESC")->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>мои рецептики</title>
    <style>
        body { font-family: sans-serif; max-width: 700px; margin: 40px auto; background-color: floralwhite;}
        .recipe { border: 0px solid #a7b179; padding: 12px; margin: 8px 0; border-radius: 6px; }
        h1 { color: #a7b179; }
    </style>
</head>
<body>
    <h1>мои рецептики</h1>
    <?php foreach ($recipes as $r): ?>
        <div class="recipe">
            <strong><?= htmlspecialchars($r['title']) ?></strong>
            <p><?= htmlspecialchars($r['ingredients']) ?></p>
            <small><?= (int)$r['time_minutes'] ?> минуток</small>
        </div>
    <?php endforeach; ?>
</body>
</html>
