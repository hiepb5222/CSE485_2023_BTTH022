<?php
require_once "configs/DBConnection.php";
require "models/Category.php";
class CategoryService
{
    public function getAllCategory()
    {
        // 4 bước thực hiện
        $dbConn = new DBConnection();
        $conn = $dbConn->getConnection();

        // B2. Truy vấn
        $sql = "SELECT * FROM theloai" ;
        $stmt = $conn->query($sql);

        // B3. Xử lý kết quả
        $categories = [];
        while($row = $stmt->fetch()){
            $category = new Category($row['ma_tloai'], $row['ten_tloai']);
            array_push($categories, $category);
        }
        // Mảng (danh sách) các đối tượng Category Model

        return $categories;
    }
}
