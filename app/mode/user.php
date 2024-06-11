<?php
    function checkuser($pass,$user)
    {
        $conn= connectDB();
        $stmt = $conn->prepare("SELECT * FROM tb_user WHERE  user='$user'AND pass='$pass'");
        $stmt->execute();
      
        // set the resulting array to associative
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $kq=$stmt->fetchAll();
        if(count($kq)>0)
        {

            return $kq[0]['role'];
        }
        else
        {
            return 0;
        }
    }
?>