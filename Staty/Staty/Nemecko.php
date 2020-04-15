<?php
require_once 'Template.php';
define('TEMPLATES_PATH', 'templates');

$template =new Template(TEMPLATES_PATH. '/Staty.html');
$template->assign('title', 'Německo');
$template->assign('mesto', 'Berlín');
$template->assign('Pocet', '83,02 milionů');
$template->show();
?>

