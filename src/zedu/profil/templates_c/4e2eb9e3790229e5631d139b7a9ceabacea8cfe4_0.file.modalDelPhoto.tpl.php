<?php
/* Smarty version 3.1.34-dev-7, created on 2021-01-30 18:22:23
  from '/var/www/zedu/profil/templates/modal/modalDelPhoto.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_6015a3df3936d5_16950542',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4e2eb9e3790229e5631d139b7a9ceabacea8cfe4' => 
    array (
      0 => '/var/www/zedu/profil/templates/modal/modalDelPhoto.tpl',
      1 => 1611761186,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6015a3df3936d5_16950542 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal fade" id="modalDelPhoto" tabindex="-1" role="dialog" aria-labelledby="titleDelPhoto" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="titleDelPhoto">Supprimer la photo</h4>
      </div>
      <div class="modal-body">
        <div class="alert alert-warning">Veuille confirmer l'effacement définitif de votre photo de profil</div>
      </div>
      <div class="modal-footer">
          <div class="btn-group pull-right">
              <button type="button" class="btn btn-default" data-dismiss="modal">Annuler</button>
              <button type="button" class="btn btn-primary" id="btnConfDel">Effacer la photo</button>
          </div>

      </div>
    </div>
  </div>
</div>
<?php }
}
