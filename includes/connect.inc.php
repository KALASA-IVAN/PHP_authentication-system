<?php
$host ="localhost";
$user ="root";
$password ="moivankalasa";
$dbname ="reallogin";

$con=mysqli_connect($host,$user,$password,$dbname);
if(!$con){
    die("Connection failed: ".mysqli_connect_error());
}