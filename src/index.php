<?php

require 'vendor/autoload.php';

echo "<h1>Ambiente de desarrollo</h1>";


$servername = "mysql1";
$username = "mora";
$password = "mora";

// Create connection
    $conn = new mysqli($servername, $username, $password);

//Check connection
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
}
echo "Ok en Mysql<br><br>";


$m = new MongoDB\Client("mongodb://mongo1:27017");     

if ($m == NULL){
echo "m is NULL</br><br>";
}else{
echo "Ok en MongoDB<br><br>";
}

?>
