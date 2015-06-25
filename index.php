<?PHP
header("Content-type: text/html;charset=utf-8");
// Error Reporting
error_reporting(0); // Don't show errors (for production)
error_reporting(E_ALL); // Show all errors (prefix with // on the server)
// require files
require 'vendor/autoload.php'; // composer autoloader
require 'includes.php'; // variables & functions
require 'menu.php'; // menu items
// require smarty
$smarty = new Smarty();
$menu = make_menu($menu);
$router = new Router($_SERVER['REQUEST_URI'], $menu);
$smarty->assign('router', $router);
// define menu
$smarty->assign('menu', $menu['by_id']);
// define includes
$smarty->assign('google_analytics', $google_analytics);
$smarty->assign('mail', $mail);
// display templates
$smarty->display($router->get_template());
