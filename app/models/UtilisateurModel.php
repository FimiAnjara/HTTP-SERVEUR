<?php

namespace app\models;

use Flight;

class UtilisateurModel {

    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function login($email,$password){
        $sql = "SELECT * FROM Utilisateur Where email = :email and password = :password";
        $stmt = $this->db->prepare($sql);
        $stmt->execute(['email' => $email , 'password' => $password]);
        return $stmt->fetch();
    }

    public function checkUserPassword($idUtilisateur, $password) {
        $sql = "SELECT COUNT(*) FROM Utilisateur WHERE idUtilisateur = :idUtilisateur AND password = :password";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([
            'idUtilisateur' => $idUtilisateur,
            'password' => $password
        ]);
        $count = $stmt->fetchColumn();
        return $count > 0;
    }
    

}