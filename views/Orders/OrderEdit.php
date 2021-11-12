
<div style="margin-left: 30%">
    <form action="" method="post">
        <input style="margin: 15px" class="alert alert-primary" role="alert" type="text" name="id" placeholder="id" value="<?= $order['id'] ?>"><br>
        <input style="margin: 15px" class="alert alert-primary" role="alert" type="text" name="name" placeholder="Tên sản phẩm" value="<?= $order['name'] ?>"><br>
        <input style="margin: 10px" class="alert alert-primary" role="alert" type="text" name="date" placeholder="Ngày tháng" value="<?= $order['date'] ?>"><br>
        <input style="margin: 10px" class="alert alert-primary" role="alert" type="text" name="note" placeholder="Ghi chú" value="<?= $order['note'] ?>"><br>
        <input style="margin: 10px" class="alert alert-primary" role="alert" type="text" name="phone" placeholder="Số điện thoại" value="<?= $order['phone'] ?>"><br>
        <input style="margin: 10px" class="alert alert-primary" role="alert" type="text" name="totalmoney" placeholder="Tổng tiền" value="<?= $order['totalmoney'] ?>"><br>
        <button class="btn btn-primary ml-5" type="submit">Thay đổi</button>
        <a href="index.php"><button class="btn btn-primary">Quay lại</button></a>
    </form>
</div>


