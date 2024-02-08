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

    public function accueil($mail = null, $msgConfirm = '')
    {
        $messagesAbsences = new MessageAbsences($this->pdo);
        $messagesAbsencesToday = $messagesAbsences->readAllMessageAbsenceToday();
     
        if(isset($_SESSION['admin']) || $mail !== null) {
            $messagesAbsences = new MessageAbsences($this->pdo);
            $messagesAbsences = $messagesAbsences->readAllMessageAbsence();
            $administrateurs = new Administrateurs($this->pdo);
            $administrateurs = $administrateurs->listerOneByMail($mail);
        }

        require_once('vues/page-accueil.php');
    }
    
// MESSAGES ABSENCES (pour page accueil)

public function createMessageAbsence($datedeb, $datefin, $msg)
{
    $msgabss = new MessageAbsences($this->pdo);
    $msgabsToCreate = $msgabss->create($datedeb, $datefin, $msg);
    
    //$messagesAbsence = $msgabss->lister();
    $this->accueil('', $msgabsToCreate);
    //require_once('vues/page-accueil.php');
}

public function updateMessageAbsence($id, $datedeb, $datefin, $msg)
{
    $msgabss = new MessageAbsences($this->pdo);
    $msgabsToCreate = $msgabss->update($id, $datedeb, $datefin, $msg);
    
    //$messagesAbsence = $msgabss->lister();
    $this->accueil('', $msgabsToCreate);
    //require_once('vues/page-accueil.php');
}

public function deleteMessageAbsence($id)
{
    $msgabss = new MessageAbsences($this->pdo);
    $msgabsToCreate = $msgabss->delete($id);
    
    //$messagesAbsence = $msgabss->lister();
    $this->accueil('', $msgabsToCreate);
    //require_once('vues/page-accueil.php');
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