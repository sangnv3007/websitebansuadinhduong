    <?php 
        include("lib_db.php");
        session_start();
        if(isset($_POST['subMit'])){
        $fullname=$_POST['fullName'];
        $phone=$_POST['Phone'];
        $email=$_POST['Email'];
        $password=md5($_POST['passWord']);//chuẩn mã hóa md5
        $address=$_POST['Address'];
        $array=array('full_name'=>$fullname,'phone'=>$phone,'email'=>$email,'password'=>$password,'address'=>$address);
        $data=data_to_sql_insert('dtb_customer',$array);
        exec_update($data);
        $_SESSION['account']=array($email,$password,$fullname);
        header('location: signin-submit.php');
        }
    ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title>Siêu thị sữa dinh dưỡng-Thế giới sữa cho bé</title>
	<meta http-equiv="Content-Type" content="text/shtml; charset=utf-8" />
	<link rel="icon" href="images/icon.jpg" type="image/jpg" />
	<link type="text/css" href="./bootstrap-5.0.0-beta1-dist/css/bootstrap.min.css" rel="stylesheet" media="screen"/>
	<link type="text/css" href="css/style.css" rel="stylesheet" media="screen"/>
	<link type="text/css" href="css/fontent.css" rel="stylesheet" media="screen"/>
	<link type="text/css" href="./fontawesome-free-5.15.1-web/css/all.css" rel="stylesheet" media="screen"/>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
</head>	
<body>
    <?php 
    include("header.php");
    ?>
	<section class="container">
		<div class="row">
            <div class="col-hidden"></div>
            <div class="container-signin">
                <h6>Đăng ký</h6>
                <form class="f" method="post" autocomplete="on" action="signin.php">
                    <ul>
                        <li>
                            <input id ="fullname" class="inf-user" placeholder="Họ và tên" type="text" name="fullName">
                        </li>
                        <li>
                            <input id ="email" class="inf-user" placeholder="Email" type="text" name="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="Vui lòng nhập đúng định dạng email !"> 
                        </li>
                        <li>
                            <input id ="password" class="inf-user" placeholder="Mật khẩu" type="password" name="passWord" pattern=".{6,}" title="Vui lòng nhập 6 kí tự hoặc hơn !">
                        </li>
                        <li>
                            <input id ="phone" class="inf-user" placeholder="Số điện thoại" type="text" name="Phone" pattern="\d+" title="Vui lòng nhập số điện thoại!">
                        </li>
                        <li>
                            <input id ="address" class="inf-user" placeholder="Địa chỉ" type="text" name="Address">
                        </li>
                        <li class="btns">
                            <input id ="btnsubmit" class="btn-signin" type="submit" name="subMit" value="Đăng ký">
                        </li>
                    </ul>
                </form>
            </div>
            <div class="col-hidden"></div>
        </div>
	</section>
	<?php 
    include("footer.php");
    ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script type="text/javascript" src="js/scroll.js"></script>
</body>
</html>