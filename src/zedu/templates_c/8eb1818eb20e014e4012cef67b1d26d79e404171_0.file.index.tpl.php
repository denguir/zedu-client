<?php
/* Smarty version 3.1.34-dev-7, created on 2021-01-30 18:22:08
  from '/var/www/zedu/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_6015a3d02b6106_41186599',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8eb1818eb20e014e4012cef67b1d26d79e404171' => 
    array (
      0 => '/var/www/zedu/templates/index.tpl',
      1 => 1611761186,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:avertissementIP.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6015a3d02b6106_41186599 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/zedu/smarty/plugins/modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
?>
<!doctype html>
<html lang="fr">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php echo $_smarty_tpl->tpl_vars['titreApplication']->value;?>
</title>

<link rel="stylesheet" href="menu.css" type="text/css" media="screen">
<link rel="stylesheet" href="screen.css" type="text/css" media="screen">
<link rel="stylesheet" href="print.css" type="text/css" media="print">

<?php echo '<script'; ?>
 type="text/javascript" src="js/jquery-3.2.1.min.js"><?php echo '</script'; ?>
>
<link type="text/css" media="all" rel="stylesheet" href="bootstrap/css/bootstrap.css">
<?php echo '<script'; ?>
 type="text/javascript" src="bootstrap/js/bootstrap.min.js"><?php echo '</script'; ?>
>

</head>

<body>

<?php if ((isset($_smarty_tpl->tpl_vars['avertissementIP']->value))) {?>
	<?php $_smarty_tpl->_subTemplateRender("file:avertissementIP.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}?>

<div class="vertical-align">

	<div class="container">
		<?php if ((isset($_smarty_tpl->tpl_vars['alias']->value))) {?>
		<span class="glyphicon glyphicon-star" style="color:red"></span>
		<?php }?>

		<div class="col-md-offset-2 col-md-9 col-xs-12">

			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['applisDisponibles']->value, 'appli', false, 'title');
$_smarty_tpl->tpl_vars['appli']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['title']->value => $_smarty_tpl->tpl_vars['appli']->value) {
$_smarty_tpl->tpl_vars['appli']->do_else = false;
?>
				<div class="sousPrg btn btn-primary" title="<?php echo $_smarty_tpl->tpl_vars['appli']->value['nomLong'];?>
">
					<a href="<?php echo $_smarty_tpl->tpl_vars['appli']->value['URL'];?>
"><img src="images/<?php echo $_smarty_tpl->tpl_vars['appli']->value['icone'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['titre']->value;?>
" style="float:left">
						<?php if ((isset($_smarty_tpl->tpl_vars['messages']->value[$_smarty_tpl->tpl_vars['title']->value]))) {?><span class="badge badge-menu"><?php echo (($tmp = @count($_smarty_tpl->tpl_vars['messages']->value[$_smarty_tpl->tpl_vars['title']->value]))===null||$tmp==='' ? '' : $tmp);?>
</span><?php }?>
					<span class="titreSousPrg"><?php echo $_smarty_tpl->tpl_vars['appli']->value['nomLong'];?>
</span></a>
				</div>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

			<div id="titreAppli" style="clear:both"><?php echo $_smarty_tpl->tpl_vars['titre']->value;?>
</div>
			<div id="messages" class="hidden">
				<ul class="list-unstyled">
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['messages']->value, 'listeMessages', false, 'title');
$_smarty_tpl->tpl_vars['listeMessages']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['title']->value => $_smarty_tpl->tpl_vars['listeMessages']->value) {
$_smarty_tpl->tpl_vars['listeMessages']->do_else = false;
?>
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listeMessages']->value, 'unMessage', false, 'id');
$_smarty_tpl->tpl_vars['unMessage']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['id']->value => $_smarty_tpl->tpl_vars['unMessage']->value) {
$_smarty_tpl->tpl_vars['unMessage']->do_else = false;
?>
					<li class="msg"><img src="images/<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
Ico.png" alt="<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['title']->value,1,'');?>
"> [<?php echo $_smarty_tpl->tpl_vars['unMessage']->value['acronyme'];?>
] <?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['unMessage']->value['date'],5,'');?>
 - <?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['unMessage']->value['objet'],80);?>
</li>
					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</ul>
			</div>

			</div>

		</div>  <!-- col-md... -->

	</div>  <!-- container -->

</div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo '<script'; ?>
 type="text/javascript">

var titreGeneral = $("#titreAppli").text();

$(document).ready(function(){

	var nbMessages = $('.msg').length;
	if (nbMessages > 0)
		$('#messages').removeClass('hidden');

	$(".sousPrg").mouseenter(function(){
		var texte = $(this).attr("title");
		$("#titreAppli").html(texte);
		}).mouseleave(function(){
			$("#titreAppli").html(titreGeneral);
			})

	$(".sousPrg").click(function(){
		var link = $(this).children('a').attr('href');
		window.location.assign(link+"/index.php");
		})

})

<?php echo '</script'; ?>
>
</body>
</html>
<?php }
}
