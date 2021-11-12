




<div class="card">
    <div class="card-header">
        Danh mục sản phẩm
    </div>
    <div class="card-body">
        <h5 class="card-title">Danh sách sản phẩm </h5>
        <table class="table">
            <thead class="thead-dark" >
            <tr>
                        <th>ID</th>
                <th>Tên loại sản phẩm</th>
                <th>Tên sản phẩm</th>
                <th>Mô tả</th>
                <th>Giá tiền</th>
                <th>Ảnh sản phẩm</th>
                <th>Hành động</th>
            </tr>
            </thead>
            <tbody>
            <?php if (isset($productcategorys)): ?>
                <?php foreach ($productcategorys as $productcategory): ?>
                    <tr>
                        <td><?= $productcategory['id'] ?></td>
                        <td><?= $productcategory['name_category'] ?></td>
                        <td><?= $productcategory['name'] ?></td>
                        <td><?= $productcategory['description'] ?></td>
                        <td><?= number_format($productcategory['price']) ?></td>
                        <td><img src="<?= $productcategory['image']?>" width="150"></td>
                        <td><a type="button" class="btn btn-primary" href="index.php?page=productcategory-detail&id=<?php echo $productcategory["id"] ?>">Chi tiết</a></td>
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






