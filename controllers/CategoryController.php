<?php
include_once "models/CategoryModel.php";
class CategoryController
{
    private CategoryModel $categoryModel;

    public function __construct()
    {
        $this->categoryModel = new CategoryModel();
    }

    public function index()
    {
        $categorys = $this->categoryModel->getAll();
        include_once "views/Categorys/list.php";
    }

    public function AddCategory($data)
    {
        $data2 = [
            "name_category" => $_REQUEST['name_category'],
        ];
        $this->categoryModel->createCategory($data2);
        header("location:index.php");
    }

    public function showAdd()
    {
        include_once "views/Categorys/CategoryAdd.php";
    }

    public function deleteCategory($id)
    {
        if ($this->categoryModel->getById($id) !== null){
            $this->categoryModel->delete($id);
            header("location:index.php");
        }
    }

    public function showEdit()
    {
        $id = $_REQUEST["id"];
        $category= $this->categoryModel->getById($id);
        include_once "views/Categorys/CategoryEdit.php";
    }

    public function editCategory($id, $data)
    {
        $this->categoryModel->getById($id);
        $data3 = [
            "id" => $_REQUEST['id'],
            "name_category" => $_REQUEST['name_category'],
        ];
        $this->categoryModel->editCategory($data3);
        header("location:index.php");
    }

}