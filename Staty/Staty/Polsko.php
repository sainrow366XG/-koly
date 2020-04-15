<?php
require_once 'Template.php';
define('TEMPLATES_PATH', 'templates');

$template =new Template(TEMPLATES_PATH. '/Staty.html');
$template->assign('title', 'Polsko');
$template->assign('mesto', 'Varšava');
$template->assign('Pocet', '37,97 milionů');
$template->show();
?>

