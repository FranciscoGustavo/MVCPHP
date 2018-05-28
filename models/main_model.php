<?php
include_once '../config/connection.php';
/**
 *
 */
class main_model extends ConnectionDB
{
  function searchProducts(){
    self::startConfig('localhost', 'phpmvc', 'root', '');
    self::startConnection();
    self::readFieldsToDataBase('*', 'products','');
  }
}
