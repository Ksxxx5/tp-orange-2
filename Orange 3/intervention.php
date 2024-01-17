<?php
global $unControleur;
$leInterventation = null;
if (isset($_GET['action']) && isset($_GET['idintervention'])) {
    $action = $_GET['action'];
    $idIntervention = $_GET['idintervention'];
    switch ($action) {
        case 'sup':
            $unControleur->deleteIntervention($idIntervention);
            break;
        case 'edit':
            $leIntervention = $unControleur->selectWhereIntervention($idIntervention);
            break;
    }
}
require_once("vue/vue_insert_intervention.php");

if (isset($_POST['Modifier'])) {
    $unControleur->updateIntervention($_POST);
    echo "<br>Modification réussie de l'intervention<br>";
}
if (isset($_POST['Valider'])) {
    $unControleur->insertIntervention($_POST);
    echo "<br/>Insertion reussite de l'intervention <br/>";
}
if (isset($_POST['Filtrer'])) {
    $mot = $_POST['mot'];
    $lesInterventions = $unControleur->selectLikeIntervention($mot);
} else {
    $lesInterventions = $unControleur->selectAllInterventions();
}
require_once("vue/vue_les_interventions.php");
?>
