<?php /**
 *
 */

include_once "../config/connection.php";
class login_model extends ConnectionDB
{

  function existUser($email){
    $resultado = self::readFieldsToDataBase('password', 'users', 'WHERE email=francisco@mail.com');
  }
}
 ?>
