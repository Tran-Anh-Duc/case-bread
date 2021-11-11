<form action="" method="post" enctype="multipart/form-data">
    <!--    <input class="alert alert-primary" role="alert" type="text" name="id" placeholder="id sản phẩm"><br>-->
    <select name="demo">
        <?php foreach ($categories as $category): ?>
            <option value="<?php echo $category["name_category"] ?>"><?php echo $category["name_category"] ?></option>
        <?php endforeach; ?>
    </select>
    <input class="alert alert-primary" role="alert" type="text" name="name" placeholder="tên sản phẩm"><br>
    <input class="alert alert-primary" role="alert" type="text" name="description" placeholder="mô tả sản phẩm"><br>
    <input class="alert alert-primary" role="alert" type="text" name="price" placeholder="giá sản phẩm"><br>
    <button type="button" class="btn btn-success"><input style="margin: 5px;width: 220px" type="file" name="file"></button>
    <br>
    <button type="submit" type="button" class="btn btn-primary">change</button>
    <a href="index.php">
        <button type="button" class="btn btn-primary">back home</button>
    </a>
</form>