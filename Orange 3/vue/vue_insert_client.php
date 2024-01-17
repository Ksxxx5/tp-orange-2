<h3>Ajout d'un client</h3>
<br>
<form action="#" method="post">
    Nom client <br>
    <input type="text" name="nom"
    value="<?= $leClient = null;
    ($leClient != null)? $leClient['nom'] : '' ?>"> <br>
    Prenom client <br>
    <input type="text" name="prenom"
    value="<?= ($leClient != null)? $leClient['prenom'] : '' ?>"> <br>
    Email client <br>
    <input type="text" name="email"
    value="<?= ($leClient != null)? $leClient['email'] : '' ?>"> <br>
    Mdp client <br>
    <input type="password" name="mdp"
    value="<?= ($leClient != null)? $leClient['mdp'] : '' ?>"> <br>
    adresse client <br>
    <input type="text" name="adresse"
    value="<?= ($leClient != null)? $leClient['adresse'] : '' ?>"> <br>
    Numero client <br>
    <input type="text" name="telephone"
    value="<?= ($leClient != null)? $leClient['telephone'] : '' ?>"> <br>
    <label for="statut">Statut:</label><br>
<select name="statut" id="statut">

    <option value="private" <?= ($leClient != null && $leClient['statut'] == 'private') ? 'selected' : '' ?>>Privé</option>
    <option value="public" <?= ($leClient != null && $leClient['statut'] == 'public') ? 'selected' : '' ?>>Public</option>
    <option value="other" <?= ($leClient != null && $leClient['statut'] == 'other') ? 'selected' : '' ?>>Autre</option>
    <form>
   
</select><br>

   <br>
   <br> 
    <input type="reset" name="Annuler" value="Annuler"> <br>
    <input type="submit"
    <?= ($leClient != null) ? 'name="Modifier" value="Modifier"' :'name="Valider" value="Valider"' ?> >
    <?= ($leClient != null) ? '<input type="hidden" name="idclient" value="'.$leClient['idclient'].'">':'' ?>
</form>