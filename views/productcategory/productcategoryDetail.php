<div class="row">
<div class="">
    <img src="<?= $product["image"]; ?>" alt="">

</div>
<div class="card col">
    <h1>Tên loại sản phẩm: <?= $productcategory["name_category"]; ?></h1>
    <p >Tên sản phẩm: <?= $product["name"]; ?></p>
    <p>Mô tả sản phẩm: <?= $product["description"]; ?></p>
    <p class="price">Giá sản phẩm: <?= number_format($product["price"]); ?> VND</p>
<!--    <p >--><?//= $product["image"]; ?><!--</p>-->

</div>
</div>

