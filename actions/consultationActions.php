<?php 
   
require('database.php');

$getallinformations= $connexion->prepare("SELECT * FROM participant ORDER BY id ASC");
$getallinformations->execute();

?>