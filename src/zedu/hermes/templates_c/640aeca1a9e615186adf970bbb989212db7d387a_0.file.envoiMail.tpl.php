<?php
/* Smarty version 3.1.34-dev-7, created on 2021-01-30 18:22:46
  from '/var/www/zedu/hermes/templates/envoiMail.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_6015a3f61706c1_08559212',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '640aeca1a9e615186adf970bbb989212db7d387a' => 
    array (
      0 => '/var/www/zedu/hermes/templates/envoiMail.tpl',
      1 => 1611761186,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:destinataires.tpl' => 1,
  ),
),false)) {
function content_6015a3f61706c1_08559212 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container-fluid">

	<form enctype="multipart/form-data" name="mailing" id="mailing" method="POST" action="index.php" role="form" class="form-vertical">

	<div class="row">

		<div class="col-md-3 col-xs-12 selectMail">

				<?php $_smarty_tpl->_subTemplateRender("file:destinataires.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

		</div>  <!-- col-md-... -->

		<div class="col-md-9 col-xs-12">

			<div class="panel panel-default">

				<div class="panel-header">
					<h3>Votre mail</h3>
				</div>

				<div class="panel-body">
					<div class="form-group">
						<label for="expediteur">Expéditeur</label>
						<?php if ($_smarty_tpl->tpl_vars['userStatus']->value == 'direction' || $_smarty_tpl->tpl_vars['userStatus']->value == 'admin') {?>
							<select name="mailExpediteur" id="expediteur" class="form-control">
								<option value="<?php echo $_smarty_tpl->tpl_vars['NOREPLY']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['NOMNOREPLY']->value;?>
</option>
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listeDirection']->value, 'someone', false, 'acro');
$_smarty_tpl->tpl_vars['someone']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['acro']->value => $_smarty_tpl->tpl_vars['someone']->value) {
$_smarty_tpl->tpl_vars['someone']->do_else = false;
?>
									<option value="<?php echo $_smarty_tpl->tpl_vars['someone']->value['mail'];?>
"<?php if ($_smarty_tpl->tpl_vars['acronyme']->value == $_smarty_tpl->tpl_vars['acro']->value) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['someone']->value['nom'];?>
</option>
								<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
							</select>
						<?php } else { ?>
							<input type="hidden" name="mailExpediteur" value="<?php echo $_smarty_tpl->tpl_vars['identite']->value['mail'];?>
">
							<p class="form-control-static" style="font-weight:bold"><?php echo $_smarty_tpl->tpl_vars['identite']->value['prenom'];?>
 <?php echo $_smarty_tpl->tpl_vars['identite']->value['nom'];?>
</p>
						<?php }?>
					</div>  <!-- form-group -->

					<div class="form-group">
						<span id="grouper" title="créer un groupe" style="display:none"><img src="images/groupe.png" alt="grouper"></span>
						<label>Destinataire(s):</label>
						<span class="form-control-static" id="destinataires"></span>
					</div>

					<div class="form-group" id="nomGroupe" style="display:none">
						<label for="groupe">Nom du groupe</label>
						<input type="text" id="groupe" name="groupe" placeholder="Nom du groupe" class="form-control">
						<div class="help-block">Choisissez un nom pour ce nouveau groupe de mailing</div>
					</div>

					<div class="input-group">
						<label for="objet" class="sr-only">Objet</label>
						<input type="text" name="objet" id="objet" placeholder="Objet de votre mail" class="form-control">
						<div class="input-group-btn">
						  <button class="btn btn-primary" type="Submit" name="submit">Envoyer</button>
						</div>

					</div>

					<textarea id="texte" name="texte" class="summernote form-control" placeholder="Frappez votre texte ici" autofocus="true"></textarea>

						<span class="pull-right">Ajout de disclaimer
						<input type="checkbox" name="disclaimer" id='disclaimer' value="1" checked="checked">
						</span>
					<div class="clearfix"></div>
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['nbPJ']->value, 'wtf', false, 'n');
$_smarty_tpl->tpl_vars['wtf']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['n']->value => $_smarty_tpl->tpl_vars['wtf']->value) {
$_smarty_tpl->tpl_vars['wtf']->do_else = false;
?>
						<p class="labelpj" id="pj<?php echo $_smarty_tpl->tpl_vars['n']->value;?>
"><span style="float:left">Pièce jointe</span> <input class="pj" type="file" name="PJ_<?php echo $_smarty_tpl->tpl_vars['n']->value;?>
" id="PJ_<?php echo $_smarty_tpl->tpl_vars['n']->value;?>
"></p>
					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

					<input type="hidden" name="MAX_FILE_SIZE" value="10000000">
					<input type="hidden" id="nomExpediteur" name="nomExpediteur" value="<?php echo $_smarty_tpl->tpl_vars['identite']->value['prenom'];?>
 <?php echo $_smarty_tpl->tpl_vars['identite']->value['nom'];?>
">
					<input type="hidden" name="mode" value="<?php echo $_smarty_tpl->tpl_vars['mode']->value;?>
">
					<input type="hidden" name="action" value="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
">

				</div>  <!-- panel-body -->

			</div>  <!-- panel -->

		</div>  <!-- col-md-... -->

		</div>  <!-- row -->

	</form>

</div>  <!-- container -->

<?php echo '<script'; ?>
 type="text/javascript">

	function sendFile(file, el) {
		var form_data = new FormData();
		form_data.append('file', file);
		$.ajax({
			data: form_data,
			type: "POST",
			url: 'editor-upload.php',
			cache: false,
			contentType: false,
			processData: false,
			success: function(url) {
				$(el).summernote('editor.insertImage', url);
			}
		});
	}

	function deleteFile(src) {
		$.ajax({
			data: { src : src },
			type: "POST",
			url: 'inc/deleteImage.inc.php',
			cache: false,
			success: function(resultat) {
				console.log(resultat);
				}
			});
		}

$(document).ready(function(){

	$('#texte').summernote({
		lang: 'fr-FR', // default: 'en-US'
		height: null, // set editor height
		minHeight: 150, // set minimum height of editor
		focus: true, // set focus to editable area after initializing summernote
		toolbar: [
		  ['style', ['style']],
		  ['font', ['bold', 'underline', 'clear']],
		  ['font', ['strikethrough', 'superscript', 'subscript']],
		  ['color', ['color']],
		  ['para', ['ul', 'ol', 'paragraph']],
		  ['table', ['table']],
		  ['insert', ['link', 'picture', 'video']],
		  ['view', ['fullscreen', 'codeview', 'help']],
		],
		maximumImageFileSize: 2097152,
		dialogsInBody: true,
		callbacks: {
			onImageUpload: function(files, editor, welEditable) {
				for (var i = files.length - 1; i >= 0; i--) {
					sendFile(files[i], this);
				}
			},
			onMediaDelete : function(target) {
				deleteFile(target[0].src);
			}
		}
	});

	$(".teteListe").click(function(){
		if ($(this).parent().next().hasClass('listeMails'))
			$(this).parent().next().toggle();
			else bootbox.alert({
				title: 'Sélection d\'une liste',
				message: 'Cette liste est vide'
			});
		})

	$(".checkListe").click(function(event){
		event.stopPropagation();  // ne pas ouvrir ou fermer la liste en plus de cocher les éléments
		$(this).parent().next().find('.selecteur').trigger('click');
		})

	$(".labelpj").hide();
	$("#pj0").show();

	$(".pj").change(function(){
		if ($(this).val() != '') {
			var numero = eval($(this).attr('id').substr(3,1))+1;
			$("#pj"+numero).fadeIn('slow');
			}
		})

	$("#expediteur").change(function(){
		var expediteur = $("#expediteur option:selected").text();
		$("#nomExpediteur").val(expediteur);;
		})

	$("#mailing").validate({
		// pour ne pas ignorer le "textarea" qui sera caché
		ignore: [],
		rules: {
			objet: {
				required: true
				},
			'mails[]': {
				required: true,
				minlength: 1
				},
			texte: {
				required: true,
				minlength: 20
				}
			},
		messages: {
			'objet': 'Veuillez indiquer un objet pour votre mail',
			'mails[]': 'Sélectionnez au moins un destinataire',
			'texte': 'Un texte significatif svp',
			},
		errorElement: "span",
		errorPlacement: function(error, element) {
			if (element.attr("name") == "mails[]") {
				var position = $('#destinataires');
				error.appendTo(position);
			}
			else if (element.attr("name") == "texte") {
				error.insertAfter(element.next());
			}
			else error.insertAfter(element);
		}
	});

	$(".selecteur").click(function(){
		var nb = $(".selecteur:input:checked").length;
		if (nb > 0) $("#grouper").show();
			else $("#grouper").hide();
		if (nb < 4) {
			var checkedValues = $('.selecteur:input:checkbox:checked').map(function() {
				destinataire = this.value.split('#');
				return destinataire[0];
			}).get();
			$("#destinataires").text(checkedValues);
			}
			else $("#destinataires").text(nb+" destinataires");
		})

	$(".labelProf").click(function(){
		$(this).prev().trigger('click');
		})


	$("#grouper").click(function(){
		var listeMails = $(".mails:input:checkbox:checked");
		$("#nomGroupe").fadeIn(1000);
		$("#groupe").focus();
		})

	})

<?php echo '</script'; ?>
>
<?php }
}
