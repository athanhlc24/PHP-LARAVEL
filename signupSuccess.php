<?php
session_start();// khoi chay phien lam viec

$name = $_POST["name"];
echo "<h2>$name</h2>";
$email = $_POST["email"];
echo $email;
$birthday = $_POST["birthday"];
echo "<h2>$birthday</h2>";
$password = $_POST["password"];
echo "<h2>$password</h2>";
$confirmation_pwd = $_POST["confirmation_pwd"];
echo "<h2>$confirmation_pwd</h2>";
$address = $_POST["address"];
echo "<h2>$address</h2>";
//var_dump($sss); die("abc");
//if ($sss == $ssss){
//    die("a");
//}
//die("b");
if ($password== $confirmation_pwd){
     $_SESSION["email"] = $email ;
   header("Location: index.php");// chuyen trang neu dung dieu kien
    die();// giong exit
}
$_SESSION["name"] = $name;
$_SESSION["email"] = $email;
$_SESSION["address"] = $address;
$_SESSION["error"] = true;
header("Location: signup.php");

// section la mot phien lam viec tam thoi dai dien cho mot lan lam viec cua nguoi dung voi may chu. lưu trữ một thời hạn nhất định cho người dùng
// section là một file trên máy chủ lưu laị sẽ b xoá di khi k con can thiết
