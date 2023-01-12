<!doctype html>
<html lang="en">
<head>
    <?php include ("header.php");
    ?>

</head>
<body>
<div class="container">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h2 class="text-center">Registation Form - Input User's Detail Information</h2>
        </div>
        <form action="updateGetBook.php" method="get">
            <div class="panel-body">
                <div class="form-group">
                    <label for="usr">Name:</label>
                    <input required="true" type="text" value="<?php echo $book["name"]?>" class="form-control" name="name">
                </div>
                <div class="form-group">
                    <label for="email">Author:</label>
                    <input required="true" type="author" value="<?php echo $book["author"]?>" class="form-control"  name="author">
                </div>

                <div class="form-group">
                    <label for="address">Qty:</label>
                    <input  required type="text" min="0" value="<?php echo $book["qty"]?>"class="form-control" name="qty">
                </div>
                <button  type="submit" class="btn btn-success" style="margin-top: 10px">Update</button>
                <a class="btn btn-success" href="database.php" style="margin-top: 10px">Danh sách</a>
            </div>
        </form>

    </div>
</div>
</body>
</html>

