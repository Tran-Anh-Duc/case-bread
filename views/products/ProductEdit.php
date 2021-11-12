
<div style="margin-left: 30%">
    <form method="post">
        <input class="alert alert-primary" role="alert" type="text" name="name" placeholder="tên sản phẩm"
               value="<?= $product['name'] ?>"><br>
        <input class="alert alert-primary" role="alert" type="text" name="description" placeholder="mô tả sản phẩm"
               value="<?= $product['description'] ?>"><br>
        <input class="alert alert-primary" role="alert" type="text" name="price" placeholder="giá sản phẩm"
               value="<?= $product['price'] ?>"><br>
        <button type="submit" type="button" class="btn btn-primary">Thay đổi</button>
        <a href="index.php">
            <button type="button" class="btn btn-primary">Quay lại</button>
        </a>
    </form>
</div>
