<?php
/* Smarty version 3.1.34-dev-7, created on 2021-01-30 18:22:43
  from '/var/www/zedu/presences/templates/menu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_6015a3f3ea1e60_88250962',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd2fc998f1154b820ba778a0b77865200edb134b0' => 
    array (
      0 => '/var/www/zedu/presences/templates/menu.tpl',
      1 => 1611761186,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6015a3f3ea1e60_88250962 (Smarty_Internal_Template $_smarty_tpl) {
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
			<li><a href="index.php"><button type="button" class="btn btn-primary">Présences <img src="images/presencesIco.png" alt="P"></button></a></li>

			<?php if (($_smarty_tpl->tpl_vars['userStatus']->value == 'educ') || ($_smarty_tpl->tpl_vars['userStatus']->value == 'admin')) {?>
			<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Educs<b class="caret"></b></a>
				<ul class="dropdown-menu">
					<li><a href="index.php?action=presences&amp;mode=cours">Présences par cours</a></li>
					<li><a href="index.php?action=presences&amp;mode=classe">Présences par classe</a></li>
				</ul>
			</li>
			<?php }?>

			<?php if (($_smarty_tpl->tpl_vars['userStatus']->value == 'educ') || ($_smarty_tpl->tpl_vars['userStatus']->value == 'admin') || ($_smarty_tpl->tpl_vars['userStatus']->value == 'coordinateur')) {?>
			<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Retards<b class="caret"></b></a>
				<ul class="dropdown-menu">
					<li><a href="index.php?action=retard&amp;mode=scan">Scan des retards</a></li>
					<li role="separator" class="divider"></li>
					<li><a href="index.php?action=retard&amp;mode=traitement">Traitement des retards</a></li>
					<li><a href="index.php?action=retard&amp;mode=synthese">Synthèse des retards</a></li>
				</ul>
			</li>
			<?php }?>

			<?php if (($_smarty_tpl->tpl_vars['userStatus']->value != 'accueil')) {?>
			<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Listes<b class="caret"></b></a>
				<ul class="dropdown-menu">
					<li><a href="index.php?action=listes&amp;mode=parDate">Absences par date</a></li>
					<li><a href="index.php?action=listes&amp;mode=parClasse">Absences par classe</a></li>
					<li><a href="index.php?action=listes&amp;mode=parEleve">Absences par élève</a></li>
				</ul>
			</li>
			<?php }?>

			<?php if (($_smarty_tpl->tpl_vars['userStatus']->value == 'educ') || ($_smarty_tpl->tpl_vars['userStatus']->value == 'admin') || ($_smarty_tpl->tpl_vars['userStatus']->value == 'accueil')) {?>
			<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Justifications<b class="caret"></b></a>
				<ul class="dropdown-menu">
					<li><a href="index.php?action=signaler&amp;mode=normal">Signalements d'absences</a></li>
					<li><a href="index.php?action=signaler&amp;mode=speed"><i class="fa fa-bolt"></i> Signalements rapides</a></li>
				</ul>
			</li>
			<?php }?>

			<?php if (($_smarty_tpl->tpl_vars['userStatus']->value == 'admin') || ($_smarty_tpl->tpl_vars['userStatus']->value == 'direction')) {?>
			<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Admin<b class="caret"></b></a>
				<ul class="dropdown-menu">
					<?php if ($_smarty_tpl->tpl_vars['userStatus']->value == 'admin') {?>
						<li><a href="index.php?action=admin&amp;mode=heures">Liste des périodes de cours</a></li>
						<li><a href="index.php?action=admin&amp;mode=justifications">Liste des motifs d'absences</a></li>
						<li role="separator" class="divider"></li>
						<li><a href="index.php?action=admin&amp;mode=nettoyer">Nettoyer les archives</a></li>
					<?php }?>
					<li><a href="index.php?action=admin&amp;mode=assiduite">Assiduité à la prise de présence</a></li>
				</ul>
			</li>
			<?php }?>
			<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Préférences <b class="caret"></b></a>
				<ul class="dropdown-menu">
					<li><a href="javascript:void(0)" id="vis">Photos actuellement <span><?php if ($_smarty_tpl->tpl_vars['photosVis']->value == 'visible') {?>invisibles<?php } else { ?>visibles<?php }?></span></a></li>
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

</div>

<?php echo '<script'; ?>
 type="text/javascript">

	$(document).ready(function(){
		$('#vis').click(function(){
			var visible = Cookies.get('photosVis');
			if (visible == 'visible') {
				Cookies.set('photosVis', 'invisible', { expires: 30 });
				var texte = 'invisibles';
			}
				else {
				Cookies.set('photosVis', 'visible', { expires: 30 });
				var texte = 'visibles';
			}
			$('#vis span').text(texte);
			bootbox.alert({
				title: 'Photos visibles / invisibles',
				message: 'Les photos seront ' + texte + ' au prochain chargement.'
			})
		})
	})

<?php echo '</script'; ?>
>
<?php }
}
