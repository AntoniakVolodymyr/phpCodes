<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <title><?= htmlspecialchars($page['title']) ?> — MVC </title>
</head>
<body>
<div class="container">
    <a href="index.php">← Назад до списку</a>
    <h1><?= htmlspecialchars($page['title']) ?></h1>
    <hr>
    <div><?= nl2br(htmlspecialchars($page['content'])) ?></div>
    <hr>
    <p><a href="index.php">Усі сторінки</a></p>
</div>
</body>
</html>