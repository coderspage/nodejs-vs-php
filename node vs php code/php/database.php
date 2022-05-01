<?php
try{
  $sDatabaseUserName = 'root';
  $sDatabasePassword = '';
  $sDatabaseConnection = "mysql:host=localhost; dbname=app; charset=utf8mb4";

  // PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
  $aDatabaseOptions = array(
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC // FETCH_OBJ
  );
  $_db = new PDO( $sDatabaseConnection, $sDatabaseUserName, $sDatabasePassword, $aDatabaseOptions );
}catch( PDOException $e){
  echo $e;
  // echo '{"status":0,"message":"cannot connect to database"}';
  exit();
}









