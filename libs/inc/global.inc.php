<?PHP
header("Content-type: text/html;charset=utf-8");
// Smarty must include
   	error_reporting(0);
//	include("../libs/inc/connect.inc");
    define('SMARTY_DIR', '../libs/');

// functions start
	function active($string){
		$string = preg_replace('/\/htdocs_([a-z]+)\//','',$string);
		$string = preg_replace('/.php/','',$string);
	return $string;
	}
	if (stristr($_SERVER['PHP_SELF'], 'htdocs_de')){
		$strLang = 'de';
	}elseif (stristr($_SERVER['PHP_SELF'], 'htdocs_en')){
		$strLang = 'en';
	}
// functions end

    require(SMARTY_DIR.'Smarty.class.'.$strLang.'.php');

	$smarty = new Smarty;
// Smarty must include end

	//$suburl = active($_SERVER['PHP_SELF']);
	if(isset($_GET['id'])){
		$url = $_GET['id'];
		$smarty->assign('url', $url);
	}
	if(isset($_GET['id'])){
		$url = $_GET['id'];
		$smarty->assign('url_2', $url);
	}
	if(isset($_GET['subid'])){
		$suburl = $_GET['subid'];
		$smarty->assign('suburl', $suburl);
		$smarty->assign('suburl_head', '&&subid='.$suburl);
	}
	if(isset($_GET['subsubid'])){
		$subsuburl = $_GET['subsubid'];
		$smarty->assign('subsuburl', $subsuburl);
		$smarty->assign('subsuburl_head', '&&subsubid='.$subsuburl);
	}
	$smarty->assign('start_url', 'http://bosb.de');

	$smarty->assign('strLang', $strLang);

	if(!isset($url) && active($_SERVER['PHP_SELF'])=="index"){
		$smarty->assign('url_2', 'index');
	}
	// php_page
	if(active($_SERVER['PHP_SELF']) != 'empfehlungen' and $_GET['id'] != 'empfehlungen'){
		$smarty->assign('url_head', active($_SERVER['PHP_SELF']));
	}elseif(active($_SERVER['PHP_SELF']) == 'empfehlungen' or $_GET['id'] == 'empfehlungen'){
		$smarty->assign('url_head', 'index');
		$smarty->assign('url_2', 'index');
		$smarty->assign('suburl_head', '');
		$smarty->assign('subsuburl_head', '');
	}
	if (active($_SERVER['PHP_SELF']) == 'analyse'){
		$smarty->assign('url_head', 'angebote');
		$smarty->assign('url_2', 'angebote');
		$smarty->assign('suburl_head', '');
		$smarty->assign('subsuburl_head', '');
	}
	if (active($_SERVER['PHP_SELF']) == 'praktikum'){
		$smarty->assign('url_head', 'kontakt');
		$smarty->assign('url_2', 'kontakt');
		$smarty->assign('suburl_head', '');
		$smarty->assign('subsuburl_head', '');
	}
// Menue Start
//
// Mainmenue Deutsch
//
	$menue_list['de'][0]['label'] = "Home";
	$menue_list['de'][0]['path'] = "index.php";
	$menue_list['de'][0]['seite'] = "index";

	$menue_list['de'][1]['label'] = "Über uns";
	$menue_list['de'][1]['path'] = "ueber_uns.php";
	$menue_list['de'][1]['seite'] = "ueber_uns";

	$menue_list['de'][2]['label'] = "Angebote";
	$menue_list['de'][2]['path'] = "angebote.php";
	$menue_list['de'][2]['seite'] = "angebote";

	// $menue_list['de'][4]['label'] = "Downloads";
	// $menue_list['de'][4]['path'] = "downloads.php";
	// $menue_list['de'][4]['seite'] = "downloads";

	$menue_list['de'][6]['label'] = "Kontakt";
	$menue_list['de'][6]['path'] = "kontakt.php";
//	$menue_list['de'][6]['seite'] = "kontakt";

	$smarty->assign('menue', $menue_list[$strLang]);
