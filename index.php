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
$role = isset($_SESSION["role"]) ? $_SESSION['role'] : "";

?>
    <!doctype html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
              integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    </head>
    <style>
        .carousel-item{
            height: 400px;
            overflow: hidden;
        }
    </style>
<body>
<?php if ($_SESSION["username"]):?>
<?php include_once "inc/nav.php" ?>

<?php endif;?>
<?php
switch ($page) {
    case "productCategory-list":
        if ($role == 1){
            $authController->checkAuth();
            $productCategoryController->index();
        }elseif($role == 2){
            $oderController->danger();
        }
        break;
       case "productcategory-detail";
       $id = $_GET["id"];
       $productCategoryController->showDetail($id);
       break;
    case "product-list":
        if ($role == 1){
            $authController->checkAuth();
            $productController->index();
        }elseif($role == 2){
            $oderController->danger();
        }
        break;
    case "category-list":
        if ($role == 1){
            $authController->checkAuth();
            $categoryController->index();
        }elseif($role == 2){
            $oderController->danger();
        }
        break;
    case "order-list":
        if ($role == 1){
            $authController->checkAuth();
            $oderController->index();
        }elseif($role == 2){
            $oderController->danger();
        }
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
    case "product-detail":
        $id = $_GET["id"];
        $productController->showDetailProduct($id);
        break;
    case "home":
        $productController->home();
        break;
    case "addToCart":
        $id = $_REQUEST['id'];

            $productController->addToCart($id);


        break;
    case "cart":
        $productController->showCart();
        break;
        default;
        if ($role == 2){
            $productController->home();
        }else{
            $productCategoryController->index();
        }
}
?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
</div>
</body>
</html>



