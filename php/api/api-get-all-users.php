<?php
require_once __DIR__.'/../x.php';
require_once __DIR__.'/../database.php';
try{
  $q = $_db->prepare('SELECT user_id, user_name, user_last_name, user_email FROM users');
  $q->execute();
  $rows = $q->fetchAll();
  if( ! $rows ){ _send_json('cannot get users', 500); }
  _send_json($rows, 200);
}catch(Exception $ex){
  _send_json("error {$ex->getMessage()}", 500);
}