//
// Submenue Deutsch
//
	$menue_list['de']['ueber_uns'][0]['label'] = "Andreas Oppermann";
	$menue_list['de']['ueber_uns'][0]['path'] = "oppermann.php";
	$menue_list['de']['ueber_uns'][0]['seite'] = "ueber_uns";
	$menue_list['de']['ueber_uns'][0]['subseite'] = "oppermann";

  $menue_list['de']['ueber_uns'][1]['label'] = "Ulrike Jagelmann";
  $menue_list['de']['ueber_uns'][1]['path'] = "jagelmann.php";
  $menue_list['de']['ueber_uns'][1]['seite'] = "ueber_uns";
  $menue_list['de']['ueber_uns'][1]['subseite'] = "jagelmann";

  $menue_list['de']['ueber_uns'][2]['label'] = "Lukas Oppermann";
  $menue_list['de']['ueber_uns'][2]['path'] = "lukas_oppermann.php";
  $menue_list['de']['ueber_uns'][2]['seite'] = "ueber_uns";
  $menue_list['de']['ueber_uns'][2]['subseite'] = "lukas_oppermann";



  $menue_list['de']['ueber_uns'][4]['label'] = "Dr. Katrin Jutzi";
  $menue_list['de']['ueber_uns'][4]['path'] = "jutzi.php";
  $menue_list['de']['ueber_uns'][4]['seite'] = "ueber_uns";
  $menue_list['de']['ueber_uns'][4]['subseite'] = "jutzi";

	$menue_list['de']['ueber_uns'][5]['label'] = "Referenz";
	$menue_list['de']['ueber_uns'][5]['path'] = "referenz.php";
	$menue_list['de']['ueber_uns'][5]['seite'] = "ueber_uns";
	$menue_list['de']['ueber_uns'][5]['subseite'] = "referenz";

	// $menue_list['de']['ueber_uns'][3]['label'] = "Eindrücke";
	// $menue_list['de']['ueber_uns'][3]['path'] = "eindruecke.php";
	// $menue_list['de']['ueber_uns'][3]['seite'] = "ueber_uns";
	// $menue_list['de']['ueber_uns'][3]['subseite'] = "eindruecke";
//
	$menue_list['de']['angebote'][0]['label'] = "Organisation";
	$menue_list['de']['angebote'][0]['path'] = "organisation.php";
	$menue_list['de']['angebote'][0]['seite'] = "angebote";
	$menue_list['de']['angebote'][0]['subseite'] = "organisation";

	$menue_list['de']['angebote'][1]['label'] = "Team";
	$menue_list['de']['angebote'][1]['path'] = "team.php";
	$menue_list['de']['angebote'][1]['seite'] = "angebote";
	$menue_list['de']['angebote'][1]['subseite'] = "team";

	$menue_list['de']['angebote'][2]['label'] = "Personen";
	$menue_list['de']['angebote'][2]['path'] = "personen.php";
	$menue_list['de']['angebote'][2]['seite'] = "angebote";
	$menue_list['de']['angebote'][2]['subseite'] = "personen";
//
	$menue_list['de']['empfehlungen'][0]['label'] = "Netzwerk";
	$menue_list['de']['empfehlungen'][0]['path'] = "netzwerk.php";
	$menue_list['de']['empfehlungen'][0]['seite'] = "empfehlungen";
	$menue_list['de']['empfehlungen'][0]['subseite'] = "netzwerk";

	$menue_list['de']['empfehlungen'][1]['label'] = "Literatur";
	$menue_list['de']['empfehlungen'][1]['path'] = "/blog";
	$menue_list['de']['empfehlungen'][1]['seite'] = "blog";
	$menue_list['de']['empfehlungen'][1]['subseite'] = "blog";
//
	// $menue_list['de']['downloads'][0]['label'] = "Allgemein";
	// $menue_list['de']['downloads'][0]['path'] = "downloads.php";
	// $menue_list['de']['downloads'][0]['seite'] = "downloads";
	// $menue_list['de']['downloads'][0]['subseite'] = "allgemein";

