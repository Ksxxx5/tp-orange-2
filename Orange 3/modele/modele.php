<?php

namespace modele;

use PDO;
use PDOException;

class modele
{
    private $unPdo;

     public function __construct()
    {
        try {
            $this->unPdo = new Pdo("mysql:host=127.0.0.1;dbname=db_orange", "root", "");
        } catch (PDOException $exp) {
            echo "Erreur de connexion : " . $exp->getMessage();
        }
    }

    // *********************************   GESTION DES Clients
    public function insertClient($tab)
    {
        $requete = "INSERT INTO client values(null, :nom, :prenom, :adresse, :telephone, :email, :mdp, :statut);";
        $donnees = array(":nom" => $tab["nom"],
            ":prenom" => $tab["prenom"],
            ":adresse" => $tab["adresse"],
            ":telephone" => $tab["telephone"],
            ":email" => $tab["email"],
            ":mdp" => $tab["mdp"],
            ":statut" => $tab["statut"],);

        $insert = $this->unPdo->prepare($requete);
        $insert->execute($donnees);
    }

public function selectAllClients()
    {
        $requete = "Select * FROM client;";
        $select = $this->unPdo->prepare($requete);
        $select->execute();
        return $select->fetchAll();
    }

    public function deleteClient($idClient)
    {
        $requete = "DELETE FROM client WHERE idclient=:idclient;";
        $donnees = array(":idclient" => $idClient);
        $delete = $this->unPdo->prepare($requete);
        $delete->execute($donnees);
    }

    public function updateClient($tab)
    {
        $requete = "UPDATE client SET nom=:nom,
                        prenom=:prenom,
                        adresse=:adresse,
                        telephone=:telephone,
                        email=:email,
                        mdp=:mdp,
                        statut=:statut,
                        WHERE idclient=:idclient;";
        $donnees = array(":nom" => $tab["nom"],
            ":prenom" => $tab["prenom"],
            ":adresse" => $tab["adresse"],
            ":telephone" => $tab["telephone"],
            ":email" => $tab["email"],
            ":mdp" => $tab["mdp"],
            ":statut" => $tab["statut"],

            ":idclient" => $tab['idclient']);
        $update = $this->unPdo->prepare($requete);
        $update->execute($donnees);
        header("Refresh:0");
    }

    public function selectWhereClient($idClient)
    {
        $requete = "SELECT * FROM client WHERE idClient=:idClient;";
        $donnees = array(":idClient" => $idClient);
        $select = $this->unPdo->prepare($requete);
        $select->execute($donnees);
        return $select->fetch();
    }

    public function selectlikeClient($nom)
    {
        $requete = "SELECT * FROM client WHERE nom LIKE :nom;";
        $donnees = array(":nom" => $nom);
        $select = $this->unPdo->prepare($requete);
        $select->execute($donnees);
        return $select->fetchAll();
    }

    // *********************************   GESTION DES interventions
    public function insertIntervention($tab)
    {
        $requete = "INSERT INTO intervention values(null, :technicien_id, :materiel_id, :client_id, :dateInter, :description, :prix);";
        $donnees = array(":technicien_id" => $tab["technicien_id"],
            ":materiel_id" => $tab["materiel_id"],
            ":client_id" => $tab["client_id"],
            ":dateInter" => $tab["dateInter"],
            ":description" => $tab["description"],
            ":prix" => $tab["prix"],);
        $insert = $this->unPdo->prepare($requete);
        $insert->execute($donnees);
    }

    public function selectAllInterventions()
    {
        $requete = "Select * FROM intervention;";
        $select = $this->unPdo->prepare($requete);
        $select->execute();
        return $select->fetchAll();
    }

    public function deleteIntervention($idIntervention)
    {
        $requete = "DELETE FROM intervention WHERE idIntervention=:idIntervention;";
        $donnees = array(":idIntervention" => $idIntervention);
        $delete = $this->unPdo->prepare($requete);
        $delete->execute($donnees);
    }

    public function updateIntervention($tab)
    {
        $requete = "UPDATE intervention SET technicien_id=:technicien_id,
                        materiel_id=:materiel_id,
                        client_id=:client_id,
                        dateInter=:dateInter,
                        description=:description,
                        prix=:prix
                        WHERE idIntervention=:idIntervention;";
        $donnees = array(":technicien_id" => $tab["technicien_id"],
            ":materiel_id" => $tab["materiel_id"],
            ":client_id" => $tab["client_id"],
            ":dateInter" => $tab["dateInter"],
            ":description" => $tab["description"],
            ":prix" => $tab["prix"],
            ":idIntervention" => $tab['idIntervention']);
        $update = $this->unPdo->prepare($requete);
        $update->execute($donnees);
        header("Refresh:0");
    }

    public function selectWhereIntervention($idIntervention)
    {
        $requete = "SELECT * FROM intervention WHERE idIntervention=:idIntervention;";
        $donnees = array(":idIntervention" => $idIntervention);
        $select = $this->unPdo->prepare($requete);
        $select->execute($donnees);
        return $select->fetch();
    }

    public function selectlikeIntervention($idIntervention)
    {
        $requete = "SELECT * FROM intervention WHERE idIntervention LIKE :idIntervention;";
        $donnees = array(":idIntervention" => $idIntervention);
        $select = $this->unPdo->prepare($requete);
        $select->execute($donnees);
        return $select->fetchAll();
    }

    // *********************************   GESTION DES techniciens

