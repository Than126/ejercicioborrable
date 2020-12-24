<?php
class Database 
{
private static $dbName = 'ejerciciotrabajo01'; 
private static $dbHost = 'localhost';
private static $dbUsername = 'root';
private static $dbUserPassword = 'sistemas';

private static $cont = null;

public function __construct() {
die('Init-Función no permitida');
}

public static function connect() {
// Permitir solo una conexión para la totalidad del acceso
if ( null == self::$cont )
{
  try
  {
    self::$cont = new PDO( "mysql:host=".self::$dbHost.";"."dbname=".self::$dbName, self::$dbUsername, self::$dbUserPassword);
  }
  catch(PDOException $e)
  {
    die($e->getMessage());
  }
} 
return self::$cont;
}

public static function disconnect()
{
self::$cont = null;
}
}