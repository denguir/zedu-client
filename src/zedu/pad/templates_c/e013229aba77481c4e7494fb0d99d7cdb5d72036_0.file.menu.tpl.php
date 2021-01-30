<?php
/* Smarty version 3.1.34-dev-7, created on 2021-01-30 18:22:36
  from '/var/www/zedu/pad/templates/menu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_6015a3ec7fae88_57500677',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e013229aba77481c4e7494fb0d99d7cdb5d72036' => 
    array (
      0 => '/var/www/zedu/pad/templates/menu.tpl',
      1 => 1611761186,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6015a3ec7fae88_57500677 (Smarty_Internal_Template $_smarty_tpl) {
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
			<li>
				<a href="index.php"><button class="btn btn-primary">Bloc-Notes <img src="images/padIco.png" alt="Bloc-notes" title="Page d'accueil du bloc-notes"></button></a>
			</li>

			<li class="dropdown"><a class="dropdown-toogle" data-toggle="dropdown" href="javascript:void(0)">Blocs Notes <b class="caret"></b></a>
				<ul class="dropdown-menu">
					<li><a href="index.php?action=parClasse">Par classe</a></li>
					<?php if ($_smarty_tpl->tpl_vars['listeCours']->value != Null) {?>
						<li><a href="index.php?action=parCours">Par cours</a></li>
					<?php }?>
				</ul>

			<li class="dropdown"><a class="dropdown-toogle" data-toggle="dropdown" href="javascript:void(0)">Partages<b class="caret"></b></a>
				<ul class="dropdown-menu">
					<li><a href="index.php?action=partager&amp;mode=parCours">Partager par cours</a></li>
					<li><a href="index.php?action=partager&amp;mode=parClasse">Partager par classe</a></li>
					<li class="divider"></li>
					<li><a href="index.php?action=mesPartages&amp;mode=parCours">Mes partages par cours</a></li>
					<li><a href="index.php?action=mesPartages&amp;mode=parClasse">Mes partages par classe</a></li>
				</ul>
			</li>

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
