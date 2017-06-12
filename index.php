<?php 
require_once('Database.php');


$db = new Db();

//var_dump($db->connect());
$row = $db->select("SELECT * FROM `MyGuests` ");


print_r($row);
?>