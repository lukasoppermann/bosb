<?PHP
// Standard Header Daten
	require_once("../libs/inc/global.inc.php");
	

	$smarty->assign('css_screen', 'web');

		
	$smarty->assign('titel', 'Moderation');

// Standard Header Daten ende 
// Display  Template
	$smarty->display('moderation.tpl');
?>


