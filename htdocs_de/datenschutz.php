<?PHP
// Standard Header Daten
	require_once("../libs/inc/global.inc.php");



	$smarty->assign('css_print', 'print');
	
	$smarty->assign('titel', 'Datenschutz');

// Standard Header Daten ende
// Display  Template
	$smarty->display('datenschutz.tpl');
?>
