<?php
/* Smarty version 3.1.34-dev-7, created on 2021-01-30 18:21:23
  from '/var/www/zedu/install/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_6015a3a3798aa0_16317788',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4e8a7040e1376fe6e4aeb2176eb7e399644041ef' => 
    array (
      0 => '/var/www/zedu/install/templates/index.tpl',
      1 => 1611761186,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../../javascript.js' => 1,
    'file:../../styles.sty' => 1,
  ),
),false)) {
function content_6015a3a3798aa0_16317788 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php $_smarty_tpl->_subTemplateRender('file:../../javascript.js', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php $_smarty_tpl->_subTemplateRender('file:../../styles.sty', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <title>Installation</title>
    </head>
    <body>
        <div class="container">
        <h1>Initialisation de la base de données</h1>
        <h2>Les paramètres suivants ont été utilisés</h3>
        <ul>
            <li>Nom du serveur: <strong><?php echo $_smarty_tpl->tpl_vars['SERVEUR']->value;?>
</strong></li>
            <li>Base de données: <strong><?php echo $_smarty_tpl->tpl_vars['BASE']->value;?>
</strong></li>
            <li>Nom d'utlisateur: <strong><?php echo $_smarty_tpl->tpl_vars['NOM']->value;?>
</strong></li>
            <li>Mot de passe: <strong><?php echo $_smarty_tpl->tpl_vars['MDP']->value;?>
</strong></li>
        </ul>
        <p>Ces informations figurent dans le fichier <strong>config.inc.php</strong></p>

        <h2>Résultat</h3>
        <p>Nombre d'opérations réalisées: <?php echo $_smarty_tpl->tpl_vars['nb']->value;?>
</p>
        <p>Veuillez maintenant</p>
        <ul>
            <li>vérifier que la base de données a été correctement initialisée </li>
            <li style="color: red">effacer le répertoire <strong>install</strong></li>
        </ul>
        <p>Si tout s'est bien passé, vous pouvez démarrer l'<a href="../index.php">application Zeus/Edu</a> dès maintenant.</p>
    </div>
    </body>
</html>
<?php }
}
