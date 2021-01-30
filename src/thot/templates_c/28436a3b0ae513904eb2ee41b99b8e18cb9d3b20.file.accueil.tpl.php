<?php /* Smarty version Smarty-3.1.21-dev, created on 2021-01-30 18:23:01
         compiled from "./templates/accueil.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6870290716015a4058a4100-42615799%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '28436a3b0ae513904eb2ee41b99b8e18cb9d3b20' => 
    array (
      0 => './templates/accueil.tpl',
      1 => 1611761111,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6870290716015a4058a4100-42615799',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'TITREGENERAL' => 0,
    'message' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_6015a4058ca3a7_45453689',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6015a4058ca3a7_45453689')) {function content_6015a4058ca3a7_45453689($_smarty_tpl) {?><!DOCTYPE html>
<html lang="fr">

<head>
	<title><?php echo $_smarty_tpl->tpl_vars['TITREGENERAL']->value;?>
</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

	<link rel="stylesheet" href="screen.css" type="text/css" media="screen">
	<link rel="stylesheet" href="print.css" type="text/css" media="print">
	<link rel="stylesheet" href="bootstrap/fa/css/font-awesome.min.css" type="text/css" media="screen, print">

	<?php echo '<script'; ?>
 type="text/javascript" src="js/jquery-2.1.3.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="bootstrap/js/bootstrap.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="js/jquery.validate.js"><?php echo '</script'; ?>
>
</head>

<body>
	<div class="container">

		<?php echo $_smarty_tpl->getSubTemplate ("entete.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		<?php if ((isset($_smarty_tpl->tpl_vars['message']->value)&&$_smarty_tpl->tpl_vars['message']->value=='faux')) {?>
		<div class="alert alert-dismissable alert-danger">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			<p>Nom d'utilisateur ou mot de passe incorrect</p>
			<p>Votre tentative d'accès, votre adresse IP et le nom de votre fournisseur d'accès ont été enregistrés.</p>
		</div>
		<?php }?>

		<div class="row">

			<div class="panel-group" id="accordion">

				<?php echo $_smarty_tpl->getSubTemplate ("accueil/panel1.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

				
				

			</div>
			<!-- panel-group -->

		</div>
		<!-- row -->

	</div>
	<!-- container -->

	<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


	<?php echo '<script'; ?>
 type="text/javascript">
		$(document).ready(function() {

			$("input:enabled").eq(0).focus();

			$("#login").validate({
				rules: {
					userName: {
						required: true
					},
					mdp: {
						required: true
					}
				},
				errorElement: "span"
			});

			$("*[title]").tooltip();

			$(".pop").popover({
				trigger: 'hover'
			});

		})
	<?php echo '</script'; ?>
>


</body>



</html>
<?php }} ?>
