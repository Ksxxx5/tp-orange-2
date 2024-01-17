<h3>Liste des techniciens</h3>
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
        <th>Numero du technicien</th>
        <th>Nom du technicien</th>
        <th>Prenom du technicien</th>
        <th>Specialite</th>
        <th>Adresse</th>
        <th>Telephone</th>
        <th>Email</th>
        <th>Mdp</th>
        <th>Modifier</th>
        <th>Supprimer</th>
    </tr>
    <?php
    if (isset($lesTechniciens)) {
    foreach ($lesTechniciens as $unTechnicien) {
        echo "<tr>
                <td>" . $unTechnicien['idtechnicien'] . "</td>
                <td>" . $unTechnicien['nom'] . "</td>
                <td>" . $unTechnicien['prenom'] . "</td>
                <td>" . $unTechnicien['specialite'] . "</td>
                <td>" . $unTechnicien['adresse'] . "</td>
                <td>" . $unTechnicien['telephone'] . "</td>
                <td>" . $unTechnicien['email'] . "</td>
                <td>" . $unTechnicien['mdp'] . "</td>
                <td> <a href='index.php?page=3&action=edit&idtechnicien=".$unTechnicien['idtechnicien']."'> <img src='images/editer.png' height='40' width='40'> </a></td>
                <td> <a href='index.php?page=3&action=sup&idtechnicien=".$unTechnicien['idtechnicien']."'> <img src='images/supprimer.png' height='40' width='40'> </a></td>
              </tr>";
    }
    }
    ?>
</table>
<br><br><br>

