<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <title>Список сторінок — MVC</title>
</head>
<body>
<div class="container">
    <h1>Усі сторінки</h1>
    <p><strong>Всього сторінок:</strong> <?= count($pages) ?></p>
    <ul>
        <?php foreach ($pages as $page): ?>
            <li>
                <a href="index.php?action=show&id=<?= $page['id'] ?>">
                    <?= htmlspecialchars($page['title']) ?>
                </a>
                <small>(<?= $page['created_at'] ?>)</small>
            </li>
        <?php endforeach; ?>
    </ul>
    <hr>
</div>
</body>
</html>