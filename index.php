<?PHP
header("Content-type: text/html;charset=utf-8");
// Error Reporting
error_reporting(0); // Don't show errors (for production)
error_reporting(E_ALL); // Show all errors (prefix with // on the server)
// require composer autoloader
require 'vendor/autoload.php';
// require smarty
$smarty = new Smarty();
// define menu
require 'menu.php';
$smarty->assign('menu', $menu);
// defined google analytics code
$smarty->assign('google_analytics', "<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-16029168-1', 'auto');
  ga('set', 'anonymizeIp', true);
  ga('send', 'pageview');
</script>");
// display templates
$smarty->display('index.tpl');
