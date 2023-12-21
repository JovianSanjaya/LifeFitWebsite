<?php
session_start();
$db_username = 'root';
$db_password = '';
$conn = new PDO( 'mysql:host=localhost;dbname=forum', $db_username, $db_password );
if(!$conn){
die("Fatal Error: Connection Failed!");
} 
?>

