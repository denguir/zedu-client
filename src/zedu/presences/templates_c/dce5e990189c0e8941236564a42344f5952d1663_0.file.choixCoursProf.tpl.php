<?php
/* Smarty version 3.1.34-dev-7, created on 2021-01-30 18:22:43
  from '/var/www/zedu/presences/templates/choixCoursProf.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_6015a3f3ea98d9_29886853',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dce5e990189c0e8941236564a42344f5952d1663' => 
    array (
      0 => '/var/www/zedu/presences/templates/choixCoursProf.tpl',
      1 => 1611761186,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:listeCoursGrpProf.tpl' => 1,
  ),
),false)) {
function content_6015a3f3ea98d9_29886853 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container-fluid">

	<div class="row">

		<div class="col-md-10">

			<ul class="nav nav-tabs">
				<li class="active"><a data-toggle="tab" href="#selection">Sélection</a></li>
				<li><a data-toggle="tab" href="#presences" class="btn disabled">Présences <?php if ($_smarty_tpl->tpl_vars['photosVis']->value == 'visible') {?><i class="fa fa-address-book-o"></i> <?php }?></a></li>
			</ul>

			<div class="tab-content">

				<div id="selection" class="tab-pane fade in active row">
					<div class="col-md-9">

						<div id="weekCalendar">
													</div>
					</div>

					<div class="col-md-3">

						<div id="listeProfs">
							<div class="form-group">
								<label for="tituCours">Sélectionner un professeur</label>
								<select class="form-control" name="tituCours" id="tituCours">
									<option value="">Veuillez sélectionner un professeur</option>
									<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listeProfs']->value, 'data', false, 'unAcronyme');
$_smarty_tpl->tpl_vars['data']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['unAcronyme']->value => $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->do_else = false;
?>
									<option value="<?php echo $_smarty_tpl->tpl_vars['unAcronyme']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['acronyme']->value == $_smarty_tpl->tpl_vars['unAcronyme']->value) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['data']->value['nom'];?>
 <?php echo $_smarty_tpl->tpl_vars['data']->value['prenom'];?>
</option>
									<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
								</select>
							</div>
						</div>

						<div class="btn-group btn-group-vertical btn-block" id="listeCours">
							<?php $_smarty_tpl->_subTemplateRender('file:listeCoursGrpProf.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
						</div>

						</div>
					</div>

					<div id="presences" class="tab-pane fade row">
						<div class="col-md-12">
							<div id="feuillePresences">
							</div>
						</div>
					</div>

				</div>

			</div>


			<div class="col-md-2">

				<?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['INSTALL_DIR']->value)."/widgets/flashInfo/templates/index.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
			</div>

		</div> <!-- row -->

	</div>



	<?php echo '<script'; ?>
 type="text/javascript">

		$(document).ready(function() {

			$('#tituCours').change(function() {
				var acronyme = $('#tituCours option:selected').val();
				// var dateLundi = $('#dateLundi').data('datelundi');
				var events = {
					url: 'inc/events4ghost.json.php',
					type: 'POST',
					data: {
						acronyme: acronyme,
					}
				};
				$('#weekCalendar').fullCalendar('removeEventSources');
				$('#weekCalendar').fullCalendar('addEventSource', events);
				$.post('inc/listeCoursGrpProf.inc.php', {
					acronyme: acronyme
				}, function(resultat) {
					$('#listeCours').html(resultat);
					$("[data-toggle='popover']").popover('hide');
				})
			})

			$('#listeCours').on('click', '.btn-presenceCours', function() {
				var coursGrp = $(this).data('coursgrp');
				$.post('inc/presencesTituCours.inc.php', {
					coursGrp: coursGrp
				}, function(resultat) {
					$('#feuillePresences').html(resultat);
					$('.nav-tabs a:eq(1)').removeClass('disabled').tab('show');
				})
			})

			$('#weekCalendar').fullCalendar({
				weekends: false,
				height: 600,
				defaultView: 'agendaWeek',
				header: {},
 				columnHeaderFormat: 'ddd D/M',
				nowIndicator: true,
				eventAfterAllRender: function() {
					$('.fc-header-toolbar').hide();
				},
				businessHours: {
					start: '08:15',
					end: '18:00',
					dow: [1, 2, 3, 4, 5]
				},
				minTime: "08:00:00",
				maxTime: "18:00:00",
				eventSources: [{
					url: 'inc/events4ghost.json.php',
					type: 'POST',
					data: {
						acronyme: $('#tituCours option:selected').val()
					},
					error: function() {
						alert('Attention, vous semblez avoir perdu la connexion à l\'Internet');
					}
				}],
				eventRender: function(event, element, view) {
					element.html(event.coursGrp + ' - ' + event.startTime + '<br> <span style="color:#bb9966">' + event.libelle + '</span>');
				},
				eventClick: function(event, jsEvent, view) {
					var heure = event.start.format('HH:mm');
					var laDate = event.start.format('YYYY-MM-DD');
					var coursGrp = event.coursGrp;
					$.post('inc/getPresencesFromGhost.inc.php', {
						laDate: laDate,
						heure: heure,
						coursGrp: coursGrp
					}, function(resultat) {
						$('#feuillePresences').html(resultat);
						$('.nav-tabs a:eq(1)').removeClass('disabled').tab('show');
					})
				}
			});

		})
	<?php echo '</script'; ?>
>
<?php }
}
