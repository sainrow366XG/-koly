<?php
require_once 'Template.php';
define('TEMPLATES_PATH', 'templates');

$template =new Template(TEMPLATES_PATH. '/Staty.html');
$template->assign('title', 'Španělsko');
$template->assign('mesto', 'Madrid');
$template->assign('Pocet', '46,94 milionů');
$template->show();
?>

