<?php

include 'connect.php';

$sql = "SELECT * FROM blanceenergrtique";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
   //  "id: " . $row["id"]. " - Reseau: " . $row["Reseau"]. " " . $row["energiesolaire"]. "<br>";
     $emparray = $row;
     
   // print  $energiesolaire[] = $row["energiesolaire"];
    // print  $Reseau[] = $row["Reseau"];
  }
} else {
  echo "0 results";
}
$conn->close();
/*$ES= $energiesolaire;
$R= $Reseau;*/
/*print_r ($ES);
print_r ($R);*/
echo json_encode($emparray);
/*echo json_encode($ES);
echo json_encode($R);*/
//print_r ($a[1]);

?>