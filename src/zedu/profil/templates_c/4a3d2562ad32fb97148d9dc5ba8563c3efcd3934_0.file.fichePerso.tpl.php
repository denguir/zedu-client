<?php
/* Smarty version 3.1.34-dev-7, created on 2021-01-30 18:22:23
  from '/var/www/zedu/profil/templates/fichePerso.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_6015a3df373671_46737749',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4a3d2562ad32fb97148d9dc5ba8563c3efcd3934' => 
    array (
      0 => '/var/www/zedu/profil/templates/fichePerso.tpl',
      1 => 1611761186,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:dataContact.tpl' => 1,
    'file:photoProfil.tpl' => 1,
    'file:mdp.tpl' => 1,
    'file:connexions.tpl' => 1,
    'file:modal/modalFormPerso.tpl' => 1,
    'file:modal/modalChangePhoto.tpl' => 1,
    'file:modal/modalDelPhoto.tpl' => 1,
  ),
),false)) {
function content_6015a3df373671_46737749 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 src="../dropzone/dropzone.js" charset="utf-8"><?php echo '</script'; ?>
>
<link href="../dropzone/dropzone.css" type="text/css" rel="stylesheet">

<div class="container">

	<h2>Profil personnel</h2>

	<ul class="nav nav-tabs" data-tabs="tabs">
		<li class="active"><a href="#tabs-1" data-toggle="tab">Informations personnelles</a></li>
		<li><a href="#tabs-2" data-toggle="tab">Mot de passe</a></li>
		<li><a href="#tabs-3" data-toggle="tab">Vos connexions</a></li>
	</ul>

	<div id="my-tab-content" class="tab-content">

		<div class="tab-pane active" id="tabs-1">

			<div class="row">

				<div class="col-md-3 col-xs-6">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">Informations personnelles</h3>
						</div>
						<div class="panel-body">
							<dl>
								<dt>Nom d'utilisateur</dt>
								<dd> <?php echo $_smarty_tpl->tpl_vars['identite']->value['acronyme'];?>
</dd>
								<dt>Nom</dt>
								<dd> <?php echo $_smarty_tpl->tpl_vars['identite']->value['nom'];?>
</dd>
								<dt>Prénom</dt>
								<dd> <?php echo $_smarty_tpl->tpl_vars['identite']->value['prenom'];?>
</dd>
								<dt>Sexe</dt>
								<dd> <?php echo $_smarty_tpl->tpl_vars['identite']->value['sexe'];?>
</dd>
							</dl>
						</div>
						<div class="panel-footer">
							Informations <strong>non</strong> modifiables
						</div>

					</div>

				</div>
				<!-- col-md... -->

				<div class="col-md-6 col-xs-6">

					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">Informations de contact</h3>
						</div>
						<div class="panel-body" id="contact">

							<?php $_smarty_tpl->_subTemplateRender("file:dataContact.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

						</div>

						<div class="panel-footer">
							Informations librement modifiables
						</div>

					</div>


				</div>
				<!-- col-md... -->

				<div class="col-md-3 col-xs-6">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">Photo de profil</h3>
						</div>
						<div class="panel-body">

							<div class="photoProfil">
								<?php $_smarty_tpl->_subTemplateRender("file:photoProfil.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
							</div>

							<br>
							<div class="btn-group btn- pull-right">

								<button type="button" class="btn btn-primary" id="btn-photo">
									Changer
								</button>
								<button type="button" class="btn btn-warning" id="btn-delPhoto">
									Supprimer
								</button>

							</div>


						</div>
						<div class="panel-footer">
							Cette photo n'est pas visible par les élèves
						</div>
					</div>


				</div>
				<!-- col-md... -->

			</div>
			<!-- row -->

		</div>
		<!-- tabs-1 -->

		<div class="tab-pane" id="tabs-2">

			<div class="row">

				<?php $_smarty_tpl->_subTemplateRender("file:mdp.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

			</div>

		</div>
		<!-- tabs-2 -->


		<div class="tab-pane" id="tabs-3">

			<div class="row">

				<?php $_smarty_tpl->_subTemplateRender("file:connexions.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

			</div>
			<!-- row -->

		</div>
		<!-- tabs-3 -->

	</div>
	<!-- my-tab-content... -->

</div>
<!-- container -->

<?php $_smarty_tpl->_subTemplateRender("file:modal/modalFormPerso.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> <?php $_smarty_tpl->_subTemplateRender("file:modal/modalChangePhoto.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> <?php $_smarty_tpl->_subTemplateRender("file:modal/modalDelPhoto.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo '<script'; ?>
 type="text/javascript">
	$(document).ready(function() {

		var nbFichiersMax = 1;
		var maxFileSize = 4;

		Dropzone.options.myDropZone = {
			maxFilesize: maxFileSize,
			maxFiles: nbFichiersMax,
			acceptedFiles: "image/jpeg,image/png,image/gif",
			url: "inc/upload.inc.php",
			queuecomplete: function() {
				// raffraîchissement de la photo
				$.post('inc/refreshPhoto.inc.php',{},
				function(resultat){
					$(".photoProfil").html(resultat);
				})

			},
			accept: function(file, done) {
				done();
			},
			init: function() {
				this.on("maxfilesexceeded", function(file) {
						alert("Pas plus de " + nbFichiersMax + " fichiers à la fois svp!\nAttendez quelques secondes.");
					}),
					this.on('queuecomplete', function() {
						var ds = this;
						setTimeout(function() {
							ds.removeAllFiles();
						}, 3000);
					})
			}
		};

		$("#contact").on('click', '#btnModifPerso', function() {
			$("#modalFormPerso").modal('show');
		})

		$("#btn-confirm-perso").click(function() {
			var email = $("#mail").val();
			if (isEmail(email)) {
				$.post('inc/saveFormPerso.inc.php', {
						email: email,
						adresse: $("#adresse").val(),
						codePostal: $("#codePostal").val(),
						commune: $("#commune").val(),
						pays: $("#pays").val(),
						titre: $("#fonction").val(),
						telephone: $("#telephone").val(),
						GSM: $("#GSM").val()
					},
					function(resultat) {
						$("#contact").html(resultat);
						$("#modalFormPerso").modal('hide');
					})
			} else {
				$("#mail").focus();
				$('#erreurMail').removeClass('hidden');
			}
		})

		$("#btn-photo").click(function() {
			$("#modalChangePhoto").modal('show');
		})

		$("#btn-delPhoto").click(function() {
			$("#modalDelPhoto").modal('show');
		})

		$("#btnConfDel").click(function() {
			$.post('inc/delPhoto.inc.php', {},
				function(resultat) {
					$("#modalDelPhoto").modal('hide');
					$(".photoProfil").html(resultat);
				})
		})

	})
<?php echo '</script'; ?>
>
<?php }
}
