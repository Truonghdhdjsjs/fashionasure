<?php
    function addproduct($link,$tendm)
    {
        $conn = connectDB();
        $sql = "INSERT INTO tb_danhmuc (linkdanhmuc, tendm)
        VALUES ('".$link."', '".$tendm."')";
        // use exec() because no results are returned
        $conn->exec($sql);
    }
    function delall()
    {
        $conn=connectDB();
        $sql = "DELETE FROM tb_danhmuc ";
  // use exec() because no results are returned
         $conn->exec($sql);
    }
    function getall_catalogy()
    {
        $conn=connectDB();
        $stmt = $conn->prepare("SELECT * FROM tb_danhmuc");
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $getall=$stmt->fetchAll();
        return $getall;
    }
?>