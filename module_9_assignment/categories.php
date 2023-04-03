<?php 
    include "inc/DataBase.php";
    include "inc/functions.php";
    include "inc/header.php";

    if(!isset($_GET["category"]) || $_GET["category"] == NULL){
        header("Location: 404.php");
    }else{
        $id=$_GET["category"];
    }
    $db=new DataBase();
    $query="SELECT * FROM tbl_post WHERE cat=$id";
    $post=$db->select($query);
?>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h2 class="text-center">
                    <?php 
                        $cq="SELECT * FROM tbl_category WHERE id=$id";
                        $cname=$db->select($cq);
                        if($cname){
                            while($result = $cname->fetch_assoc()){
                                printf("Category Name: %s",$result["name"]);
                            }
                        }
                    ?>
                </h2>
                <div class="row">
                    <?php 
                        if($post){
                            while($result=$post->fetch_assoc()){
                    ?>
                    <div class="col-md-4">
                        <div class="card my-2" >
                            <img src="<?= $result["image"]?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><?= $result["title"]?></h5>
                                <p class="card-text"><?php echo postExcerpt($result["body"]);?></p>
                                <a href="post.php?id=<?= $result["id"]?>" class="btn btn-primary">Read More</a>
                            </div>
                        </div>
                    </div>   
                    <?php
                            }
                        }else{
                            echo "<h3 class='text-center text-danger'>There is no post in this category</h3>";
                        }
                    ?>
                </div>
            </div>
            <div class="col-md-4">
                <?php 
                    include "sidebar.php";
                ?>
            </div>
        </div>
    </div>
</body>
</html>