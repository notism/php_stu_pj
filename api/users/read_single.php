<?php
  // Headers
  header('Access-Control-Allow-Origin: *');
  header('Content-Type: application/json');

  include_once '../../config/Database.php';
  include_once '../../models/Users.php';

  // Instantiate DB & connect
  $database = new Database();
  $db = $database->connect();

  // Instantiate users object
  $users = new Users($db);

  // Get ID
  $users->Id = isset($_GET['Id']) ? $_GET['Id'] : die();

  // Get users
  $users->read_single();

  // Create array
  $users_arr = array(
    'Id' => $users->Id,
    'Username' => $users->Username,
    'Email' => $users->Email,
    'Firstname' => $users->Firstname,
    'Lastname' => $users->Lastname,
    'ImgUrl' => $users->ImgUrl,
    'Role' => $users->Role,
    'CreatedBy' => $users->CreatedBy,
    'CreatedDate' => $users->CreatedDate,
  );

  // Make JSON
  print_r(json_encode($users_arr));
