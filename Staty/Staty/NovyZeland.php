<?php
require_once 'Template.php';
define('TEMPLATES_PATH', 'templates');

$template =new Template(TEMPLATES_PATH. '/Staty.html');
$template->assign('title', 'Nový Zéland');
$template->assign('mesto', 'Wellington');
$template->assign('Pocet', '4,886 milionů');
$template->show();
?>

