<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "tt2203e";
$conn = new mysqli($host,$user,$pass,$db);
if ($conn -> connect_error){
    echo $conn -> error;
    die();
}
//echo "Success...";
$sql = "select * from books";
$rs = $conn->query($sql);
//var_dump($rs);
$data = [];
if ($rs->num_rows>0){
    while ($row = $rs->fetch_assoc()){
//        var_dump($row);
        $data[] = $row;

    }
}
?>
<!doctype html>
<html lang="en">
<head>
    <?php include ("header.php")?>
</head>
<body>
    <div class="container">
        <table class="table table-bordered">
            <thead>
            <tr>
               <th>ID</th>
               <th>Name</th>
               <th>Auther</th>
               <th>Qty</th>
                <th>Delete</th>
                <th>Update</th>
            </tr>
            </thead>
            <tbody>
                <?php foreach ($data as $d):?>
                <tr>
                    <td><?php echo $d["id"];?></td>
                    <td><?php echo $d["name"];?></td>
                    <td><?php echo $d["author"];?></td>
                    <td><?php echo $d["qty"];?></td>
                    <td><form action="deletebooks.php" method="post">
                               <input type="hidden" name="id" value="<?php echo $d["id"];?>"/>
                            <button onclick="return confirm('bạn có muốn xoá');" type="submit" class="btn-success">Delete</button>
                        </form>
                    </td>
                    <td><form action="deletebooks.php" method="get">
                            <input type="hidden" name="id" value="<?php echo $d["id"];?>"/>
                            <a href="updateBook.php">Update</a>
                        </form>
                    </td>
                </tr>

                <?php endforeach;?>
            </tbody>
        </table>
    </div>
    <div class="container">
        <a href="createBooks.php">Thêm sách</a>
    </div>
</body>
</html>
