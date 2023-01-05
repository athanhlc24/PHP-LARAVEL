<?php
    $x = 20;

    $menu = [
        "Lẩu vịt",
        "Thịt chó",
        "Rắn xào lăn"
    ];
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
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
