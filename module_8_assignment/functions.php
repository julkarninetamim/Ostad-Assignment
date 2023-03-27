<?php 
$data=[
    ["pobitro@gmail.com","p1p2p3p4"],
    ["tamim@gmail.com","t1t2t3t4"],
];
function validateFormData($post){
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
    }else{
        $msg["success"]="Registration successful!";
    }
    return $msg;
}

function loginMachanism($post){
    global $data;
    $email=$post["email"];
    $password=$post["password"];
    $msg=[];
    if(empty($email) || empty($password)){
        $msg["error"]="Both email and password are required";
        return $msg;
    }
    foreach($data as $d){
        if($d[0] != $email || $d[1] != $password){
            $msg["wrong"]="Invalid email or password";
        }else{
            $name=substr($email,0,strpos($email,"@"));
            header("Location: welcome.php?name=$name");
            exit;
        }
    }
}