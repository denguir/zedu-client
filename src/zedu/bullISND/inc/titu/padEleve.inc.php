<?php

$classe = isset($_POST['classe']) ? $_POST['classe'] : Null;

$listeClasses = $user->listeTitulariats();

$smarty->assign('listeClasses', $listeClasses);
if (isset($classe)) {
    $listeEleves = $Ecole->listeEleves($classe, 'groupe');
    $smarty->assign('listeEleves', $listeEleves);
}

if (isset($matricule) && ($matricule != '')
    && (in_array($matricule, array_keys($listeEleves)))  // le matricule fait partie de la classe sélectionnée
    && ($matricule != 'all')) {  // le cookie pourrait contenir la valeur 'all' qui n'aurait pas de sens ici
    // si un matricule est donné, on aura sans doute besoin des données de l'élève
    $eleve = new Eleve($matricule);

    require_once INSTALL_DIR.'/inc/classes/classPad.inc.php';
    $padEleve = new padEleve($matricule, $acronyme);

    $smarty->assign('ANNEESCOLAIRE', ANNEESCOLAIRE);

    $smarty->assign('padsEleve', $padEleve->getPads());

    // recherche des infos personnelles de l'élève
    $smarty->assign('eleve', $eleve->getDetailsEleve());

    // recherche des infos concernant le passé scolaire
    $smarty->assign('ecoles', $eleve->ecoleOrigine());

    // le CEB
    $smarty->assign('degre', $Ecole->degreDeClasse($eleve->groupe()));
    $smarty->assign('ceb', $Bulletin->getCEB($matricule));

    // recherche des cotes de situation et délibé éventuelle pour toutes les périodes de l'année en cours
    $listeCoursActuelle = $Bulletin->listeFullCoursGrpActuel($matricule);
    $listeCoursActuelle = ($listeCoursActuelle != Null) ? $listeCoursActuelle : Null;
    $listeCoursActuelle = (isset($listeCoursActuelle[$matricule])) ? $listeCoursActuelle[$matricule] : Null;
    $smarty->assign('listeCoursGrp', $listeCoursActuelle);

    $syntheseAnneeEnCours = ($listeCoursActuelle != Null) ? $Bulletin->syntheseAnneeEnCours($listeCoursActuelle, $matricule) : Null;
    $smarty->assign('anneeEnCours', $syntheseAnneeEnCours);
    $smarty->assign('ANNEESCOLAIRE', ANNEESCOLAIRE);


    $dicoProfs = $padEleve->dicoProfs();
    $smarty->assign('dicoProfs', $dicoProfs);

    // tableau de synthèse de toutes les cotes de situation pour toutes les années scolaires
    $syntheseToutesAnnees = $Bulletin->syntheseToutesAnnees($matricule);
    $smarty->assign('listeCoursActuelle', $listeCoursActuelle);

    // ----------------------------------------------------------------------
    // matières à problèmes pour le pad "coordinateur"
    $listeMatieres = $padEleve->getMatieres4pad($matricule);
    $smarty->assign('listeMatieres', $listeMatieres);

    // rubriques de suivi scolaire pour le pad "coordinateur"
    $suivi4pad = $padEleve->getSuivi4pad($matricule);
    $smarty->assign('suivi4pad', $suivi4pad);
    // liste des années scolaires et périodes existantes pour cet élève
    $tabsAnsPeriodes = $padEleve->getAnPeriode();
    $smarty->assign('tabsAnsPeriodes', $tabsAnsPeriodes);


    $listePeriodes = $Bulletin->listePeriodes(NBPERIODES);
    $smarty->assign('listePeriodes', $listePeriodes);
    $smarty->assign('NOMSPERIODES', explode(',', NOMSPERIODES));

    $smarty->assign('PERIODESDELIBES', explode(',', PERIODESDELIBES));


    $smarty->assign('epreuvesExternes', $Bulletin->cotesExternesPrecedentes($matricule));
    $smarty->assign('syntheseToutesAnnees', $syntheseToutesAnnees);

    $mentions = $Bulletin->listeMentions($matricule);
    $smarty->assign('mentions', $mentions);

    // détermination du nombre max de période de délibé
    $maxPeriodes = 0;
    if ($mentions != Null) {
        if ($mentions[$matricule] != Null){
            foreach ($mentions[$matricule] AS $anScol => $dataAnnee) {
                foreach ($dataAnnee AS $annee => $data) {
                    if (count($data) > $maxPeriodes)
                        $maxPeriodes = count($data);
                    }
                }
            }
        }
    $smarty->assign('maxPeriodes', $maxPeriodes);

    $prevNext = $Bulletin->prevNext($matricule, $listeEleves);
    $titulaires = $eleve->titulaires($matricule);
    $smarty->assign('matricule', $matricule);
    $smarty->assign('titulaires', $titulaires);

    $smarty->assign('prevNext', $prevNext);
    $smarty->assign('etape', 'enregistrer');
    $smarty->assign('corpsPage', 'titu/ficheEleve');
}

$smarty->assign('selecteur', 'selecteurs/selectClasseEleve');
$smarty->assign('action', $action);
$smarty->assign('mode', $mode);
