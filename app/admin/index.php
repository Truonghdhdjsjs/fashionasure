<?php
   include_once('../mode/connect.php');
   include_once('../mode/catalogylv1.php');
   include_once('../admin/header.php');
   include_once('../admin/menu.php');
   if (isset($_GET['admin'])) {
      # code...
      $admin = $_GET['admin'];
      switch ($admin) {
         case 'danhmuccap1':
            # code...
            $conn=connectDB();
            $kq=getall_catalogylv1();
            include_once('../admin/catologylv1.php');
            break;
         case 'delete_dm':
            if(isset($_GET['id'])) {
                  $id = $_GET['id'];
                  delete_catalogylv1($id);
            }
            $conn=connectDB();
            $kq=getall_catalogylv1();
            include_once('../admin/catologylv1.php');
            break;
         case 'plus_catalogylv1':
            $conn=connectDB();
            $kq=getall_catalogylv1();
            include_once('../admin/pluscategory.php');
            break;
         case 'plus_catalogylv1_tool':
            if (isset($_POST['txtsub'])&&($_POST['txtsub'])) {
               # code...
               $tendm=$_POST['txttitle'];
               add_cataloge($tendm);
            }
            $conn=connectDB();
            $kq=getall_catalogylv1();
            include_once('../admin/catologylv1.php');
            break;
         case 'edit_catalogylv1':
            $conn=connectDB();
            $kq=getall_catalogylv1();
            include_once('../admin/editlv1.php');
           break;
         case 'danhmuccap2':
            # code...
            include_once('../admin/categorylv2..php');
            break;
         case 'sanpham':
            # code...
            include_once('../admin/product.php');
            break;
         default:
            # code...
            include_once('../admin/body.php');
            break;
      }
   }
   else
   {
      include_once('../admin/body.php');
   }
   include_once('../admin/footer.php')
?>