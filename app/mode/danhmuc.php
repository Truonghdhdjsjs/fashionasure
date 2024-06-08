<?php
    function getall_catalogy()
    {
        $conn= connectDB();
        $stmt = $conn->prepare("SELECT * FROM tb_danhmuc");
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $kq=$stmt->fetchAll();
        return $kq;
    }
?>