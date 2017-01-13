<?php
namespace Model;
use W\Model\Model;
// on appelle le modèle déjà fait de connexion via PDO
use \W\Model\ConnectionModel;
class insertUserModel extends Model
{
  public function insertUser($newUser){
    // on instancie un objet de connexion
    $dbhConnect = new ConnectionModel();
    // On appelle la méthode pour créer un PDO à notre bdd
    $instance = $dbhConnect -> getDbh();
    // requête d'ajout d'un utilisateur
    $sql = "INSERT INTO users (username, email, password)
    VALUES ('".$newUser['username']."','".$newUser['email']."','".$newUser['password']."')";

    $insertSuccess = $instance->exec($sql);
  }
}
