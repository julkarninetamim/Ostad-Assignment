<?php 
    include "inc/DataBase.php";
    include "inc/functions.php";
    include "inc/header.php";

    $db=new DataBase();
    $query="SELECT * FROM tbl_post LIMIT 3";
    $post=$db->select($query);
?>
    <section class="feature-posts">
        <div class="container">
            <h2 class="text-center">Features Posts</h2>
            <div class="row">
                <?php 
                    if($post){
                        while($result=$post->fetch_assoc()){
                ?>
                <div class="col-md-4">
                    <div class="card" >
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
                        echo "There is no post";
                    }
                ?>
            </div>
        </div>
    </section>
</body>
</html>