<?PHP
// Standard Header Daten
	require_once("../libs/inc/global.inc.php");
	// $smarty->assign('keywords', '');
	// $smarty->assign('description', '');
	// $smarty->assign('css_screen', 'web');
	// $smarty->assign('css_print', 'print');
	// 
	$smarty->assign('titel', 'Willkommen');

// Standard Header Daten ende
// Display  Template
	$smarty->display('index.tpl');
?>
