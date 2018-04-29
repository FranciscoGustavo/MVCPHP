<?php
  /**
  Creando conexion a la base de datos con acciones basicas
  # Crear registro
  # Leer registro
  # Actualizar registro
  # Eliminar registro
  **/
  include '../config/config.php';

  class ConnectionDB extends MainConfig
  {
    var $connection;
    var $elements;

    function startConnection(){
      self::startConfig('localhost', 'bolsas', 'root', '');
      try {
        $this->connection = new PDO('mysql:host='.$this->SQLMainRute.';dbname='.$this->SQLDataBase, $this->SQLUser, $this->SQLPassword);
      } catch(PDOException $e) {
        echo "Fracaso";
      }
    }

    public static function closeConnection(){
      $this->connection = null;
      echo "Conexion cerrada";
    }

    function getConnection(){
      return $this->connection;
    }

    function readFieldsToDataBase($Field, $table, $extra){
      $this->elements = $this->connection->query('SELECT '.$Field.' FROM '.$table.' '.$extra);
      $this->elements = $this->elements->fetchAll();
      return $this->elements;
      //return ($this->elements) ? $this->elements : false;
    }

    function insertFieldsToDataBase($table, $fields, $values){
      $SQLQuery = "INSERT INTO ".$table." (".$fields.") VALUES (".$values.")";
      if ($this->connection->query($SQLQuery)){
        echo "Exito";
      } else {
        echo "Error";
      }
    }

    function updateFieldsToDataBase($table, $values, $extra){
      $SQLQuery = "UPDATE ".$table." SET ".$values." WHERE ".$extra;
      if ($this->connection->query($SQLQuery)){
       echo "Actualizado";
      } else {
       echo "No Actualizado";
      }
    }

    function deleteFieldsToDataBase($table, $condicion){
      $SQLQuery = "DELETE FROM ".$table." WHERE ".$condicion;
      printf($SQLQuery);
      if ($this->connection->query($SQLQuery)){
        echo "Eliminado";
      } else {
        echo "No Eliminado";
      }
    }

}

$db = new ConnectionDB();
$db->startConnection();
print_r($db->readFieldsToDataBase("*", 'users', ''));


?>
