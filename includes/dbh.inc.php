<?php

$servername = "localhost";
$dBUsername = "roo";
$dBPassword = "";
$dbName = "loginsystem";

$conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dbName);

if (!$conn){
  die("Connetion failed: ".mysqli_connect_error());
}
