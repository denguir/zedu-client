<?php
/* Smarty version 3.1.34-dev-7, created on 2021-01-30 18:22:14
  from '/var/www/zedu/ades/templates/menu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_6015a3d654c822_67255268',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '55ee0a3110343ac89a22198ceab0161087425818' => 
    array (
      0 => '/var/www/zedu/ades/templates/menu.tpl',
      1 => 1611761186,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6015a3d654c822_67255268 (Smarty_Internal_Template $_smarty_tpl) {
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
			<li><a href="index.php"><button class="btn btn-primary">ADES <img src="images/adesIco.png" alt="ADES" title="Page d'accueil de ADES"></button></a></li>
			<li class="dropdown"><a href="javascript.void(0)" class="dropdown-toggle" data-toggle="dropdown">
				Élèves <b class="caret"></b></a>
				<ul class="dropdown-menu">
					<li><a href="index.php?action=eleve&amp;mode=classeEleve">Sélection nom / classe</a></li>
					<li><a href="index.php?action=eleve&amp;mode=trombinoscope">Par le trombinoscope</a></li>
				</ul>
			</li>

			<li class="dropdown"><a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">
				Retenues <b class="caret"></b></a>
				<ul class="dropdown-menu">
					<li><a href="index.php?action=retenues&amp;mode=liste">Listes d'élèves en retenues</a></li>
					<?php if (($_smarty_tpl->tpl_vars['userStatus']->value == 'admin') || ($_smarty_tpl->tpl_vars['userStatus']->value == 'educ')) {?><li><a href="index.php?action=retenues&amp;mode=dates">Dates et clonages</a></li><?php }?>
					<?php if (($_smarty_tpl->tpl_vars['userStatus']->value == 'admin') || ($_smarty_tpl->tpl_vars['userStatus']->value == 'educ')) {?><li><a href="index.php?action=retenues&amp;mode=new">Nouvelle retenue</a></li><?php }?>
				</ul>
			</li>

			<li class="dropdown"><a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">
				Synthèses <b class="caret"></b></a>
				<ul class="dropdown-menu">
					<li><a href="index.php?action=synthese&amp;mode=showFiches">Fiches de comportement</a></li>
					<li><a href="index.php?action=synthese&amp;mode=statistiques">Statistiques par niveau</a></li>
				</ul>
			</li>

			<li class="dropdown"><a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">
				Admin <b class="caret"></b></a>
				<ul class="dropdown-menu">
					<li><a href="index.php?action=admin&amp;mode=remAuto">Gestion des textes automatiques</a></li>
					<?php if ($_smarty_tpl->tpl_vars['userStatus']->value == 'admin') {?>
					<li><a href="index.php?action=admin&amp;mode=editBilletRetenue">Édition des billets de retenue</a></li>
					<li><a href="index.php?action=admin&amp;mode=editSignature">Édition de la signature des mails</a></li>
					<li><a href="index.php?action=admin&amp;mode=editMailRetenue">Édition du texte type des mails</a></li>
					<li><a href="index.php?action=admin&amp;mode=users">Utilisateurs</a></li>
					<li><a href="index.php?action=admin&amp;mode=printPublish">Gestion des publications</a></li>
					<li class="divider"></li>
					<li><a href="index.php?action=admin&amp;mode=editTypesFaits">Construction des faits disciplinaires</a></li>
					<?php }?>
				</ul>
			</li>
			</ul>
				<ul class="nav navbar-nav pull-right">
				<?php if ((isset($_smarty_tpl->tpl_vars['alias']->value))) {?>
					<li><a href="../aliasOut.php"><img src="../images/alias.png" alt="Alias"><?php echo $_smarty_tpl->tpl_vars['alias']->value;?>
</a></li>
				<?php }?>
				<li class="dropdown">
					<a href="javascript.void(0)" class="dropdown-toggle" data-toggle="dropdown">
						<span class="glyphicon glyphicon-user"></span>
						<strong><?php echo $_smarty_tpl->tpl_vars['identite']->value['prenom'];?>
 <?php echo $_smarty_tpl->tpl_vars['identite']->value['nom'];?>

							<?php if ($_smarty_tpl->tpl_vars['titulaire']->value) {?>[<?php echo implode(',',$_smarty_tpl->tpl_vars['titulaire']->value);?>
]<?php }?>
						</strong><b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="../profil/index.php">Modifier le profil</a></li>
							<li><a href="../logout.php">Déconnexion <span class="glyphicon glyphicon-off"></span></a></li>
						</ul>
				</li>
			</ul>
	</div>  <!-- collapse -->
	</nav>
</div>
<?php }
}
