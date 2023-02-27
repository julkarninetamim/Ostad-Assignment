<?php
$result="";
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $name=$_POST["name"];
    $email=$_POST["email"];
    $person02=new Person();
    $person02->set_name($name);
    $person02->set_email($email);
    $s_name=$person02->get_name();
    $s_email=$person02->get_email();
    
    $result=<<<EMD
    <b>Name: </b> {$s_name}<br/>
    <b>Email: </b> {$s_email}
EMD;
}

?>
    <h3 class="text-center">Task One</h3>
<div class="row">
    <div class="column column-80 column-offset-10">
    <form method="post">
        <div class="form-group">
            <label>Your Name</label>
            <input type="text" class="form-control" placeholder="Enter Name" name="name">
        </div>
        <div class="form-group my-4">
            <label>Email address</label>
            <input type="email" class="form-control" placeholder="Enter Email" name="email">
        </div>
        <button type="submit" class="">Submit</button>
    </form>
    </div>
</div>