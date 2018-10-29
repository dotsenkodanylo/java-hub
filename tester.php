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
$query = "SELECT * FROM markers WHERE 1";
$result = mysql_query($query);
if (!$result) {
  die('Invalid query: ' . mysqli_error());
}

$response = array();
$posts = array();
// Iterate through the rows, printing XML nodes for each
while ($row = @mysql_fetch_assoc($result)){
  // Add to XML document node
  $name = $row['name'];
  $lat = $row['lat'];
  $long = $row['long'];
  $posts[] = array('name'=> $name, 'location'=> '[' . (float)$lat . ', ' . (float)$long . ']');
}
?>
