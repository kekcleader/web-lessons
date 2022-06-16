<?php
if (!defined('INDIRECT_ACCESS')) die('!');

class Route {

  static function get_pages() {
    return ['main', 'parse', 'about'];
  }

  static function get_page_name() {
    $pages = self::get_pages();
    $page = @$_GET['page'];
    if (empty($page)) {
      $page = $pages[0];
    } else if (!in_array($page, array_slice($pages, 1))) {
      $page = '404';
    }
    return $page;
  }

  static function get_page_path($page) {
    return 'pages/'.$page.'.php';
  }

  static function page_exists($page) {
    return file_exists(self::get_page_path($page));
  }

}
