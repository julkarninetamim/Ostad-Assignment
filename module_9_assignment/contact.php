<?php 
    include "inc/DataBase.php";
    include "inc/functions.php";
    include "inc/header.php";
    $db=new DataBase();
    $contact="";
    if(isset($_POST["submit"]) ){
        $contact=contactProcess($_POST);
    }
?>

<div class="container">
    <div class="row">
        <div class="col-md-8">
            <h2 class="text-center">Contact Form</h2>
                <?php  
                    if(isset($contact["error"])){
                        printf("<h4 class='%s'>%s</h4>","text-danger",$contact["error"]);
                    }elseif(isset($contact["name"])){
                        $name=$contact["name"];
                        header("Location: welcome.php?msg=$name");
                    }
                ?>
            <form method="post">
                <div class="mb-3">
                    <input type="text" class="form-control" name="name" placeholder="Your Name">
                </div>
                <div class="mb-3">
                    <input type="email" class="form-control" name="email" placeholder="Your Email">
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control" name="subject" placeholder="Your Subject">
                </div>
                <div class="mb-3">
                    <textarea class="form-control" name="message" id="" cols="30" rows="10" placeholder="Your Message"></textarea>
                </div>
                <button type="submit" name="submit" value="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        <div class="col-md-4">
            <?php 
                include "sidebar.php";
            ?>
        </div>
    </div>
</div>