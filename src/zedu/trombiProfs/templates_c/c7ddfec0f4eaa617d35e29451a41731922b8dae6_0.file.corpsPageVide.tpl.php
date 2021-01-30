<?php
/* Smarty version 3.1.34-dev-7, created on 2021-01-30 18:22:50
  from '/var/www/zedu/templates/corpsPageVide.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_6015a3fa508e71_89679388',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c7ddfec0f4eaa617d35e29451a41731922b8dae6' => 
    array (
      0 => '/var/www/zedu/templates/corpsPageVide.tpl',
      1 => 1611761186,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../widgets/flashInfo/templates/index.tpl' => 1,
  ),
),false)) {
function content_6015a3fa508e71_89679388 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container-fluid">
	<div class="row">
		<div class="col-md-6 col-sm-12">
			<img  src="../images/logoPageVide.png" class="img-responsive img-center">
		</div>
		<div class="col-md-6 col-sm-12" style="max-height: 35em; overflow: auto">
			<?php $_smarty_tpl->_assignInScope('module', ((string)$_smarty_tpl->tpl_vars['module']->value));?>
			<?php $_smarty_tpl->_subTemplateRender("file:../widgets/flashInfo/templates/index.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
		</div>
	</div>

</div>
<?php }
}
