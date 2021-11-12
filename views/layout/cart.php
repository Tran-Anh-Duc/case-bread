<?php
include_once "inc/header.php";
?>
<div class="card">
    <div class="card-header">
        MY CART
    </div>
    <div class="card-body">
        <h5 class="card-title">Product manager</h5>
        <table class="table">
            <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>Ảnh sản phẩm</th>
                <th>Tên sản phẩm</th>
                <th>Giá sản phẩm</th>
                <th>Số lượng</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            <?php $sum = 0 ?>
            <?php if (isset($products)): ?>
                <?php foreach ($products as $product): ?>
                    <?php
                        $total = ($product["quantity"] * $product["price"]);
                        $sum += $total;
                    ?>
                    <tr>
                        <td><?= $product['id'] ?></td>
                        <td><img src="<?= $product['image'] ?>" width="150"></td>
                        <td><?= $product['name'] ?></td>
                        <td><?= $product['price'] ?></td>
                        <td><?= $product['quantity'] ?></td>
                        <td><?php echo number_format($total)?></td>
                        <td><a type="button" class="btn btn-danger" onclick="return confirm('are you sure')"
                               href="index.php?page=product-delete&id=<?php echo $product["id"] ?>">Delete</a></td>
                    </tr>
                <?php endforeach; ?>
            <tr>
                <th colspan="5">Tổng tiền</th>
                <td colspan="2"><?php echo number_format($sum)."VND"?></td>
            </tr>
            <?php else: ?>
                <tr>
                    <td colspan="4">khong co san pham nao o day</td>
                </tr>
            <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>









