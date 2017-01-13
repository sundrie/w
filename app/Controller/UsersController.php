<?php

namespace Controller;

use \W\Controller\Controller;

use \Model\insertUserModel;
use \Model\LoginModel;
use \W\Security\AuthentificationModel;

class UsersController extends Controller
{

	public function afficher()
	{
		$this->show('users/home');
	}

  public function inscriptionform() {
		if(isset($_POST['inscription'])){
			$cryptedPassword = password_hash($_POST['password'], PASSWORD_DEFAULT);
			$newUser = array(
	      "username" => $_POST['username'],
	      "email" => $_POST['email'],
	      "password" => $cryptedPassword
			);
			$insertUser = new insertUserModel();
			$insertion = $insertUser -> insertUser($newUser);
		}
    	$this->show('users/inscription');
  }

	public function connexionform() {

		if (isset($_POST['connexion'])){
			// On instancie un nouvel objet car les méthodes de la classe ne sont pas static
		  $authUser = new AuthentificationModel();
			// $userID nous renvoie l'ID de l'utilisateur si les infos sont correctes sinon il renvoie 0
			$userID = $authUser -> isValidLoginInfo($_POST['email'], $_POST['password']);
			$user = array(
				'email' => $_POST['email'],
				'password' => $_POST['password']
		 );
			$connectUser = $authUser -> logUserIn($user);
		}
		$this->show('users/connexion');
	}

	public function deconnexion(){
		$auth = new AuthentificationModel();
		$decoUser = $auth -> logUserOut();
		
		$this->show('users/deconnexion');
	}

}
