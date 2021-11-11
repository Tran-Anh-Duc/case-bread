
<div class="card">
    <div class="card-header">
        Category
    </div>
    <div class="card-body">
        <h5 class="card-title">Special Category</h5>
        <a href="index.php?page=category-create">
            <button type="button" class="btn btn-primary pr-5 pl-5 mb-3">ADD NEW</button>
        </a>
        <table class="table">
            <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>Loại sản phẩm</th>
                <th colspan="2">Action</th>
            </tr>
            </thead>
            <tbody>
            <?php if (isset($categorys)): ?>
                <?php foreach ($categorys as $category): ?>
                    <tr>
                        <td><?= $category['id'] ?></td>
                        <td><?= $category['name_category'] ?></td>
                        <!--                <td><img src="--><? //= $product['image']?><!--" width="150"></td>-->
                        <!--                <td><a href="index.php?page=product-detail&id=-->
                        <?php //echo $product["id"] ?><!--">Detail</a></td>-->
                        <td><a type="button" class="btn btn-danger" onclick="return confirm('are you sure')"
                               href="index.php?page=category-delete&id=<?php echo $category["id"] ?>">Delete</a></td>
                        <td><a type="button" class="btn btn-warning" href="index.php?page=category-edit&id=<?php echo $category["id"] ?>">Edit</a></td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="2">khong co san pham nao o day</td>
                </tr>
            <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>







