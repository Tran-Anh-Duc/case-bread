<div class="container">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="index.php?page=home">Trang chủ</a>
<!--    <a class="navbar-brand" href="index.php?page=productCategory-list">List-Product</a>-->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
<!--                <a class="nav-link" href="index.php?page=product-list">product<span class="sr-only">(current)</span></a>-->
            </li>
            <li class="nav-item">
<!--                <a class="nav-link" href="index.php?page=category-list">Category</a>-->
            </li>
            <li class="nav-item ">
<!--                <a class="nav-link " href="index.php?page=order-list" "> Order </a>-->


            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                    Tùy Chọn
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="navbar-brand" href="index.php?page=productCategory-list">Danh sách sản phẩm</a>
                    <a class="nav-link" href="index.php?page=product-list">Sản phẩm<span class="sr-only">(current)</span></a>
<!--                    <div class="dropdown-divider"></div>-->
                    <a class="nav-link" href="index.php?page=category-list">Loại sản phẩm</a>
                    <a class="nav-link " href="index.php?page=order-list" "> Đơn hàng </a>
                </div>
            </li>
            <li class="nav-item">
                <a href="index.php?page=cart" class="nav-link ">Giỏ Hàng(<?= isset($_SESSION["cart"])? count($_SESSION["cart"]):0  ?>)</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <a class="navbar-brand" style="margin-bottom: 10px"><i style="color: red ;font-size:30px; " class="far fa-grin-wink"></i> :
                <?php echo $username ;?></a>
            <a class="nav-link " href="index.php?page=logout"><i class="fas fa-torii-gate"></i> Đăng xuất</a>
            <a class="nav-link " href="index.php?page=register"><i class="fas fa-torii-gate"></i> Đăng kí</a>
        </form>
    </div>
</nav>