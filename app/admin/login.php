<?php
    session_start();
    ob_start();
    include_once('../mode/connect.php');
    include_once('../mode/user.php');
    if (isset($_POST['txtsbt'])) {
        # code...
        $pass=$_POST['txtpass'];
        $user= $_POST['txtuser'];
        $role=checkuser($pass,$user);
        $_SESSION['role']=$role;
        $maxerorrlogin = 5;
        $i=0;
        while($i<$maxerorrlogin)
        {
            if ($role===1) {
                # code...
                header('location:../admin/index.php');
                break;
            }
            else
            {
                $nnotification = "Mật khẩu bạn không dúng  ";
                header('location:../admin/login.php');
                $i++;
            }

        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrator ASURE</title>
    <link rel="stylesheet" href="../admin/view/layout/css/login.css">
    <link rel="stylesheet" href="../admin/view/layout/css/default.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="app">
        <header class="login_header">
            <nav class="login_nav">
                <a href="../view/index.html" class="login_link">
                    <i class="fa-solid fa-reply login_nav_icon"></i>
                    <span class="login_nav_txt">Xem trang Website</span>
                </a>
            </nav>
        </header>
        <div class="wapper">
          <article class="form_article">
            <form action="<?php $_SERVER['PHP_SELF']?>" method="post">
                <div class="boder_form">
                    <header class="boder_form_header">
                        <p class="boder_form_txt">đăng nhập hệ thống</p>
                    </header>
                    <nav class="boder_form_input">
                        <div class="boder_form_table">
                            <div class="boder_form_tr border">
                                <div class="boder_form_td"><i class="fa-regular fa-user"></i></div>
                                <div class="boder_form_td"><input type="text" name="txtuser" id="txtuser" placeholder="Tài khoản *" maxlength="10" autocomplete="off" class="input_user"></div>
                            </div>
                            <divr class="boder_form_tr">
                                <div class="boder_form_td"><i class="fa-solid fa-lock"></i></div>
                                <div class="boder_form_td"><input type="password" name="txtpass" id="txtpass" placeholder="Mật khẩu *" maxlength="10" autocomplete="off" class="input_pass"></div>
                                <div class="boder_form_td"><i class="fa-solid fa-eye"  id="eyes" class="eyes_close"></i></div>
                            </divr>
                        </div>
                        <div class="act_form">
                            <input type="submit" value="Đăng nhập" name="txtsbt" id="txtsbt" class="txtsbt" onclick="return checkform()">
                        </div>
                        <p class="noote_erorr"></p>
                        <?php
                            if(isset($nnotification) && ($nnotification!=""))
                            {
                                echo'<p style="red">'.$nnotification.'</p>' ;
                            }
                        ?>
                    </nav>
                </div>
            </form>
          </article>
        </div>
    </div>
</body>
<script src="../admin/view/layout/js/showpass.js"></script>
<script src="../admin/view/layout/js/erorr.js"></script>
</html>