//
	$menue_list['de']['kontakt'][0]['label'] = "Kontakt";
	$menue_list['de']['kontakt'][0]['path'] = "kontakt.php";
	$menue_list['de']['kontakt'][0]['seite'] = "kontakt";
	$menue_list['de']['kontakt'][0]['subseite'] = "kontakt";
//
//	$menue_list['de']['kontakt'][1]['label'] = "Praktikum";
//	$menue_list['de']['kontakt'][1]['path'] = "praktikum.php";
//	$menue_list['de']['kontakt'][1]['seite'] = "kontakt";
//	$menue_list['de']['kontakt'][1]['subseite'] = "praktikum";
//
/*	if(isset($_GET['id']) && $url!='index' && $url!='sitemap'){
		$smarty->assign('submenue', $menue_list[$strLang][$_GET['id']]);
	}*/
//
	if(isset($_GET['id']) && $url!='index' and $url!='impressum'){
		$smarty->assign('submenue', $menue_list[$strLang][$_GET['id']]);
	}
//
// Sub Submenue Deutsch
//
//	$menue_list['de']['angebote']['organisation'][0]['label'] = "Organisationsentwicklung";
//$menue_list['de']['angebote']['organisation'][0]['path'] = "organisationsentwicklung.php";
//$menue_list['de']['angebote']['organisation'][0]['seite'] = "angebote";
//$menue_list['de']['angebote']['organisation'][0]['subseite'] = "organisation";
//$menue_list['de']['angebote']['organisation'][0]['subsubseite'] = "organisationsentwicklung";

//	$menue_list['de']['angebote']['organisation'][1]['label'] = "Projektmanagement";
//$menue_list['de']['angebote']['organisation'][1]['path'] = "projektmanagement.php";
//$menue_list['de']['angebote']['organisation'][1]['seite'] = "angebote";
//$menue_list['de']['angebote']['organisation'][1]['subseite'] = "organisation";
//$menue_list['de']['angebote']['organisation'][1]['subsubseite'] = "projektmanagement";

  //	$menue_list['de']['angebote']['organisation'][2]['label'] = "Qualitätsmanagement";
  //	$menue_list['de']['angebote']['organisation'][2]['path'] = "qualitaetsmanagement.php";
  //	$menue_list['de']['angebote']['organisation'][2]['seite'] = "angebote";
  //	$menue_list['de']['angebote']['organisation'][2]['subseite'] = "organisation";
  //	$menue_list['de']['angebote']['organisation'][2]['subsubseite'] = "qualitaetsmanagement";

  //	$menue_list['de']['angebote']['organisation'][3]['label'] = "Moderation";
  //	$menue_list['de']['angebote']['organisation'][3]['path'] = "moderation.php";
  //	$menue_list['de']['angebote']['organisation'][3]['seite'] = "angebote";
  //	$menue_list['de']['angebote']['organisation'][3]['subseite'] = "organisation";
  //	$menue_list['de']['angebote']['organisation'][3]['subsubseite'] = "moderation";
//
//	$menue_list['de']['angebote']['team'][0]['label'] = "Inhousetraining";
//	$menue_list['de']['angebote']['team'][0]['path'] = "inhousetraining.php";
//	$menue_list['de']['angebote']['team'][0]['seite'] = "angebote";
//	$menue_list['de']['angebote']['team'][0]['subseite'] = "team";
//	$menue_list['de']['angebote']['team'][0]['subsubseite'] = "inhousetraining";

//	$menue_list['de']['angebote']['team'][1]['label'] = "Assessment-Center";
//	$menue_list['de']['angebote']['team'][1]['path'] = "assessment_center.php";
//	$menue_list['de']['angebote']['team'][1]['seite'] = "angebote";
//	$menue_list['de']['angebote']['team'][1]['subseite'] = "team";
//	$menue_list['de']['angebote']['team'][1]['subsubseite'] = "assessment_center";

