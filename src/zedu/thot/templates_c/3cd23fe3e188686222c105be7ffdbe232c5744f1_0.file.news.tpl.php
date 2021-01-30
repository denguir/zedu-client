<?php
/* Smarty version 3.1.34-dev-7, created on 2021-01-30 18:22:53
  from '/var/www/zedu/thot/templates/news/news.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_6015a3fd0be9f7_19333748',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3cd23fe3e188686222c105be7ffdbe232c5744f1' => 
    array (
      0 => '/var/www/zedu/thot/templates/news/news.tpl',
      1 => 1611761186,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6015a3fd0be9f7_19333748 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container-fluid">

	<div class="row">

		<div class="col-md-12 col-sm-12">
			<?php $_smarty_tpl->_assignInScope('module', "thot");?>
			<?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['INSTALL_DIR']->value)."/widgets/flashInfo/templates/index.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
		</div>

	</div>
	<!-- row -->

</div>
<!-- container -->
<?php }
}
