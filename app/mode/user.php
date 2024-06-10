<?php
    function checkuser($user,$pass)
    {
        $conn=connectDB();
        $stmt = $conn->prepare("SELECT * FROM tb_user WHERE user = '".$user."' AND password = '".$pass."'" );
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $kq=$stmt->fetchAll();
       if(count($kq)>0) return $kq[0]['role'];
       else {
        return 0;
       }
    }
?>