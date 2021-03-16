<?php
	session_start();
	// session_destroy();
	
    require_once("config/config.php");
    if(isset($_GET['id'])){

        $idd=$_GET['id'];
    }
    switch($idd){
        case $idd==4:
            $sql="Select * from dtb_product where id_type=1000 ";
            $title="Sữa Non";
            break;
        case $idd==2:
            $sql="Select * from dtb_product where id_type=1002 ";
            
            $title="Sữa Đặc Trị Người Bệnh";
            break;
        case $idd==3:
                $sql="Select * from dtb_product where id_type=1004 ";
                $title="Thực Phẩm Chức Năng";
                
                break;
        case $idd==1 || $idd==5 || $idd==6 || $idd==7 || $idd==8  :
                    $sql="Select * from dtb_product where id_type=1001 ";
                    $title="Sữa Bột";
                    
                    break;
        case $idd==9:
                        $sql="Select * from dtb_product where id_type=1006 ";
                        $title="Các Loại Bỉm";
                        
                        break;
    }
    $result=select_list($sql);


    ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title>Siêu thị sữa dinh dưỡng-Thế giới sữa cho bé</title>
	<meta http-equiv="Content-Type" content="text/shtml; charset=utf-8" />
	<link rel="icon" href="images/icon.jpg" type="image/jpg" />
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link type="text/css" href="css/style.css" rel="stylesheet" media="screen"/>
	<link type="text/css" href="css/fontent.css" rel="stylesheet" media="screen"/>
	<link type="text/css" href="./fontawesome-free-5.15.1-web/css/all.css" rel="stylesheet" media="screen"/>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
</head>	
<body style="background: white;">
    <?php include("header.php") ?>

	

	<div class="content-main" style="padding:0 ; margin:auto ; width:100%">
		<div class="container-pr">
			<h3 class="h3"><a href="#" title="Hàng khuyến mãi"> <?php echo $title ;?></a></h3>
			<div class="row" style="display: flex;justify-content: center;">
				<?php foreach($result as $product){
				?>
				<div class="col-md-3 col-sm-6">
					<div class="product-grid6">
						<div class="product-image6">
							<a href="detailproduct.php?id=<?php echo $product["id"]?>">
								<img class="pic-1" src="<?php echo explode('||',$product["image_product"])[0];?>">
							</a>
						</div>
						<div class="product-content">
							<h3 class="title"><a href="#"><?php echo ($product["name"]);?></a></h3>
							<div class="price"><?php echo ($product["promotion_price"]);?>
								<span><?php echo ($product["unit_price"]);?></span>
							</div>
						</div>
						<ul class="social">
							<li><a href="" data-tip="Xem nhanh"><i class="fa fa-search"></i></a></li>
							<li><a href="detailproduct.php?id=<?php echo $product["id"]?>" data-tip="Xem chi tiết"><i class="fas fa-eye"></i></a></li>
							<li><a  class="add_cart" name="<?php echo $product["id"]?>" data-tip="Thêm vào giỏ"><i class="fa fa-shopping-cart"></i></a></li>
						</ul>
					</div>
				</div>
				<?php
				}
				?>
			</div>
		</div>
</div>
        <div class="footer" style="margin-top:30em">
		<!-- footer fist section -->
		<section class="fist-footer">
			<div class="container-footer">
				<div class="row">					
					<div class="item freeship">
						<i class="fas fa-dolly"></i>
						<div class="content freeship">
							<h3>Miễn phí vận chuyển</h3>
							<p>Cho đơn hàng trên 1000k</p>
						</div>
					</div>						
					<div class="item transport-fast">
						<i class="far fa-star"></i>
						<div class="content transport">
							<h3>Cam kết chính hãng</h3>
							<p>Đảm bảo chất lượng 100%</p>
						</div>
					</div>					
					<div class="item help">
						<i class="far fa-smile-wink"></i>
						<div class="content help">
							<h3>Hỗ trợ tư vấn</h3>
							<p>Thứ 2-Thứ 7 : 08h30 - 17h30</p>
						</div>
					</div>
					<div class="item order-now">
						<i class="fas fa-phone-alt"></i>
						<div class="content help">
							<h3>0373853447</h3>
							<p>Đặt hàng ngay</p>
						</div>
					</div>							
				</div>
			</div>	
		</section>
		<!-- footer fist section -->
		<section class="second-footer">
			<div class="container-footer">
				<div class="row">
					<div class="address">
						<p><strong>SIÊU THỊ SỮA DINH DƯỠNG - CHUYÊN GIA TƯ VẤN DINH DƯỠNG</strong></p>
						<p><strong>SỮA TÓT CHO BÉ - SỮA DINH DƯỠNG CHO NGƯỜI BỆNH - SỮA BẦU - THỰC PHẨM CHỨC NĂNG</strong></p>
						<P>Cơ sở 1: Số 27 Ngõ 191 Khương Thượng - Đống Đa - Hà Nội </p>
						<p>Cơ sở 2:(Sau cổng chợ Núi) Đường 286 Yên Phụ - Yên Phong - Bắc Ninh </p>
						<p>Hotline: 0373853447 - 0925245947 - Zalo:0969996996</p>
						<p>Email: sieuthisuadinhduong@gmail</p>
						<p>Gian hàng shoppe: https://shopee.vn/sangnguyen3007
							<br/>
							<img alt="dathongbao" src="images/dathongbao.png">
						</p>
					</div>
				</div>
			</div>
		</section>
	
</body>
