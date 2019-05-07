<?php
require("database.php");

$doc = new DOMDocument("1.0");
$node = $doc->createElement("markers");
$parnode = $doc->appendChild($node);

$connection = mysqli_connect('localhost', $username, $password);
if (!$connection){
    die('Connection unsuccesful - ' . mysql_error());
}
$db_selected = mysqli_select_db($connection, $dbname);
if (!$db_selected){
    die('Connection to database unsuccesful' . mysql_error());
}

$query = "SELECT * FROM markers where 1";
$result = mysql_query($query);
if (!$result){
    die ('Invalid query: ' . mysql_error());
}
header("Content-type: text/xml");

while($row = @mysql_fetch_assoc($result)){
    $node = $doc->create_element("marker");
    $newnode = $parnode->append_child($node);

    $newnode->set_attribute("id", $row['id']);
    $newnode->set_attribute("name", $row['name']);
    $newnode->set_attribute("lat", $row['lat']);
    $newnode->set_attribute("long", $row['long']);    
}

$xmlfile = $doc->dump_mem();
echo $xmfile;

?>
