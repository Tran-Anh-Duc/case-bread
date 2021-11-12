<?php include_once "inc/header.php";?>
<div class="row">
    <div>
        <img src="<?= $product["image"]; ?>" alt="">

    </div>


<div class="card col" >
    <img src="" alt="" ">
    <h1>Tên sản phẩm : <?= $product["name"]; ?></h1>
    <p class="price">Giá sản phẩm :<?= number_format($product["price"]); ?> VND</p>
    <p>Thành phần : <?= $product["description"]; ?></p>
</div>
</div>
<?php
include_once "inc/footer.php";
?>

