<?php
namespace Model;
use W\Model\UsersModel;
class LoginModel extends UsersModel
{
    public $email;
    public function __construct($email)
    {
        $a = $this -> getUserByUsernameOrEmail($email);
        if ($this -> getUserByUsernameOrEmail($email)) {
            session_start();
        }
        else {
            session_unset();
        }
    }
}
