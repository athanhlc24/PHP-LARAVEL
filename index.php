<?php

    $x = 20;

    $menu = [
        "Lẩu vịt",
        "Thịt chó",
        "Rắn xào lăn"
    ];
session_start();
$email = isset($_SESSION["email"])?$_SESSION["email"]:"";
?>


<!doctype html>
<html lang="en">
<head>

    <?php include ("header.php");?>
</head>
<body>
<h1>Hello world <?php echo $email;?></h1>
    <h1 style="color: darkred">Hello world</h1>
    <h2>Số lượng sinh viên: <?php echo $x + 5 ;// chỗ này viết được code PHP?> </h2>

    <?php if ($x >=20):?>
        <h3>lớp đông <?php echo $x;?></h3>
        <?php else: ?>
        <h3>lớp vắng<?php echo $x;?></h3>
        <?php endif;?>

    <h2>Danh sách món ăn: </h2>
    <ul>
        <?php foreach ($menu as $item):?>
            <li><?php echo $item;?></li>
        <?php endforeach;?>
    </ul>
    <?php include ("footer.php")?>
</body>
</html>
