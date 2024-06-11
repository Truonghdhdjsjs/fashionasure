<?php
    function  updatedm2($id,$tendm,$link,$iddm)
    {
        $conn= connectDB();
        $sql = "UPDATE tbl_danhmuccon SET iddm='".$iddm."', linkdm2='".$link."', tendm='".$tendm."' WHERE id=".$id;
        // Prepare statement
        $stmt = $conn->prepare($sql);
        $stmt->execute();
    }
    function  getonecatalogy2($id)
    {
        $conn= connectDB();
        $stmt = $conn->prepare("SELECT * FROM tbl_danhmuccon WHERE id=".$id);
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $kq=$stmt->fetchAll();
        return $kq;
    }
    function delcatalogy2($id)
    {
        $conn= connectDB();
        $sql = "DELETE FROM tbl_danhmuccon WHERE id=".$id;
        // use exec() because no results are returned
        $conn->exec($sql);
    }
    function insertpluscatalogy($tendm,$iddm,$link)
    {
        $conn= connectDB();
        $sql = "INSERT INTO tbl_danhmuccon (tendm,iddm,linkdm2)
        VALUES ('$tendm','$iddm','$link')";
        // use exec() because no results are returned
        $conn->exec($sql);
    }
    function getall_catalogy2()
    {
        $conn= connectDB();
        $stmt = $conn->prepare("SELECT * FROM tbl_danhmuccon");
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $kq=$stmt->fetchAll();
        return $kq;
    }
?>