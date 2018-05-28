<?php
  include_once "users_controller.php";
  include_once '../models/main_model.php';

  class Main_controller extends main_model
  {
    function __construct(){
      if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if($_GET['controller'] == 'users'){
          $user = new users_controller($_GET['action']);
        }
      }
      if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        if ($_GET['action'] == 'load') {
          self::loadMainPage();
        }
        if($_GET['controller'] == 'users'){
          $user = new users_controller($_GET['action']);
        }
      }

    }

    function loadMainPage(){
      self::searchProducts();
      if ($this->elements !== false) {
        session_start();
        $_SESSION['productsdata'] = $this->elements;
        header('Location: ../perfil.php');
      }else {
        header('Location: ../perfil.php');
      }
    }
  }

  $App = new Main_controller();

?>
