<?php
  // Headers
  header('Access-Control-Allow-Origin: *');
  header('Content-Type: application/json');
  header('Access-Control-Allow-Methods: DELETE');
  header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods, Authorization, X-Requested-With');

  include_once '../../config/Database.php';
  include_once '../../models/Users.php';

  // Instantiate DB & connect
  $database = new Database();
  $db = $database->connect();

  // Instantiate user object
  $user = new Users($db);

  // Get raw usered data
  $data = json_decode(file_get_contents("php://input"));

  // Set ID to update
  $user->Id = $data->Id;

  // Delete user
  if($user->delete()) {
    echo json_encode(
      array('message' => 'User Delete Successfully')
    );
  } else {
    echo json_encode(
      array('message' => 'User Delete Failed')
    );
  }
