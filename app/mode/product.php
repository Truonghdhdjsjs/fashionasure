<?php

       
    function delallproduct()
    {
        $conn =connectDB();
        $sql= " DELETE  FROM tb_sanpham";
        $conn->exec($sql);
    }
    function updateproduct($tensp,$mota,$price,$sale,$iddm,$id,$img)
    {
        $conn=connectDB();
        if ($img==="") {
            # code...
            $sql = "UPDATE tb_sanpham SET tensp='".$tensp."', mota='".$mota."',price='".$price."',price_old='".$sale."',iddm='".$iddm."' WHERE id='$id'";
        }
        else
        {
            $sql = "UPDATE tb_sanpham SET tensp='".$tensp."', mota='".$mota."',price='".$price."',price_old='".$sale."',iddm='".$iddm."',img='".$img."' WHERE id=".$id;
        }
        $stmt = $conn->prepare($sql);
        // $stmt->execute();
        // $stmt->execute();
        // execute the query
       
    }
    // function uploadproduct($iddm,$mota,$price,$pricesale,$tensp,$img)
    // {
    //     $conn=connectDB();
    //     $sql = "INSERT INTO tb_sanpham (iddm, mota, price,price_old,tensp,img)
    //     VALUES ('".$iddm."', '".$mota."', '".$price."','".$pricesale."','".$tensp."','".$img."')";
    //     // use exec() because no results are returned
    //     $conn->exec($sql);
    // }
    function  editptoduct($id)
    {
        $conn = connectDB();
        $stmt = $conn->prepare("SELECT * FROM tb_sanpham WHERE id='$id'");
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $getone_product=$stmt->fetchAll();
        return $getone_product;
    }
    function  plusproduct($tensp,$mota,$price,$sale,$iddm,$img)
    {
        $conn = connectDB();
        $sql = "INSERT INTO tb_sanpham ( tensp, mota,price,price_old,iddm,img)
        VALUES ( '".$tensp."', '".$mota."','".$price."','".$sale."','".$iddm."','".$img."')";
        // use exec() because no results are returned
        $conn->exec($sql);
    }
    function delproduct($id)
    {
        $conn = connectDB();
        $sql = "DELETE FROM tb_sanpham WHERE id='$id'";
        // use exec() because no results are returned
        $conn->exec($sql);
    }
    function getall_product()
    {
        $conn = connectDB();
        $stmt = $conn->prepare("SELECT * FROM tb_sanpham");
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $kq=$stmt->fetchAll();
        return $kq;
    }
?>