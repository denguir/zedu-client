<?php /* Smarty version Smarty-3.1.21-dev, created on 2021-01-30 18:23:01
         compiled from "./templates/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11895617576015a4058cfb40-91124094%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '74fd44433db402206c68e230674242afc45cf90d' => 
    array (
      0 => './templates/footer.tpl',
      1 => 1611761111,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11895617576015a4058cfb40-91124094',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'identiteReseau' => 0,
    'executionTime' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_6015a4058d8096_13196793',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6015a4058d8096_13196793')) {function content_6015a4058d8096_13196793($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/var/www/thot/smarty/plugins/modifier.date_format.php';
?><div style="padding-bottom: 60px"></div>
<div class="hidden-print navbar-xs navbar-default navbar-fixed-bottom" style="padding-top:10px">
	<span class="hidden-xs">
		Le <?php echo smarty_modifier_date_format(time(),"%A, %e %b %Y");?>
 à <?php echo smarty_modifier_date_format(time(),"%Hh%M");?>
 Adresse IP:
		<strong><?php echo $_smarty_tpl->tpl_vars['identiteReseau']->value['ip'];?>
</strong> <?php echo $_smarty_tpl->tpl_vars['identiteReseau']->value['hostname'];?>
 Votre passage est enregistré
		<span id="execTime" class="pull-right"><?php if ($_smarty_tpl->tpl_vars['executionTime']->value) {?>Temps d'exécution du script: <?php echo $_smarty_tpl->tpl_vars['executionTime']->value;?>
s<?php }?></span>
	</span>

	<span class="visible-xs">
		<?php echo $_smarty_tpl->tpl_vars['identiteReseau']->value['ip'];?>
 <?php echo $_smarty_tpl->tpl_vars['identiteReseau']->value['hostname'];?>
 <?php echo smarty_modifier_date_format(time(),"%A, %e %b %Y");?>
 <?php echo smarty_modifier_date_format(time(),"%Hh%M");?>

	</span>

</div>
<!-- navbar -->
<?php }} ?>
