<?php
require_once 'Template.php';
define('TEMPLATES_PATH', 'templates');

$template =new Template(TEMPLATES_PATH. '/test.html');
$template->assign('title', 'Můj template');
$template->assign('text', 'Vítejte');
$template->show();
?>