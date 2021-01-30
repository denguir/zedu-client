<?php
/* Smarty version 3.1.34-dev-7, created on 2021-01-30 18:22:50
  from '/var/www/zedu/trombiProfs/templates/selectTituNom.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_6015a3fa505154_24837537',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '70b41df44ac0972553bc36a295c714820748c16f' => 
    array (
      0 => '/var/www/zedu/trombiProfs/templates/selectTituNom.tpl',
      1 => 1611761186,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6015a3fa505154_24837537 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container">

	<div class="selecteur noprint">

		<form name="selecteur" id="formSelecteur" method="POST" action="index.php" role="form" class="form-inline">
		Titulaire de
		<select name="groupe" id="groupe" class="form-control">
			<option value=''>Classe</option>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['lesGroupes']->value, 'classe');
$_smarty_tpl->tpl_vars['classe']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['classe']->value) {
$_smarty_tpl->tpl_vars['classe']->do_else = false;
?>
				<option value='<?php echo $_smarty_tpl->tpl_vars['classe']->value;?>
' <?php if ((isset($_smarty_tpl->tpl_vars['groupe']->value)) && ($_smarty_tpl->tpl_vars['groupe']->value == $_smarty_tpl->tpl_vars['classe']->value)) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['classe']->value;?>
</option>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</select>

		<select name="acronyme" id="acronyme" class="form-control">
			<option value="">Sélectionner un nom</option>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listeProfs']->value, 'unProf', false, 'abreviation');
$_smarty_tpl->tpl_vars['unProf']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['abreviation']->value => $_smarty_tpl->tpl_vars['unProf']->value) {
$_smarty_tpl->tpl_vars['unProf']->do_else = false;
?>
				<option value="<?php echo $_smarty_tpl->tpl_vars['abreviation']->value;?>
"<?php if ((isset($_smarty_tpl->tpl_vars['acronyme']->value)) && ($_smarty_tpl->tpl_vars['abreviation']->value == $_smarty_tpl->tpl_vars['acronyme']->value)) {?> selected="selected"<?php }?>>
					<?php echo $_smarty_tpl->tpl_vars['unProf']->value['nom'];?>
 <?php echo $_smarty_tpl->tpl_vars['unProf']->value['prenom'];?>
 [<?php echo $_smarty_tpl->tpl_vars['abreviation']->value;?>
]</option>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</select>

		<input type="hidden" name="action" value="classeTitu">
		<button type="submit" class="btn btn-primary btn-sm" id="envoi">OK</button>

		</form>
	</div>

</div>  <!-- container -->

<?php echo '<script'; ?>
 type="text/javascript">

$(document).ready(function(){

	$("#formSelecteur").submit(function(){
		if (($("#acronyme").val() == '') && ($("#groupe").val() == ''))
			return false;
			else $("#wait").show();
	})

	$("#acronyme").change(function(){
		$("#groupe").val('');
		$("#formSelecteur").submit();
		})

	$("#groupe").change(function(){
		$("#acronyme").val('');
		$("#formSelecteur").submit();
		})

})

<?php echo '</script'; ?>
>
<?php }
}
