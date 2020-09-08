<?php

include 'connect.php';

$sql = "SELECT * FROM alarmes";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
  
     $emparray = $row;
     
 
  }
} else {
  echo "0 results";
}
$conn->close();

echo json_encode($emparray);


?>