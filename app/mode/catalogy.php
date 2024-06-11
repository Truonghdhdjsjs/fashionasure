<?php
    function updatedm($tendm,$link,$id)
    {
        $conn = connectDB();
        $sql = "UPDATE tb_danhmuc SET tendm='".$tendm."',linkdm='".$link."' WHERE id=".$id;
        // Prepare statement
        $stmt = $conn->prepare($sql);
        // execute the query
        $stmt->execute();
    }
    function getone_catalogy($id)
    {
        $conn=connectDB();
        $stmt = $conn->prepare("SELECT * FROM tb_danhmuc WHERE id=".$id);
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $getall=$stmt->fetchAll();
        return $getall;
    }
    function  addcatalogy($link,$tendm)
    {
        $conn=connectDB();
        $sql = "INSERT INTO tb_danhmuc  (tendm,linkdm)
        VALUES ( '".$tendm."','".$link."')";
        // use exec() because no results are returned
        $conn->exec($sql);
    }
    function  delcatalogy($id)
    {
        $conn=connectDB();
        $sql = "DELETE FROM tb_danhmuc WHERE id=".$id;
        // use exec() because no results are returned
        $conn->exec($sql);
    }

//     function addproduct($link,$tendm)
//     {
//         $conn = connectDB();
//         $sql = "INSERT INTO tb_danhmuc (linkdanhmuc, tendm)
//         VALUES ('".$link."', '".$tendm."')";
//         // use exec() because no results are returned
//         $conn->exec($sql);
//     }
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
        $stmt = $conn->prepare("SELECT * FROM tb_danhmuc ");
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $getall=$stmt->fetchAll();
        return $getall;
    }
?>