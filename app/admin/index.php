<?php
   include_once('../mode/connect.php');
   include_once('../mode/catalogylv1.php');
   include_once('../mode/product.php');
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
            if(isset($_GET['id']))
            {
                  $id=$_GET['id'];
                  $getone_catalogo=getone_catalog($id);
                  $conn=connectDB();
                  $kq=getall_catalogylv1();
                  include_once('../admin/editlv1.php');
            }
            if(isset($_POST['txtsubmit'])&&($_POST['txtsubmit']))
            {
                  $id=$_POST['txtid'];
                  $tendm=$_POST['tendm'];
                  update_catalogylv1($id,$tendm);
                  $conn=connectDB();
                  $kq=getall_catalogylv1();
                  include_once('../admin/catologylv1.php');
            }
           break;
         case 'delall':
            $conn=connectDB();
            $kq=getall_catalogylv1();
            delall();
            include_once('../admin/catologylv1.php');
         case 'timkiemdanhmuc':
            if (isset($_POST['txtsbt'])&&($_POST['txtsbt'])) {
               # code...
                  $search=$_POST['txtsearch'];
                  $result= search_catolahy($search);
            }
            $conn=connectDB();
            $kq=getall_catalogylv1();
            include_once('../admin/catologylv1.php');
            break;
         case 'danhmuccap2':
            # code...
            include_once('../admin/categorylv2..php');
            break;
         case 'sanpham':
            # code...
            $conn=connectDB();
            $kq = getall_product();
            $catalogy= getall_catalogylv1();
            include_once('../admin/product.php');
            break;
         case 'delproduct':
            if(isset($_GET['id']))
            {
               $id = $_GET['id'];
               delproduct($id);
            }
            $conn=connectDB();
            $kq = getall_product();
            $catalogy= getall_catalogylv1();         
            include_once('../admin/product.php');
            break;
         case 'plusproduct':
            $conn=connectDB();
            $kq = getall_product();
            $catalogy= getall_catalogylv1();
            include_once('../admin/plusproduct.php');
            break;
         case 'plusproducttool':
            # code...
            if (isset($_POST['txtsub'])&&($_POST['txtsub'])) 
            {
               $iddm=$_POST['iddm'];
               $tensp=$_POST['tensp'];
               $mota=$_POST['mota'];
               $price=$_POST['price'];
               $sale=$_POST['price_old'];
               $target_dir = "../uploads/";
               $target_file = $target_dir . basename($_FILES["img"]["name"]);
               $img=$target_file;
               $uploadOk = 1;
               // if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
               // && $imageFileType != "gif" ) {
               //   echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
               //   $uploadOk = 0;
               // }
               move_uploaded_file($_FILES["img"]["tmp_name"], $target_file);
               plusproduct($tensp,$mota,$price,$sale,$iddm,$img);
            }
            $conn=connectDB();
            $kq = getall_product();
            $catalogy= getall_catalogylv1();
            include_once('../admin/product.php');
            break;
         case 'editptoduct':
            if(isset($_GET['id']))
            {
                  $id=$_GET['id'];
                  $getone_product=editptoduct($id);
                  $conn=connectDB();
                  $kq = getall_product();
                  $catalogy= getall_catalogylv1();
               include_once('../admin/editproduct.php');
            }
            if (isset($_POST['txtsub'])&&($_POST['txtsub'])) 
            {
               $conn=connectDB();
               $kq = getall_product();
               $catalogy= getall_catalogylv1();
               $getone_product=editptoduct($id);
               $id = $_POST['id'];
               $iddm=$_POST['iddm'];
               $tensp=$_POST['tensp'];
               $mota=$_POST['mota'];
               $price=$_POST['price'];
               $sale=$_POST['price_old'];
               // $target_dir = "../uploads/";
               // $target_file = $target_dir . basename($_FILES["img"]["name"]);
               // $img=$target_file;
               // $uploadOk = 1;
               // // if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
               // // && $imageFileType != "gif" ) {
               // //   echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
               // //   $uploadOk = 0;
               // // }
               // move_uploaded_file($_FILES["img"]["tmp_name"], $target_file);
               updateproduct($tensp,$mota,$price,$sale,$iddm,$id);
               include_once('../admin/product.php');
            }
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