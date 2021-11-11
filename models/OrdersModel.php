<?php
include_once "database/DBbread.php";
include_once "BaseModel.php";
class OrdersModel extends BaseModel
{
    protected string $table = "orders";

    public function editOrder($data)
    {
        $sql = "UPDATE $this->table SET `name`= ?, `date`= ?,`note`=?,`phone`=?,`totalmoney`= ? WHERE `id` = ?";
        $stmt = $this->dbConnect->prepare($sql);
        $stmt->bindParam(1,$data['name']);
        $stmt->bindParam(2,$data['date']);
        $stmt->bindParam(3,$data['note']);
        $stmt->bindParam(4,$data['phone']);
        $stmt->bindParam(5,$data['totalmoney']);
        $stmt->bindParam(6,$data['id']);
        $stmt->execute();
    }

    public function createOrder($data)
    {
        $sql = "insert into $this->table(`name`,`date`,`note`,`phone`,`totalmoney`) values (?,?,?,?,?)";
        $stmt = $this->dbConnect->prepare($sql);
//        $stmt->bindParam(1,$data["id"]);
        $stmt->bindParam(1,$data["name"]);
        $stmt->bindParam(2,$data["date"]);
        $stmt->bindParam(3,$data["note"]);
        $stmt->bindParam(4,$data["phone"]);
        $stmt->bindParam(5,$data["totalmoney"]);
        $stmt->execute();
    }
}