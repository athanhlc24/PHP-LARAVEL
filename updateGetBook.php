<?php

$id = $_GET["id"];
// tim sach co id tu db
// neu k tim thay di sang 404
$name = $_GET["name"];
$author = $_GET["author"];
$qty = $_GET["qty"];
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
$sql = " select * from  books id=$id";
$rs = $conn->query($sql);
$book = [];
if ($rs->num_rows>0){
    while ($row = $rs->fetch_assoc()){
        $book  = $row;
    }
}
die("khong co gia tri id nay");

