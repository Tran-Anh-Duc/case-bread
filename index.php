<?php
include_once "models/ProductCategory.php";
include_once "models/UserModel.php";
include_once "models/ProductModel.php";
include_once "models/CategoryModel.php";
include_once "models/OrdersModel.php";
include_once "controllers/ProductController.php";
include_once "controllers/CategoryController.php";
include_once "controllers/OderController.php";
include_once "controllers/ProductCategoryController.php";
include_once "controllers/AuthController.php";
session_start();
$productController = new ProductController();
$categoryController = new CategoryController();
$oderController = new OderController();
$productCategoryController = new ProductCategoryController();
$authController = new AuthController();

$page = (isset($_GET["page"]) ? $_GET['page'] : "");
$username = isset($_SESSION["username"]) ? $_SESSION['username'] : "";

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
</head>
<body>

<div class="container">
<?php if ($_SESSION["username"]):?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="index.php?page=productCategory-list">Home</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="index.php?page=product-list">product<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php?page=category-list">Category</a>
            </li>
            <li class="nav-item ">
                <a class="nav-link " href="index.php?page=order-list" ">
                    Order
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled">Disabled</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <a class="navbar-brand" ><i style="color: red ;font-size:30px " class="far fa-grin-wink"></i> :
                <?php echo $username ;?></a>
            <a class="nav-link " href="index.php?page=logout"><i class="fas fa-torii-gate"></i> LOGOUT</a>
        </form>
    </div>
</nav>
<?php endif;?>
<?php
switch ($page) {
    case "productCategory-list":
        $authController->checkAuth();
        $productCategoryController->index();
        break;
    case "product-list":
        $authController->checkAuth();
        $productController->index();
        break;
    case "category-list":
        $authController->checkAuth();
        $categoryController->index();
        break;
    case "order-list":
        $authController->checkAuth();
        $oderController->index();
        break;
    case "product-create";
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            $productController->showAddProduct();
        } else {
            $productController->AddProduct($_REQUEST);
        }
        break;
    case "category-create";
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            $categoryController->showAdd();
        } else {
            $categoryController->AddCategory($_REQUEST);
        }
        break;
    case "order-create";
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            $oderController->showAdd();
        } else {
            $oderController->AddCategory($_REQUEST);
        }
        break;
    case "product-delete":
        $productController->deleteProduct($_REQUEST["id"]);
        break;
    case "category-delete":
        $categoryController->deleteCategory($_REQUEST["id"]);
        break;
    case "order-delete":
        $oderController->deleteOrder($_REQUEST["id"]);
        break;
    case "product-edit";
        $id = $_GET["id"];
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            $productController->showEditProduct();
        } else {
            $productController->editProduct($id, $_REQUEST);
        }
        break;
    case "category-edit";
        $id = $_GET["id"];
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            $categoryController->showEdit();
        } else {
            $categoryController->editCategory($id, $_REQUEST);
        }
        break;
    case "order-edit";
        $id = $_GET["id"];
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            $oderController->showEditOrder();
        } else {
            $oderController->editOrder($id, $_REQUEST);
        }
        break;
    case "login";
        if ($_SERVER["REQUEST_METHOD"] == "GET"){
            $authController->showFromLogin();
        }else{
            $authController->login($_REQUEST);
        }
        break;
    case "logout":
        $authController->logout();
        break;
    case "register":
        if ($_SERVER["REQUEST_METHOD"] == "GET"){
            $authController->showRegister();
        }else{
            $authController->register($_POST);
            header('location:index.php?page=login');
        }
        break;
        default;
        $productCategoryController->index();

}

?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
</div>
</body>
</html>


