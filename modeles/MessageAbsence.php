<?php 

class MessageAbsence
{
    use Modele;

    private $id;
    private $datedebut;
    private $datefin;
    private $message;



    public function readOneById($id)
    {
        if (!is_null($this->pdo)) {
            $stmt = $this->pdo->prepare('SELECT * FROM message_absence WHERE id = ?');
        }
        $tuple = [];//null;
        
        if ($stmt->execute([$id])) {
            $tuple = $stmt->fetchObject('MessageAbsence',[$this->pdo]);
            if (!is_object($tuple)) {
                $tuple = []; //null;
            }
        }
        $stmt->closeCursor();
        return $tuple;
    }



    public function getId()
    {
        return $this->id;
    }

    public function getDateDebut()
    {
        return $this->datedebut;
    }
    
    public function getDateFin()
    {
        return $this->datefin;
    }

    public function getMessage()
    {
        return $this->message;
    }

}

