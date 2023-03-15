<?php
/**
 * using mysqli_connect for database connection
 */
 
$databaseHost = 'localhost';
$databaseName = 'perusahaan';
$databaseUsername = 'root';
$databasePassword = '';
 
$link = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 
 
?>