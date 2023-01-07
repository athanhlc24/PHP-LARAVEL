<!doctype html>
<html lang="en">
<head>
    <?php include ("header.php");
    session_start();
    $error = isset($_SESSION["error"])?$_SESSION["error"]:false;
    $name = isset($_SESSION["name"])?$_SESSION["name"]:false;
    $email = isset($_SESSION["email"])?$_SESSION["email"]:false;
    $address = isset($_SESSION["address"])?$_SESSION["address"]:false;
    ?>

</head>
<body>
<div class="container">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h2 class="text-center">Registation Form - Input User's Detail Information</h2>
        </div>
        <form action="signupSuccess.php" method="post">
            <div class="panel-body">
                <div class="form-group">
                    <label for="usr">Name:</label>
                    <input required="true" type="text" value="<?php echo $name?>" class="form-control" name="name">
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input required="true" type="email" class="form-control" value="<?php echo $email?>" name="email">
                </div>
                <div class="form-group">
                    <label for="birthday">Birthday:</label>
                    <input type="date" class="form-control" name="birthday">
                </div>
                <div class="form-group">
                    <label for="pwd">Password:</label>
                    <input required type="password" class="form-control" name="password">
                </div>
                <div class="form-group">
                    <label for="confirmation_pwd">Confirmation Password:</label>
                    <input required="true" type="password" class="form-control" name="confirmation_pwd">

                </div>
                <div class="form-group">
                    <label for="address">Address:</label>
                    <input  required type="text" value="<?php echo $address?>"class="form-control" name="address">
                    <?php if ($error):?>
                    <p class="text-danger">Vui lòng điền đầy đủ thông tin </p>
                    <?php endif; $_SESSION["error"]=null;?>
                </div>
                <button  type="submit" class="btn btn-success">Register</button>
            </div>
        </form>

    </div>
</div>
</body>
</html>
