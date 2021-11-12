

<div class="card">
    <div class="card-header">
        Quản Lí Sản Phẩm
    </div>
    <div class="card-body">
        <h5 class="card-title">Sản Phẩm</h5>
        <a href="index.php?page=product-create">
            <button type="button" class="btn btn-primary pr-5 pl-5 mb-3">Thêm Sản Phẩm</button>
        </a>
        <table class="table">
            <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>Tên sản phẩm</th>
                <th>Mô tả sản phẩm</th>
                <th>Giá sản phẩm</th>
                <th>Ảnh sản phẩm</th>
                <th colspan="3">Hành động</th>
            </tr>
            </thead>
            <tbody>
            <?php if (isset($products)): ?>
                <?php foreach ($products as $product): ?>
                    <tr>
                        <td><?= $product['id'] ?></td>
                        <td><?= $product['name'] ?></td>
                        <td><?= $product['description'] ?></td>
                        <td><?= number_format($product['price']) ?></td>
                        <td><img src="<?= $product['image']?>" width="150"></td>
                        <td><a type="button" class="btn btn-warning" href="index.php?page=product-detail&id=<?php echo $product["id"] ?>">Chi tiết</a></td>
                        <td><a type="button" class="btn btn-danger" onclick="return confirm('are you sure')"
                               href="index.php?page=product-delete&id=<?php echo $product["id"] ?>">Xóa</a></td>
                        <td><a type="button" class="btn btn-warning" href="index.php?page=product-edit&id=<?php echo $product["id"] ?>">Chỉnh sửa</a></td>
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








