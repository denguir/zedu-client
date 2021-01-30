<?php
/* Smarty version 3.1.34-dev-7, created on 2021-01-30 18:22:39
  from '/var/www/zedu/bullTQ/templates/news.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_6015a3ef69a230_67846653',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '28fbc6c93c5d0b83c4a53ea6b571c76975696026' => 
    array (
      0 => '/var/www/zedu/bullTQ/templates/news.tpl',
      1 => 1611761186,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6015a3ef69a230_67846653 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/zedu/smarty/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>
<div class="container">

	<div class="row">

		<div class="col-md-9 col-sm-12">

			<?php if ($_smarty_tpl->tpl_vars['userStatus']->value == 'admin') {?>
			<a class="btn btn-primary pull-right" href="index.php?action=news&amp;mode=edit"><span class="glyphicon  glyphicon-envelope"></span> Ajouter une nouvelle</a> <?php }?>
			<?php if (count($_smarty_tpl->tpl_vars['flashInfos']->value) > 0) {?>
			<h2>Dernières nouvelles</h2> <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['flashInfos']->value, 'uneInfo');
$_smarty_tpl->tpl_vars['uneInfo']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['uneInfo']->value) {
$_smarty_tpl->tpl_vars['uneInfo']->do_else = false;
?>
			<div id="flashInfo<?php echo $_smarty_tpl->tpl_vars['uneInfo']->value['id'];?>
">
				<h3 style="clear:both">Ce <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['uneInfo']->value['date'],"%d/%m/%Y");?>
 - <span id="titre<?php echo $_smarty_tpl->tpl_vars['uneInfo']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['uneInfo']->value['titre'];?>
</span></h3> <?php if ($_smarty_tpl->tpl_vars['userStatus']->value == 'admin') {?>
				<a style="float:left" href="index.php?action=news&amp;mode=edit&amp;id=<?php echo $_smarty_tpl->tpl_vars['uneInfo']->value['id'];?>
" class="editInfo"><span class="glyphicon glyphicon glyphicon-edit" style="color: green; font-size: 200%"></span></a>
				<a href="javascript:void()" style="float:right" id="<?php echo $_smarty_tpl->tpl_vars['uneInfo']->value['id'];?>
" class="delInfo"><span class="glyphicon glyphicon glyphicon-remove" style="color:red; font-size:200%"></span></a> <?php }?>
				<div class="flashInfo">
					<p><?php echo $_smarty_tpl->tpl_vars['uneInfo']->value['texte'];?>
</p>
				</div>
			</div>
			<!-- flashInfo id -->
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			<?php }?>
			

		</div>
		<!-- col-md... -->

		<div class="col-md-3 col-sm-12">

			<h3>Table des matières</h3>
			<ul>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['flashInfos']->value, 'uneInfo');
$_smarty_tpl->tpl_vars['uneInfo']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['uneInfo']->value) {
$_smarty_tpl->tpl_vars['uneInfo']->do_else = false;
?>
				<li><a href="#flashInfo<?php echo $_smarty_tpl->tpl_vars['uneInfo']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['uneInfo']->value['titre'];?>
</a></li>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</ul>

		</div>
		<!-- col-md... -->
	</div>
	<!-- row -->

</div>
<!-- container -->

<!-- ......................   Boîte modale pour la suppression d'une news ..................... -->

<div class="modal fade" id="modalDel" tabindex="-1" role="dialog" aria-labelledby="titreSuppression" aria-hidden="true">

	<div class="modal-dialog">

		<div class="modal-content">

			<div class="modal-header">

				<h4 class="modal-title" id="titreSuppression">Suppression de la nouvelle</h4>

			</div>

			<div class="modal-body">

				<p><span class="glyphicon glyphicon-warning-sign" style="font-size:2em; color: red"></span> Voulez-vous vraiment supprimer la nouvelle intitulée</p>
				<p><strong id="newsTitle"></strong>?</p>

			</div>

			<div class="modal-footer">

				<form name="formSuppr" action="index.php" method="POST" class="form-vertical" role="form">
					<button type="submit" class="btn btn-primary pull-rigth">Supprimer</button>
					<button class="btn btn-default pull-right" data-dismiss="modal" type="reset">Annuler</button>
					<input type="hidden" name="id" id="newsId" value="">
					<input type="hidden" name="action" value="news">
					<input type="hidden" name="mode" value="del">
				</form>

			</div>

		</div>

	</div>

</div>



<?php echo '<script'; ?>
 type="text/javascript">
	$(document).ready(function() {

		$("a.delInfo").click(function() {
			var id = $(this).attr('id');
			var titre = $("#titre" + id).text();
			$("#newsId").val(id);
			$("#newsTitle").text(titre);
			$("#modalDel").modal('show');
		})

	})
<?php echo '</script'; ?>
>
<?php }
}
