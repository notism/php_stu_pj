<?php
  // Headers
  header('Access-Control-Allow-Origin: *');
  header('Content-Type: application/json');

  include_once '../../config/Database.php';
  include_once '../../models/users.php';

  // Instantiate DB & connect
  $database = new Database();
  $db = $database->connect();

  // Instantiate users object
  $user = new Users($db);

  // User query
  $result = $user->read();
  // Get row count
  $num = $result->rowCount();

  // Check if any users
  if($num > 0) {
    // Users array
    $users_arr = array();
    // $users_arr['data'] = array();

    while($row = $result->fetch(PDO::FETCH_ASSOC)) {
      extract($row);

      $user_item = array(
        'Id' => $Id,
        'Username' => $Username,
        'Password' => $Password,
        'Email' => $Email,
        'Firstname' => $Firstname,
        'Lastname' => $Lastname,
        'ImgUrl' => $ImgUrl,
        'Role' => $Role,
        'CreatedBy' => $CreatedBy,
        'CreatedDate' => $CreatedDate
      );

      // Push to "data"
      array_push($users_arr, $user_item);
      // array_push($posts_arr['data'], $post_item);
    }

    // Turn to JSON & output
    echo json_encode($posts_arr);

  } else {
    // No Posts
    echo json_encode(
      array('message' => 'No Posts Found')
    );
  }
