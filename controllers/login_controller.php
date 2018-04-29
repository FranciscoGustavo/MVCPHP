<?php
  /**

  **/
  include_once "../models/login_model.php";

  class login_controller extends login_model
  {
    function __construct($action)
    {
      if ($action == "login") {
        self::validateUser($_POST['email'],$_POST['password']);
      } else {
        echo "Error";
      }
    }

    function validateUser($email, $password){
      self::startConnection();
      $resultado = self::existUser($email);
      print_r($resultado);
    }
  }

  $login = new login_controller($_GET ['action']);

?>
