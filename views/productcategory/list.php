




<div class="card">
    <div class="card-header">
        List product
    </div>
    <div class="card-body">
        <h5 class="card-title">Special List Product</h5>
        <table class="table">
            <thead class="thead-dark" >
            <tr>
                <!--        <th>ID</th>-->
                <th>Tên loại sản phẩm</th>
                <th>Tên sản phẩm</th>
                <th>Mô tả</th>
                <th>Giá tiền</th>

            </tr>
            </thead>
            <tbody>
            <?php if (isset($productcategorys)): ?>
                <?php foreach ($productcategorys as $productcategory): ?>
                    <tr>
                        <td><?= $productcategory['name_category'] ?></td>
                        <td><?= $productcategory['name'] ?></td>
                        <td><?= $productcategory['description'] ?></td>
                        <td><?= $productcategory['price'] ?></td>
                        <!--<td><img src="--><?//= $product['image']?><!--" width="150"></td>-->
                        <!--<td><a href="index.php?page=product-detail&id=--><?php //echo $product["id"] ?><!--">Detail</a></td>-->

                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="6">khong co san pham nao o day</td>
                </tr>
            <?php endif; ?>
            </tbody>
        </table>

    </div>
</div>






