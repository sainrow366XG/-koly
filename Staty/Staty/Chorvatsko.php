<?php
require_once 'Template.php';
define('TEMPLATES_PATH', 'templates');

$template =new Template(TEMPLATES_PATH. '/Staty.html');
$template->assign('title', 'Chorvatsko');
$template->assign('mesto', 'Záhřeb');
$template->assign('Pocet', '4,076 milionů');
$template->show();
?>

