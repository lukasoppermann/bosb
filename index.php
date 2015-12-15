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
// echo "<pre>";
// print_r($router);
// echo "</pre>";
// define menu
$smarty->assign('menu', $menu['by_id']);
if (isset($menu['by_path'][$router->get_part(0)]['children'])) {
    $smarty->assign('submenu', $menu['by_path'][$router->get_part(0)]['children']);
}
// build title
$title = $menu['by_path'][$router->get_part(0)]['label'];
$smarty->assign('title', $title);
// display templates
$smarty->display($router->get_template());
