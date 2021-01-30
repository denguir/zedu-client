<?php
/* Smarty version 3.1.34-dev-7, created on 2021-01-30 18:22:14
  from '/var/www/zedu/ades/templates/eleve/pageEleve.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_6015a3d6557b63_02933460',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6d21654ee166c782476f97a134b35a6af36096c3' => 
    array (
      0 => '/var/www/zedu/ades/templates/eleve/pageEleve.tpl',
      1 => 1611761186,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6015a3d6557b63_02933460 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container-fluid">

    <div id="trombinoscope">

    </div>
    <div id="ficheEleve">

    </div>


</div>

<?php echo '<script'; ?>
 type="text/javascript">

    $(document).ready(function(){

        $(document).ajaxStart(function() {
            $('#ajaxLoader').removeClass('hidden');
        }).ajaxComplete(function() {
            $('#ajaxLoader').addClass('hidden');
        });

        $('body').on('click', '#saveEditedFait', function(){
            var formulaire = $("#editFaitDisc").serialize();
            $.post('inc/faits/saveFait.inc.php', {
                formulaire: formulaire
            }, function (matricule) {
                $.post('inc/eleves/generateFicheEleve.inc.php', {
                    matricule: matricule
                    },
                function(resultat){
                    $("#ficheEleve").show().html(resultat);
                    bootbox.alert('Fait disciplinaire enregistré');
                })
            })
        })

        $('body').on('click', '.delete', function() {
            var idfait = $(this).data('idfait');
            $.post('inc/faits/delFaitDisc.inc.php', {
                idfait: idfait
            }, function(resultat) {
                $("#modalDel .modal-body").html(resultat);
                // désactivation des champs sauf les "hidden"
                $("#modalDel input:text").prop('disabled', true);
                $("#modalDel textarea").prop('disabled', true);
                $("#modalDel select").prop('disabled', true);
                $('.motif').hide();
                $("#modalDel").modal('show');
            })
        })

        $('body').on('click', '#btn-confDel', function(){
			var idfait = $(this).data('idfait');
			$.post('inc/faits/supprEffectiveFait.inc.php', {
				idfait: idfait
				},
			function (resultat){
				if (resultat == 1) {
					// suppression de la ligne (tr) dans le tableau
					$('body').find('td [data-idfait="' + idfait + '"]').closest('tr').remove();
					$("#modalDel").modal('hide');
				}
			})
		})

        $('body').on('click', '.edit', function() {
            var idfait = $(this).data('idfait');
            var matricule = $(this).data('matricule');
            var type = $(this).data('typefait');
            $.post('inc/faits/editFaitDisc.inc.php', {
                type: type,
                matricule: matricule,
                idfait: idfait
            }, function(resultat) {
                $("#formFait").html(resultat);
                $("#editFait").modal('show');
            })
        })

        $('body').on('click', '.print', function() {
            var idfait = $(this).data('idfait');
            $.post('inc/retenues/printRetenue.inc.php', {
                    idfait: idfait
                },
                function(resultat) {}
            )
        })

        $('body').on('click', '.newFait', function() {
            var type = $(this).data('typefait');
            var matricule = $(this).data('matricule');
            $.post('inc/faits/editFaitDisc.inc.php', {
                type: type,
                matricule: matricule
            }, function(resultat) {
                $("#formFait").html(resultat);
                $("#editFait").modal('show');
            })
        })

        $("#trombinoscope").on('click', '.unePhoto', function(){
            var matricule = $(this).data('matricule');
            $.post('inc/eleves/generateFicheEleve.inc.php', {
                matricule: matricule
                },
            function(resultat){
                $("#trombinoscope").hide();
                $("#ficheEleve").html(resultat).show();
            })
        })
    })
<?php echo '</script'; ?>
>
<?php }
}
