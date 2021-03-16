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
	<section class="container" id="ctn-lg">
		<div class="row" id="row-login">
            <div class="col-hidden-login"></div>
            <div class="container-login">
                <h6>Đăng nhập</h6>
                <form class="f" method="post" autocomplete="on" action="lg.php">
                    <ul>                       
                        <li>
                            <input id ="email" class="inf-user" placeholder="Email" type="text" name="Email"> 
                        </li>
                        <li>
                            <input id ="password" class="inf-user" placeholder="Mật khẩu" type="password" name="passWord">
                        </li>                       
                        <li class="btns">
                            <input id ="btnsubmit" class="btn-signin" type="submit" name="subMit" value="Đăng nhập">
                        </li>
                    </ul>
                </form>
            </div>
            <div class="col-hidden-login"></div>
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