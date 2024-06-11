<?php
    function getall_product()
    {
        $conn=connectDB();
        $stmt = $conn->prepare("SELECT * FROM tb_sanpham");
        $stmt->execute();
      
        // set the resulting array to associative
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);

        $kq=$stmt->fetchAll();
        return $kq;
    }
    function insertproduct($tensp,$mota,$price,$pricesale,$link,$iddm,$img)
    {
        $conn=connectDB();
        $sql = "INSERT INTO tb_sanpham (tensp,mota, price,pricesale,linksp,iddm,img)
        VALUES ('$tensp', '$mota', '$price','$pricesale','$link','$iddm','$img  ')";
        // use exec() because no results are returned
        $conn->exec($sql);
    }
    function deloneproduct($id)
    {
        $conn = connectDB();
        $sql = "DELETE FROM tb_sanpham WHERE id='$id'";
        // use exec() because no results are returned
        $conn->exec($sql);
    }
    function getoneproduct($id)
    {
        $conn = connectDB();
        $stmt = $conn->prepare("SELECT * FROM tb_sanpham  WHERE id='$id'");
        $stmt->execute();
        // set the resulting array to associative
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $kq=$stmt->fetchAll();
        return $kq;
    }
    function   adddproducts($tensp,$mota,$price,$pricesale,$link,$iddm,$img,$id)
    {
        $conn=connectDB();
        $sql = "UPDATE tb_sanpham SET tensp='$tensp',mota='$mota',price='$price',pricesale='$pricesale',linksp='$link',iddm='$iddm',img='$img' WHERE id='$id'";
        // Prepare statement
        $stmt = $conn->prepare($sql);
        // execute the query
        $stmt->execute();
    }
    function  delalproduct()
    {
        $conn=connectDB();
        $sql = "DELETE FROM tb_sanpham";
        // use exec() because no results are returned
        $conn->exec($sql);
    }
?>