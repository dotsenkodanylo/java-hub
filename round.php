<?php
require("database.php");

$connection=mysql_connect('localhost', $username, $password);
if (!$connection) {
  die('Not connected : ' . mysqli_error());
}

// Set the active MySQL database
$db_selected = mysql_select_db($dbname, $connection);
if (!$db_selected) {
  die ('Can\'t use db : ' . mysqli_error());
}

// Select all the rows in the markers table
$query = "SELECT * FROM locations WHERE 1";
$result = mysql_query($query);
if (!$result) {
  die('Invalid query: ' . mysqli_error());
}
$query = "SELECT * FROM neighbourhood WHERE 1";
$result2 = mysql_query($query);

$response = array();
$posts = array();
// Iterate through the rows, printing XML nodes for each
while ($row = @mysql_fetch_assoc($result)){
  $name = $row['name'];
  $lat = $row['lat'];
  $long = $row['long'];
  $address = $row['address'];
  $page = $row['page'];
  $nhid = $row['nhid'];
  $posts[] = array('name'=> $name, 'location'=> '[' . (float)$lat . ', ' . (float)$long . ']', 'address' => $address, 'page' => $page, 'nhid' => $nhid);
}

while ($rows = @mysql_fetch_assoc($result2)){
  $name = $rows['name'];
  $lat = $rows['latitude'];
  $long = $rows['longitude'];
  $cont = $rows['cont'];
  $num = $rows['nhid'];
  $response[] = array('name'=> $name, 'location'=> '[' . (float)$lat . ', ' . (float)$long . ']', 'cont' => $cont, 'nhid' => $num);
}
?>
