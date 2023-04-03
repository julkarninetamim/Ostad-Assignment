<?php 
function postExcerpt($post){
    $excerpt=substr($post,0,100);
    return $excerpt;
}

function formateDate($data){
    return date("F j, Y, g:i:a",strtotime($data));
}

function contactProcess($post){
    $name=$post["name"];
    $email=$post["email"];
    $subject=$post["subject"];
    $message=$post["message"];
    $msg=[];
    if($name == "" || $email =="" || $subject =="" || $message == ""){
        $msg["error"]= "please fill all the field";
    }else{
        $msg["name"] =$name;
    }
    return $msg;
}