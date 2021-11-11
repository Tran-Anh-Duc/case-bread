<?php
include_once "models/ProductCategory.php";
class ProductCategoryController
{

    private ProductCategory $productcategory;

    public function __construct()
    {
        $this->productcategory = new ProductCategory();
    }

    public function index()
    {
        $productcategorys = $this->productcategory->getAlll();
        include_once "views/productcategory/list.php";
    }

}