    public function insertTechnicien($tab)
    {
        $requete = "INSERT INTO technicien values(null, :nom, :prenom, :specialite, :adresse, :telephone, :email, :mdp);";
        $donnees = array(":nom" => $tab["nom"],
            ":prenom" => $tab["prenom"],
            ":specialite" => $tab["specialite"],
            ":adresse" => $tab["adresse"],
            ":telephone" => $tab["telephone"],
            ":email" => $tab["email"],
            ":mdp" => $tab["mdp"],);
        $insert = $this->unPdo->prepare($requete);
        $insert->execute($donnees);
    }

    public function selectAllTechniciens()
    {
        $requete = "Select * FROM technicien;";
        $select = $this->unPdo->prepare($requete);
        $select->execute();
        return $select->fetchAll();
    }

    public function deleteTechnicien($idTechnicien)
    {
        $requete = "DELETE FROM technicien WHERE idTechnicien=:idTechnicien;";
        $donnees = array(":idTechnicien" => $idTechnicien);
        $delete = $this->unPdo->prepare($requete);
        $delete->execute($donnees);
    }

    public function updateTechnicien($tab)
    {
        $requete = "UPDATE technicien SET nom=:nom,
                        prenom=:prenom,
                        specialite=:specialite,
                        adresse=:adresse,
                        telephone=:telephone,
                        email=:email,
                        mdp=:mdp
                        WHERE idTechnicien=:idTechnicien;";
        $donnees = array(":nom" => $tab["nom"],
            ":prenom" => $tab["prenom"],
            ":specialite" => $tab["specialite"],
            ":adresse" => $tab["adresse"],
            ":telephone" => $tab["telephone"],
            ":email" => $tab["email"],
            ":mdp" => $tab["mdp"],
            ":idTechnicien" => $tab['idTechnicien']);
        $update = $this->unPdo->prepare($requete);
        $update->execute($donnees);
        header("Refresh:0");
    }

    public function selectWhereTechnicien($idTechnicien)
    {
        $requete = "SELECT * FROM technicien WHERE idTechnicien=:idTechnicien;";
        $donnees = array(":idTechnicien" => $idTechnicien);
        $select = $this->unPdo->prepare($requete);
        $select->execute($donnees);
        return $select->fetch();
    }

    public function selectlikeTechnicien($nom)
    {
        $requete = "SELECT * FROM technicien WHERE nom LIKE :nom;";
        $donnees = array(":nom" => $nom);
        $select = $this->unPdo->prepare($requete);
        $select->execute($donnees);
        return $select->fetchAll();
    }

    // *********************************   GESTION DES materiels

    public function insertMateriel($tab)
    {
        $requete = "INSERT INTO materiel VALUES (null, :nom, :marque, :modele, :type, :dateAchat, :prix, :etat, :client_id);";
        $donnees = array(
            ":nom" => $tab["nom"],
            ":marque" => $tab["marque"],
            ":modele" => $tab["modele"],
            ":type" => $tab["type"],
            ":dateAchat" => $tab["dateAchat"],
            ":prix" => $tab["prix"],
            ":etat" => $tab["etat"],
            ":client_id" => $tab["client_id"]
        );
        $insert = $this->unPdo->prepare($requete);
        $insert->execute($donnees);
    }
    

    public function selectAllMateriels()
    {
        $requete = "Select * FROM materiel;";
        $select = $this->unPdo->prepare($requete);
        $select->execute();
        return $select->fetchAll();
    }

    public function deleteMateriel($idMateriel)
    {
        $requete = "DELETE FROM materiel WHERE idMateriel=:idMateriel;";
        $donnees = array(":idMateriel" => $idMateriel);
        $delete = $this->unPdo->prepare($requete);
        $delete->execute($donnees);
    }

    public function updateMateriel($tab)
    {
        $requete = "UPDATE materiel SET nom=:nom,
                        marque=:marque,
                        modele=:modele,
                        type=:type,
                        dateAchat=:dateAchat,
                        etat=:etat,
                        client_id=:client_id
                        WHERE idMateriel=:idMateriel;";
        $donnees = array(":nom" => $tab["nom"],
            ":marque" => $tab["marque"],
            ":modele" => $tab["modele"],
            ":type" => $tab["type"],
            ":dateAchat" => $tab["dateAchat"],
            ":etat" => $tab["etat"],
            ":client_id" => $tab["client_id"],
            ":idMateriel" => $tab['idMateriel']);
        $update = $this->unPdo->prepare($requete);
        $update->execute($donnees);
        header("Refresh:0");
    }

    public function selectWhereMateriel($idMateriel)
    {
        $requete = "SELECT * FROM materiel WHERE idMateriel=:idMateriel;";
        $donnees = array(":idMateriel" => $idMateriel);
        $select = $this->unPdo->prepare($requete);
        $select->execute($donnees);
        return $select->fetch();
    }

    public function selectlikeMateriel($nom)
    {
        $requete = "SELECT * FROM materiel WHERE nom LIKE :nom;";
        $donnees = array(":nom" => $nom);
        $select = $this->unPdo->prepare($requete);
        $select->execute($donnees);
        return $select->fetchAll();
    }

// *********************************   Connexion
    public function connexion($email, $mdp)
    {
        $requete = "select * FROM user WHERE email= :email AND mdp= :mdp;";
        $donnees= array(":email"=>$email, ":mdp"=>$mdp);
        $select = $this ->unPdo->prepare($requete);
        $select->execute ($donnees);
        return $select->fetch ();
}
}