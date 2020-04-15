<?php
require_once 'Template.php';
define('TEMPLATES_PATH', 'templates');

$template =new Template(TEMPLATES_PATH. '/Staty.html');
$template->assign('title', 'Česká republika');
$template->assign('mesto', 'Praha');
$template->assign('Pocet', '10,65 milionů');
$template->show();
?>

