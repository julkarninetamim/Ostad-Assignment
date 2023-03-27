<?php 
include "functions.php";
$msg="";
if(isset($_POST["register"])){
    $msg=validateFormData($_POST);
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
            <div class="col-md-6">
                <h1>Registration Form</h1>
                <form method="post" action="">
                    <div class="form-group">
                        <label for="fname">First Name:</label>
                        <input type="text" name="fname" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="lname">Last Name:</label>
                        <input type="text" name="lname" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email Address:</label>
                        <input type="email" name="email" class="form-control" required>
                    </div>
                    <div class="form-group">
                            <label for="password">Password:</label>
                            <input type="password" name="password" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="confirm_password">Confirm Password:</label>
                        <input type="password" name="confirm_password" class="form-control" required>
                    </div>
                    <div class="form-group mt-4">
                        <input type="submit" name="register" class="btn btn-success form-control" value="Register">
                    </div>
                </form>
                <a href="login.php" class="btn btn-info d-block mt-3">Login</a>
            </div>
            <div class="col-md-6">
                <?php 
                    if(isset($msg["empty"])){
                        echo "<p class='text-danger'>".$msg['empty']."</p>";
                    }elseif(isset($msg["email"])){
                        echo "<p class='text-danger'>".$msg['email']."</p>";
                    }elseif(isset($msg["success"])){
                        echo "<p class='text-success'>".$msg['success']."</p>";
                    }
                ?>
            </div>
        </div>
    </div>
</body>
</html>
