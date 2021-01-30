<?php
/* Smarty version 3.1.34-dev-7, created on 2021-01-30 18:22:14
  from '/var/www/zedu/ades/templates/selecteurs/selectClasseEleve.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_6015a3d6551f30_67880339',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b4f2a7a043fe6bcac3d4a99a99dabf412f66cd8f' => 
    array (
      0 => '/var/www/zedu/ades/templates/selecteurs/selectClasseEleve.tpl',
      1 => 1611761186,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:selecteurs/listeEleves.tpl' => 1,
  ),
),false)) {
function content_6015a3d6551f30_67880339 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="selecteur" class="noprint">

	<form id="formSelecteur" class="form-inline">

		<input type="text" name="nom" id="nom" placeholder="Nom / prénom de l'élève" class="form-control input-sm">

		<div class="form-group">
			<select name="classe" id="selectClasse" class="form-control input-sm">
				<option value="">Classe</option>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listeClasses']->value, 'uneClasse');
$_smarty_tpl->tpl_vars['uneClasse']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['uneClasse']->value) {
$_smarty_tpl->tpl_vars['uneClasse']->do_else = false;
?>
					<option value="<?php echo $_smarty_tpl->tpl_vars['uneClasse']->value;?>
"<?php if ((isset($_smarty_tpl->tpl_vars['classe']->value)) && ($_smarty_tpl->tpl_vars['uneClasse']->value == $_smarty_tpl->tpl_vars['classe']->value)) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['uneClasse']->value;?>
</option>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</select>
		</div>

		<span id="choixEleve">
			<?php $_smarty_tpl->_subTemplateRender("file:selecteurs/listeEleves.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
		</span>

		<button type="button" class="btn btn-primary btn-sm" id="envoi">OK</button>
		<span id="ajaxLoader" class="hidden pull-right">
			<img src="images/ajax-loader.gif" alt="loading" class="img-responsive">
		</span>

	</form>
</div>

<?php echo '<script'; ?>
 type="text/javascript">
	
		function showEleve(matricule) {
		$.post('inc/eleves/generateFicheEleve.inc.php', {
			matricule: matricule
			},
		function(resultat){
			$("#ficheEleve").show().html(resultat);
			})
		}

$(document).ready (function() {

	$("#selectClasse").change(function(){
		// on a choisi une classe dans la liste déroulante
		var classe = $(this).val();
		// la fonction listeEleves.inc.php renvoie la liste déroulante des élèves de la classe sélectionnée
		$.post('inc/listeEleves.inc.php',{
			classe: classe},
			function (resultat){
				$("#choixEleve").html(resultat);
				}
			)
		});

	$("#envoi").click(function(){
		var matricule = $('#selectEleve').val();
		if (matricule > 0)
			showEleve(matricule);
	})

	$('#choixEleve').on('change','#selectEleve', function(){
		var matricule = $(this).val();
		if (matricule > 0) {
			showEleve(matricule);
			}
		})

	$("#nom").typeahead({
		minLength: 2,
		afterSelect: function(item){
			$.ajax({
				url: 'inc/searchMatricule.php',
				type: 'POST',
				data: 'nomPrenomClasse=' + item,
				dataType: 'text',
				async: true,
				success: function(matricule){
					if (matricule != '') {
						// générer la fiche de l'élève
						$.post('inc/eleves/generateFicheEleve.inc.php', {
							matricule: matricule
							},
						function(resultat){
							$('#ficheEleve').show().html(resultat);
							$.post('inc/eleves/getListeElevesClasse.inc.php', {
								matricule: matricule
							}, function (resultat){
								$('#choixEleve').html(resultat);
								$.post('inc/eleves/getClasse4eleve.inc.php', {
									matricule: matricule
								}, function(groupe){
									$('#selectClasse').val(groupe);
								});
							})
							});
						// compléter le sélecteur avec la classe, la liste d'élèves
						// à faire...
						}
					}
				})
			},
		source: function(query, process){
			$.ajax({
				url: 'inc/searchNom.php',
				type: 'POST',
				data: 'query=' + query,
				dataType: 'JSON',
				async: true,
				success: function (data) {
					$("#matricule").val('');
					process(data);
					}
				}
				)
			}
		})
	})

<?php echo '</script'; ?>
>
<?php }
}
