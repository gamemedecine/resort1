<?php

$path = "localhost";
$root = "root";
$pass = "";
$DBname = "resort1";
$port = 3307;       


$conn = mysqli_connect($path, $root, $pass, $DBname, $port);

if(!$conn ){
      echo"<p style='color:green;'>Fail<p>";
}else{
      echo"<p style='color:green;'>Success<p>";

}
?>