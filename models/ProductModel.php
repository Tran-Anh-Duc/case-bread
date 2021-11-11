<?php
include_once "database/DBbread.php";
include_once "BaseModel.php";
class ProductModel extends BaseModel
{
    protected string $table = "product";

    public function editProduct($data)
    {
        $sql = "UPDATE $this->table SET `name`= ?,`description`= ? ,`price`= ?  WHERE `id` = ?";
        $stmt = $this->dbConnect->prepare($sql);
        $stmt->bindParam(1,$data['name']);
        $stmt->bindParam(2,$data['description']);
        $stmt->bindParam(3,$data['price']);
        $stmt->bindParam(4,$data['id']);
        $stmt->execute();
    }

    public function createProduct($data)
    {
        $sql = "insert into $this->table(`id`,`name`,`description`,`price`,`image`) values (?,?,?,?,?)";
        $stmt = $this->dbConnect->prepare($sql);
        $stmt->bindParam(1,$data["id"]);
        $stmt->bindParam(2,$data["name"]);
        $stmt->bindParam(3,$data["description"]);
        $stmt->bindParam(4,$data["price"]);
        $stmt->bindParam(5,$data["image"]);
        $stmt->execute();
    }


}


