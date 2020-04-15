<?php
require_once 'Template.php';
define('TEMPLATES_PATH', 'templates');

$template =new Template(TEMPLATES_PATH. '/Staty.html');
$template->assign('title', 'Austrálie');
$template->assign('mesto', 'Canberra');
$template->assign('Pocet', '24,99 milionů');
$template->show();
?>

