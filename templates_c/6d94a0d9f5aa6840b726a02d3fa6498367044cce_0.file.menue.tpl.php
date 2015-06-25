<?php /* Smarty version 3.1.27, created on 2015-06-25 08:09:30
         compiled from "/home/vagrant/Code/bosb/templates/menue.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:364054831558bb73a039550_13460826%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6d94a0d9f5aa6840b726a02d3fa6498367044cce' => 
    array (
      0 => '/home/vagrant/Code/bosb/templates/menue.tpl',
      1 => 1435220197,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '364054831558bb73a039550_13460826',
  'variables' => 
  array (
    'menu' => 0,
    'menue' => 0,
    'url' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_558bb73a08cf46_89030702',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_558bb73a08cf46_89030702')) {
function content_558bb73a08cf46_89030702 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '364054831558bb73a039550_13460826';
?>
<ul id="menue">
	<?php
$_from = $_smarty_tpl->tpl_vars['menu']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['item']->_loop = false;
$_smarty_tpl->tpl_vars['id'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['id']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
$foreach_item_Sav = $_smarty_tpl->tpl_vars['item'];
?>
		<!-- <?php if ($_smarty_tpl->tpl_vars['menue']->value['seite'] == $_smarty_tpl->tpl_vars['url']->value) {?> -->
		<li><a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['path'];?>
" class="passive"><?php echo $_smarty_tpl->tpl_vars['item']->value['label'];?>
</a></li>
		<!-- <?php } else { ?>
		<li><a href="<?php echo $_smarty_tpl->tpl_vars['menue']->value['path'];?>
?id=<?php echo $_smarty_tpl->tpl_vars['menue']->value['seite'];?>
" class="passive"><?php echo $_smarty_tpl->tpl_vars['menue']->value['label'];?>
</a></li>
		<?php }?> -->
	<?php
$_smarty_tpl->tpl_vars['item'] = $foreach_item_Sav;
}
?>
</ul>
<?php }
}
?>