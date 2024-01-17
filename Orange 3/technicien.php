<?php
global $unControleur;
$leTechnicien = null;
if (isset($_GET['action']) && isset($_GET['idtechnicien'])) {
    $action = $_GET['action'];
    $idTechnicien = $_GET['idtechnicien'];
    switch ($action) {
        case 'sup':
            $unControleur->deleteTechnicien($idTechnicien);
            break;
        case 'edit':
            $leTechnicien = $unControleur->selectWhereTechnicien($idTechnicien);
            break;
    }
}
require_once("vue/vue_insert_technicien.php");

if (isset($_POST['Modifier'])) {
    $unControleur->updateTechnicien($_POST);
    echo "<br>Modification réussie du technicien<br>";
}
if (isset($_POST['Valider'])) {
    $unControleur->insertTechnicien($_POST);
    echo "<br/>Insertion reussite du technicien <br/>";
}
if (isset($_POST['Filtrer'])) {
    $mot = $_POST['mot'];
    $lesTechniciens = $unControleur->selectLikeTechnicien($mot);
} else {
    $lesTechniciens = $unControleur->selectAllTechniciens();
}
require_once("vue/vue_les_techniciens.php");
?>
