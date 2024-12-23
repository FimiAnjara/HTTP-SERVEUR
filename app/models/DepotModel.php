<?php

namespace app\models;

use Flight;
use PDOException;

class DepotModel {

    private $db;

    public function __construct($db){
        $this->db = $db;
    }
    
    public function insertDepot($idUtilisateur, $montant) {
        try {
            $sql = "INSERT INTO Depot (idUtilisateur, montant, daty, validation) 
                    VALUES (:idUtilisateur, :montant, NOW(), 0)";
            $stmt = $this->db->prepare($sql);
            $stmt->execute([
                'idUtilisateur' => $idUtilisateur,
                'montant' => $montant
            ]);
            return true;
        } catch (PDOException $e) {
            error_log("Erreur d'insertion : " . $e->getMessage());
            return false;
        }
    }
    
}