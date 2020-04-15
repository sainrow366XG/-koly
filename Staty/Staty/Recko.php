<?php
require_once 'Template.php';
define('TEMPLATES_PATH', 'templates');

$template =new Template(TEMPLATES_PATH. '/Staty.html');
$template->assign('title', 'Řecko');
$template->assign('mesto', 'Atény');
$template->assign('Pocet', '10,72 milionů');
$template->show();
?>

