<?php
/* Smarty version 3.1.34-dev-7, created on 2021-01-30 18:22:23
  from '/var/www/zedu/profil/templates/connexions.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_6015a3df38a7e1_01929637',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd894876d51e8f990b86a34fa43666d6beeffa207' => 
    array (
      0 => '/var/www/zedu/profil/templates/connexions.tpl',
      1 => 1611761186,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6015a3df38a7e1_01929637 (Smarty_Internal_Template $_smarty_tpl) {
?><h3>Vos connexions</h3>

<div class="col-md-8 col-sm-12">

    <div class="table-responsive">

        <table class="table table-condensed table-striped table-hover">
            <thead>
                <tr>
                    <th width="100">Date</th>
                    <th width="100">Heure</th>
                    <th width="150">Adresse IP *</th>
                    <th>Hôte</th>
                </tr>
            </thead>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['logins']->value, 'unLogin');
$_smarty_tpl->tpl_vars['unLogin']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['unLogin']->value) {
$_smarty_tpl->tpl_vars['unLogin']->do_else = false;
?>
            <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['unLogin']->value['date'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['unLogin']->value['heure'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['unLogin']->value['ip'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['unLogin']->value['host'];?>
</td>
            </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </table>

    </div>

</div>
<!-- col-md-.. -->

<div class="col-md-4 col-sm-12">

    <div class="notice">

        <p>* L'adresse IP est une adresse unique dans le monde, un peu semblable à un numéro de téléphone, et qui identifie une connexion à l'Internet.
        <br> Plusieurs ordinateurs peuvent partager la même adresse IP s'ils sont connectés au même modem (cas d'une école, par exemple).
        <br> Il peut arriver que l'adresse IP qui vous est attribuée change d'un jour à l'autre. Mais le nom du fournisseur d'accès reste fixe si vous gardez le même contrat.</p>
        <p>Si vous constatez des connexions qui ne sont manifestement pas de votre fait, modifiez immédiatement votre mot de passe et prévenez les administrateurs</p>

    </div>
    <!-- notice -->

</div>
<!-- col-md-...  -->
<?php }
}
