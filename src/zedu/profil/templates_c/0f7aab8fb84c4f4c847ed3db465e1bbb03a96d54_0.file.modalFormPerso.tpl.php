<?php
/* Smarty version 3.1.34-dev-7, created on 2021-01-30 18:22:23
  from '/var/www/zedu/profil/templates/modal/modalFormPerso.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_6015a3df38f606_14706888',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0f7aab8fb84c4f4c847ed3db465e1bbb03a96d54' => 
    array (
      0 => '/var/www/zedu/profil/templates/modal/modalFormPerso.tpl',
      1 => 1611761186,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6015a3df38f606_14706888 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal fade" id="modalFormPerso" tabindex="-1" role="dialog" aria-labelledby="titleFormPerso" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <form>

                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="titleFormPerso">Informations personnelles</h4>
                </div>
                <div class="modal-body">

                    <div class="row">

                        <div class="col-md-6 col-sm-12">

                            <h4>Domicile</h4>
                            <div class="form-group">
                                <label class="sr-only" for="adresse">Adresse</label>
                                <input type="text" class="form-control" maxlength="40" name="adresse" id="adresse" value="<?php echo $_smarty_tpl->tpl_vars['identite']->value['adresse'];?>
" placeholder="Adresse">
                            </div>

                            <div class="form-group">
                                <label class="sr-only" for="codePostal">Code Postal</label>
                                <input type="text" class="form-control" maxlength="6" name="codePostal" id="codePostal" value="<?php echo $_smarty_tpl->tpl_vars['identite']->value['codePostal'];?>
" placeholder="Code postal">
                            </div>
                            <div class="form-group">
                                <label class="sr-only" for="commune">Commune</label>
                                <input type="text" class="form-control" maxlength="40" name="commune" id="commune" value="<?php echo $_smarty_tpl->tpl_vars['identite']->value['commune'];?>
" placeholder="Commune">
                            </div>
                            <div class="form-group">
                                <label class="sr-only" for="pays">Pays</label>
                                <input type="text" class="form-control" maxlength="10" name="pays" id="pays" value="<?php echo $_smarty_tpl->tpl_vars['identite']->value['pays'];?>
" placeholder="Pays">
                            </div>

                        </div>

                        <div class="col-md-6 col-sm-12">

                            <h4>Contact</h4>
                            <div class="form-group">
                                <label class="sr-only" for="fonction">Fonction</label>
                                <input type="text" class="form-control" maxlength="40" name="fonction" id="fonction" value="<?php echo $_smarty_tpl->tpl_vars['identite']->value['titre'];?>
" placeholder="Fonction dans l'école">
                            </div>

                            <div class="form-group">
                                <label class="sr-only" for="mail">Mail *</label>
                                <input type="email" class="form-control" maxlength="40" name="mail" id="mail" value="<?php echo $_smarty_tpl->tpl_vars['identite']->value['mail'];?>
" placeholder="adresse mail">
                                <span class="bg-danger hidden" id="erreurMail">Adresse incorrecte ou manquante</span>
                            </div>
                            <div class="form-group">
                                <label class="sr-only" for="telephone">Téléphone</label>
                                <input type="text" class="form-control" maxlength="40" name="telephone" id="telephone" value="<?php echo $_smarty_tpl->tpl_vars['identite']->value['telephone'];?>
" placeholder="Téléphone">
                            </div>
                            <div class="form-group">
                                <label class="sr-only" for="GSM">GSM</label>
                                <input type="text" class="form-control" maxlength="40" name="GSM" id="GSM" value="<?php echo $_smarty_tpl->tpl_vars['identite']->value['GSM'];?>
" placeholder="Téléphone portable">
                            </div>

                        </div>

                    </div>

                </div>
                <div class="modal-footer">
                    <p class="alert alert-info">L'adresse mail est obligatoire. Un numéro de téléphone est souhaitable.</p>
                    <div class="btn-group pull-right">
                        <button type="reset" class="btn btn-default">Annuler</button>
                        <button type="button" class="btn btn-primary" id="btn-confirm-perso">Enregistrer</button>
                    </div>
                </div>
        </div>

        </form>
    </div>
</div>



<?php echo '<script'; ?>
 type="text/javascript">
    

    function isEmail(email) {
        var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        return regex.test(email);
    }

    

        $(document).ready(function() {

            $("#mail").keyup(function() {
                if (isEmail($(this).val())) {
                    $('#erreurMail').addClass('hidden');
                    $('#btn-confirm-perso').attr('disabled', false);
                    }
                else {
                    $('#erreurMail').removeClass('hidden');
                    $('#btn-confirm-perso').attr('disabled', true);
                }
            })


        })
<?php echo '</script'; ?>
>
<?php }
}
