<?php
$page = (isset($_GET["page"])) ? $_GET["page"] : "";
$username = ($_SESSION["username"] ?? "");
$role = ($_SESSION["role"] ?? "");
?>
<div class="container">
    <?php
    include_once "inc/header.php";
    include_once "inc/nav.php";
    include_once "inc/banner.php";
    ?>

    <div class="content" style="margin:20px 0 ">
        <h3>Sản phẩm nổi bật</h3>
    </div>

    <div class="row">
    <?php foreach ($products as $product):?>
<div class="mt-3 col-3" >
    <div class="card  " >
        <img src="<?= isset($product['image'])?$product['image']:'uploads/1.png';?>" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title"><?php echo $product["name"]?></h5>
            <p class="card-text">Mô tả : <?= $product["description"] ?></p>
            <p class="card-text">Giá : <?= number_format($product["price"]) ?> VND</p>
            <a href="index.php?page=product-detail&id=<?php echo $product["id"] ?>" class="btn btn-primary">Chi tiết </a>
            <a href="index.php?page=addToCart&id=<?php echo $product["id"] ?>" class="btn btn-primary">Mua</a>
        </div>
    </div>
</div>
    <?php endforeach; ?>
    </div>


    <?php
    include_once  "inc/footer.php";
    ?>
</div>
