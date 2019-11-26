<?php
  // Headers
  header('Access-Control-Allow-Origin: *');
  header('Content-Type: application/json');
  header('Access-Control-Allow-Methods: PUT');
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

  $user->Password = $data->Password;
  $user->Email = $data->Email;
  $user->Firstname = $data->Firstname;
  $user->Lastname = $data->Lastname;
  $user->ImgUrl = $data->ImgUrl;
  $user->$Role = $data->$Role;

  // Update user
  if($user->update()) {
    echo json_encode(
      array('message' => 'User Update Successfully')
    );
  } else {
    echo json_encode(
      array('message' => 'User Update Failed')
    );
  }
