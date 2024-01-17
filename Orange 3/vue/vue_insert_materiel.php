<h3>Ajout d'un materiel</h3>
<br>
<form action="#" method="post">
    nom <br>
    <input type="text" name="nom"
    value="<?= $laMatiere = null ;
    ($laMatiere != null)? $laMatiere['nom'] : '' ?>"> <br>
    marque <br>
    <input type="text" name="marque"
    value="<?= ($laMatiere != null)? $laMatiere['marque'] : '' ?>"> <br>
    modele <br>
    <input type="text" name="modele"
    value="<?= ($laMatiere != null)? $laMatiere['modele'] : '' ?>"> <br>
    type <br>
    <input type="text" name="type"
    value="<?= ($laMatiere != null)? $laMatiere['type'] : '' ?>"> <br>
    dateachat <br>
    <input type="date" name="dateAchat"
    value="<?= ($laMatiere != null)? $laMatiere['dateAchat'] : date('Y-m-d') ?>"> <br>
    prix <br>
    <input type="text" name="prix"
    value="<?= ($laMatiere != null)? $laMatiere['prix'] : '' ?>"> <br>
    etat <br>
    <input type="text" name="etat"
    value="<?= ($laMatiere != null)? $laMatiere['etat'] : '' ?>"> <br>
    client <br>
    <input type="text" name="client_id"
    value="<?= ($laMatiere != null)? $laMatiere['client_id'] : '' ?>"> <br>
    <input type="reset" name="Annuler" value="Annuler"> <br>
    <input type="submit" 
    <?= ($laMatiere != null) ? 'name="Modifier" value="Modifier"' :'name="Valider" value="Valider"' ?> >
    <?= ($laMatiere != null) ? '<input type="hidden" name="idmatiere" value="'.$laMatiere['idmatiere'].'">':'' ?>
</form>