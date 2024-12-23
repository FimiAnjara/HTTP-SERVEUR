<?php

namespace app\controllers;

use flight;

class  UtilisateurController{

	public function __construct() {
		
	}
    
    public function home(){
        $header = ["header" => 'header'];
        Flight::render('accueil',$header);
    }

    public function redirectionLogin(){
        $_SESSION['idUtilisateur'] = null;
        Flight::render('Login');
    }

    public function testLogin(){
        $email =  Flight::request()->data['email'];
        $password =  Flight::request()->data['password'];
        $user = Flight::UtilisateurModel()->login($email,$password);
        if($user){
            $_SESSION['idUtilisateur'] = $user['idUtilisateur'];
            $header = ["header" => 'header'];
            Flight::render('accueil',$header);
        }else{
            $data['error'] = "Veuillez verifier votre mot de passe et votre email";
            Flight::render('Login',$data);
        }
    }
   


}