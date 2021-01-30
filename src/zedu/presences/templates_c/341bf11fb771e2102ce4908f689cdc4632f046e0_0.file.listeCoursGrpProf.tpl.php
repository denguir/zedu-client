<?php
/* Smarty version 3.1.34-dev-7, created on 2021-01-30 18:22:43
  from '/var/www/zedu/presences/templates/listeCoursGrpProf.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_6015a3f3eb1613_30232579',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '341bf11fb771e2102ce4908f689cdc4632f046e0' => 
    array (
      0 => '/var/www/zedu/presences/templates/listeCoursGrpProf.tpl',
      1 => 1611761186,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6015a3f3eb1613_30232579 (Smarty_Internal_Template $_smarty_tpl) {
?><div style="height: 35em; overflow:auto">
<label>Choisir un cours</label>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listeCoursGrp']->value, 'data', false, 'coursGrp');
$_smarty_tpl->tpl_vars['data']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['coursGrp']->value => $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->do_else = false;
?>

    <button type="button"
        class="btn btn-block <?php if ($_smarty_tpl->tpl_vars['data']->value['virtuel'] == 1) {?>btn-info<?php } else { ?>btn-default<?php }?> btn-presenceCours"
        data-coursgrp="<?php echo $_smarty_tpl->tpl_vars['coursGrp']->value;?>
"
        title="<?php echo $_smarty_tpl->tpl_vars['data']->value['statut'];?>
 <?php echo $_smarty_tpl->tpl_vars['data']->value['libelle'];?>
 <?php echo $_smarty_tpl->tpl_vars['data']->value['nbheures'];?>
h">
        <?php if ((isset($_smarty_tpl->tpl_vars['data']->value['nomCours'])) && ($_smarty_tpl->tpl_vars['data']->value['nomCours'] != '')) {?>
            <?php echo $_smarty_tpl->tpl_vars['data']->value['nomCours'];?>
 [<?php echo $_smarty_tpl->tpl_vars['coursGrp']->value;?>
]
        <?php } else { ?>
            [<?php echo $_smarty_tpl->tpl_vars['coursGrp']->value;?>
] <?php echo $_smarty_tpl->tpl_vars['data']->value['statut'];?>
 <?php echo $_smarty_tpl->tpl_vars['data']->value['libelle'];?>
 <?php echo $_smarty_tpl->tpl_vars['data']->value['nbheures'];?>
h
        <?php }?>
    </button>

<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

</div>
<?php }
}
