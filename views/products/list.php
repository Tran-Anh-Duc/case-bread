

<div class="card">
    <div class="card-header">
        Product
    </div>
    <div class="card-body">
        <h5 class="card-title">Product manager</h5>
        <a href="index.php?page=product-create">
            <button type="button" class="btn btn-primary pr-5 pl-5 mb-3">ADD NEW</button>
        </a>
        <table class="table">
            <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>Tên sản phẩm</th>
                <th>Mô tả sản phẩm</th>
                <th>Giá sản phẩm</th>
                <th>Ảnh sản phẩm</th>
                <th colspan="2">Action</th>
            </tr>
            </thead>
            <tbody>
            <?php if (isset($products)): ?>
                <?php foreach ($products as $product): ?>
                    <tr>
                        <td><?= $product['id'] ?></td>
                        <td><?= $product['name'] ?></td>
                        <td><?= $product['description'] ?></td>
                        <td><?= $product['price'] ?></td>
                        <td><img src="<?= $product['image']?>" width="150"></td>
                        <td><a type="button" class="btn btn-danger" onclick="return confirm('are you sure')"
                               href="index.php?page=product-delete&id=<?php echo $product["id"] ?>">Delete</a></td>
                        <td><a type="button" class="btn btn-warning" href="index.php?page=product-edit&id=<?php echo $product["id"] ?>">Edit</a></td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="4">khong co san pham nao o day</td>
                </tr>
            <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>








