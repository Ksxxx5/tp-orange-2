<h3>Ajout d'une intervention</h3>
<br>
<form action="#" method="post">
    technicien <br>
    <input type="text" name="technicien_id"
    value="<?= $lesInterventions = null;
    ($lesInterventions != null)? $lesInterventions['technicien_id'] : '' ?>"> <br>
    materiel <br>
    <input type="text" name="materiel_id"
    value="<?= ($lesInterventions != null)? $lesInterventions['materiel_id'] : '' ?>"> <br>
    Client <br>
    <input type="text" name="client_id"
    value="<?= ($lesInterventions != null)? $lesInterventions['client_id'] : '' ?>"> <br>
    Date <br>
    <input type="date" name="dateInter"
    value="<?= ($lesInterventions != null)? $lesInterventions['dateInter'] : '' ?>"> <br>
    description <br>
    <input type="text" name="description"
    value="<?= ($lesInterventions != null)? $lesInterventions['description'] : '' ?>"> <br>
    prix <br>
    <input type="text" name="prix"
    value="<?= ($lesInterventions != null)? $lesInterventions['prix'] : '' ?>"> <br>

    <input type="reset" name="Annuler" value="Annuler"> <br>
    <input type="submit" 
    <?= ($lesInterventions != null) ? 'name="Modifier" value="Modifier"' :'name="Valider" value="Valider"' ?> >
    <?= ($lesInterventions != null) ? '<input type="hidden" name="idtechnicien" value="'.$lesInterventions['idclient'].'">':'' ?>
</form>
