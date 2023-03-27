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
            <div class="col-md-6 offset-md-3">
                <h1>Login Form</h1>
                <?php 
                    if(isset($msg["error"])){
                        echo "<p class='text-danger'>".$msg['error']."</p>";
                    }elseif(isset($msg["wrong"])){
                        echo "<p class='text-danger'>".$msg['wrong']."</p>";
                    }
                ?>
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
         
        </div>
    </div>
</body>
</html>
