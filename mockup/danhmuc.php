<?php
	session_start();
	// session_destroy();
	include("lib_db.php");
	$sql="select * from dtb_typeproduct";
	$typeproduct=select_list($sql);
	//$sp="Select * from dtb_product";
	$hangkhuyenmai="Select * from dtb_product where id_type=1001 limit 5";
	$suadactri="Select * from dtb_product where id_type=1002 limit 5";
	$suatangcan="Select * from dtb_product where id_type=1003 limit 5";
	$tpcn="Select * from dtb_product where id_type=1004 limit 5";
	$suanon="Select * from dtb_product where id_type=1000 limit 10";
	$suanhapkhau="Select * from dtb_product where id_type=1005 limit 10";
	$bim="Select * from dtb_product where id_type=1006 limit 10";
	$row_product1=select_list($hangkhuyenmai);
	$row_product2=select_list($suadactri);
	$row_product3=select_list($suatangcan);
	$row_product4=select_list($tpcn);
	$row_product5=select_list($suanon);
	$row_product6=select_list($suanhapkhau);
	$row_product7=select_list($bim);
	if(isset($_SESSION['account']))
	{
		$email=$_SESSION['account'][0];
		$password=$_SESSION['account'][1];
		$sql="Select full_name from dtb_customer where email='$email' and password='$password'";
		$fullname=select_one($sql);
	}
	if(isset($_SESSION['user']))
	{
		$email=$_SESSION['user']['email'];
		$password=$_SESSION['user']['password'];
		$sql="Select full_name from dtb_customer where email='$email' and password='$password'";
		$fullname=select_one($sql);
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
	<link type="text/css" href="./fontawesome-free-5.15.1-web/css/all.css" rel="stylesheet" media="screen"/>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
</head>	
<body>
	<div class="scroll-group">
		<div class="top-menu">
			<div class="top-menu-inf" id="hide-scroll1">
				<div class="container-inf">
					<ul>					
						<li id="location"><i class="fas fa-map-marker-alt" ></i><span>(Sau cổng chợ Núi) Đường 286 Yên Phụ,Yên Phong,Bắc Ninh</span></li>					
						<li id="gmail"><i class="fas fa-envelope-square"></i><span>sieuthisuadinhduong@gmail.com</span></li>				
					</ul>
				</div>
			</div><!-- End top menu if-->
			<div class="clear-both"></div>
			<div class="main-menu-search"> 
				<div class="container-main">
					<div id="sliderbar-menu" class="start-menu">
						<div class="box-vertical-menu">
							<h4 class="title">
								<span class="btn-icon-list">
									<i class="fas fa-list"></i>
								</span>
								<span class="title-menu">DANH MỤC</span>
							</h4><!--End Danh mục-->
							<div class="vertical-menu-content">
								<div class="menu-list">
									<ul class="container-all-name-list">
										<li class="menu has-child">
											<a class="a has-category" href="#" title="DANH MỤC SỮA BỘT">											
													<img class="icon-menu" alt="Danh mục sữa bột" src="images/icon.jpg "/>
													<span>DANH MỤC SỮA BỘT</span>											
													<i class="fas fa-caret-right"></i>
											</a>									
											<ul class="level1 menu-child">
												<li><a href="#" title="Sữa Nutifood">Sữa Nutifood</a></li>
												<li><a href="#" title="Sữa Purelac">Sữa Purelac</a></li>
												<li><a href="#" title="Sữa Babyme">Sữa Babyme</a></li>
												<li><a href="#" title="Sữa Nội">Sữa Nội</a></li>
												<li><a href="#" title="Sữa Kid essentials">Sữa Kid essentials</a></li>
												<li><a href="#" title="Sữa Formilac">Sữa Formilac</a></li>
												<li><a href="#" title="Sữa Nutricare">Sữa Nutricare</a></li>
												<li><a href="#" title="Sữa NAN nga">Sữa NAN nga</a></li>
												<li><a href="#" title="Sữa Sữa Origin">Sữa Sữa Origin</a></li>
												<li><a href="#" title="Sữa Kidsure">Sữa Kidsure</a></li>
												<li><a href="#" title="Sữa Nutribio">Sữa Nutribio</a></li>
												<li><a href="#" title="Sữa Abott Hoa Kì">Sữa Abott Hoa Kì</a></li>
												<li><a href="#" title="Sữa Vitadairy">Sữa Vitadairy</a></li>
												<li><a href="#" title="Sữa Nutrilatt">Sữa Nutrilatt</a></li>
												<li><a href="#" title="Sữa Milk mom">Sữa Milk Mom</a></li>
												<li><a href="#" title="Sữa Diamond Kid">Sữa Diamond Kid</a></li>
												<li><a href="#" title="Sữa Totimilk">Sữa Totimilk</a></li>
												<li><a href="#" title="Sữa Metacare">Sữa Metacare</a></li>
											</ul>
										</li><!--End danh mục sữa bột-->
										<li class="menu has-child">
											<a class="a has-category" href="#" title="SỮA ĐẶC TRỊ NGƯỜI BỆNH">											
													<img class="icon-menu" alt="Danh mục sữa bột" src="images/icon.jpg "/>
													<span>SỮA ĐẶC TRỊ NGƯỜI BỆNH</span>											
													<i class="fas fa-caret-right"></i>
											</a>									
											<ul class="level1 menu-child">
												<li><a href="#" title="Sữa Tăng Cân Cho Người Gầy">Sữa Tăng Cân Cho Người Gầy</a></li>
												<li><a href="#" title="Sữa Cho Người Bệnh Gan">Sữa Cho Người Bệnh Gan</a></li>
												<li><a href="#" title="Sữa Cho Người Tiểu Đường">Sữa Cho Người Tiểu Đường</a></li>
												<li><a href="#" title="Sữa Cho Người Bệnh Thận">Sữa Cho Người Bệnh Thận</a></li>
												<li><a href="#" title="Sữa Xương Khớp">Sữa Xương Khớp</a></li>
												<li><a href="#" title="Sữa Cho Người Bệnh Dạ Dày">Sữa Cho Người Bệnh Dạ Dày</a></li>
												<li><a href="#" title="Sữa Cho Người Cao Tuổi">Sữa Cho Người Cao Tuổi</a></li>
												<li><a href="#" title="Sữa Cho Người Ung Thư">Sữa Cho Người Ung Thư</a></li>
											</ul>
										</li><!--End danh mục sữa cho người bệnh-->
										<li class="menu dont-has-child">
											<a class="a has-category" href="#" title="THỰC PHẨM CHỨC NĂNG">											
													<img class="icon-menu" alt="Danh mục sữa bột" src="images/icon.jpg "/>
													<span>THỰC PHẨM CHỨC NĂNG</span>																						
											</a>
										</li><!--End danh mục tpcn-->
										<li class="menu has-child">
											<a class="a has-category" href="#" title="SỮA NON">											
													<img class="icon-menu" alt="Danh mục sữa bột" src="images/icon.jpg "/>
													<span>SỮA NON</span>											
													<i class="fas fa-caret-right"></i>
											</a>									
											<ul class="level1 menu-child">
												<li><a href="#" title="Sữa Colosbaby">Sữa Colosbaby</a></li>
												<li><a href="#" title="Sữa Non Sante">Sữa Non Sante</a></li>
												<li><a href="#" title="Sữa Non ILDONG">Sữa Non ILDONG</a></li>
												<li><a href="#" title="Mama Sữa non">Mama Sữa non</a></li>											
											</ul>
										</li><!--End danh mục sữa non-->
										<li class="menu dont-has-child">
											<a class="a has-category" href="#" title="SỮA NHẬP KHẨU">											
													<img class="icon-menu" alt="Danh mục sữa bột" src="images/icon.jpg "/>
													<span>SỮA NHẬP KHẨU</span>											
											</a>
										</li><!--End danh mục sữa nhập khẩu-->
										<li class="menu dont-has-child">
											<a class="a has-category" href="#" title="SỮA BỘT PHA SẴN">											
													<img class="icon-menu" alt="Danh mục sữa bột" src="images/icon.jpg "/>
													<span>SỮA BỘT PHA SẴN</span>																							
											</a>
										</li><!--End danh mục sữa pha sẵn-->
										<li class="menu dont-has-child">
											<a class="a has-category" href="#" title="SỮA TĂNG CÂN CHO BÉ">											
													<img class="icon-menu" alt="Danh mục sữa bột" src="images/icon.jpg "/>
													<span>SỮA TĂNG CÂN CHO BÉ</span>																						
											</a>
										</li><!--End danh mục sữa tăng cân cho bé-->
										<li class="menu dont-has-child">
											<a class="a has-category" href="#" title="SỮA DINH DƯỠNG ENERIGHT">											
													<img class="icon-menu" alt="Danh mục sữa bột" src="images/icon.jpg "/>
													<span>SỮA DINH DƯỠNG ENERIGHT</span>																						
											</a>
										</li><!--End danh mục sữa dinh dưỡng eneright-->
										<li class="menu dont-has-child">
											<a class="a has-category" href="#" title="ĐỒ ĂN DẶM CHO BÉ">											
													<img class="icon-menu" alt="Danh mục sữa bột" src="images/icon.jpg "/>
													<span>ĐỒ ĂN DẶM CHO BÉ</span>																						
											</a>
										</li><!--End danh mục đồ ăn dặm cho bé-->
										<li class="menu has-child">
											<a class="a has-category" href="#" title="CÁC SẢN PHẨM BỈM">											
													<img class="icon-menu" alt="Danh mục sữa bột" src="images/icon.jpg "/>
													<span>CÁC SẢN PHẨM BỈM</span>											
													<i class="fas fa-caret-right"></i>
											</a>									
											<ul class="level1 menu-child">
												<li><a href="#" title="Bỉm Merris">Bỉm Merris</a></li>
												<li><a href="#" title="Bỉm Huggies">Bỉm Huggies</a></li>											
											</ul>
										</li><!--End danh mục bỉm-->
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="left-main" id="hide-scroll2">
						<p class="logo-shop">
							<a href="#" title="Logo"><img src="images/icon.jpg" alt="Logo"/></a>
						</p>
					</div>
					<div class="middle-main">
						<div class="searchbox-product">
							<form class="fr-searchbox-main">
								<input id="txt-keyword" class="txt-keyword" type="text" name="q" placeholder="Nhập sản phẩm bạn muốn tìm kiếm tại đây" autocomplete="on" >
								<button class="btn-submit" type="submit">
									<label for="txt-keyword">Tìm kiếm</label>
								</button>
							</form>
						</div>
						<ul class="suggestion-keyword">
							<li class="title"><strong>Gợi ý từ khóa:</strong></li>
							<li><span>Sữa bột, Sữa tăng cân, Bột ăn dặm...</span></li>
						</ul>
					</div>
					<div class="right-main" id="menu-control">
						<ul class="ul-controls-box">
							<li class="search-order">
								<a href="#" title="Tra cứu đơn hàng">
									<i class="fas fa-search"></i>
									<span class="inf">Tra cứu đơn hàng</span>
								</a>
							</li>
							<li class="cart">
								<a href="cart.php" title="Giỏ hàng">
									<i class="fa fa-shopping-cart"></i>
									<span class='badge badge-warning' id='lblCartCount'>
									<?php 
									if(isset($_SESSION['cart']))
									{
										$total=0;
										$carts=$_SESSION['cart'];
										foreach($carts as $cart)
										{$total+=$cart[1];}
										echo $total;
									}
									else{
										echo 0;
									}
									?></span>
									<p>Giỏ hàng</p>
								</a>
							</li>
							<?php if(!isset($fullname)){?>
							<li class="account-user">
								<a href="#" title="Tài khoản">
									<i class="fas fa-user"></i>
									<span class="inf">Tài khoản</span>
								</a>							
								<ul class="login-dropmenu">
									<li class="login-method">
										<a class="login" href="login.php" title="Đăng nhập">
											<i class="fas fa-sign-in-alt"></i>
										Đăng nhập
										</a>
									</li>
									<li class="login-method">
										<a class="nofollow" href="signin.php" title="Đăng ký">
											<i class="fa fa-registered"></i>
										Đăng ký
										</a>									
									</li>
								</ul>							
							</li>
							<?php
							}else{
							?>
							<li class="account-user">
								<a href="#" title="Tài khoản">
									<i class="fas fa-user"></i>
									<span class="inf">Tài khoản</span>
								</a>							
								<ul class="login-dropmenu">
									<li class="login-method">
										<a class="login" href="" title="Đăng nhập">
											<i class="fas fa-user-circle"></i>
											<?php echo "Xin chào: " .$fullname["full_name"]?>
										</a>
									</li>
									<li class="login-method">
										<a class="nofollow" href="logout.php" title="Đăng ký">
											<i class="fas fa-sign-out-alt"></i>
										Đăng xuất
										</a>									
									</li>
								</ul>							
							</li>
							<?php
							}
							?>
						</ul>
					</div>
				</div>
			</div><!-- End main menu-->
			<div class="clear-both"></div>
			<nav class="nav-main-menu">
				<div class="main-menu" id="hide-scroll3">
					<div class="container-menu">
						<ul class="nav-navbar">
							<li class="menu-items">
								<a href="#" title="Trang chủ">Trang chủ</a>
							</li>
							<li class="menu-items">
								<a href="#" title="Giới thiệu">Giới thiệu</a>
							</li>
							<li class="menu-items">
								<a href="#" title="Sản phẩm khuyến mại">Sản phẩm khuyến mãi</a>
							</li>
							<li class="menu-items">
								<a href="#" title="Cẩm nang dinh dưỡng">Cẩm nang dinh dưỡng</a>
							</li>
							<li class="menu-items">
								<a href="#" title="Liên hệ">Liên hệ</a>
							</li>
						</ul>
					</div>
				</div>
			</nav>
		</div>
	</div><!--End srcroll group-->
	<section id="slider">
		<div class="container">
			<div class="row">
				<div id="sliderbar-menu">
					<div class="box-vertical-menu">
						<h4 class="title">
							<span class="btn-icon-list">
								<i class="fas fa-list"></i>
							</span>
							<span class="title-menu">DANH MỤC</span>
						</h4><!--End Danh mục-->
						<div class="vertical-menu-content">
							<div class="menu-list">
								<ul class="container-all-name-list">
									<?php foreach($typeproduct as $type){?>
									<li class="menu has-child">
										<a class="a has-category" href="#" title="DANH MỤC SỮA BỘT">											
												<img class="icon-menu" alt="Danh mục sữa bột" src="images/icon.jpg "/>
												<span><?php echo $type['id']?></span>	
												<?php $sql="Select name from dtb_product where id_type='".$type.".' ?>										
												<i class="fas fa-caret-right"></i>
										</a>									
										<ul class="level1 menu-child">
											<li><a href="#" title="Sữa Nutifood">Sữa Nutifood</a></li>
											<li><a href="#" title="Sữa Purelac">Sữa Purelac</a></li>
											<li><a href="#" title="Sữa Babyme">Sữa Babyme</a></li>
											<li><a href="#" title="Sữa Nội">Sữa Nội</a></li>
											<li><a href="#" title="Sữa Kid essentials">Sữa Kid essentials</a></li>
											<li><a href="#" title="Sữa Formilac">Sữa Formilac</a></li>
											<li><a href="#" title="Sữa Nutricare">Sữa Nutricare</a></li>
											<li><a href="#" title="Sữa NAN nga">Sữa NAN nga</a></li>
											<li><a href="#" title="Sữa Sữa Origin">Sữa Sữa Origin</a></li>
											<li><a href="#" title="Sữa Kidsure">Sữa Kidsure</a></li>
											<li><a href="#" title="Sữa Nutribio">Sữa Nutribio</a></li>
											<li><a href="#" title="Sữa Abott Hoa Kì">Sữa Abott Hoa Kì</a></li>
											<li><a href="#" title="Sữa Vitadairy">Sữa Vitadairy</a></li>
											<li><a href="#" title="Sữa Nutrilatt">Sữa Nutrilatt</a></li>
											<li><a href="#" title="Sữa Milk mom">Sữa Milk Mom</a></li>
											<li><a href="#" title="Sữa Diamond Kid">Sữa Diamond Kid</a></li>
											<li><a href="#" title="Sữa Totimilk">Sữa Totimilk</a></li>
											<li><a href="#" title="Sữa Metacare">Sữa Metacare</a></li>
										</ul>
									</li><!--End danh mục sữa bột-->
									<?php
									}
									?>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="slide-menu">
					<div class="container-slider">					
						<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
							<ol class="carousel-indicators">
								<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
								<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
								<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
							</ol>
							 <div class="carousel-inner">
								<div class="carousel-item active">
								  <img class="d-block w-100" src="images/banner0.jpg" alt="First slide">
								</div>
								<div class="carousel-item">
								  <img class="d-block w-100" src="images/banner1.jpg" alt="Second slide">
								</div>
								<div class="carousel-item">
								  <img class="d-block w-100" src="images/banner2.jpg" alt="Third slide">
								</div>
							 </div>
						</div>				
					</div>
				</div>
			</div>
		</div>
	</section><!--End danh section-->
	<div class="content-main">
		<div class="container-pr">
			<h3 class="h3"><a href="#" title="Hàng khuyến mãi">Hàng khuyến mãi</a></h3>
			<div class="row">
				<?php foreach($row_product1 as $product){
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
		<div class="container-pr">
			<h3 class="h3"><a href="#" title="Sữa đặc trị người bệnh">Sữa đặc trị người bệnh</a></h3>
			<div class="row">
				<?php foreach($row_product2 as $product){
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
							<li><a  class="add_cart" data-tip="Thêm vào giỏ"><i class="fa fa-shopping-cart"></i></a></li>
						</ul>
					</div>
				</div>
				<?php
				}
				?>
			</div>
		</div>
		<div class="container-pr">
			<h3 class="h3"><a href="#" title="Sữa tăng cân cho bé">Sữa tăng cân cho bé</a></h3>
			<div class="row">	
				<?php foreach($row_product3 as $product){
				?>		
				<div class="col-md-3 col-sm-6">
					<div class="product-grid6">
						<div class="product-image6">
							<a href="detailproduct.php?id=<?php echo $product["id"];?>">
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
							<li><a href="detailproduct.php?id=<?php echo $product["id"];?>" data-tip="Xem chi tiết"><i class="fas fa-eye"></i></a></li>
							<li><a class="add_cart" data-tip="Thêm vào giỏ"><i class="fa fa-shopping-cart"></i></a></li>
						</ul>
					</div>
				</div>
				<?php
				}
				?>
			</div>
		</div>
		<div class="container-pr">
			<h3 class="h3"><a href="#" title="Thực phẩm chức năng">Thực phẩm chức năng</a></h3>
			<div class="row">
				<?php foreach($row_product4 as $product){?>
				<div class="col-md-3 col-sm-6">
					<div class="product-grid6">
						<div class="product-image6">
							<a href="detailproduct.php?id=<?php echo $product["id"];?>">
								<img class="pic-1" src="<?php echo explode('||',$product["image_product"])[0];?>">
							</a>
						</div>
						<div class="product-content">
							<h3 class="title"><a href="#"><?php echo $product["name"];?></a></h3>
							<div class="price"><?php echo ($product["promotion_price"]);?>
								<span><?php echo ($product["unit_price"]);?></span>
							</div>
						</div>
						<ul class="social">
							<li><a href="" data-tip="Xem nhanh"><i class="fa fa-search"></i></a></li>
							<li><a href="detailproduct.php?id=<?php echo $product["id"];?>" data-tip="Xem chi tiết"><i class="fas fa-eye"></i></a></li>
							<li><a  class="add_cart" data-tip="Thêm vào giỏ"><i class="fa fa-shopping-cart"></i></a></li>
						</ul>
					</div>
				</div>
				<?php
				}
				?>
			</div>
		</div>
		<div class="container-pr">
			<h3 class="h3"><a href="#" title="Sữa non">Sữa non</a></h3>
			<div class="row" id="x2row">
				<?php foreach($row_product5 as $product){?>
				<div class="col-md-3 col-sm-6">
					<div class="product-grid6">
						<div class="product-image6">
							<a href="detailproduct.php?id=<?php echo $product["id"];?>">
								<img class="pic-1" src="<?php echo explode('||',$product["image_product"])[0];?>">
							</a>
						</div>
						<div class="product-content">
							<h3 class="title"><a href="#"><?php echo $product["name"];?></a></h3>
							<div class="price"><?php echo $product["promotion_price"];?>
								<span><?php echo $product["unit_price"];?></span>
							</div>
						</div>
						<ul class="social">
							<li><a href="" data-tip="Xem nhanh"><i class="fa fa-search"></i></a></li>
							<li><a href="detailproduct.php?id=<?php echo $product["id"];?>" data-tip="Xem chi tiết"><i class="fas fa-eye"></i></a></li>
							<li><a  class="add_cart" data-tip="Thêm vào giỏ"><i class="fa fa-shopping-cart"></i></a></li>
						</ul>
					</div>
				</div>
				<?php
				}
				?>
			</div>
		</div>
		<div class="container-pr">
			<h3 class="h3"><a href="#" title="Sữa nhập khẩu">Sữa nhập khẩu</a></h3>
			<div class="row" id="x2row">
				<?php foreach($row_product6 as $product){?>
				<div class="col-md-3 col-sm-6">
					<div class="product-grid6">
						<div class="product-image6">
							<a href="detailproduct.php?id=<?php echo $product["id"];?>">
								<img class="pic-1" src="<?php echo explode('||',$product["image_product"])[0];?>">
							</a>
						</div>
						<div class="product-content">
							<h3 class="title"><a href="#"><?php echo $product["name"];?></a></h3>
							<div class="price"><?php echo $product["promotion_price"];?>
								<span><?php echo $product["unit_price"];?></span>
							</div>
						</div>
						<ul class="social">
							<li><a href="" data-tip="Xem nhanh"><i class="fa fa-search"></i></a></li>
							<li><a href="detailproduct.php?id=<?php echo $product["id"];?>" data-tip="Xem chi tiết"><i class="fas fa-eye"></i></a></li>
							<li><a class="add_cart"  data-tip="Thêm vào giỏ"><i class="fa fa-shopping-cart"></i></a></li>
						</ul>
					</div>
				</div>
				<?php
				}
				?>
			</div>
		</div>
		<div class="container-pr">
			<h3 class="h3"><a href="#" title="Các sản phẩm bỉm">Các sản phẩm bỉm</a></h3>
			<div class="row" id="x2row">
				<?php foreach($row_product7 as $product){?>
				<div class="col-md-3 col-sm-6">
					<div class="product-grid6">
						<div class="product-image6">
							<a href="detailproduct.php?id=<?php echo $product["id"];?>">
								<img class="pic-1" src="<?php echo explode('||',$product["image_product"])[0];?>">
							</a>
						</div>
						<div class="product-content">
							<h3 class="title"><a href="#"><?php echo $product["name"];?></a></h3>
							<div class="price"><?php echo $product["promotion_price"];?>
								<span><?php echo $product["unit_price"];?></span>
							</div>
						</div>
						<ul class="social">
							<li><a href="" data-tip="Xem nhanh"><i class="fa fa-search"></i></a></li>
							<li><a href="detailproduct.php?id=<?php echo $product["id"];?>" data-tip="Xem chi tiết"><i class="fas fa-eye"></i></a></li>
							<li><a  class="add_cart" data-tip="Thêm vào giỏ"><i class="fa fa-shopping-cart"></i></a></li>
						</ul>
					</div>
				</div>
				<?php
				}
				?>
			</div>
		</div>
		<div class="trademark">

		</div><!--End trademark-->
	</div><!--End content-main-->
	<div class="footer">
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
	</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script type="text/javascript" src="js/scroll.js"></script>
<script type="text/javascript" src="js/index.js"></script>
</body>
</html>