<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shop Bread</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<!--header-->
<div id="header">
    <div class="container">
        <div class="row">
            <div id="logo" class="col-lg-3 col-md-3 col-sm-12">
                <h1><a href="#"><img src="img/thiet-ke-logo-22.jpg" alt=""
                                     width="40" height="40"></a></h1>
            </div>
            <div id="search"  class="col-lg-6 col-md-6 col-sm-12">
                <form action="#" method="get" class="form-inline my-2 my-lg-0">
                    <input class="form-control " type="text" placeholder="Search..." aria-label="Search" name="keyword">
                    <button class="btn my-2 my-sm-0" type="submit"><i class="fas fa-search fa-sm"></i></button>
                </form>
            </div>
            <div id="cart" class="col-lg-3 col-md-3 col-sm-12">
                <a href="#"><i class="fas fa-cart-plus"></i></a><span>8</span>
            </div>
        </div>
    </div>
</div>
<!--end header-->


<!--body-->
<div id="body">
    <div class="container">
        <div class="row">
            <!--menu-->
            <div id="menu" class="col-lg-12 col-md-12 col-sm-12">
                <ul>
                    <li><a href="#"></a>Trang chủ</li>
                    <li><a href="#"></a>Giới thiệu</li>
                    <li><a href="#"></a>Cửa hàng</li>
                    <li><a href="#"></a>Liên hệ</li>
                    <li><a href="#"></a>Tin tức</li>
                </ul>
            </div>
            <!--end menu-->
        </div>
        <div class="row mt-2">
            <!-- main-content -->
            <div id="main-content" class="col-lg-8 col-md-8 col-sm-12">
                <!-- slide -->
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100"
                                 src="img/banhmi1.jpg"
                                 alt="First slide" width="550" height="450">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100"
                                 src="img/banhmi2.jpg"
                                 alt="Second slide" width="550" height="450">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100"
                                 src="img/banhmi3.jpg"
                                 alt="Third slide" width="550" height="450">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
                <!-- end slide -->

                <!-- product -->
                <div class="products">
                    <h3>Sản phẩm nổi bật</h3>
                    <div class="card-deck products-list">
                        <div class="m-2">

                            <div class="card products-item">
                                <a href="#">
                                    <img src="#"></a>
                            </div>
                        </div>

                    </div>

                </div>
                <!-- end product -->
            </div>
            <!--end main-content -->

            <!-- slibar -->
            <div id="slibar" class="col-lg-4 col-md-0 col-sm-0">
                <div class="banner-item mb-2">
                    <a href="#">
                        <img src="../../../case-bread/case-bread/views/Frontend/img/anh1.jpeg" class="img-fluid " alt="" style="height: 230px;width: 100%"></a>
                </div>
                <div class="banner-item ">
                    <a href="#">
                        <img src="img/anh2.jpeg" class="img-fluid mb-2" alt="" style="width: 100%"></a>
                </div>
                <div class="banner-item">
                    <a href="#">
                        <img src="img/anh3.jpeg" class="img-fluid mb-2" alt="" style="width: 100%"></a>
                </div>
                <div class="banner-item">
                    <a href="">
                        <img src="img/anh4.jpeg" class="img-fluid mb-2" alt="" style="width: 100%"></a>
                </div>
            </div>
            <!-- end slibar -->
        </div>
    </div>
</div>
<!--end body-->


<!--footer-top-->
<div id="footer-top">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-12">
                <h2><a href="#"><img src="img/thiet-ke-logo-22.jpg" width="60" height="60"
                                     alt=""></a></h2>
                <p>
                    Bánh mì là thực phẩm được chế biến từ bột mì hoặc từ ngũ cốc được nghiền ra trộn với nước, thường là bằng cách nướng. Trong suốt quá trình lịch sử, bánh mì đã được phổ biến trên toàn thế giới và là một trong những loại thực phẩm nhân tạo lâu đời nhất, và rất quan trọng kể từ lúc ban đầu của ngành nông nghiệp.
                </p>
            </div>
            <div id="address" class="col-lg-3 col-md-6 col-sm-12">
                <h5>ĐỊA CHỈ</h5>
                <p> CodeGym - Số 23 - Lô-TT 01 - Hàm Nghi - Mỹ Đình2 - Nam Từ Liêm - Hà Nội</p>
            </div>
            <div id="business" class="col-lg-3 col-md-6 col-sm-12">
                <h5>LĨNH VỰC KINH DOANH</h5>
                <ul>
                    <li>Bánh mì thịt</li>
                    <li>Bánh mì trứng</li>
                    <li>Bánh mì xúc xích</li>
                    <li>Bánh mì thịt nướng</li>
                    <li>Bánh mì pate</li>
                    <li>Bánh mì combo</li>
                </ul>
            </div>
            <div id="hotline" class="col-lg-3 col-md-6 col-sm-12">
                <h5>LIÊN HỆ</h5>
                <p>Name: Nguyễn Tuấn Anh</p>
                <p>Phone: 0332.882.276</p>
                <p>Email: nguyenngocbao13579@gmail.com</p>
            </div>
        </div>
    </div>
</div>
<!--end footer-top-->

<!--footer-bottom-->
<div id="footer-bottom">
</div>
<!--end footer-bottom-->

</body>
</html>