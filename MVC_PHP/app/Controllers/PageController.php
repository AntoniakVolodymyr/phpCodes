<?php
class PageController {
    public function index() {
        $pages = Page::all();
        require __DIR__ . '/../Views/pages_list.php';
    }

    public function show($id) {
        if (!$id || !is_numeric($id)) {
            die('ID сторінки не вказано або неправильний');
        }
        $page = Page::find($id);
        if (!$page) {
            die('Сторінку не знайдено');
        }
        require __DIR__ . '/../Views/page_single.php';
    }
}