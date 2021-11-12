<?php
include_once "models/ProductCategory.php";
include_once "models/ProductModel.php";
class ProductCategoryController
{

    private ProductCategory $productcategory;
    private  $productModel;

    public function __construct()
    {
        $this->productcategory = new ProductCategory();
        $this->productModel =new ProductModel();
    }

    public function index()
    {
        $productcategorys = $this->productcategory->getAlll();
        include_once "views/productcategory/list.php";
    }

    public function showDetail($id)
    {
        $product = $this->productModel->getById($id);
        include_once "views/productcategory/productcategoryDetail.php";
    }

}