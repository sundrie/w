<?php
namespace Model;
use W\Model\Model;
// on appelle le modèle déjà fait de connexion via PDO
use \W\Model\ConnectionModel;
class insertUserModel extends Model
{
  public function insertUser($newUser){
    $dbhConnect = new ConnectionModel();
    $instance = $dbhConnect -> getDbh();
    // requête d'ajout d'un article
    $sql = "INSERT INTO users (username, email, password)
    VALUES ('".$newUser['username']."','".$newUser['email']."','".$newUser['password']."')";

    $insertSuccess = $instance->exec($sql);
  }


  // On fait notre PROPRE INSERTION A NOUS BORDEL DE CHIOTTES !!!!!

  // Pour la connexion sebastien le magicien à dit qu'il fallait stocker les mots de passes hachés dans la BDD car c'est ce qui est utilisé pour faire les tests
}
