<?php

require_once '../../../config.inc.php';

require_once INSTALL_DIR.'/inc/classes/classApplication.inc.php';
$Application = new Application();

require_once INSTALL_DIR.'/inc/classes/classUser.inc.php';
session_start();

if (!(isset($_SESSION[APPLICATION]))) {
    echo "<script type='text/javascript'>document.location.replace('".BASEDIR."');</script>";
    exit;
}

$User = $_SESSION[APPLICATION];
$acronyme = $User->getAcronyme();

// retrouver le nom du module actif
$module = $Application->getModule(3);

$matricule = isset($_POST['matricule']) ? $_POST['matricule'] : Null;
$instanceName = isset($_POST['id']) ? $_POST['id'] : Null;
$texte = isset($_POST['texte']) ? $_POST['texte'] : Null;

$padId = explode('_', $instanceName)[1];

$ds = DIRECTORY_SEPARATOR;
require_once INSTALL_DIR.$ds.'inc/classes/classPad.inc.php';
$padEleve = new padEleve($matricule, $acronyme);

$nb = $padEleve->updatePadEleve($padId, $matricule, $texte);

echo $nb;
