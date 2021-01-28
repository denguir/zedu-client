<?php

require_once '../../../config.inc.php';

require_once INSTALL_DIR.'/inc/classes/classApplication.inc.php';
$Application = new Application();

// définition de la class USER utilisée en variable de SESSION
require_once INSTALL_DIR.'/inc/classes/classUser.inc.php';
session_start();

if (!(isset($_SESSION[APPLICATION]))) {
    echo "<script type='text/javascript'>document.location.replace('".BASEDIR."');</script>";
    exit;
}

$User = $_SESSION[APPLICATION];
$acronyme = $User->getAcronyme();

$module = $Application->getModule(3);

$coursGrp = isset($_POST['coursGrp']) ? $_POST['coursGrp'] : Null;
$tri = isset($_POST['tri']) ? $_POST['tri'] : 'alpha';
$bulletin = isset($_POST['bulletin']) ? $_POST['bulletin'] : Null;


$listePeriodes = range(1, NBPERIODES);
$nomsPeriodes = explode(',', NOMSPERIODES);

$ds = DIRECTORY_SEPARATOR;
require_once INSTALL_DIR.'/smarty/Smarty.class.php';
$smarty = new Smarty;
$smarty->template_dir = INSTALL_DIR.$ds.$module.$ds.'templates';
$smarty->compile_dir = INSTALL_DIR.$ds.$module.$ds.'templates_c';

$smarty->assign('bulletin', $bulletin);
$smarty->assign('nomsPeriodes', $nomsPeriodes);
$smarty->assign('listePeriodes', $listePeriodes);

$smarty->display('carnet/modal/modalSavePDF.tpl');
