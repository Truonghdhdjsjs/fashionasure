<?php
    function  updatedm2($id,$tendm,$link,$iddm)
    {
        $conn=connectDB();
        $sql = "UPDATE tb_danhmuccon SET tendm='".$tendm."' , linkdanhmuccon = '".$link."',iddm='".$iddm."' WHERE id='$id'";
        // Prepare statement
        $stmt = $conn->prepare($sql);
        $stmt->execute();
    }
    function getonedm2($id)
    {
        $conn= connectDB();
        $stmt = $conn->prepare("SELECT *  FROM tb_danhmuccon WHERE id=".$id);
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $kq=$stmt->fetchAll();
        return $kq;
    }
    function getall_catalogy2()
    {
        $conn= connectDB();
        $stmt = $conn->prepare("SELECT *  FROM tb_danhmuccon");
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $kq=$stmt->fetchAll();
        return $kq;
    }
?>