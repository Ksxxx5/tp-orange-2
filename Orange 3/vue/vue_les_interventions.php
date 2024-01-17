<h3>Liste des interventions</h3>
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
        <th>Numero de l'intervention</th>
        <th>Numero du technicien</th>
        <th>Numero du matériel</th>
        <th>Numero du client</th>
        <th>Date de l'intervention</th>
        <th>Descritption</th>
        <th>Prix</th>
        <th>Modifier</th>
        <th>Supprimer</th>
    </tr>
    <?php
    if (isset($lesInterventions)) {
    foreach ($lesInterventions as $uneIntervention) {
        echo "<tr>
                <td>" . $uneIntervention['idintervention'] . "</td>
                <td>" . $uneIntervention['technicien_id'] . "</td>
                <td>" . $uneIntervention['materiel_id'] . "</td>
                <td>" . $uneIntervention['client_id'] . "</td>
                <td>" . $uneIntervention['dateInter'] . "</td>
                <td>" . $uneIntervention['description'] . "</td>
                <td>" . $uneIntervention['prix'] . "</td>
                <td> <a href='index.php?page=2&action=edit&idintervention=".$uneIntervention['idintervention']."'> <img src='images/editer.png' height='40' width='40'> </a></td>
                <td> <a href='index.php?page=2&action=sup&idintervention=".$uneIntervention['idintervention']."'> <img src='images/supprimer.png' height='40' width='40'> </a></td>
              </tr>";

    }
    }
    ?>
</table>
<br><br><br>
