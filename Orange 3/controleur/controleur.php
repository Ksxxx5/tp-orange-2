<?php

use modele\modele;

require_once ("modele/modele.php");

class controleur
{
    private $unModele;

    public function __construct()
    {
        $this->unModele = new modele();
    }

    // *********************************   GESTION DES clients
    public function insertClient($tab)
    {
        $this->unModele->insertClient($tab);
    }

    public function selectAllClients()
    {
        $lesClients = $this->unModele->selectAllClients();
        return $lesClients;
    }

    public function deleteClient($idclient)
    {
        $this->unModele->deleteClient($idclient);
    }

    public function updateClient($tab)
    {
        $this->unModele->updateClient($tab);
    }

    public function selectWhereClient($idclient)
    {
        return $this->unModele->selectWhereClient($idclient);
    }

    public function selectLikeClient($mot)
    {
        return $this->unModele->selectLikeClient($mot);
    }
    // *********************************   GESTION DES materiels
    public function insertMateriel($tab)
    {
        $this->unModele->insertMateriel($tab);
    }

    public function selectAllMateriels()
    {
        $lesMateriels = $this->unModele->selectAllMateriels();
        return $lesMateriels;
    }

    public function deleteMateriel($idmateriel)
    {
        $this->unModele->deleteMateriel($idmateriel);
    }

    public function updateMateriel($tab)
    {
        $this->unModele->updateMateriel($tab);
    }

    public function selectWhereMateriel($idmateriel)
    {
        return $this->unModele->selectWhereMateriel($idmateriel);
    }

    public function selectLikeMateriel($mot)
    {
        return $this->unModele->selectLikeMateriel($mot);
    }

    // *********************************   GESTION DES interventions
    public function insertIntervention($tab)
    {
        $this->unModele->insertIntervention($tab);
    }

    public function selectAllInterventions()
    {
        $lesInterventions = $this->unModele->selectAllInterventions();
        return $lesInterventions;
    }

    public function deleteIntervention($idintervention)
    {
        $this->unModele->deleteIntervention($idintervention);
    }

    public function updateIntervention($tab)
    {
        $this->unModele->updateIntervention($tab);
    }

    public function selectWhereIntervention($idintervention)
    {
        return $this->unModele->selectWhereIntervention($idintervention);
    }

    public function selectLikeIntervention($mot)
    {
        return $this->unModele->selectLikeIntervention($mot);
    }

    // *********************************   GESTION DES techniciens
    public function insertTechnicien($tab)
    {
        $this->unModele->insertTechnicien($tab);
    }

    public function selectAllTechniciens()
    {
        $lesTechniciens = $this->unModele->selectAllTechniciens();
        return $lesTechniciens;
    }

    public function deleteTechnicien($idtechnicien)
    {
        $this->unModele->deleteTechnicien($idtechnicien);
    }

    public function updateTechnicien($tab)
    {
        $this->unModele->updateTechnicien($tab);
    }

    public function selectWhereTechnicien($idtechnicien)
    {
        return $this->unModele->selectWhereTechnicien($idtechnicien);
    }

    public function selectLikeTechnicien($mot)
    {
        return $this->unModele->selectLikeTechnicien($mot);
    }

    // *********************************   Connexion
    public function Connexion($email, $mdp)
    {
        return $this->unModele->Connexion($email, $mdp);
    }

}
?>