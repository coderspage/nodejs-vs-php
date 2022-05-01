<?php

// ##############################
function _send_json($message = '', $http_response_code = 200 ){
  header('Content-Type: application/json');
  http_response_code($http_response_code);
  $data = ["info"=>$message];
  if( is_array($message) ){ $data = $message; }
  echo json_encode($data);
  exit();
}







