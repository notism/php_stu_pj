<?php

include('../config/connect.php');

$sql = "SELECT * FROM users";
$result = $db->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<tr>

        <td align='left'></td>
        <td align='left'>
            <!-- Project One -->
           <div class='row'>
           <div class='col-md-6'>
           <a href='#'>
           <img class='img-fluid rounded mb-3 mb-md-0' src='http://placehold.it/500x300' alt=''>
          </a>
        </div>
        <div class='col-md-6'>
          <h3>".$row["Username"]."</h3>
          <p>11Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium veniam exercitationem expedita laborum at voluptate. Labore, voluptates totam at aut nemo deserunt rem magni pariatur quos perspiciatis atque eveniet unde.</p>
          <a class='btn btn-primary' href='#'>View Project</a>
        </div>
      </div>
      <!-- /.row -->

        </td>
        <td align='left'></td>

        </tr>";
    }
} else {
    echo "0 results";
}
$db->close();
?>
