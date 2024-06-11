<?php
    session_start();
    ob_start();
    include_once('../mode/user.php');
    if (isset($_SESSION['role'])&&($_SESSION['role']==1)) {
        # code...
    include_once("../mode/connect.php");
    include_once("../mode/catalogy.php");
    include_once("../mode/catolagy2.php");
    include_once("../mode/product.php");
    include_once("../admin/header.php");
    include_once("../admin/menu.php");
    if(isset($_GET['admin']))
    {
        $admin=$_GET['admin'];
        switch ($admin) {
            case 'product':
                $kq=connectDB();
                $getproduct=getall_product();
                $getall=getall_catalogy();
               include('../admin/view/product/product.php');
                break;
            case 'productplus':
                $kq=connectDB();
                $getproduct=getall_product();
                $getall=getall_catalogy();
                include('../admin/view/product/backend/plusproduct.php');
                break;
            case 'productplus_tool':
                if(isset($_POST['nhap']))
                {
                    $kq=connectDB();
                    $getproduct=getall_product();
                    $getall=getall_catalogy();
                    $link = $_POST['txtpath'];
                    $tensp= $_POST['txttitle'];
                    $mota=$_POST['txtmota'];
                    $price=$_POST['txtnumber'];
                    $iddm = $_POST['iddm'];
                    $pricesale=$_POST['txtnumbersales'];
                    $target_dir = "../uploads/";
                    $target_file = $target_dir . basename($_FILES["txtfiles"]["name"]);
                    $img = $target_file;
                    $uploadOk = 1;
                    move_uploaded_file($_FILES["txtfiles"]["tmp_name"], $target_file);
                    insertproduct($tensp,$mota,$price,$pricesale,$link,$iddm,$img);
                    }
                include('../admin/view/product/product.php');
                break;
            case 'delproduct':
                if(isset($_GET['id']))
                {
                    $kq=connectDB();
                    $getproduct=getall_product();
                    $getall=getall_catalogy();
                    $id=$_GET['id'];
                    deloneproduct($id);
                    include_once('../admin/view/product/product.php');
                }
                break;
            case 'editproduct':
                if (isset($_GET['id'])) {
                    # code...
                    $kq=connectDB();
                    $getall=getall_catalogy();
                    $id=$_GET['id'];
                    $getone_product=getoneproduct($id);
                    include_once('../admin/view/product/backend/editproduct.php');
                }
                if (isset($_POST['txtsub'])) {
                    # code...
                    $kq=connectDB();
                    $getproduct=getall_product();
                    $getall=getall_catalogy();
                    
                    $id=$_POST['id'];
                    $link = $_POST['txtpath'];
                    $tensp= $_POST['txttitle'];
                    $mota=$_POST['txtmota'];
                    $price=$_POST['txtnumber'];
                    $iddm = $_POST['iddm'];
                    $pricesale=$_POST['txtnumbersales'];
                    $target_dir = "../uploads/";
                    $target_file = $target_dir . basename($_FILES["txtfiles"]["name"]);
                    $img = $target_file;
                    $uploadOk = 1;
                    move_uploaded_file($_FILES["txtfiles"]["tmp_name"], $target_file);
                    adddproducts($tensp,$mota,$price,$pricesale,$link,$iddm,$img,$id);
                    include('../admin/view/product/product.php');
                }
                break;
            case 'delalproduct':
                $kq=connectDB();
                $getproduct=getall_product();
                $getall=getall_catalogy();
                delalproduct();
                include_once('../admin/view/product/product.php');
                break;
            case 'catalogy':
                $kq=connectDB();
                $getall=getall_catalogy();
                include_once('../admin/view/catalogy/catologylv1.php');
                break;
            case 'delcatalogy':
                $kq=connectDB();
                $getall=getall_catalogy();
                delall();
                include('../admin/view/catalogy/catologylv1.php');
                break;
            case 'pluscotalary':
                $kq=connectDB();
                $getall_catalogy=getall_catalogy();
                include_once('../admin/view/catalogy/backend/pluscategory.php');
                break;
            // case 'editcatalogy':
            //     if (isset($_GET['id'])) {
            //         # code...
            //         $kq=connectDB();
            //         $
            //     }
            //     break;   
            case 'add_catalogy':
                if(isset($_POST['txtsubs']))
                {
                    $kq=connectDB();
                    $getall_catalogy=getall_catalogy();
                    $link =$_POST['txtkink'];
                    $tendm =$_POST['txttendm'];
                    addcatalogy($link,$tendm);
                    include_once("../admin/view/catalogy/catologylv1.php");
                }
                break;
            case 'editcatalogy':
                if (isset($_GET['id'])) {
                    # code...
                    $kq=connectDB();
                    $getone=getone_catalogy($id);
                    $id=$_GET['id'];
                    include_once('../admin/view/catalogy/backend/editlv1.php');
                }
                if(isset($_POST['txtupdate']))
                {
                    $kq=connectDB();
                    $getall=getall_catalogy();
                    // $getone=getone_catalogy($id);
                    $id=$_POST['id'];
                    $link=$_POST['txtpath'];
                    $tendm =$_POST['txttitle'];
                    updatedm($tendm,$link,$id);
                    include_once("../admin/view/catalogy/catologylv1.php");
                }
                break;
            case 'delcatalogy1':
                if(isset($_GET['id']))
                {   $kq=connectDB();
                    $getall=getall_catalogy();
                    $id=$_GET['id'];
                    delcatalogy($id);
                }
                include_once('../admin/view/catalogy/catologylv1.php');
                break;
            case 'catalogy2':
                # code...
                $kq=connectDB();
                $getall=getall_catalogy2();
                $getallcataone=getall_catalogy();
                include_once('../admin/view/catalogy2/categorylv2..php');
                break;
            case 'pluscatalogy2':
                # code...
                $kq=connectDB();
                $getall=getall_catalogy2();
                $getallcataone=getall_catalogy();
                include_once('../admin/view/catalogy2/backend/pluscatalogylv2.php');
                break;
            case 'pluscatalogy2_tools':
                # code...
                if(isset($_POST['txtpluss']))
                {
                    $kq=connectDB();
                    $getallcataone=getall_catalogy();
                    $getall=getall_catalogy2();
                    $iddm = $_POST['iddm'];
                    $link=$_POST['txtpath'];
                    $tendm=$_POST['txttitlenam'];
                    $iddm=$_POST['iddm'];
                    insertpluscatalogy($tendm,$iddm,$link);
                include_once('../admin/view/catalogy2/categorylv2..php');
                    }
                break;
            case 'delcatalogy2':
                # code...
                if(isset($_GET['id']))
                {
                    $kq=connectDB();
                    $getall=getall_catalogy2();
                    $id=$_GET['id'];
                    delcatalogy2($id);
                    include_once('../admin/view/catalogy2/categorylv2..php');
                }
                break;
            case 'editdm2':
                if (isset($_GET['id'])) {
                    # code...
                    $kq=connectDB();
                    $getallcataone=getall_catalogy();
                    $id=$_GET['id'];
                    $getone=getonecatalogy2($id);
                    include_once('../admin/view/catalogy2/backend/editcatalogalv2.php');
                }
                if(isset($_POST['txtsub']) &&($_POST['id']))
                {
                    $kq=connectDB();
                    $getallcataone=getall_catalogy();
                    $getall=getall_catalogy2();                 
                    $id=$_POST['id'];
                    $tendm=$_POST['txttitle'];
                    $link=$_POST['txtpath'];
                    $iddm=$_POST['txtiddm'];
                    updatedm2($id,$tendm,$link,$iddm);
                    include_once('../admin/view/catalogy2/categorylv2..php');
                }
                break;
                case 'logout':
                    if(isset($_SESSION['role']))
                    {
                        unset($_SESSION['role']);
                        header('location:../admin/login.php');
                    }
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
}
else
{
    header('location:../admin/login.php');
}
?>