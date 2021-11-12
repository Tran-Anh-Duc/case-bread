
<div class="card">
    <div class="card-header">
        Quản Lí Các Loại Sản Phẩm
    </div>
    <div class="card-body">
        <h5 class="card-title">Các loại sản phẩm</h5>
        <a href="index.php?page=category-create">
            <button type="button" class="btn btn-primary pr-5 pl-5 mb-3">Thêm Mới</button>
        </a>
        <table class="table">
            <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>Loại sản phẩm</th>
                <th colspan="2">Hành Động</th>
            </tr>
            </thead>
            <tbody>
            <?php if (isset($categorys)): ?>
                <?php foreach ($categorys as $category): ?>
                    <tr>
                        <td><?= $category['id'] ?></td>
                        <td><?= $category['name_category'] ?></td>
                        <td><a type="button" class="btn btn-danger" onclick="return confirm('are you sure')"
                               href="index.php?page=category-delete&id=<?php echo $category["id"] ?>">Xóa</a></td>
                        <td><a type="button" class="btn btn-warning" href="index.php?page=category-edit&id=<?php echo $category["id"] ?>">Sửa</a></td>
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







