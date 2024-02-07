<?php

require_once(dirname(__FILE__,2).'/modeles/Modele.php');
class Controleur {
     use Modele; 

    public function connexion() {
        require_once('vues/page-connexion.php');
    }

    public function deconnexion() {
        // Procédure de deconnexion
        $_SESSION['admin'] = 0;
        $_SESSION['role'] = 0;
        $_SESSION['nom'] = "";
        $_SESSION['prenom'] = "";
        $_SESSION['mail'] = '';
        $_SESSION['idadmin'] = '';
        session_destroy();
        
        $this->accueil(null);
    }

    public function verifConnexion($mail,$password) {
        $admin = new Administrateurs($this->pdo);
        $messageConnexion = "";
        //if($admin->verifConnexion($mail,$password)) {
            if($admin->verifConnexion($mail,$password) > 0) {
            //$_SESSION['admin'] = 1;
            /* $this->afficherMissions(); */
            $this->accueil($mail);
        } else {
            session_destroy();
            $messageConnexion = "Identifiant ou mot de passe erroné(s).";
            require_once('vues/page-connexion.php');
        }
    }

    // ACCUEIL

    public function accueil($mail = null)
    {
        if($mail !== null) {
            $messagesAbsences = new MessageAbsences($this->pdo);
            $messagesAbsences = $messagesAbsences->readAllMessageAbsence();
            $administrateurs = new Administrateurs($this->pdo);
            $administrateurs = $administrateurs->listerOneByMail($mail);
        }
        require_once('vues/page-accueil.php');
    }
    



// ADMINISTRATEUR - CRUD

    public function listerAdministrateurs()
    {
        $administrateurs = new Administrateurs($this->pdo);
        $administrateurs = $administrateurs->lister();
        require_once('vues/liste-administrateurs.php');
    }

    public function createAdministrateur($nom, $prenom, $mail, $mot_de_passe)
    {
        $administrateurs = new Administrateurs($this->pdo);
        $administrateurToCreate = $administrateurs->create($nom, $prenom, $mail, $mot_de_passe);
        $administrateurs = $administrateurs->lister();
        require_once('vues/liste-administrateurs.php');
    }

    public function updateAdministrateur($id,$nom, $prenom, $mail, $mot_de_passe)
    {
        $administrateurs = new Administrateurs($this->pdo);
        $administrateurToUpdate = $administrateurs->update($id,$nom, $prenom, $mail, $mot_de_passe);
        $administrateurs = $administrateurs->lister();
        require_once('vues/liste-administrateurs.php');
    }

    public function deleteAdministrateur($id,$nom,$prenom)
    {
        $administrateurs = new Administrateurs($this->pdo);
        $administrateurToDelete = $administrateurs->delete($id, $nom, $prenom);
        $administrateurs = $administrateurs->lister();
        require_once('vues/liste-administrateurs.php');
    }

}