<?php
/* Smarty version 3.1.34-dev-7, created on 2021-01-30 18:22:36
  from '/var/www/zedu/templates/footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_6015a3ec815a72_12344888',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '221a5ed0b2b89c7bd2d9e2667f539afaa0358bb6' => 
    array (
      0 => '/var/www/zedu/templates/footer.tpl',
      1 => 1611761186,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6015a3ec815a72_12344888 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/zedu/smarty/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>
<div style="padding-bottom: 60px"></div>
<div class="hidden-print navbar-xs navbar-default navbar-fixed-bottom" style="padding-top:10px">
	<span class="hidden-xs">
		Le <?php echo smarty_modifier_date_format(time(),"%A, %e %b %Y");?>
 à <?php echo smarty_modifier_date_format(time(),"%Hh%M");?>

		Adresse IP: <strong><?php echo $_smarty_tpl->tpl_vars['identification']->value['ip'];?>
</strong> <?php echo $_smarty_tpl->tpl_vars['identification']->value['hostname'];?>

		Votre passage est enregistré
			<span id="execTime"><?php if ($_smarty_tpl->tpl_vars['executionTime']->value) {?>Temps d'exécution du script: <?php echo $_smarty_tpl->tpl_vars['executionTime']->value;?>
s<?php }?></span>
	</span>

	<span class="visible-xs">
		<?php echo $_smarty_tpl->tpl_vars['identification']->value['ip'];?>
 <?php echo $_smarty_tpl->tpl_vars['identification']->value['hostname'];?>
 <?php echo smarty_modifier_date_format(time(),"%A, %e %b %Y");?>
 <?php echo smarty_modifier_date_format(time(),"%Hh%M");?>

	</span>

</div>  <!-- navbar -->
<?php }
}
