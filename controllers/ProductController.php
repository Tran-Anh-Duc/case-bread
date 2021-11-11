<?php
include_once "models/ProductModel.php";
include_once "models/CategoryModel.php";
class ProductController
{
    private ProductModel $productModel;
    private CategoryModel $categoryModel;

    public function __construct()
    {
        $this->productModel = new ProductModel();
        $this->categoryModel = new CategoryModel();
    }

    public function index()
    {
        $products = $this->productModel->getAll();
        include_once "views/products/list.php";
    }



    public function AddProduct($data)
    {
        $filepath = "";
        if (isset($_FILES["file"])) {
            $filepath = "uploads/" . $_FILES["file"]["name"];

            if (move_uploaded_file($_FILES["file"]["tmp_name"], $filepath)) {
                echo "<img src=" . $filepath . " height=200 width=300 />";
            } else {
                echo "Error !!";
            }

        }
        $data2 = [
            "id" =>$_REQUEST['id'],
            "name" => $_REQUEST['name'],
            "description" => $_REQUEST['description'],
            "price" => $_REQUEST['price'],
            "image" => $filepath
        ];
        $this->productModel->createProduct($data2);
        header("location:index.php");
    }


    public function showAddProduct()
    {

        $categories = $this->categoryModel->getAll();
//        echo "<pre>";
//        var_dump($categories);
        include_once "views/products/ProductAdd.php";
    }


//    xoa dữ liệu  ở bảng
    public function deleteProduct($id)
    {
        if ($this->productModel->getById($id) !== null) {
            $this->productModel->delete($id);
            header("location:index.php");
        }
    }


    public function showEditProduct()
    {
        $id = $_REQUEST["id"];
        $product = $this->productModel->getById($id);
        include_once "views/products/ProductEdit.php";
    }

    public function editProduct($id, $data)
    {
        $this->productModel->getById($id);
        $data3 = [
            "id" => $_REQUEST['id'],
            "name" => $_REQUEST['name'],
            "description" => $_REQUEST['description'],
            "price" => $_REQUEST['price'],
        ];
        $this->productModel->editProduct($data3);
        header("location:index.php");
    }

}