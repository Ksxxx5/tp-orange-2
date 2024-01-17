<h3>Ajout d'un technicien</h3>
<br>
<form action="#" method="post">
    Nom technicien <br>
    <label>
        <input type="text" name="nom"
        value="<?= $leTechnicien = null;
        ($leTechnicien != null)? $leTechnicien['nom'] : '' ?>">
    </label> <br>
    Prenom technicien <br>
    <input type="text" name="prenom"
    value="<?= ($leTechnicien != null)? $leTechnicien['prenom'] : '' ?>"> <br>
    Email technicien <br>
    <input type="text" name="email"
    value="<?= ($leTechnicien != null)? $leTechnicien['email'] : '' ?>"> <br>
    Mdp technicien <br>
    <input type="password" name="mdp"
    value="<?= ($leTechnicien != null)? $leTechnicien['mdp'] : '' ?>"> <br>
    Specialite technicien <br>
    <input type="text" name="specialite"
    value="<?= ($leTechnicien != null)? $leTechnicien['specialite'] : '' ?>"> <br>
    Adresse technicien <br>
    <input type="text" name="adresse"
    value="<?= ($leTechnicien != null)? $leTechnicien['adresse'] : '' ?>"> <br>
    Numero technicien <br>
    <input type="text" name="telephone"
    value="<?= ($leTechnicien != null)? $leTechnicien['telephone'] : '' ?>"> <br>


    <input type="reset" name="Annuler" value="Annuler"> <br>
    <input type="submit" 
    <?= ($leTechnicien != null) ? 'name="Modifier" value="Modifier"' :'name="Valider" value="Valider"' ?> >
    <?= ($leTechnicien != null) ? '<input type="hidden" name="idtechnicien" value="'.$leTechnicien['idtechnicien'].'">':'' ?>
</form>