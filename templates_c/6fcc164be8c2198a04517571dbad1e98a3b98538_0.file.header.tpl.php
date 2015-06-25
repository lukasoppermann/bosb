<?php /* Smarty version 3.1.27, created on 2015-06-25 07:43:47
         compiled from "/home/vagrant/Code/bosb/templates/header.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1068829302558bb13302b022_40077526%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6fcc164be8c2198a04517571dbad1e98a3b98538' => 
    array (
      0 => '/home/vagrant/Code/bosb/templates/header.tpl',
      1 => 1435218612,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1068829302558bb13302b022_40077526',
  'variables' => 
  array (
    'titel' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_558bb133073023_92685421',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_558bb133073023_92685421')) {
function content_558bb133073023_92685421 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1068829302558bb13302b022_40077526';
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="author" content="Lukas Oppermann">
	<meta name="description" content="Beratungssozietät Oppermann Systemisch Beraten - Unternehmen für systemische Organisationsberatung, Personalentwicklung, Supervision und Projektmanagement">
	<meta name="robots" content="index,follow">
	<meta name="language" content="de">
	<link rel="favicon" type="image/x-icon" href="media/favicon.ico" />
	<link rel="shortcut icon" href="media/favicon.ico" type="image/x-icon" />
	<link rel="stylesheet" type="text/css" href="css/app.css" media="screen">
	<link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
	<title>Beratungssozietät Oppermann - <?php echo $_smarty_tpl->tpl_vars['titel']->value;?>
</title>
</head>
<body>
	<div id="body">
		<div id="head">
			<div id="logo">
				<span class="logo-type logo-type-outside">Beratungssozietät</span>
				<span class="logo-type">Oppermann</span>
			</div>
			<?php echo $_smarty_tpl->getSubTemplate ("../templates/menue.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

		</div>
		<div id="content" class="content-body">
<?php }
}
?>