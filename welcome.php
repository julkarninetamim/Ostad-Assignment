<!DOCTYPE html>
<html>
<head>
	<title>Welcome Page</title>
    <style>
        body{
            position: relative;
            height: 100vh;
        }
        .heading{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
        }
    </style>
</head>
<body>
	<h1 class="heading">Welcome <?php echo $_GET['name'] ?? ""; ?>!</h1>
</body>
</html>
