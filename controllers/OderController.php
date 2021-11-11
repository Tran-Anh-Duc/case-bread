<?php
include_once "models/OrdersModel.php";
class OderController
{

    private OrdersModel $ordersModel;

    public function __construct()
    {
        $this->ordersModel = new OrdersModel();
    }

    public function index()
    {
        $orders = $this->ordersModel->getAll();
        include_once "views/Orders/list.php";
    }

    public function AddCategory($data)
    {
        $data2 = [
            "name" => $_REQUEST['name'],
            "date" => $_REQUEST['date'],
            "note" => $_REQUEST['note'],
            "phone" => $_REQUEST['phone'],
            "totalmoney" => $_REQUEST['totalmoney'],
        ];
        $this->ordersModel->createOrder($data2);
        header("location:index.php");
    }
    public function showAdd()
    {
        include_once "views/Orders/OrderAdd.php";

    }
    public function deleteOrder($id)
    {
        if ($this->ordersModel->getById($id) !== null){
            $this->ordersModel->delete($id);
            header("location:index.php");
        }
    }

    public function showEditOrder()
    {
        $id = $_REQUEST["id"];
        $order= $this->ordersModel->getById($id);
        include_once "views/Orders/OrderEdit.php";
    }

    public function editOrder($id,$data)
    {
        $this->ordersModel->getById($id);
        $data3 = [
            "id" => $_REQUEST['id'],
            "name" => $_REQUEST['name'],
            "date" => $_REQUEST['date'],
            "note" => $_REQUEST['note'],
            "phone" => $_REQUEST['phone'],
            "totalmoney" => $_REQUEST['totalmoney'],

        ];
        $this->ordersModel->editOrder($data3);
        header("location:index.php");
    }




}