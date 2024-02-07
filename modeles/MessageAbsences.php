<?php

class MessageAbsences
{
    use Modele;

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

    // READ pour listes déroulantes
/*     public function listerPaysJson()
    {
        if (!is_null($this->pdo)) {
            $stmt = $this->pdo->query('SELECT * FROM pays ORDER BY nom');
        }
        
        while ($pays = $stmt->fetchObject('Pays', [$this->pdo])) {
            $payss[] = [$pays->getId(), $pays->getNom()];
        }

        return $payss;
    }
 */

}