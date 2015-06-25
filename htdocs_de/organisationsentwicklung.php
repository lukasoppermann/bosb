<?PHP
// Standard Header Daten
	require_once("../libs/inc/global.inc.php");
	

	$smarty->assign('css_screen', 'web');

		
	$smarty->assign('titel', 'Organisationsentwicklung');

// Standard Header Daten ende 
// Display  Template
	$smarty->display('organisationsentwicklung.tpl');
?>
