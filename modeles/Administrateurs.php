<?php

class Administrateurs
{
    use Modele;

    // READ
    public function lister()
    {
        if (!is_null($this->pdo)) {
            $stmt = $this->pdo->query('SELECT * FROM custhomebike_administrateur');
        }
        $liste = [];
        while ($element = $stmt->fetchObject('Administrateur',[$this->pdo])) {
            $liste[] = $element;
        }
        $stmt->closeCursor();
        return $liste;
    }

    public function listerPartenaires()
    {
        if (!is_null($this->pdo)) {
            $stmt = $this->pdo->query('SELECT * FROM custhomebike_administrateur WHERE partenaire <> 0');
        }
        $liste = [];
        while ($element = $stmt->fetchObject('Administrateur',[$this->pdo])) {
            $liste[] = $element;
        }
        $stmt->closeCursor();
        return $liste;
    }

    public function listerId($id)
    {
        $id = intval($id);
        if (!is_null($this->pdo)) {
            //$stmt = $this->pdo->query('SELECT * FROM administrateur WHERE id = :id');
            $sql = 'SELECT * FROM custhomebike_administrateur WHERE id = :id';
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute(['id' => $id]);
        }
        $liste = [];
        while ($element = $stmt->fetchObject('Administrateur',[$this->pdo])) {
            $liste[] = $element;
        }
        $stmt->closeCursor();
        return $liste;
    }


    public function listerOneByMail($mail)
    {
        $mail = trim($mail);
        if (!is_null($this->pdo)) {
            //$stmt = $this->pdo->query('SELECT * FROM administrateur WHERE id = :id');
            $sql = 'SELECT * FROM custhomebike_administrateur WHERE mail = :mail';
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute(['mail' => $mail]);
        }
        $liste = [];
        while ($element = $stmt->fetchObject('Administrateur',[$this->pdo])) {
            $liste[] = $element;
        }
        $stmt->closeCursor();
        return $liste;
    }


    // CREATE
    public function create($nom, $prenom, $mail, $mot_de_passe) {
        if (!is_null($this->pdo)) {
            try {
                // Requête mysql pour insérer des données
                $today = date("Y-m-d");
                $pass = password_hash($mot_de_passe, PASSWORD_DEFAULT);

            $sql = 'SELECT * FROM custhomebike_administrateur WHERE mail = :mail';
                $sql = "INSERT INTO custhomebike_administrateur (nom, prenom, mail, date_creation, mot_de_passe) VALUES (:nom, :prenom, :mail, :date_creation, :mot_de_passe)";
                $res = $this->pdo->prepare($sql);
                $exec = $res->execute(array(":nom"=>$nom, ":prenom"=>$prenom, ":mail"=>$mail, ":date_creation"=>$today, "mot_de_passe"=>$pass));
                if($exec){
                    $tupleCreated = "L'administrateur <b>".$nom." ".$prenom."</b> a bien été ajouté.";
                }
            }
            catch(Exception $e) {
                $tupleCreated = "L'administrateur <b>".$nom." ".$prenom."</b> n'a pas pu être ajouté.<br/><br/>".$e;
            }
        }
        $res->closeCursor();
        return $tupleCreated;
    }

