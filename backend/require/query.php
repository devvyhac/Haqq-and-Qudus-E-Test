<?php 

require_once('database.php');

$db->connection("examination");

$sql = "SELECT * FROM examiners";

$result = $db->select($sql);
    
?>