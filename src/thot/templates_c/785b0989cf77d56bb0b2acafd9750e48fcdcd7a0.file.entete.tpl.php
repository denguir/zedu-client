<?php /* Smarty version Smarty-3.1.21-dev, created on 2021-01-30 18:23:01
         compiled from "./templates/entete.tpl" */ ?>
<?php /*%%SmartyHeaderCode:56272366015a4058cbd48-03035500%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '785b0989cf77d56bb0b2acafd9750e48fcdcd7a0' => 
    array (
      0 => './templates/entete.tpl',
      1 => 1611761111,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '56272366015a4058cbd48-03035500',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'TITREGENERAL' => 0,
    'WEBECOLE' => 0,
    'ECOLE' => 0,
    'ADRESSEECOLE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_6015a4058cdb30_15821479',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6015a4058cdb30_15821479')) {function content_6015a4058cdb30_15821479($_smarty_tpl) {?><div class="row">
	<div class="col-md-10 col-sm-9 col-xs-8">
		<h2 class="front"><?php echo $_smarty_tpl->tpl_vars['TITREGENERAL']->value;?>
</h2>
		<p><a href="<?php echo $_smarty_tpl->tpl_vars['WEBECOLE']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['ECOLE']->value;?>
</a> | <?php echo $_smarty_tpl->tpl_vars['ADRESSEECOLE']->value;?>
</p>
	</div>
	<div class="col-md-2 col-sm-3 col-xs-4">
		<img src="images/logoEcole.png" alt="logo" class="pull-right">
	</div>
</div>
<?php }} ?>
