<?php
require_once 'Template.php';
define('TEMPLATES_PATH', 'templates');

$template =new Template(TEMPLATES_PATH. '/Staty.html');
$template->assign('title', 'Anglie');
$template->assign('mesto', 'londýn');
$template->assign('Pocet', '55,98 milionů');
$template->show();
?>

