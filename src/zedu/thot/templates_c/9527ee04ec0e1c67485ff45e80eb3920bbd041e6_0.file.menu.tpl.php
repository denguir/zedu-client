<?php
/* Smarty version 3.1.34-dev-7, created on 2021-01-30 18:22:53
  from '/var/www/zedu/thot/templates/menu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_6015a3fd0bb5a5_62480289',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9527ee04ec0e1c67485ff45e80eb3920bbd041e6' => 
    array (
      0 => '/var/www/zedu/thot/templates/menu.tpl',
      1 => 1611761186,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6015a3fd0bb5a5_62480289 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container-fluid hidden-print">

	<nav class="navbar navbar-default" role="navigation" style="margin-bottom: 0">

	<div class="navbar-header">

		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#barreNavigation">
			<span class="sr-only">Navigation portable</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
		<a class="navbar-brand" href="../index.php"><button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-home"></span></button></a>

	</div>  <!-- navbar-header <-->

	<div class="collapse navbar-collapse" id="barreNavigation">

		<ul class="nav navbar-nav">

			<li><a href="index.php"><button class="btn btn-primary">THOT <img src="images/thotIco.png" alt="THOT" title="Page d'accueil de THOT"></button></a></li>

			<li class="dropdown">
				<a class="dropdown-toogle" data-toggle="dropdown" href="javascript:void(0)">Annonces <b class="caret"></b></a>
				<ul class="dropdown-menu">
					<li><a href="index.php?action=notification&amp;mode=notif">Annonces et historique des annonces</a></li>
					<li><a href="index.php?action=notification&amp;mode=subjectif">Vue subjective des annonces</a></li>
				</ul>
			</li>

			<li class="dropdown">
				<a class="dropdown-toogle" data-toggle="dropdown" href="javascript:void(0)">J. de classe
				<b class="caret"></b></a>
				<ul class="dropdown-menu">
					<?php if ($_smarty_tpl->tpl_vars['listeCours']->value != Null) {?>
					<li><a href="index.php?action=jdc&amp;mode=coursGrp"><i class="fa fa-mortar-board"></i> Journal de classe par cours</a></li>
					<?php }?>
					<?php if (($_smarty_tpl->tpl_vars['userStatus']->value == 'educ') || ($_smarty_tpl->tpl_vars['userStatus']->value == 'direction') || ($_smarty_tpl->tpl_vars['userStatus']->value == 'admin')) {?>
					<li><a href="index.php?action=jdc&amp;mode=jdcAny"><i class="fa fa-globe"></i> Notes au Journal de classe (éducs/direction)</a></li>
					<?php }?>
					<li><a href="index.php?action=jdc&amp;mode=subjectif"><i class="fa fa-eye"></i> Vue subjective par élève</a></li>

					<li role="separator" class="divider"></li>

					<li><a href="index.php?action=remediation"><i class="fa fa-question-circle"></i> Offres de remédiation</a></li>
					<li><a href="index.php?action=agendas"><i class="fa fa-calendar"></i> Agendas</a></li>
					<?php if (($_smarty_tpl->tpl_vars['userStatus']->value == 'admin')) {?>
					<li role="separator" class="divider"></li>
					<li><a href="index.php?action=admin&amp;mode=itemsJDC">Rubriques au JDC</a></li>
					<li><a href="index.php?action=admin&amp;mode=itemsAgenda">Rubriques à l'agenda</a></li>
					<?php }?>

				</ul>
			</li>

			<?php if (!empty($_smarty_tpl->tpl_vars['titulaire']->value)) {?>
			<li class="dropdown">
				<a class="dropdown-toogle" data-toggle="dropdown" href="javascript:void(0)">Titulaire
				<b class="caret"></b></a>
				<ul class="dropdown-menu">
					<li>
						<a href="index.php?action=gestion&amp;mode=parents">Liste des parents de <?php echo implode(',',$_smarty_tpl->tpl_vars['titulaire']->value);?>
</a>
					</li>
				</ul>
			</li>
			<?php }?>


			<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="javascript:void(0)">Gestion <b class="caret"></b></a>
				<ul class="dropdown-menu">
					<li><a href="index.php?action=admin&amp;mode=modele">Modèle de semaine</a></li>
					<li><a href="index.php?action=admin&amp;mode=gestGroupes">Gestion des groupes</a></li>
				</ul>
			</li>

			<li class="dropdown"><a href="javascript.void(0)" class="dropdown-toggle" data-toggle="dropdown">
				Documents <b class="caret"></b></a>
				<ul class="dropdown-menu">
					<li><a href="index.php?action=files&amp;mode=mydocs">Mes documents</a></li>
					<li><a href="index.php?action=files&amp;mode=share">Mes partages <i class="fa fa-share-alt"></i></a></li>
					<li><a href="index.php?action=files&amp;mode=sharedWithMe">Partagés avec moi <i class="fa fa-share"></i></a></li>
					<li role="separator" class="divider"></li>
					<li><a href="index.php?action=files&amp;mode=casier">Mon casier électronique</a></li>
				</ul>
			</li>

			<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="javascript:void(0)">Forums <b class="caret"></b></a>
				<ul class="dropdown-menu">
					<li><a href="index.php?action=forum&amp;mode=categories">Accès aux forums</a></li>
					<li><a href="index.php?action=forum&amp;mode=gestion">Gestion de vos abonnements</a></li>
				</ul>
			</li>

			<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="javascript:void(0)">R. de parents <b class="caret"></b></a>
				<ul class="dropdown-menu">
					<?php if ($_smarty_tpl->tpl_vars['userStatus']->value == 'admin') {?>
					<li><a href="index.php?action=reunionParents&amp;mode=editNew">Nouvelle RP ou modification</a></li>
					<li><a href="index.php?action=reunionParents&amp;mode=periodesAdmin">Gestion des périodes de rendez-vous</a></li>
					<?php } else { ?>
					<li><a href="index.php?action=reunionParents&amp;mode=periodesProfs">Gestion des périodes de rendez-vous</a></li>
					<?php }?>

					<?php if ($_smarty_tpl->tpl_vars['userStatus']->value == 'admin') {?>
					<li><a href="index.php?action=reunionParents&amp;mode=printEleves">Imprimer les fiches "parents"</a></li>
					<?php }?>

				</ul>
			</li>

			<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="javascript:void(0)">Bibliothèque <b class="caret"></b></a>
				<ul class="dropdown-menu">
					<?php if ($_smarty_tpl->tpl_vars['userStatus']->value == 'educ') {?>
					<li><a href="index.php?action=bib">Gestion bibliothèque</a></li>
					<?php }?>
					<li><a href="index.php?action=bib&amp;mode=emprunt">Emprunt de livre</a></li>
				</ul>
			</li>

			<?php if (($_smarty_tpl->tpl_vars['userStatus']->value == 'admin') || ($_smarty_tpl->tpl_vars['userStatus']->value == 'direction')) {?>
				<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="javascript:void(0)">Admin <b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li><a href="index.php?action=connexions&amp;mode=date">Connexions par date</a></li>
						<li><a href="index.php?action=connexions&amp;mode=logins">Logins en temps réel</a></li>
						<li><a href="index.php?action=stats&amp;mode=frequentation">Statistiques fréquentation</a></li>
						<li><a href="index.php?action=admin&amp;mode=bulletin">Accès aux bulletins</a></li>
						<li><a href="index.php?action=admin&amp;mode=gestParents">Gestion des parents</a></li>
						<li role="separator" class="divider"></li>
						<li><a href="index.php?action=stats&amp;mode=jdc">Statistiques JDC par prof</a></li>
						<li><a href="index.php?action=archive&amp;mode=jdc">Archivage et impression des archives JDC</a></li>
					</ul>
				</li>
			<?php }?>

		</ul>  <!-- nav navbar-nav -->

		<ul class="nav navbar-nav pull-right">
			<?php if ((isset($_smarty_tpl->tpl_vars['alias']->value))) {?>
			<li><a href="../aliasOut.php"><img src="../images/alias.png" alt="Alias"><?php echo $_smarty_tpl->tpl_vars['alias']->value;?>
</a></li>
			<?php }?>
			<li class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown" href="#"><?php echo $_smarty_tpl->tpl_vars['identite']->value['prenom'];?>
 <?php echo $_smarty_tpl->tpl_vars['identite']->value['nom'];?>

			<?php if ($_smarty_tpl->tpl_vars['titulaire']->value) {?>[<?php echo implode(',',$_smarty_tpl->tpl_vars['titulaire']->value);?>
]<?php }?>
			<b class="caret"></b></a>
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
