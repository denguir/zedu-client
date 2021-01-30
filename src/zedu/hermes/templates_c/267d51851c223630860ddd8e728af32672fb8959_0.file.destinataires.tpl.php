<?php
/* Smarty version 3.1.34-dev-7, created on 2021-01-30 18:22:46
  from '/var/www/zedu/hermes/templates/destinataires.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_6015a3f6182ca0_15052210',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '267d51851c223630860ddd8e728af32672fb8959' => 
    array (
      0 => '/var/www/zedu/hermes/templates/destinataires.tpl',
      1 => 1611761186,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6015a3f6182ca0_15052210 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/zedu/smarty/plugins/modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
?>
<div class="panel panel-default">

	<div class="panel-header">
		<h3>Destinataires</h3>
	</div>

	<div class="panel-body">

	<?php $_smarty_tpl->_assignInScope('noListe', 1);?>
	<!--	tous les utilisateurs -->
	<?php if ((isset($_smarty_tpl->tpl_vars['listeProfs']->value))) {?>
		<div style="width:100%">
			<input type="checkbox" class="checkListe" name="liste_<?php echo $_smarty_tpl->tpl_vars['noListe']->value;?>
" style="float: left; margin-right:0.5em">
			<h4 class="teteListe" title="Cliquer pour ouvrir"><?php echo $_smarty_tpl->tpl_vars['listeProfs']->value['nomListe'];?>
</h4>
		</div>

		<ul class="listeMails" style="display:none">
		<?php $_smarty_tpl->_assignInScope('membresProfs', $_smarty_tpl->tpl_vars['listeProfs']->value['membres']);?>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['membresProfs']->value, 'prof', false, 'acro');
$_smarty_tpl->tpl_vars['prof']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['acro']->value => $_smarty_tpl->tpl_vars['prof']->value) {
$_smarty_tpl->tpl_vars['prof']->do_else = false;
?>
			<li><input class="selecteur mails" type="checkbox" name="mails[]" value="<?php echo $_smarty_tpl->tpl_vars['prof']->value['prenom'];?>
 <?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['prof']->value['nom'],15,'...');?>
#<?php echo $_smarty_tpl->tpl_vars['prof']->value['mail'];?>
">
				<span class="labelProf"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['prof']->value['nom'],15,'...');?>
 <?php echo $_smarty_tpl->tpl_vars['prof']->value['prenom'];?>
</span>
			</li>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</ul>
	<?php }?>
	<?php if ((isset($_smarty_tpl->tpl_vars['listeTitus']->value))) {?>
		<?php $_smarty_tpl->_assignInScope('noListe', $_smarty_tpl->tpl_vars['noListe']->value+1);?>
		<!--	tous les titulaires (profs principaux) -->
		<div style="width:100%">
			<input type="checkbox" class="checkListe" name="liste_<?php echo $_smarty_tpl->tpl_vars['noListe']->value;?>
" style="float: left; margin-right:0.5em">
			<h4 class="teteListe" title="Cliquer pour ouvrir"><?php echo $_smarty_tpl->tpl_vars['listeTitus']->value['nomListe'];?>
</h4>
		</div>
		<ul class="listeMails" style="display:none">
		<?php $_smarty_tpl->_assignInScope('membresProfs', $_smarty_tpl->tpl_vars['listeTitus']->value['membres']);?>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['membresProfs']->value, 'prof', false, 'acro');
$_smarty_tpl->tpl_vars['prof']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['acro']->value => $_smarty_tpl->tpl_vars['prof']->value) {
$_smarty_tpl->tpl_vars['prof']->do_else = false;
?>
			<li><input class="selecteur mails" type="checkbox" name="mails[]" value="<?php echo $_smarty_tpl->tpl_vars['prof']->value['prenom'];?>
 <?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['prof']->value['nom'],15,'...');?>
#<?php echo $_smarty_tpl->tpl_vars['prof']->value['mail'];?>
">
				<span class="labelProf"><?php echo $_smarty_tpl->tpl_vars['prof']->value['classe'];?>
 <?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['prof']->value['nom'],15,'...');?>
 <?php echo $_smarty_tpl->tpl_vars['prof']->value['prenom'];?>
</span>
			</li>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</ul>
	<?php }?>

	<!-- 	toutes les autres listes personnelles ou publiées -->
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listesAutres']->value, 'listePerso', false, 'idListe');
$_smarty_tpl->tpl_vars['listePerso']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['idListe']->value => $_smarty_tpl->tpl_vars['listePerso']->value) {
$_smarty_tpl->tpl_vars['listePerso']->do_else = false;
?>
	<?php $_smarty_tpl->_assignInScope('noListe', $_smarty_tpl->tpl_vars['noListe']->value+1);?>
	<?php $_smarty_tpl->_assignInScope('membresProfs', $_smarty_tpl->tpl_vars['listePerso']->value['membres']);?>

	<div style="width:100%">
		<input type="checkbox" class="checkListe" name="liste_<?php echo $_smarty_tpl->tpl_vars['noListe']->value;?>
" style="float: left; margin-right:0.5em">
		<h4 class="teteListe" title="<?php if ($_smarty_tpl->tpl_vars['membresProfs']->value == Null) {?>Liste vide<?php } else { ?>Cliquer pour ouvrir<?php }?> :
			<?php if ($_smarty_tpl->tpl_vars['listePerso']->value['statut'] == 'publie') {?>Publié<?php } elseif ($_smarty_tpl->tpl_vars['listePerso']->value['statut'] == 'abonne') {?>Abonné<?php } else { ?>Personnel<?php }?>"><?php echo $_smarty_tpl->tpl_vars['listePerso']->value['nomListe'];?>

			<?php if ($_smarty_tpl->tpl_vars['listePerso']->value['statut'] == 'publie') {?><img src="../images/shared.png" alt="part"><?php }?>
			<?php if ($_smarty_tpl->tpl_vars['listePerso']->value['statut'] == 'prive') {?><img src="../images/personal.png" alt="pers"><?php }?>
			<?php if ($_smarty_tpl->tpl_vars['listePerso']->value['statut'] == 'abonne') {?><img src="../images/abonne.png" alt="abo"><?php }?>
		</h4>
	</div>

	<?php if ($_smarty_tpl->tpl_vars['membresProfs']->value != Null) {?>
	<ul class="listeMails" style="display:none">
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['membresProfs']->value, 'prof', false, 'acro');
$_smarty_tpl->tpl_vars['prof']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['acro']->value => $_smarty_tpl->tpl_vars['prof']->value) {
$_smarty_tpl->tpl_vars['prof']->do_else = false;
?>
		<li>
			<input class="selecteur mails" type="checkbox" name="mails[]" value="<?php echo $_smarty_tpl->tpl_vars['prof']->value['prenom'];?>
 <?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['prof']->value['nom'],15,'...');?>
#<?php echo $_smarty_tpl->tpl_vars['prof']->value['mail'];?>
">
			<span class="labelProf"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['prof']->value['nom'],15,'...');?>
 <?php echo $_smarty_tpl->tpl_vars['prof']->value['prenom'];?>
 <?php echo (($tmp = @$_smarty_tpl->tpl_vars['prof']->value['classe'])===null||$tmp==='' ? '' : $tmp);?>
</span>
		</li>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</ul>
	<?php }?>
	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

</div>  <!-- panel-body -->

</div>  <!-- panel -->
<?php }
}
