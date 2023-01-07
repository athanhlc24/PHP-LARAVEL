<?php $title="Search";
session_start();
$email = isset($_SESSION["email"])?$_SESSION["email"]:"";
?>
<!doctype html>
<html lang="en">
<head>
    <?php include ("header.php");?>

</head>
<body>
    <section>
        <div class="container">
            <h1>Hello world<?php echo $email;?></h1>
            <div class="row">
                <div class="col">

                </div>
                <div class="col">
                    <form action="postSearch.php" method="get"> <!-- post dùng cho nhập nhiều thêm sản phẩm hoặc get 255 kí tự select-->
                        <div class="form-group mb3">
                            <label> Search</label>
                            <input class="form-control" type="text" name="q"placeholder="Enter..." required/>
                        </div>
                        <button type="submit" class="btn btn-outline-danger" style="margin-top: 10px">Search</button>
                    </form>
                </div>
                <div class="col">

                </div>
            </div>
        </div>
    </section>
</body>
</html>

