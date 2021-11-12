


<div class="card">
    <div class="card-header">
        Quản Lí Đơn Hàng
    </div>
    <div class="card-body">
        <h5 class="card-title">Đơn Hàng</h5>
        <a href="index.php?page=order-create"   >
            <button type="button" class="btn btn-primary pr-5 pl-5 mb-3 ">Thêm Mới</button>
        </a>
        <table class="table">
            <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>Tên sản phẩm</th>
                <th>Ngày tháng</th>
                <th>Ghi chú</th>
                <th>Số điện thoại</th>
                <th>Tổng tiền</th>
                <th colspan="2">Hành Động</th>
            </tr>
            </thead>
            <tbody>
            <?php if (isset($orders)): ?>
                <?php foreach ($orders as $order): ?>
                    <tr>
                        <td><?= $order['id'] ?></td>
                        <td><?= $order['name'] ?></td>
                        <td><?= $order['date'] ?></td>
                        <td><?= $order['note'] ?></td>
                        <td><?= $order['phone'] ?></td>
                        <td><?= $order['totalmoney'] ?></td>
                        <!--                <td><img src="--><?//= $product['image']?><!--" width="150"></td>-->
                        <!--                <td><a href="index.php?page=product-detail&id=--><?php //echo $product["id"] ?><!--">Detail</a></td>-->
                        <td><a type="button" class="btn btn-danger" onclick="return confirm('are you sure')"
                               href="index.php?page=order-delete&id=<?php echo $order["id"] ?>">Xóa</a></td>
                        <td><a type="button" class="btn btn-warning" href="index.php?page=order-edit&id=<?php echo $order["id"] ?>">Chỉnh Sửa</a></td>
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




