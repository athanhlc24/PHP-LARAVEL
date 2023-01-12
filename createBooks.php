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
        <form action="postBook.php" method="post">
            <div class="panel-body">
                <div class="form-group">
                    <label for="usr">Name:</label>
                    <input required="true" type="text"  class="form-control" name="name">
                </div>
                <div class="form-group">
                    <label for="email">Author:</label>
                    <input required="true" type="author" class="form-control"  name="author">
                </div>

                <div class="form-group">
                    <label for="address">Qty:</label>
                    <input  required type="text" min="0" class="form-control" name="qty">
                </div>
                <button  type="submit" class="btn btn-success" style="margin-top: 10px">Submit</button>
                <a class="btn btn-success" href="database.php" style="margin-top: 10px">Danh sách</a>
            </div>
        </form>

    </div>
</div>
</body>
</html>

