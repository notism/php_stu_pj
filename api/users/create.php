<?php
  // Headers
  header('Access-Control-Allow-Origin: *');
  header('Content-Type: application/json');
  header('Access-Control-Allow-Methods: POST');
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

  $user->Username = $data->Username;
  $user->Password = $data->Password;
  $user->Email = $data->Email;
  $user->Firstname = $data->Firstname;
  $user->Lastname = $data->Lastname;
  $user->ImgUrl = $data->ImgUrl;
  $user->$Role = $data->$Role;

  // Create user
  if($user->create()) {
    echo json_encode(
      array('message' => 'Users Create Successfully')
    );
  } else {
    echo json_encode(
      array('message' => 'Users Create Failed')
    );
  }
