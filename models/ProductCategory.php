<?php
include_once "database/DBbread.php";
include_once "BaseModel.php";
class ProductCategory extends BaseModel
{
    protected string $table = 'productcategory';

    public function getAlll()
    {
        $sql = "SELECT `category`.name_category, `product`.name,`product`.description, `product`.price,`product`.image,`product`.id FROM `category`
                INNER JOIN `product` ON `category`.id = `product`.id";
        $stmt = $this->dbConnect->query($sql);
        return $stmt->fetchAll();
    }


}