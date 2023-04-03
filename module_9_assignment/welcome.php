<?php 
include "inc/DataBase.php";
include "inc/functions.php";
include "inc/header.php";

$db=new DataBase();
?>
<?php 
    if(!isset($_GET["msg"]) || $_GET["msg"] == NULL){
        header("Location: 404.php");
    }else{
        $name=$_GET["msg"];
    }

?>
<section class="single-post">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
              <?php 
                if($name){
                    ?>
                    <h2 class="text-success text center">Hey <span class="text-primary"><?php echo ucwords($name)?></span>.Your Form Submitted successfully</h2>
                    <?php 
                }
              ?>
            </div>
            <div class="col-md-4">
                <?php 
                    include "sidebar.php";
                ?>
            </div>
        </div>
    </div>
</section>