<h3>Liste des clients</h3>
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
        <th>Numero du client</th>
        <th>Nom du client</th>
        <th>Prenom du client</th>
        <th>Adresse du client</th>
        <th>Telephone</th>
        <th>Email</th>
        <th>Statut</th>
        <th>NB Client</th>
        <th>Modifier</th>
        <th>Supprimer</th>
    </tr>
    <?php
    if (isset($lesClients)) {
        $nombrePrive = 0;
        $nombrePublic = 0;
        $nombreAutre = 0;
        foreach ($lesClients as $unClient) {
            $color = "orange"; 
        
            if ($unClient['statut'] == "private") {
                $color = "green";
            } elseif ($unClient['statut'] == "public") {
                $color = "blue";
            } elseif ($unClient['statut'] == "other") {
                $color = "grey";
            }
            
            echo "<tr>
                    <td>" . $unClient['idclient'] . "</td>
                    <td>" . $unClient['nom'] . "</td>
                    <td>" . $unClient['prenom'] . "</td>
                    <td>" . $unClient['adresse'] . "</td>
                    <td>" . $unClient['telephone'] . "</td>
                    <td>" . $unClient['email'] . "</td>
                    <td style='background-color: $color;'>" . $unClient['statut'] . "</td>
                    <td>" . $unClient['NB Client'] . "</td>
                    <td> <a href='index.php?page=1&action=edit&idclient=".$unClient['idclient']."'> <img src='images/editer.png' height='40' width='40'> </a></td>
                    <td> <a href='index.php?page=1&action=sup&idclient=".$unClient['idclient']."'> <img src='images/supprimer.png' height='40' width='40'> </a></td>
                  </tr>";
        }
        
    }
    ?>
</table>
<br><br><br>
