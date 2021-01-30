<?php
/* Smarty version 3.1.34-dev-7, created on 2021-01-30 18:22:23
  from '/var/www/zedu/profil/templates/photoProfil.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_6015a3df382c95_83969212',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '66b5c1f422fd69275b8f49672e31747189281781' => 
    array (
      0 => '/var/www/zedu/profil/templates/photoProfil.tpl',
      1 => 1611761186,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6015a3df382c95_83969212 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['photo']->value))) {?> 
<img class="img-responsive" style="margin:auto; width:100px;" src="../photosProfs/<?php echo $_smarty_tpl->tpl_vars['photo']->value;?>
?rand=<?php echo time();?>
"> <?php } else { ?> <?php if ($_smarty_tpl->tpl_vars['identite']->value['sexe'] == 'M') {?>
<img class="img-responsive" style="margin:auto; width:100px;" src="../images/profMasculin.jpg" alt="M"> <?php } else { ?>
<img class="img-responsive" style="margin:auto; width:100px;" src="../images/profFeminin.jpg" alt="F"> <?php }?>

<?php }
}
}
