<?php 
include "inc/DataBase.php";
include "inc/functions.php";
include "inc/header.php";

$db=new DataBase();
?>
<?php 
    if(!isset($_GET["id"]) || $_GET["id"] == NULL){
        header("Location: 404.php");
    }else{
        $id=$_GET["id"];
    }

    $query="SELECT * FROM tbl_post WHERE id=$id";
    $post=$db->select($query);
?>
<section class="single-post">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <?php 
                    if($post){
                        while($result=$post->fetch_assoc()){
                ?>
                    <img class="single-post-img" src="<?= $result["image"]?>" alt="" srcset="">
                    <div class="post-meta">
                        <h3><?= $result["title"]?></h3>
                        <h6><?php echo formateDate($result["date"])?> By <a><?= $result["author"]?></a></h6>
                    </div>
                    <p>
                        <?= $result["body"]?>
                    </p>
                <?php
                        }
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