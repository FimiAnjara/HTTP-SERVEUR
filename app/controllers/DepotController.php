<?php

namespace app\controllers;

use flight;
use flight\debug\tracy\FlightPanelExtension;

class  DepotController{

	public function __construct() {
		
	}
    public function directionDepot(){
        $header = ['header'=>'header'];
        Flight::render('depot',$header);
    }
    public function insertDepot(){
        $montant = Flight::request()->data['montant'];
        $password = Flight::request()->data['password'];
        $depot = [
            "montant" => $montant,
            "password" => $password
        ];
        $user = Flight::UtilisateurModel()->checkUserPassword($_SESSION['idUtilisateur'], $password);
        if (empty($password) || empty($montant) || intval($montant) <= 0 || !$user) {
            Flight::json(['insert' => false, 'message' => 'Invalid Password or Invalid amount.']);
            return;
        }
        $insert = Flight::DepotModel()->insertDepot($_SESSION['idUtilisateur'], $montant);
        if ($insert) {
            Flight::json(['insert' => true, 'message' =>'Insert depot is successful.Please wait the validation']);
        } else {
            Flight::json(['insert' => false, 'message' => 'Une erreur est survenue lors du dépôt.']);
            return;
        }
        
    }

}