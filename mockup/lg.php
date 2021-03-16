<?php
    include("lib_db.php");
    session_start();
    if(isset($_POST['subMit'])&&isset($_SESSION['account']))
    {
        $email=$_SESSION['account'][0];
        $password=$_SESSION['account'][1];
        if($email!='' && $password!='')
        {
            $sql="Select * from dtb_customer where email='$email' and password='$password'";
            $user=select_one($sql);
            if(isset($user))
            {
                $_SESSION['user']=$user;
                header("location: index.php");
            }
            else       
                echo("Bạn đã nhập sai email hoặc password.");          
        }
        else
        {
            header("location: login.php");
            echo("Bạn chưa nhập email hoặc mật khẩu");
        }
    }
    else{
        $email=$_POST['Email'];
        $password=$_POST['passWord'];
        if($email!='' && $password!='')
        {
            $sql="Select * from dtb_customer where email='$email'";
            $user=select_one($sql);
            if(isset($user))
            {
                $_SESSION['user']=$user;
                header("location: index.php");
            }
            else       
                echo("Bạn đã nhập sai email hoặc password");          
        }
        else
        {
            header("location: login.php");
            echo("Bạn chưa nhập email hoặc mật khẩu");
        }
    }
?>