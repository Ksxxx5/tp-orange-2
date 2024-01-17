<?php
global $unControleur;
$leMateriel = null;
if (isset($_GET['action']) && isset($_GET['idmateriel'])) {
    $action = $_GET['action'];
    $idMateriel = $_GET['idmateriel'];
    switch ($action) {
        case 'sup':
            $unControleur->deleteMateriel($idMateriel);
            break;
        case 'edit':
            $leMateriel = $unControleur->selectWhereMateriel($idMateriel);
            break;
    }
}
require_once("vue/vue_insert_materiel.php");

if (isset($_POST['Modifier'])) {
    $unControleur->updateMateriel($_POST);
    echo "<br>Modification réussie du materiel<br>";
}
if (isset($_POST['Valider'])) {
    $unControleur->insertMateriel($_POST);
    echo "<br/>Insertion reussite du materiel <br/>";
}
if (isset($_POST['Filtrer'])) {
    $mot = $_POST['mot'];
    $lesMateriels = $unControleur->selectLikeMateriel($mot);
} else {
    $lesMateriels = $unControleur->selectAllMateriels();
}
require_once("vue/vue_les_materiels.php");
?>

