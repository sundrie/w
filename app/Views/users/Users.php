<?php

class Users
{
    private $id;
    public $pseudo;
    private $mail;
    protected $password;
    public $lastname;
    public $firstname;

    public static function inscription(){
      $pseudo = $_POST['pseudo'];
      $mail = $_POST['email'];
      $password = $_POST['password'];
      $lastname = $_POST['lastname'];
      $firstname = $_POST['firstname'];
      $instance = new PDO("mysql:host=localhost;dbname=blog", "root", "");
      $query = $instance->prepare("INSERT INTO users (id, pseudo, mail, password, lastname, firstname) VALUES (:id, :pseudo, :mail, :password, :lastname, :firstname)");
      $insertSuccess = $query->execute(array(
        "id" => NULL,
        "pseudo" => $pseudo,
        "mail" => $mail,
        "password" => $password,
        "lastname" => $lastname,
        "firstname" => $firstname
      ));

      if (!$insertSuccess) {
        $e = "L'utilisateur n'a pas été ajouté !";
        Log::writeCSV($e);
      }

    }

    public static function connexion(){
      if (isset($_POST['pseudo']) && isset($_POST['password'])) {
        $sql = "SELECT * FROM users WHERE pseudo='".$_POST['pseudo']."' AND password='".$_POST['password']."'";
        $instance = new PDO("mysql:host=localhost;dbname=blog", "root", "");
        $user = $instance->query($sql)->fetch();

        if ($user) {
          $_SESSION['user'] = array(
            "pseudo" => $user['pseudo'],
            "userId" => $user['id']
          );
        } else {
          $e = "identifiants incorrect !";
          Log::writeCSV($e);
        }
      }
    }

    public static function deconnexion(){
      unset($_SESSION['user']);
    }
}
