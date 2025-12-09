<?php
// public/index.php
require_once __DIR__ . '/../config/db.php';
require_once __DIR__ . '/../app/Models/Page.php';
require_once __DIR__ . '/../app/Controllers/PageController.php';

$controller = new PageController();
$action = $_GET['action'] ?? 'index';

switch ($action) {
    case 'show':
        $id = $_GET['id'] ?? null;
        $controller->show($id);
        break;
    default:
        $controller->index();
        break;
}