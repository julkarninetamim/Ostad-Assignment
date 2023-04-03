<div class="sidebar">
    <ul class="list-group categories">
        <?php 
            $query="SELECT * FROM tbl_category";
            $category=$db->select($query);
            if($category){
                while($result = $category->fetch_assoc()){
        ?>
                <li class="list-group-item"><a href="categories.php?category=<?= $result["id"]?>"><?= $result["name"]?></a></li>
        <?php
                }
            }
        ?>
        
    </ul>
</div>