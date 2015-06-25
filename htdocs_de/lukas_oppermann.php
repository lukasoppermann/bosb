<?PHP
// Standard Header Daten
	require_once("../libs/inc/global.inc.php");



	$smarty->assign('css_print', 'print');
	
	$smarty->assign('titel', 'Lukas Oppermann');

// Standard Header Daten ende
// Display  Template
	$smarty->display('lukas_oppermann.tpl');
?>
