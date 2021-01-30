<?php
/* Smarty version 3.1.34-dev-7, created on 2021-01-30 18:22:48
  from '/var/www/zedu/trombiEleves/templates/accueil.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_6015a3f851cb67_47329560',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bd2d49097478ace577edfb893240cd7fa9e6650c' => 
    array (
      0 => '/var/www/zedu/trombiEleves/templates/accueil.tpl',
      1 => 1611761186,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6015a3f851cb67_47329560 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/zedu/smarty/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>
<div class="container-fluid">

<h2>Trombinoscope des élèves</h2>
<div class="row">

	<div class="col-md-4 col-sm-12">

		<h4>Synthèse</h4>

		<img src="../images/eleves.png" style="float:left; margin: 2em; padding: 1em;" class="photoEleve" alt="trombinoscope">

		<p>Nous sommes le <strong><?php echo smarty_modifier_date_format(time(),'%d/%m/%Y');?>
</strong> et il est déjà <strong><?php echo smarty_modifier_date_format(time(),'%Hh%M');?>
</strong></p>
		<p>A l'heure qu'il est, nous avons</p>
		<ul>
			<li><strong><?php echo $_smarty_tpl->tpl_vars['nbClasses']->value;?>
</strong> Classes</li>
			<li><strong><?php echo $_smarty_tpl->tpl_vars['nbEleves']->value;?>
</strong> Élèves</li>
		</ul>

	</div>  <!-- col-md... -->

	<div class="col-md-8 col-sm-12">

		<h4><i class="fa fa-birthday-cake"></i> Prochains Anniversaires</h4>

		<ul id="tabs" class="nav nav-tabs" data-tabs="tabs">
			<li class="active"><a href="#tabs-1" data-toggle="tab">Aujourd'hui <span class="glyphicon glyphicon-arrow-right"></span> <?php echo smarty_modifier_date_format("+0 days","%d/%m");?>
</a></li>
			<li><a href="#tabs-2" data-toggle="tab">Demain <span class="glyphicon glyphicon-arrow-right"></span> <?php echo smarty_modifier_date_format("+1 days","%d/%m");?>
</a></li>
			<li><a href="#tabs-3" data-toggle="tab">+2 jours <span class="glyphicon glyphicon-arrow-right"></span> <?php echo smarty_modifier_date_format("+2 days","%d/%m");?>
</a></li>
			<li><a href="#tabs-4" data-toggle="tab">+3 jours <span class="glyphicon glyphicon-arrow-right"></span> <?php echo smarty_modifier_date_format("+3 days","%d/%m");?>
</a></li>
		</ul>

		<div id="my-tab-content" class="tab-content">

			<div class="tab-pane active" id="tabs-1">
				<h3>Aujourd'hui <?php echo smarty_modifier_date_format("+0 days","%d/%m");?>
</h3>
				<?php $_smarty_tpl->_assignInScope('jour', $_smarty_tpl->tpl_vars['statAccueil']->value['listeAnniv'][1]);?>
				<ul>
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['jour']->value, 'day');
$_smarty_tpl->tpl_vars['day']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['day']->value) {
$_smarty_tpl->tpl_vars['day']->do_else = false;
?>
					<?php $_smarty_tpl->_assignInScope('matricule', $_smarty_tpl->tpl_vars['day']->value['matricule']);?>
					<?php $_smarty_tpl->_assignInScope('nomPrenom', $_smarty_tpl->tpl_vars['day']->value['nomPrenom']);?>
						<li><a href="index.php?action=parEleve&amp;matricule=<?php echo $_smarty_tpl->tpl_vars['matricule']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['day']->value['groupe'];?>
 <strong><?php echo $_smarty_tpl->tpl_vars['day']->value['nomPrenom'];?>
</strong></a></li>
					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</ul>
			</div>

			<div class="tab-pane" id="tabs-2">

				<h3>Demain: le <strong><?php echo smarty_modifier_date_format("+1 days","%A");?>
 <?php echo smarty_modifier_date_format("+1 days","%d/%m");?>
</strong></h3>
				<?php $_smarty_tpl->_assignInScope('jour', $_smarty_tpl->tpl_vars['statAccueil']->value['listeAnniv'][2]);?>
				<ul>
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['jour']->value, 'day');
$_smarty_tpl->tpl_vars['day']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['day']->value) {
$_smarty_tpl->tpl_vars['day']->do_else = false;
?>
						<?php $_smarty_tpl->_assignInScope('matricule', $_smarty_tpl->tpl_vars['day']->value['matricule']);?>
						<?php $_smarty_tpl->_assignInScope('nomPrenom', $_smarty_tpl->tpl_vars['day']->value['nomPrenom']);?>
						<li><a href="index.php?action=parEleve&amp;matricule=<?php echo $_smarty_tpl->tpl_vars['matricule']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['day']->value['groupe'];?>
 <strong><?php echo $_smarty_tpl->tpl_vars['day']->value['nomPrenom'];?>
</strong></a></li>
					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</ul>

			</div>

			<div class="tab-pane" id="tabs-3">

				<h3>Dans deux jours: le <strong><?php echo smarty_modifier_date_format("+2 days","%A");?>
 <?php echo smarty_modifier_date_format("+2 days","%d/%m");?>
</strong></h3>
				<?php $_smarty_tpl->_assignInScope('jour', $_smarty_tpl->tpl_vars['statAccueil']->value['listeAnniv'][3]);?>
				<ul>
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['jour']->value, 'day');
$_smarty_tpl->tpl_vars['day']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['day']->value) {
$_smarty_tpl->tpl_vars['day']->do_else = false;
?>
						<?php $_smarty_tpl->_assignInScope('matricule', $_smarty_tpl->tpl_vars['day']->value['matricule']);?>
						<?php $_smarty_tpl->_assignInScope('nomPrenom', $_smarty_tpl->tpl_vars['day']->value['nomPrenom']);?>
						<li><a href="index.php?action=parEleve&amp;matricule=<?php echo $_smarty_tpl->tpl_vars['matricule']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['day']->value['groupe'];?>
 <strong><?php echo $_smarty_tpl->tpl_vars['day']->value['nomPrenom'];?>
</strong></a></li>
					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</ul>

			</div>

			<div class="tab-pane" id="tabs-4">

				<h3>Dans trois jours: le <strong><?php echo smarty_modifier_date_format("+3 days","%A");?>
 <?php echo smarty_modifier_date_format("+3 days","%d/%m");?>
</strong></h3>
				<?php $_smarty_tpl->_assignInScope('jour', $_smarty_tpl->tpl_vars['statAccueil']->value['listeAnniv'][4]);?>
				<ul>
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['jour']->value, 'day');
$_smarty_tpl->tpl_vars['day']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['day']->value) {
$_smarty_tpl->tpl_vars['day']->do_else = false;
?>
						<?php $_smarty_tpl->_assignInScope('matricule', $_smarty_tpl->tpl_vars['day']->value['matricule']);?>
						<?php $_smarty_tpl->_assignInScope('nomPrenom', $_smarty_tpl->tpl_vars['day']->value['nomPrenom']);?>
						<li><a href="index.php?action=parEleve&amp;matricule=<?php echo $_smarty_tpl->tpl_vars['matricule']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['day']->value['groupe'];?>
 <strong><?php echo $_smarty_tpl->tpl_vars['day']->value['nomPrenom'];?>
</strong></a></li>
					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</ul>

			</div>

		</div> <!-- my-tab-content -->

	</div>  <!-- col-md... -->

</div>  <!-- row -->

</div>  <!-- container -->
<?php }
}
