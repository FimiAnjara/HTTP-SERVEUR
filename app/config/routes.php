<?php

use app\controllers\ApiExampleController;
use app\controllers\DepotController;
use app\controllers\UtilisateurController;
use flight\Engine;
use flight\net\Router;
//use Flight;

/** 
 * @var Router $router 
 * @var Engine $app
 */
/*$router->get('/', function() use ($app) {
	$Welcome_Controller = new WelcomeController($app);
	$app->render('welcome', [ 'message' => 'It works!!' ]);
});*/

$utilisateurController = new UtilisateurController();
$router->get('/',[$utilisateurController,'redirectionLogin']);
$router->get('/Accueil',[$utilisateurController,'home'] );
$router->get('/Login',[$utilisateurController,'redirectionLogin'] );
$router->post('/Accueil',[$utilisateurController,'testlogin'] );

$depotControlleur = new DepotController();
$router->get('/depot',[$depotControlleur,'directionDepot']);
$router->post('/depot/insertion',[$depotControlleur,'insertDepot']);

$router->get('/hello-world/@name', function($name) {
	echo '<h1>Hello world! Oh hey '.$name.'!</h1>';
});

$router->group('/api', function() use ($router, $app) {
	$Api_Example_Controller = new ApiExampleController($app);
	$router->get('/users', [ $Api_Example_Controller, 'getUsers' ]);
	$router->get('/users/@id:[0-9]', [ $Api_Example_Controller, 'getUser' ]);
	$router->post('/users/@id:[0-9]', [ $Api_Example_Controller, 'updateUser' ]);
});