<?php
define('INDIRECT_ACCESS', 1);
include_once 'inc/inc.php';

$page = Route::get_page_name();
if (!Route::page_exists($page)) $page = '404';

include 'inc/parts/header.php';
include Route::get_page_path($page);
include 'inc/parts/footer.php';

