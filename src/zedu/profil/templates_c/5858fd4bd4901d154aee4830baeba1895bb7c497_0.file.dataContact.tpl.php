<?php
/* Smarty version 3.1.34-dev-7, created on 2021-01-30 18:22:23
  from '/var/www/zedu/profil/templates/dataContact.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_6015a3df37e005_70576656',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5858fd4bd4901d154aee4830baeba1895bb7c497' => 
    array (
      0 => '/var/www/zedu/profil/templates/dataContact.tpl',
      1 => 1611761186,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6015a3df37e005_70576656 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="row">
    <div class="col-md-6 col-sm-12">
        <dl>
            <dt>Adresse</dt>
            <dd><?php echo (($tmp = @$_smarty_tpl->tpl_vars['identite']->value['adresse'])===null||$tmp==='' ? '-' : $tmp);?>
</dd>
            <dt>Commune</dt>
            <dd><?php echo (($tmp = @$_smarty_tpl->tpl_vars['identite']->value['commune'])===null||$tmp==='' ? '-' : $tmp);?>
</dd>
            <dt>Code Postal</dt>
            <dd><?php echo (($tmp = @$_smarty_tpl->tpl_vars['identite']->value['codePostal'])===null||$tmp==='' ? '-' : $tmp);?>
</dd>
            <dt>Pays</dt>
            <dd><?php echo (($tmp = @$_smarty_tpl->tpl_vars['identite']->value['pays'])===null||$tmp==='' ? '-' : $tmp);?>
</dd>
        </dl>
    </div>

    <div class="col-md-6 col-sm-12">
        <dl>
            <dt>Fonction</dt>
            <dd><?php echo (($tmp = @$_smarty_tpl->tpl_vars['identite']->value['titre'])===null||$tmp==='' ? '-' : $tmp);?>
</dd>
            <dt>Mail</dt>
            <dd>
                <?php if ((isset($_smarty_tpl->tpl_vars['identite']->value['mail'])) && ($_smarty_tpl->tpl_vars['identite']->value['mail'] != '')) {?>
                <a href="mailto:<?php echo $_smarty_tpl->tpl_vars['identite']->value['mail'];?>
"><?php echo $_smarty_tpl->tpl_vars['identite']->value['mail'];?>
</a> <?php } else { ?> - <?php }?>
            </dd>
            <dt>Téléphone</dt>
            <dd> <?php echo (($tmp = @$_smarty_tpl->tpl_vars['identite']->value['telephone'])===null||$tmp==='' ? '-' : $tmp);?>
</dd>
            <dt>GSM</dt>
            <dd> <?php echo (($tmp = @$_smarty_tpl->tpl_vars['identite']->value['GSM'])===null||$tmp==='' ? '-' : $tmp);?>
</dd>
        </dl>
    </div>

</div>

<a class="btn btn-primary btn-block" id="btnModifPerso">Modifier</a>
<?php }
}
