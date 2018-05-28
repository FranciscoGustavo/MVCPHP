<?php
include_once '../models/users_model.php';

/**
 *
 */
class users_controller extends users_model
{

  function __construct($action)
  {
    if ($action == 'login') {
      self::loginUser($_POST['email'], $_POST['password']);
    } else if($action == 'view'){
      self::showUser($_GET['user']);
    } elseif ($action == 'destroysession') {
      self::destroySession();
    }
  }

  function loginUser($email, $password){
    $passwordHash = hash('sha512', $_POST['password']);
    self::validateUser($email, $passwordHash);
    if ($this->elements !== false) {
      session_start();
      $_SESSION['user'] = $this->elements['user_id'];
      $this->elements = "";
      header('Location: ../');
    }else {
      header('Location: ../');
    }
  }

  function showUser($user){
    self::searchUser($user);
    if ($this->elements !== false) {
      session_start();
      $_SESSION['userdata'] = $this->elements;
      header('Location: ../perfil.php');
    }else {
      header('Location: ../');
    }
  }

  function destroySession(){
    session_start();
    session_destroy();
    header('Location: ../');
  }
}


?>
