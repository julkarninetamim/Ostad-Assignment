<?php 
include "functions.php";
$msg=$fname=$lname=$email=$password=$cPass="";

if(isset($_POST["register"])){
    $msg=validateFormData($_POST);
    $post=$_POST;
    $fname=$post["fname"];
    $lname=$post["lname"];
    $email=$post["email"];
    $password=$post["password"];
    $cPass=$post["confirm_password"];
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Registration Form</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css" />
</head>
<body>
	<div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <h1 class="text-center">Registration Form</h1>
                <?php 
                    if(isset($msg["empty"])){
                        echo "<p class='text-danger'>".$msg['empty']."</p>";
                    }elseif(isset($msg["email"])){
                        echo "<p class='text-danger'>".$msg['email']."</p>";
                    }elseif(isset($msg["wPass"])){
                        echo "<p class='text-danger'>".$msg['wPass']."</p>";
                    }elseif(isset($msg["success"])){
                        echo "<p class='text-success'>".$msg['success']."</p>";
                    }
                ?>
                <form method="post" action="" id="registration_form">
                    <div class="form-group">
                        <label for="fname">First Name:</label>
                        <input type="text" name="fname" class="form-control" value="<?= $fname?>">
                    </div>
                    <div class="form-group">
                        <label for="lname">Last Name:</label>
                        <input type="text" name="lname" class="form-control" value="<?= $lname?>">
                    </div>
                    <div class="form-group">
                        <label for="email">Email Address:</label>
                        <input type="email" name="email" class="form-control" value="<?= $email?>">
                    </div>
                    <div class="form-group">
                            <label for="password">Password:</label>
                            <input type="password" name="password" class="form-control" value="<?= $password?>">
                    </div>
                    <div class="form-group">
                        <label for="confirm_password">Confirm Password:</label>
                        <input type="password" name="confirm_password" class="form-control" value="<?= $cPass?>">
                    </div>
                    <div class="form-group mt-4">
                        <input type="submit" name="register" class="btn btn-success form-control" value="Register">
                    </div>
                </form>
              
            </div>
       
        </div>
    </div>

</body>
</html>