    // UPDATE
    public function update($id,$nom, $prenom, $mail, $mot_de_passe) {
        if (!is_null($this->pdo)) {
            try {
                // Si le mot de passe a été modifié (donc non vide)
                if($mot_de_passe != '') {
                    $pass = password_hash($mot_de_passe, PASSWORD_DEFAULT);
                    // Requête mysql pour insérer des données
                    $sql = "UPDATE custhomebike_administrateur SET nom = (:nom), prenom = (:prenom), mail = (:mail), mot_de_passe = (:mot_de_passe) WHERE id = (:id)";
                    $res = $this->pdo->prepare($sql);
                    $exec = $res->execute(array(":nom"=>$nom, ":prenom"=>$prenom, ":mail"=>$mail, "mot_de_passe"=>$pass, ":id"=>$id));
                } else { // Sinon, on met tout à jour sauf le mot de passe
                    $sql = "UPDATE custhomebike_administrateur SET nom = (:nom), prenom = (:prenom), mail = (:mail) WHERE id = (:id)";
                    $res = $this->pdo->prepare($sql);
                    $exec = $res->execute(array(":nom"=>$nom, ":prenom"=>$prenom, ":mail"=>$mail, ":id"=>$id));
                }
                if($exec){
                    $tupleUpdated = "L'administrateur <b>".$nom." ".$prenom."</b> a bien été modifié.";
                }
            }
            catch(Exception $e) {
                $tupleUpdated = "L'administrateur <b>".$nom." ".$prenom."</b> n'a pas pu être modifié.<br/><br/>".$e;
            }
        }
        
        return $tupleUpdated;
    }

    // UPDATE PASSWORD
    public function updatePassword($id, $mot_de_passe) {
        if (!is_null($this->pdo)) {
            try {
                // Si le mot de passe a été modifié (donc non vide)
                if($mot_de_passe != '') {
                    $pass = password_hash($mot_de_passe, PASSWORD_DEFAULT);
                    // Requête mysql pour insérer des données
                    $sql = "UPDATE custhomebike_administrateur SET mot_de_passe = (:mot_de_passe) WHERE id = (:id)";
                    $res = $this->pdo->prepare($sql);
                    $exec = $res->execute(array("mot_de_passe"=>$pass, ":id"=>$id));
                }
                if($exec){
                    $tupleUpdated = "Votre mot de passe a bien été modifié.";
                }
            }
            catch(Exception $e) {
                $tupleUpdated = "Votre mot de passe n'a pas pu être modifié.<br/><br/>".$e;
            }
        }
        
        return $tupleUpdated;
    }



    // DELETE
    //Supprime 1 administrateur de la BDD.
    public function delete($id, $nom, $prenom)
    {
        if (!is_null($this->pdo)) {
            try{
                $sql = 'DELETE FROM custhomebike_administrateur WHERE id = :id';
                $stmt = $this->pdo->prepare($sql);
                $stmt->execute(['id' => $id]);
                //$this->pdo->query('DELETE FROM administrateur WHERE id = '.$id.'');
                $tupleDeleted = "L'administrateur <b>".$nom." ".$prenom."</b> a bien été supprimé.";
            }
            catch(Exception $e) {
                $tupleDeleted = "L'administrateur <b>".$nom." ".$prenom."</b> n'a pas pu être supprimé.<br/><br/>".$e;
            }
        }
        
        return $tupleDeleted;
    }

    // Vérifier si un login et un mot de passe matchent avec un administrateur
    public function verifConnexion($mail,$password) 
    {
        if (!is_null($this->pdo)) {
            $sql = 'SELECT * FROM custhomebike_administrateur WHERE mail = :mail';
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute(['mail' => $mail]);
        }
        $reponse = $stmt->fetchObject('Administrateur',[$this->pdo]);
        
        //return ($reponse && password_verify($password, $reponse->getMotDePasse()));
        if(($reponse && password_verify($password, $reponse->getMotDePasse()))){
            $_SESSION['datecreation'] = $reponse->getDateCreation();
            $_SESSION['role'] = $reponse->getRole();
            if($reponse->getRole() == 1) {
                $_SESSION['admin'] = $reponse->getId();
                $_SESSION['role-libelle'] = 'Super Administrateur';
            }
            else {
                $_SESSION['role-libelle'] = 'Utilisateur';
                $_SESSION['admin'] = $reponse->getId();
            }
            $_SESSION['nom'] = $reponse->getNom();
            $_SESSION['prenom'] = $reponse->getPrenom();
            $_SESSION['mail'] = $reponse->getMail();
            return $reponse->getId();
        }
        
    }
}


// Anciennement dans VerifConnexion
//$stmt = $this->pdo->query('SELECT * FROM administrateur WHERE mail = \''.$mail.'\'');