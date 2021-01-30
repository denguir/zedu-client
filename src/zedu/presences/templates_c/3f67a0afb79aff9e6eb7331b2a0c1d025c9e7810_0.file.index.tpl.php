<?php
/* Smarty version 3.1.34-dev-7, created on 2021-01-30 18:22:43
  from '/var/www/zedu/presences/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_6015a3f3e95e79_94532819',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3f67a0afb79aff9e6eb7331b2a0c1d025c9e7810' => 
    array (
      0 => '/var/www/zedu/presences/templates/index.tpl',
      1 => 1611761186,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../../javascript.js' => 1,
    'file:../../styles.sty' => 1,
    'file:menu.tpl' => 1,
    'file:pageVideNews.tpl' => 1,
    'file:../../templates/corpsPageVide.tpl' => 1,
    'file:../../templates/footer.tpl' => 1,
  ),
),false)) {
function content_6015a3f3e95e79_94532819 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php echo $_smarty_tpl->tpl_vars['titre']->value;?>
</title>

<?php $_smarty_tpl->_subTemplateRender('file:../../javascript.js', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:../../styles.sty', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</head>
<body>

<?php $_smarty_tpl->_subTemplateRender("file:menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container-fluid">

	<?php if ((isset($_smarty_tpl->tpl_vars['selecteur']->value))) {?>
		<?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['selecteur']->value).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
	<?php }?>

	<?php if (((isset($_smarty_tpl->tpl_vars['message']->value)))) {?>
	<div class="alert alert-dismissable alert-<?php echo (($tmp = @$_smarty_tpl->tpl_vars['message']->value['urgence'])===null||$tmp==='' ? 'info' : $tmp);?>

		<?php if ((!(in_array($_smarty_tpl->tpl_vars['message']->value['urgence'],array('danger','warning'))))) {?> auto-fadeOut<?php }?>">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		<h4><span class="glyphicon
			<?php if (in_array($_smarty_tpl->tpl_vars['message']->value['urgence'],array('success','info'))) {?>glyphicon-ok<?php }?>
			<?php if (in_array($_smarty_tpl->tpl_vars['message']->value['urgence'],array('danger','warning'))) {?>glyphicon-exclamation-sign<?php }?>
			"></span> <?php echo $_smarty_tpl->tpl_vars['message']->value['title'];?>
</h4>
		<p><?php echo $_smarty_tpl->tpl_vars['message']->value['texte'];?>
</p>
	</div>
	<?php }?>

</div>  <!-- container -->

<img src="../images/bigwait.gif" id="wait" style="display:none" alt="wait">

<div id="corpsPage">
<?php if ((isset($_smarty_tpl->tpl_vars['corpsPage']->value))) {?>
	<?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['corpsPage']->value).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
} else { ?>
	<?php if ((isset($_smarty_tpl->tpl_vars['listeFlashInfos']->value))) {?>
		<?php $_smarty_tpl->_subTemplateRender('file:pageVideNews.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
		<?php } else { ?>
		<?php $_smarty_tpl->_subTemplateRender("file:../../templates/corpsPageVide.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
	<?php }
}?>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:../../templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo '<script'; ?>
 type="text/javascript">

window.setTimeout(function() {
    $(".auto-fadeOut").fadeTo(500, 0).slideUp(500, function(){
        $(this).remove();
	    });
	}, 3000);

$(document).ready (function() {

	// selectionner le premier champ de formulaire dans le corps de page ou dans le sélecteur si pas de corps de page; sauf les datepickers
	if ($("#corpsPage form").length != 0)
		$("#corpsPage form input:visible:enabled").not('.datepicker,.timepicker').first().focus();
		else
		$("form input:visible:enabled").not('.datepicker,.timepicker').first().focus();

	$("*[title]").tooltip();

	$(".pop").popover({
		trigger:'hover'
		});
	$(".pop").click(function(){
		$(".pop").not(this).popover("hide");
		})

	$("input").not(".autocomplete").attr("autocomplete","off");

})

<?php echo '</script'; ?>
>

</body>
</html>
<?php }
}
