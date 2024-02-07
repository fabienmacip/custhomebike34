<?php

trait Modele
{
    private $pdo = null;

    public function __construct(PDO $pdo)
    {
        try {
            $this->pdo = $pdo;
        } catch (PDOException $e) {
            exit('Erreur : '.$e->getMessage());
        }
    }
}