<?php
/* Smarty version 3.1.34-dev-7, created on 2021-01-30 18:22:48
  from '/var/www/zedu/trombiEleves/templates/menu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_6015a3f84fd135_58071005',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '84782fe1473ecb6ff0611b478e31fca210735665' => 
    array (
      0 => '/var/www/zedu/trombiEleves/templates/menu.tpl',
      1 => 1611761186,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6015a3f84fd135_58071005 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container-fluid hidden-print">

	<nav class="navbar navbar-default" role="navigation">

	<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#barreNavigation">
			<span class="sr-only">Navigation portable</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>

		<a class="navbar-brand" href="../index.php"><button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-home"></span></button></a>

	</div>

	<div class="collapse navbar-collapse" id="barreNavigation">
		<ul class="nav navbar-nav">
			<li><a href="index.php"><button class="btn btn-primary">Trombi Élèves <img src="images/trombi.png" alt="T" title="Trombinoscope des élèves" data-placement="bottom"></button></a></li>
			<?php if ($_smarty_tpl->tpl_vars['lesCours']->value != Null) {?>
			<li class="dropdown">
				<a href="javascript:void(0)"
					id="parCours"
					class="dropdown-toggle"
					data-toggle="dropdown">
					Par Cours<b class="caret"></b>
				</a>
				<ul class="dropdown-menu">
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['lesCours']->value, 'unCours', false, 'option');
$_smarty_tpl->tpl_vars['unCours']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['option']->value => $_smarty_tpl->tpl_vars['unCours']->value) {
$_smarty_tpl->tpl_vars['unCours']->do_else = false;
?>
						<li >
							<a href="index.php?action=parCours&amp;cours=<?php echo $_smarty_tpl->tpl_vars['option']->value;?>
">
							<?php echo $_smarty_tpl->tpl_vars['unCours']->value['statut'];?>
 <?php echo $_smarty_tpl->tpl_vars['unCours']->value['libelle'];?>
 <?php echo $_smarty_tpl->tpl_vars['unCours']->value['annee'];?>
e <?php echo $_smarty_tpl->tpl_vars['unCours']->value['nbheures'];?>
h (<?php echo $_smarty_tpl->tpl_vars['unCours']->value['coursGrp'];?>
)
							<?php if ($_smarty_tpl->tpl_vars['unCours']->value['nomCours'] != '') {?><strong><?php echo $_smarty_tpl->tpl_vars['unCours']->value['nomCours'];?>
</strong><?php }?>
							</a>
						</li>
					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</ul>
			</li>
			<?php }?>
		</ul>

		<ul class="nav navbar-nav pull-right">
			<?php if ((isset($_smarty_tpl->tpl_vars['alias']->value))) {?>
			<li><a href="../aliasOut.php"><img src="../images/alias.png" alt="Alias"><?php echo $_smarty_tpl->tpl_vars['alias']->value;?>
</a></li>
			<?php }?>
			<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><?php echo $_smarty_tpl->tpl_vars['identite']->value['prenom'];?>
 <?php echo $_smarty_tpl->tpl_vars['identite']->value['nom'];?>

			<?php if ($_smarty_tpl->tpl_vars['titulaire']->value) {?>[<?php echo implode(',',$_smarty_tpl->tpl_vars['titulaire']->value);?>
]<?php }?><b class="caret"></b></a>
				<ul class="dropdown-menu">
					<li><a href="../profil/index.php"><span class="glyphicon glyphicon-user"></span> Modifiez votre profil</a></li>
					<li><a href="../logout.php"><span class="glyphicon glyphicon-off"></span> Déconnexion</a></li>
				</ul>
			</li>
		</ul>
	</div>  <!-- collapse -->

	</nav>

</div>  <!-- container -->
<?php }
}
