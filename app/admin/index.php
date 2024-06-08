<?php
    session_start();
    ob_start();
    include_once('../mode/connect.php');
    include_once('../mode/danhmuc.php');
    include_once('../admin/view/header.php');
    include_once('../admin/view/menu.php');
    if(isset($_GET['admin']))
    {
        $admin=$_GET['admin'];
        switch ($admin) {
            case 'danhmuccap1':
                $conn=connectDB();
                $kq=getall_catalogy();
                include_once('../admin/view/catologylv1.php');
                break;
            case 'danhmuccap2':
                include_once('../admin/view/categorylv2..php');
                break;
            case 'sanpham':
               include_once('../admin/view/product.php');
                break;
            default:
                # code...
                include_once('../admin/view/body.php');
                break;
        }
    }
    else
    {
        include_once('../admin/view/body.php');
    }
    include_once('../admin/view/footer.php');
?>