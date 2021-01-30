<?php
/* Smarty version 3.1.34-dev-7, created on 2021-01-30 18:22:50
  from '/var/www/zedu/trombiProfs/templates/menu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_6015a3fa4fc234_54887366',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1970eb15648694df78325f4577e5c8879e7004af' => 
    array (
      0 => '/var/www/zedu/trombiProfs/templates/menu.tpl',
      1 => 1611761186,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6015a3fa4fc234_54887366 (Smarty_Internal_Template $_smarty_tpl) {
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
			
			<li><a href="index.php"><button class="btn btn-primary">Trombi Profs <img src="images/trombi.png" alt="TrombiProfs" title="Trombinoscope des profs"></button></a></li>
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

</div>  <!-- container --><?php }
}
