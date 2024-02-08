<?php

class MessageAbsences
{
    use Modele;


    // CREATE
    public function create($datedeb, $datefin, $msg) {
        if (!is_null($this->pdo)) {
            try {
                // Requête mysql pour insérer des données
                $sql = "INSERT INTO message_absence (datedebut, datefin, message) VALUES (:datedebut, :datefin, :msg)";
                $res = $this->pdo->prepare($sql);
                $exec = $res->execute(array(":datedebut"=>$datedeb, ":datefin"=>$datefin, ":msg"=>$msg));
                if($exec){
                    $tupleCreated = "Le message qui commence le <b>".$datedeb."</b> et se termine le <b>".$datefin."</b>";
                    $tupleCreated .= " dont le contenu commence par<br><pre>".substr($msg, 0, 40)."...</pre> a bien été ajouté.";
                }
            }
            catch(Exception $e) {
                $tupleCreated = "Le message qui commence le <b>".$datedeb."</b> et se termine le <b>".$datefin."</b>";
                $tupleCreated .= " dont le contenu commence par<br><pre>".substr($msg, 0, 40)."</pre> n'a pas pu être ajouté.<br/><br/>".$e;
            }
        }
        $res->closeCursor();
        return $tupleCreated;
    }

    // READ
    public function readAllMessageAbsence()
    {
        if (!is_null($this->pdo)) {
            $stmt = $this->pdo->query('SELECT * FROM message_absence ORDER BY datedebut DESC');
        }
        $tuples = [];
        while ($tuple = $stmt->fetchObject('MessageAbsence', [$this->pdo])) {
            $tuples[] = $tuple;
        }
        $stmt->closeCursor();
        return $tuples;
    }

    // Lors de la création/update des messages, aucun ne peux se chevaucher au niveau des dates.
    // C'est pour cela qu'ici, on ne récupère qu'UN SEUL MESSAGE, celui du jour.
    public function readAllMessageAbsenceToday()
    {
        if (!is_null($this->pdo)) {
            $stmt = $this->pdo->prepare('SELECT * FROM message_absence WHERE (DATEDIFF(datedebut,CURRENT_DATE()) <= 0) AND (DATEDIFF(datefin,CURRENT_DATE()) >= 0)');
        }
        $tuple = [];//null;
        
        if ($stmt->execute([/* $today,$today */])) {
            $tuple = $stmt->fetchObject('MessageAbsence',[$this->pdo]);
            if (!is_object($tuple)) {
                $tuple = []; //null;
            }
        }
        $stmt->closeCursor();
        return $tuple;
    }

    // UPDATE
    public function update($id, $datedeb, $datefin, $msg) {
        if (!is_null($this->pdo)) {
            try {
                    // Requête mysql pour insérer des données
                    $sql = "UPDATE message_absence SET datedebut = (:datedebut), datefin = (:datefin), message = (:msg) WHERE id = (:id)";
                    $res = $this->pdo->prepare($sql);
                    $exec = $res->execute(array(":datedebut"=>$datedeb, ":datefin"=>$datefin, ":msg"=>$msg, ":id"=>$id));
                    if($exec){
                        $tupleUpdated = "Le message <b>n°".$id."</b> a bien été modifié.";
                    }
                }
            catch(Exception $e) {
                $tupleUpdated = "Le message <b>n°".$id."</b> n'a pas pu être modifié.<br/><br/>".$e;
            }
        }
        
        return $tupleUpdated;
    }

    //Supprime 1 message absence de la BDD.
    public function delete($id)
    {
        if (!is_null($this->pdo)) {
            try{
                $sql = 'DELETE FROM message_absence WHERE id = :id';
                $stmt = $this->pdo->prepare($sql);
                $stmt->execute(['id' => $id]);
                //$this->pdo->query('DELETE FROM administrateur WHERE id = '.$id.'');
                $tupleDeleted = "Le message <b>n°".$id."</b> a bien été supprimé.";
            }
            catch(Exception $e) {
                $tupleDeleted = "Le message <b>n°".$id."</b> n'a pas pu être supprimé.<br/><br/>".$e;
            }
        }
        
        return $tupleDeleted;
    }
    

}