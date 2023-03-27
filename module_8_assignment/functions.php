<?php 
$file=dirname(__FILE__)."\data.txt";

function validateFormData($post){
    global $file;
    $formData=[];
    $fname=$post["fname"];
    $lname=$post["lname"];
    $email=$post["email"];
    $password=$post["password"];
    $cPass=$post["confirm_password"];
    $msg=[];
    if(empty($fname) || empty($lname) || empty($email) || empty($password) || empty($cPass)){
        $msg["empty"]="All fields are required and must not be empty.";
    }elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        $msg["email"]="Email address is not valid.";
    }elseif($password != $cPass){
        $msg["wPass"]="Password does not match";
    }else{
        $msg["success"]="success registration";
    }
    if(!empty($msg["success"])){
        $formData[0]=$email;
        $formData[1]=$password;
        $serialize=serialize($formData);
        file_put_contents($file,$serialize);
        header("Location: login.php");
    }else{
        return $msg;
    }
}

function loginMachanism($post){
    global $file;
    $data=file_get_contents($file);
    $ud=unserialize($data);
    $email=$post["email"];
    $password=$post["password"];
    $msg=[];
    if(empty($email) || empty($password)){
        $msg["error"]="Both email and password are required";
    }elseif($ud[0] != $email || $ud[1] != $password){
        $msg["wrong"]="Invalid email or password";
    }else{
        $msg["success"]="success login";
    }
    if(!empty($msg["success"])){
        $name=substr($email,0,strpos($email,"@"));
        header("Location: welcome.php?name=$name");
        exit;
    }else{
        return $msg;
    }
}
