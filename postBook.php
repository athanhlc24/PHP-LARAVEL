<?php
$name = $_POST["name"];
$aut = $_POST["author"];
$qty = $_POST["qty"];
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
$sql = "insert into books(name,author,qty) values ('$name','$aut','$qty')";
$rs = $conn->query($sql);
if ($rs){
    header("Location: database.php");
    die();
}
header("Location: createBooks.php");
