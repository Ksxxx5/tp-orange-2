<?php
global $unControleur;
$leClient = null;
if (isset($_GET['action']) && isset($_GET['idclient'])) {
    $action = $_GET['action'];
    $idClient = $_GET['idclient'];
    switch ($action) {
        case 'sup':
            $unControleur->deleteClient($idClient);
            break;
        case 'edit':
            $leClient = $unControleur->selectWhereClient($idClient);
            break;
    }
}
require_once("vue/vue_insert_client.php");

if (isset($_POST['Modifier'])) {
    $unControleur->updateClient($_POST);
    echo "<br>Modification réussie du client<br>";
}
if (isset($_POST['Valider'])) {
    $unControleur->insertClient($_POST);
    echo "<br/>Insertion reussite du client <br/>";
}
if (isset($_POST['Filtrer'])) {
    $mot = $_POST['mot'];
    $lesClients = $unControleur->selectLikeClient($mot);
} else {
    $lesClients = $unControleur->selectAllClients();
}
require_once("vue/vue_les_clients.php");

?>
