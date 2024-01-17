<h3>Liste des materiels</h3>
<br>
<form action="#" method="post">
    Filtrer par : <label>
        <input type="text" name="mot">
    </label>
    <input type="submit" name="Filtrer" value="Filtrer">
</form>
<br>
<table border="1">
    <tr>
        <th>Numero du materiel</th>
        <th>Nom du materiel</th>
        <th>Marque du materiel</th>
        <th>Modele du materiel</th>
        <th>Type du materiel</th>
        <th>Date d'achat du materiel</th>
        <th>Prix d'achat du materiel</th>
        <th>Etat du materiel</th>
        <th>Client du materiel</th>
        <th>Modifier</th>
        <th>Supprimer</th>
    </tr>
    <?php
    if (isset($lesMateriels)) {
    foreach ($lesMateriels as $unMateriel) {
        echo "<tr>
                <td>" . $unMateriel['idmateriel'] . "</td>
                <td>" . $unMateriel['nom'] . "</td>
                <td>" . $unMateriel['marque'] . "</td>
                <td>" . $unMateriel['modele'] . "</td>
                <td>" . $unMateriel['type'] . "</td>
                <td>" . $unMateriel['dateachat'] . "</td>
                <td>" . $unMateriel['prix'] . "</td>
                <td>" . $unMateriel['etat'] . "</td>
                <td>" . $unMateriel['client_id'] . "</td>
                <td> <a href='index.php?page=4&action=edit&idmateriel=".$unMateriel['idmateriel']."'> <img src='images/editer.png' height='40' width='40'> </a></td>
                <td> <a href='index.php?page=4&action=sup&idmateriel=".$unMateriel['idmateriel']."'> <img src='images/supprimer.png' height='40' width='40'> </a></td>
              </tr>";
    }
    }
    ?>
</table>
<br><br><br>
