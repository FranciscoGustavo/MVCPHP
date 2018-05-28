<?php
include_once '../config/connection.php';
/**
 *
 */
class users_model extends ConnectionDB
{
  function validateUser($email, $password){
    self::startConfig('localhost', 'phpmvc', 'root', '');
    self::startConnection();
    self::readFieldsToDataBase('*', 'users', "WHERE email='".$email."' AND password='".$password."'");
  }

  function searchUser($user){
    self::startConfig('localhost', 'phpmvc', 'root', '');
    self::startConnection();
    $where = "WHERE user_id=".$user;
    self::readFieldsToDataBase('username, first_name, last_name, email, roll, image, registration_date', 'users', $where);
  }
}

?>
