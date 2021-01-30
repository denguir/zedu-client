<?php
/* Smarty version 3.1.34-dev-7, created on 2021-01-30 18:22:39
  from '/var/www/zedu/bullTQ/templates/menu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_6015a3ef691147_19415896',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd8678c00b3f2674c923da012120d9aaeb2a4090a' => 
    array (
      0 => '/var/www/zedu/bullTQ/templates/menu.tpl',
      1 => 1611761186,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6015a3ef691147_19415896 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container hidden-print">

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
			<li><a href="index.php"><button type="button" class="btn btn-primary">Bulletins TQ <img src="images/bullTQIco.png" alt="P"></button></a></li>

			<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="javascript:void(0)">Impression<b class="caret"></b></a>
				<ul class="dropdown-menu">
					<li><a href="index.php?action=print&amp;mode=indivEcran">Bulletin individuel à l'écran</a></li>
					<li><a href="index.php?action=print&amp;mode=indivPDF">Bulletin individuel PDF</a></li>
					<li><a href="index.php?action=print&amp;mode=classePDF">Bulletin par classe PDF</a></li>
				</ul>
			</li>

			<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="javascript:void(0)">Encodage Bulletin<b class="caret"></b></a>
				<ul class="dropdown-menu">
					<li><a href="index.php?action=bulletin">Encodage des bulletins</a></li>
					<li><a href="index.php?action=stages">Évaluations des stages</a></li>
				</ul>
			</li>

			<?php if (($_smarty_tpl->tpl_vars['tituTQ']->value)) {?>
			<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="javascript:void(0)">Titulaire <?php echo implode(',',$_smarty_tpl->tpl_vars['tituTQ']->value);?>
 <b class="caret"></b></a>
				<ul class="dropdown-menu">
					<li><a href="index.php?action=titu&amp;mode=remarques">Remarques aux bulletins</a></li>
					<li><a href="index.php?action=admin&amp;mode=stages">Attribution des stages aux profs</a></li>
				</ul>
			</li>
			<?php }?>

			<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="javascript:void(0)">Délibés <b class="caret"></b></a>
				<ul class="dropdown-menu">
					<li><a href="index.php?action=delibe&amp;mode=parClasse">Feuille de synthèse par classe</a></li>
					<li><a href="index.php?action=delibe&amp;mode=individuel">Feuille de délibé individuelle</a></li>
					<li><a href="index.php?action=delibe&amp;mode=notifications">Envoi des notifications</a></li>
				</ul>
			</li>
			<?php if ($_smarty_tpl->tpl_vars['userStatus']->value == 'admin') {?>
			<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="javascript:void(0)">Admin <b class="caret"></b></a>
				<ul class="dropdown-menu">
					<li><a href="index.php?action=admin&amp;mode=imagesCours">Initialiser images des noms des cours</a></li>
					<li><a href="index.php?action=admin&amp;mode=typologie">Typologie des cours</a></li>
					<li><a href="index.php?action=admin&amp;mode=competences">Gestion des compétences</a></li>
					<li><a href="index.php?action=admin&amp;mode=initialiser">Initialiser les bulletins</a></li>
					<li><a href="index.php?action=admin&amp;mode=titulaires">Titulariats</a></li>
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

</div>
<?php }
}
