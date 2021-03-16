<?php 
    include("lib_db.php");
    session_start();
    if(isset($_POST["subMit"]))
    {
        $emai_employee=$_POST['email_emloyee'];
        $pass_employee=$_POST['password_emloyee'];
        $sql_check_login="Select * from dtb_employee where email='".$emai_employee."'";
        //echo $sql_check_login;exit();
        $data= select_one($sql_check_login);
        //print_r($data);
        if(count($data)==0)
        {
            echo"Tài khoản không tồn tại";exit();
        }
        else
        {
            if($data['password']!=$pass_employee)
            {
                echo"Sai mật khẩu !";exit();
            }
            else
            {
                $_SESSION['admin']=$data;
                header("location: admin.php");
            }
        }

    }
    if(isset($_GET['logout']) && isset($_SESSION["admin"])){
        unset($_SESSION['admin']);
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>ADMIN-Siêu thị sữa dinh dưỡng-Thế giới sữa cho bé </title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link type="text/css" href="css/admin.css" rel="stylesheet" media="screen"/>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>
<div class="login-form">
    <form action="adm.php" method="post">
        <h2 class="text-center">Đăng nhập</h2>       
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Nhập Email" name="email_emloyee" required="required">
        </div>
        <div class="form-group">
            <input type="password" class="form-control" placeholder="Mật khẩu" name="password_emloyee" required="required">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block" name="subMit">Đăng nhập</button>
        </div>
        <div class="clearfix">
            <label class="float-left form-check-label"><input type="checkbox"> Nhớ mật khẩu</label>
            <a href="#" class="float-right">Quên mật khẩu ?</a>
        </div>        
    </form>
    <p class="text-center"><a href="#">Tạo tài khoản</a></p>
</div>
</body>
</html>