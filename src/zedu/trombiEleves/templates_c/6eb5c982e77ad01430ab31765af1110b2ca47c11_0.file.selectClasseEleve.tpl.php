<?php
/* Smarty version 3.1.34-dev-7, created on 2021-01-30 18:22:48
  from '/var/www/zedu/trombiEleves/templates/selecteurs/selectClasseEleve.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_6015a3f8506848_51624377',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6eb5c982e77ad01430ab31765af1110b2ca47c11' => 
    array (
      0 => '/var/www/zedu/trombiEleves/templates/selecteurs/selectClasseEleve.tpl',
      1 => 1611761186,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:listeEleves.tpl' => 1,
  ),
),false)) {
function content_6015a3f8506848_51624377 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="selecteur" class="noprint">

	<form name="selecteur" id="formSelecteur" method="POST" action="index.php" role="form" class="form-inline">

		<input type="text" name="nom" id="nom" placeholder="Nom / prénom de l'élève" class="form-control">
		<input type="hidden" name="matricule" id="matricule">

		<select name="classe" id="selectClasse" class="form-control">
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

		<?php if ((isset($_smarty_tpl->tpl_vars['prevNext']->value['prev']))) {?>
			<?php $_smarty_tpl->_assignInScope('matrPrev', $_smarty_tpl->tpl_vars['prevNext']->value['prev']);?>
			<button class="btn btn-default btn-sm" id="prev" title="Précédent: <?php echo $_smarty_tpl->tpl_vars['listeEleves']->value[$_smarty_tpl->tpl_vars['matrPrev']->value]['prenom'];?>
 <?php echo $_smarty_tpl->tpl_vars['listeEleves']->value[$_smarty_tpl->tpl_vars['matrPrev']->value]['nom'];?>
">
				<span class="glyphicon glyphicon-chevron-left"></span>
			</button>
		<?php }?>

		<span id="choixEleve">
			<?php $_smarty_tpl->_subTemplateRender("file:listeEleves.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
		</span>

		<?php if ((isset($_smarty_tpl->tpl_vars['prevNext']->value['next']))) {?>
			<?php $_smarty_tpl->_assignInScope('matrNext', $_smarty_tpl->tpl_vars['prevNext']->value['next']);?>
			<button class="btn btn-default btn-sm" id="next" title="Suivant: <?php echo $_smarty_tpl->tpl_vars['listeEleves']->value[$_smarty_tpl->tpl_vars['matrNext']->value]['prenom'];?>
 <?php echo $_smarty_tpl->tpl_vars['listeEleves']->value[$_smarty_tpl->tpl_vars['matrNext']->value]['nom'];?>
">
				<span class="glyphicon glyphicon-chevron-right"></span>
			 </button>
		<?php }?>

		<?php if ((isset($_smarty_tpl->tpl_vars['prevNext']->value))) {?>
			<input type="hidden" name="prev" value="<?php echo $_smarty_tpl->tpl_vars['prevNext']->value['prev'];?>
" id="matrPrev">
			<input type="hidden" name="next" value="<?php echo $_smarty_tpl->tpl_vars['prevNext']->value['next'];?>
" id="matrNext">
		<?php }?>

		<button type="submit" class="btn btn-primary btn-sm" id="envoi">OK</button>
		<input type="hidden" placeholder="action" name="action" id="action" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['action']->value)===null||$tmp==='' ? 'parClasses' : $tmp);?>
">
		<input type="hidden" placeholder="mode" name="mode" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['mode']->value)===null||$tmp==='' ? Null : $tmp);?>
">

		<input type="hidden" name="etape" value="showEleve">
		<input type="hidden" name="onglet" id="onglet" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['onglet']->value)===null||$tmp==='' ? 0 : $tmp);?>
">
	</form>
</div>

<?php echo '<script'; ?>
 type="text/javascript">

$(document).ready (function() {

	$('#formSelecteur').submit(function(){
		$('#wait').show();
		$.blockUI();
	})

	$("#selectClasse").change(function(){
		// on a choisi une classe dans la liste déroulante
		var classe = $(this).val();
		$("#action").val('parClasses');
		if (classe != '') {
			$('#next, #prev').hide();
			}
		// la fonction listeEleves.inc.php renvoie la liste déroulante des élèves de la classe sélectionnée
		$.post('inc/listeEleves.inc.php',{
			classe: classe
			},
			function (resultat){
				$("#choixEleve").html(resultat)
			}
			)
	});

	$('#choixEleve').on('change','#selectEleve', function(){
		var matricule = $(this).val();
		if (matricule != '') {
			$("#action").val('parEleve');
			$("#matricule").val(matricule);
			$('#formSelecteur').submit();
			}
			else {
				$("#matricule").val('');
				$("#action").val('parClasses');
				$("#prev, #next").fadeOut();
				}
		})

	$('#prev').click(function(){
		var matrPrev = $("#matrPrev").val();
		$('#matricule').val(matrPrev);
		$("#selectEleve").val(matrPrev);
		$("#action").val('parEleve');
		$('#formSelecteur').submit();
	})

	$('#next').click(function(){
		var matrNext = $("#matrNext").val();
		$('#matricule').val(matrNext);
		$("#selectEleve").val(matrNext);
		$("#action").val('parEleve');
		$('#formSelecteur').submit();
	})

	$('#nom').keydown(function(e){
		if (e.which >= 65) {
			$('#matricule').val('');
			$('#selectEleve').fadeOut().val('');
			$('#choixEleve').html('');
			$('#selectClasse').val('');
			$('#prev, #next').fadeOut();
			$('#matrPrev, #matrNext').val('');
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
				success: function(data){
					if (data != '') {
						$("#matricule").val(data);
						$('#action').val('parEleve');
						$("#formSelecteur").submit();
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
