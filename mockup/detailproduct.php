<?php
    include("lib_db.php");
    $id=isset($_REQUEST['id'])? $_REQUEST['id']:NULL;
    $sql="Select dtb_product.*,dtb_detailproduct.* from dtb_product,dtb_detailproduct where dtb_detailproduct.id=dtb_product.id_detailproduct and dtb_product.id=$id";
    $detail_product=select_one($sql);
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
<body>
    <?php 
    session_start();
    include("header.php");
    ?>
    <!--category-product-->
	<div class="home-category">
		<div class="row-home-category">
			<div class="container-category">
				<ul class="w3_short">
					<li>
						<a href="index.php">Trang chủ</a>
						<i>/</i>
                    </li>
					<li>
                        <a href="#">Sữa đặc trị cho người bệnh</a>
                        <i>/</i>
                    </li>
				</ul>
			</div>
		</div>
    </div>
    <div class="detail-product">
		<div class="container-dtproduct">
			<div class="row-dtproduct">
                <div class="left-dtproduct">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                            <img class="d-block w-100" src="<?php echo explode('||',$detail_product["image_product"])[0];?>" alt="First slide">
                            </div>
                            <div class="carousel-item">
                            <img class="d-block w-100" src="<?php echo explode('||',$detail_product["image_product"])[1];?>" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                            <img class="d-block w-100" src="<?php echo explode('||',$detail_product["image_product"])[2];?>" alt="Third slide">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div><!--End left-dtproduct -->
                <div class="right-dtproduct">
                    <div class="container-inf-dtpr">
                        <h3 class="inf-dtproduct"><?php echo $detail_product["name"];?></h3>
                        <p class="inf-dtproduct">
                            <span class="item_price"><?php echo $detail_product["promotion_price"];?></span>
                            <del class="mx-2 font-weight-light"><?php echo $detail_product["unit_price"];?></del>
                            <label>Miễn phí vận chuyển</label>
                        </p>
                        <div class="single-infoagile">
                            <ul>
                                
                                <li class="inf-dtproduct">
                                    <i class="fas fa-check-circle"></i>Mã sản phẩm: <?php echo $detail_product["id"];?>
                                </li>
                                <li class="inf-dtproduct">
                                    <i class="fas fa-check-circle"></i>Khối lượng tịnh: <?php echo $detail_product["weight"];?>
                                </li>
                                <li class="inf-dtproduct">
                                    <i class="fas fa-check-circle"></i>Thương hiệu: <?php echo $detail_product["trademark"];?>
                                </li>
                                <li class="inf-dtproduct">
                                    <i class="fas fa-check-circle"></i>Ngày sản xuất: <?php echo $detail_product["manufacturing_date"];?>
                                </li>
                                <li class="inf-dtproduct">
                                    <i class="fas fa-check-circle"></i>Hạn sử dụng:: <?php echo $detail_product["expiry_date"];?>
                                </li>
                                <li class="inf-dtproduct">
                                    <i class="fas fa-check-circle"></i>Đối tượng: <?php echo $detail_product["user_object"];?>
                                </li>
                            </ul>
                        </div>
                        <div class="product-single-w3l">                          
                                <h3>Dịch vụ & khuyến mãi:</h3>                        
                            <ul>                           
                                <li class="service-dtproduct">
                                    <i class="fas fa-dolly"></i>
                                    Freeship cho đơn hàng nội thành Hà Nội<br/>
                                    <span>(Áp dụng cho đơn hàng > 3 sản phẩm)</span>
                                </li>                              
                                <li class="service-dtproduct">
                                    <i class="fas fa-star"></i>
                                    Cam kết hàng đúng thực tế
                                </li>
                                <li class="service-dtproduct">
                                    <i class="fas fa-money-bill"></i>
                                    Giá cả hợp lý nhất
                                </li>
                                <li class="service-dtproduct">
                                    <i class="fas fa-credit-card"></i>
                                    Hỗ trợ thanh toán trực tuyến & Thẻ tín dụng / Ghi nợ
                                </li>
                            </ul>
                        </div>
                        <div class="occasion-cart">                           
                            <form action="#" method="post">                             
                                <input type="submit" name="submit" value="Add to cart" class="dt-button" />                             
                            </form>                           
                        </div>
                    </div>
                </div><!--End right-dtproduct -->
            </div>
            <div class="bottom-dtproduct">
                <div class="description-dt">
                    <h2>Mô tả sản phẩm</h2>
                </div>
                <div class="content-description">
                    <?php echo $detail_product["description_product"];?>
                </div>
            </div>
        </div>
	</div>
	<?php 
    include("footer.php")
    ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script type="text/javascript" src="js/scroll.js"></script>

</body>
</html>