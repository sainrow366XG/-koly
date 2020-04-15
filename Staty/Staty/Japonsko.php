<?php
require_once 'Template.php';
define('TEMPLATES_PATH', 'templates');

$template =new Template(TEMPLATES_PATH. '/Staty.html');
$template->assign('title', 'Japonsko');
$template->assign('mesto', 'Tokio');
$template->assign('Pocet', '126,5 milionů');
$template->show();
?>

