<?php
    include_once("../mode/connect.php");
    include_once("../mode/catalogy.php");
    include_once('../mode/catolagy2.php');
    include("../admin/header.php");
    include("../admin/menu.php");
    if(isset($_GET['admin']))
    {
        $admin=$_GET['admin'];
        switch ($admin) {
            case 'product':
               include('../admin/view/product/product.php');
                break;
            case 'catalogy':
                $kq=connectDB();
                $getall=getall_catalogy();
                include('../admin/view/catalogy/catologylv1.php');
                break;
            case 'delcatalogy':
                $kq=connectDB();
                $getall=getall_catalogy();
                delall();
                include('../admin/view/catalogy/catologylv1.php');
                break;
            case 'pluscotalary':
                $kq=connectDB();
                $getall=getall_catalogy();
                include('../admin/view/catalogy/backend/pluscategory.php');
                break;
            case 'addcatalogy':
                if(isset($_POST['txtsub'])&&($_POST['txtsub']))
                {
                    $link = $_POST['linkdanhmuc'];
                    $tendm = $_POST['tendm'];
                    addproduct($link,$tendm);
                }
                $kq=connectDB();
                $getall=getall_catalogy();
                include('../admin/view/catalogy/catologylv1.php');
                break;
            case 'catalogy2':
                # code...
                $kq=connectDB();
                $getall=getall_catalogy();
                $getall_catalogy2=getall_catalogy2();
                include('../admin/view/catalogy2/categorylv2..php');
                break;
            case 'editdm2':
                if(isset($_GET['id']))
                {
                   $id = $_GET['id'];
                   $getone = getonedm2($id);
                   $getall=getall_catalogy();
                   include_once('../admin/view/catalogy2/backend/editcatalogalv2.php');
                }
                if(isset($_POST['txtsub']) && ($_POST['txtsub']))
                {
                    
                    $getall=getall_catalogy();
                    $id = $_POST['id'];
                    $iddm=$_POST['iddm'];
                    $tendm = $_POST['tendm'];
                    $link = $_POST['linkdanhmuccon'];
                    updatedm2($id,$tendm,$link,$iddm);
                    }
                    $kq=connectDB();
                    $getall_catalogy2=getall_catalogy2();
                    include_once("../admin/view/catalogy2/categorylv2..php");
            
                break;
            default:
                 include('../admin/body.php');
                break;
        }
    }
    else
    {
        include('../admin/body.php');
    }
    include("../admin/footer.php");
?>