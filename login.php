<?php 
include "functions.php";
$msg="";
if(isset($_POST["login"])){
    $msg=loginMachanism($_POST);
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
        <div class="row mt-5">
            <div class="col-md-6">
                <h1>Login Form</h1>
                <form method="post" action="">
                    <div class="form-group">
                        <label for="email">Email Address:</label>
                        <input type="email" name="email" class="form-control" required>
                    </div>
                    <div class="form-group">
                            <label for="password">Password:</label>
                            <input type="password" name="password" class="form-control" required>
                    </div>
                    <div class="form-group mt-4">
                        <input type="submit" name="login" class="btn btn-success form-control" value="login">
                    </div>
                </form>
            </div>
            <div class="col-md-6">
                <?php 
                    if(isset($msg["error"])){
                        echo "<p class='text-danger'>".$msg['empty']."</p>";
                    }elseif(isset($msg["wrong"])){
                        echo "<p class='text-danger'>".$msg['email']."</p>";
                    }
                ?>
                <h3 class="text-center">Use these as login information</h3>
                <table class="table table-striped">
                    <tr>
                        <th>Email</th>
                        <th>Password</th>
                    </tr>
                    <tr>
                        <td>pobitro@gmail.com</td>
                        <td>p1p2p3p4</td>
                    </tr>
                    <tr>
                        <td>tamim@gmail.com</td>
                        <td>t1t2t3t4</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
