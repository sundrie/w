<?php

namespace Controller;

use \W\Controller\Controller;
use \Model\LoginModel;

// on appelle le modèle déjà fait de connexion via PDO
// use \W\Model\ConnectionModel;
use \W\Security\AuthentificationModel;

class UsersController extends Controller
{

	public function afficher()
	{
		$this->show('users/home');
	}

	public function login(){
    $tintin = new LoginModel("jeanmich@gmail.com");
    var_dump($tintin);

		// $instance = ConnectionModel::getDbh();
		if (isset($_POST['connexion'])){
		  $authUser = AuthentificationModel::isValidLoginInfo($_POST['email'], $_POST['password']);
		}

		// if ($authUser == 1){
		//
		// }
  }

  public function inscriptionform() {
    $this->show('users/inscription');
  }

	public function connexionform() {
		$this->show('users/connexion');
	}

}
