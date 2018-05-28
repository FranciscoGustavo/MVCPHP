<?php
/**
Configuracion de la aplicacion en la coneccion a la
Base de datos Ruta, Nombre_DB, Usuario, Contraseña.
**/
class MainConfig
{
  var $SQLMainRute;
  var $SQLDataBase;
  var $SQLUser;
  var $SQLPassword;

  function startConfig($MainRute, $DataBase, $User, $Passsword)
  {
    $this->SQLMainRute = $MainRute;
    $this->SQLDataBase = $DataBase;
    $this->SQLUser = $User;
    $this->SQLPassword = $Passsword;
  }

  function setSQLMainRute($value)
  {
    $this->SQLMainRute = $value;
  }

  function getSQLMainRute()
  {
    return $this->SQLMainRute;
  }

  function setSQLDataBase($value)
  {
    $this->SQLDataBase = $value;
  }

  function getSQLDataBase()
  {
    return $this->SQLDataBase;
  }

  function setSQLUser($value)
  {
    $this->SQLUser = $value;
  }

  function getSQLUser()
  {
    return $this->SQLUser;
  }

  function setSQLPassword($value)
  {
    $this->SQLPassword = $value;
  }

  function getSQLPassword()
  {
    return $this->SQLPassword;
  }
}


?>