//	$menue_list['de']['angebote']['team'][2]['label'] = "Teamentwicklung";
//	$menue_list['de']['angebote']['team'][2]['path'] = "teamentwicklung.php";
//	$menue_list['de']['angebote']['team'][2]['seite'] = "angebote";
//	$menue_list['de']['angebote']['team'][2]['subseite'] = "team";
//	$menue_list['de']['angebote']['team'][2]['subsubseite'] = "teamentwicklung";

//	$menue_list['de']['angebote']['team'][3]['label'] = "Supervision";
//	$menue_list['de']['angebote']['team'][3]['path'] = "supervision.php";
//	$menue_list['de']['angebote']['team'][3]['seite'] = "angebote";
//	$menue_list['de']['angebote']['team'][3]['subseite'] = "team";
//	$menue_list['de']['angebote']['team'][3]['subsubseite'] = "supervision";

//	$menue_list['de']['angebote']['team'][4]['label'] = "Moderation";
//	$menue_list['de']['angebote']['team'][4]['path'] = "moderation_team.php";
//	$menue_list['de']['angebote']['team'][4]['seite'] = "angebote";
//	$menue_list['de']['angebote']['team'][4]['subseite'] = "team";
//	$menue_list['de']['angebote']['team'][4]['subsubseite'] = "moderation_team";
//
//	$menue_list['de']['angebote']['personen'][0]['label'] = "Coaching";
//	$menue_list['de']['angebote']['personen'][0]['path'] = "coaching.php";
//	$menue_list['de']['angebote']['personen'][0]['seite'] = "angebote";
//	$menue_list['de']['angebote']['personen'][0]['subseite'] = "personen";
//	$menue_list['de']['angebote']['personen'][0]['subsubseite'] = "coaching";

//	$menue_list['de']['angebote']['personen'][1]['label'] = "Karriereplanung";
//	$menue_list['de']['angebote']['personen'][1]['path'] = "karriereplanung.php";
//	$menue_list['de']['angebote']['personen'][1]['seite'] = "angebote";
//	$menue_list['de']['angebote']['personen'][1]['subseite'] = "personen";
//	$menue_list['de']['angebote']['personen'][1]['subsubseite'] = "karriereplanung";

//	$menue_list['de']['angebote']['personen'][2]['label'] = "Beratung";
//$menue_list['de']['angebote']['personen'][2]['path'] = "beratung.php";
//$menue_list['de']['angebote']['personen'][2]['seite'] = "angebote";
//$menue_list['de']['angebote']['personen'][2]['subseite'] = "personen";
//$menue_list['de']['angebote']['personen'][2]['subsubseite'] = "beratung";

	//$menue_list['de']['angebote']['personen'][3]['label'] = "Analyse";
	//$menue_list['de']['angebote']['personen'][3]['path'] = "analyse.php";
	//$menue_list['de']['angebote']['personen'][3]['seite'] = "angebote";
//	$menue_list['de']['angebote']['personen'][3]['subseite'] = "personen";
	//$menue_list['de']['angebote']['personen'][3]['subsubseite'] = "analyse";
//
	if(isset($_GET['subid']) && isset($menue_list[$strLang][$_GET['id']][$_GET['subid']])){
		$smarty->assign('subsubmenue', $menue_list[$strLang][$_GET['id']][$_GET['subid']]);
	}

if(isset($_GET['subid']) && isset($menue_list[$strLang][$_GET['id']][$_GET['subid']])){
	$smarty->assign('subsubmenue', $menue_list[$strLang][$_GET['id']][$_GET['subid']]);
}

$smarty->assign('google', "<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-16029168-1', 'auto');
  ga('set', 'anonymizeIp', true);
  ga('send', 'pageview');
</script>");



// Menue Ende
//Sonstiges
	$smarty->assign('mail', '<script type="text/javascript">document.write(
	"<n uers=\"znvygb:znvy%40obfo\056qr\">znvy\100obfo\056qr<\057n>".replace(/[a-zA-Z]/g, function(c){return String.fromCharCode((c<="Z"?90:122)>=(c=c.charCodeAt(0)+13)?c:c-26);}));
	</script>');
?>
