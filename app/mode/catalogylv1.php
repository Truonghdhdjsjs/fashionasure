<?php
    function  delall()
    {
        $conn=connectDB();
        $sql = "DELETE FROM tb_danhmucs"; 
        $conn->exec($sql);
    }
    function update_catalogylv1($id,$tendm)
    {
        $conn=connectDB();
        $sql = "UPDATE tb_danhmucs SET tendm='".$tendm."' WHERE id=".$id;
        // Prepare statement
        $stmt = $conn->prepare($sql);
        $stmt->execute();
    }
    function getone_catalog($id)
    {
        $conn=connectDB();
        $stmt = $conn->prepare("SELECT * FROM tb_danhmucs WHERE id=".$id);
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $kq=$stmt->fetchAll();
        return $kq;
    }
    function add_cataloge($tendm)
    {
        $conn = connectDB();
        $conn->exec("INSERT INTO tb_danhmucs (tendm)
         VALUES ('".$tendm."')");
    }
    function delete_catalogylv1($id)
    {
        $conn = connectDB();
        $sql = "DELETE FROM tb_danhmucs WHERE id='$id'"; 
        $conn->exec($sql);
    }

    function getall_catalogylv1()
    {
        $conn=connectDB();
        $stmt = $conn->prepare("SELECT * FROM tb_danhmucs");
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $kq=$stmt->fetchAll();
        return $kq;
    }
?>