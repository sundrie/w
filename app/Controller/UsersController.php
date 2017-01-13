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
	// 	$tintin = new LoginModel("jeanmich@gmail.com");
  //   var_dump($tintin);

		// $instance = ConnectionModel::getDbh();
		if (isset($_POST['connexion'])){
			// On instancie un nouvel objet car les méthodes de la classe ne sont pas static
		  $authUser = new AuthentificationModel();
			$userID = $authUser -> isValidLoginInfo($_POST['email'], $_POST['password']);
			var_dump($userID);
		}

		// if ($authUser != 0){
		//
		// }

		$this->show('users/connexion');
	}

}
