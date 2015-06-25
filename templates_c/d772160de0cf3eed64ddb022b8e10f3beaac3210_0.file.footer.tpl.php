<?php /* Smarty version 3.1.27, created on 2015-06-25 07:40:01
         compiled from "/home/vagrant/Code/bosb/templates/footer.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:279858653558bb051020a88_31345775%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd772160de0cf3eed64ddb022b8e10f3beaac3210' => 
    array (
      0 => '/home/vagrant/Code/bosb/templates/footer.tpl',
      1 => 1435218386,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '279858653558bb051020a88_31345775',
  'variables' => 
  array (
    'google_analytics' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_558bb051045141_04965119',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_558bb051045141_04965119')) {
function content_558bb051045141_04965119 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '279858653558bb051020a88_31345775';
?>
			<div class="o-footer">
				<ul class="o-footer__nav">
					<li class="o-footer__nav_item"><a href="../impressum.php?id=impressum">Impressum</a></li>
					<li class="o-footer__nav_item o-footer__nav_item--small">•</li>
					<li class="o-footer__nav_item"><a href="../datenschutz.php?id=datenschutz">Datenschutzrichtlinie</a></li>
				</ul>
			</div>
		</div>
	</div>
	<?php echo $_smarty_tpl->tpl_vars['google_analytics']->value;?>

</body>
</html>
<?php }
}
?>