<?php

$id = $_POST["id"];
// validate date
// save to table
$host = "localhost";
$user = "root";
$pass = "";
$db = "tt2203e";
$conn = new mysqli($host,$user,$pass,$db);
if ($conn -> connect_error){
    echo $conn -> error;
    die();
}
$sql = "delete from books where id=$id";
$rs = $conn->query($sql);
if ($rs){
    header("Location: database.php");
    die();
}


