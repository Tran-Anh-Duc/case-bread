<?php
include_once "database/DBbread.php";
include_once "BaseModel.php";
class CategoryModel extends BaseModel
{

    protected string $table = "category";

    public function editCategory($data)
    {
        $sql = "UPDATE $this->table SET `name_category`= ? WHERE `id` = ?";
        $stmt = $this->dbConnect->prepare($sql);
        $stmt->bindParam(1,$data['name_category']);
        $stmt->bindParam(2,$data['id']);
        $stmt->execute();
    }

    public function createCategory($data)
    {
        $sql = "insert into $this->table(`name_category`) values (?)";
        $stmt = $this->dbConnect->prepare($sql);
        $stmt->bindParam(1,$data["name_category"]);
        $stmt->execute();
    }




}