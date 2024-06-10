<?php
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
                include('../admin/view/catalogy/catologylv1.php');
                    break;
            case 'catalogy2':
                # code...
                include('../admin/view/catalogy2/categorylv2..php');
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