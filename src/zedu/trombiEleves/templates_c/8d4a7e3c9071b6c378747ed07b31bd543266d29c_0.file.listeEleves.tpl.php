<?php
/* Smarty version 3.1.34-dev-7, created on 2021-01-30 18:22:48
  from '/var/www/zedu/trombiEleves/templates/listeEleves.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_6015a3f850a944_11388131',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8d4a7e3c9071b6c378747ed07b31bd543266d29c' => 
    array (
      0 => '/var/www/zedu/trombiEleves/templates/listeEleves.tpl',
      1 => 1611761186,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6015a3f850a944_11388131 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['listeEleves']->value))) {?>
<select name="matricule" id="selectEleve" class="form-control">
	<option value="">Tous les élèves</option>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listeEleves']->value, 'unEleve', false, 'leMatricule');
$_smarty_tpl->tpl_vars['unEleve']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['leMatricule']->value => $_smarty_tpl->tpl_vars['unEleve']->value) {
$_smarty_tpl->tpl_vars['unEleve']->do_else = false;
?>
		<option value="<?php echo $_smarty_tpl->tpl_vars['leMatricule']->value;?>
"<?php if ((isset($_smarty_tpl->tpl_vars['matricule']->value)) && ($_smarty_tpl->tpl_vars['leMatricule']->value == $_smarty_tpl->tpl_vars['matricule']->value)) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['unEleve']->value['nom'];?>
 <?php echo $_smarty_tpl->tpl_vars['unEleve']->value['prenom'];?>
</option>
	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</select>
<?php }
}
}
