<?php
/*
Clase que contiene la funcionalidad de telerik necesaria para crear los results necesarios para sus datasources.
*/
//namespace App\Utils;
require_once __DIR__.'/../../lib/Kendo/Autoload.php'; 
require_once __DIR__.'/../../lib/DataSourceResult.php';

//use App\Telerik\DataSourceResult;

class TelerikDB{

 public function getResult(){


  $server=\Config::get('database.connections.mysql.host');
  $database=\Config::get('database.connections.mysql.database');
  $username=\Config::get('database.connections.mysql.username');
  $password=\Config::get('database.connections.mysql.password');

  $serverC='mysql:host='.$server.';dbname='.$database;

  $result = new DataSourceResult($serverC, $username, $password, array( PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));

  return $result;
 }
}