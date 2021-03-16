<?php 
	include('lib_db.php');
	session_start();
	if(isset($_SESSION['cart']))
	{ 
		$product =array();
		foreach($_SESSION['cart'] as $cart){
			$sql="select * from dtb_product where id=".$cart[0];
			$product_t=select_one($sql);
			array_push($product,array($product_t,$cart[1]));
		}
		
	} ?>
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
<body id="body-cart">
	<?php 
    include("header.php")
    ?>
	<section id="cartpage">
		<div class="container" id="container-cart">
			<div class="content-page">
				<div class="row-cart">
					<div class="cart">
						<h1 class="page-header">Giỏ hàng</h1>
						<div class="page-content">
							<div class="cart-header-labels">
								<div class="label-item format1">
									<div class="column-imageproduct">Sản phẩm</div>
								</div>
								<div class="label-item format2">
									<div class="column-description">Mô tả</div>
								</div>
								<div class="label-item format1">
									<div class="column-price">Giá</div>
								</div>
								<div class="label-item format1">
									<div class="column-amount">Số lượng</div>
								</div>
								<div class="label-item format1">
									<div class="column-total">Tổng</div>
								</div>
								<div class="label-item format3">
									<div class="column-delete">Xóa</div>
								</div>
							</div>
							<div class="cart_container">
								<?php foreach($product as $pr){ ?>
								<!-- start product 1 -->
								<div class="content-cart">
									<div class="list-product-cart">
										<div class="cart-item-image  label-item format1">
											<div class="items-inner">
												<a href="" class="cart-imageproduct">
													<img class="img-responsive" src="<?php echo explode('||',$pr[0]['image_product'])[0]?>" alt="Sữa Ensure Gold">
												</a>
											</div>
										</div>
										<div class="cart-item-text label-item format2">
											<div class="items-inner">
												<a href="" class="cart-nameproduct">
													<?php echo $pr[0]['name'] ?>
												</a>
											</div>
										</div>
										<div class="cart-item-price label-item format1">
											<div class="items-inner">
												<span class="cart-priceproduct"><?php echo $pr[0]['promotion_price'] ?></span>
											</div>
										</div>
										<div class="cart-item-amount label-item format1">
											<div class="items-inner">
												<div class="cart-amountproduct">
													<input class="numbericupDown-amount" name="<?php echo $pr[0]['id']; ?>" type="number" min="1" value="<?php echo $pr[1] ?>">
												</div>
											</div>
										</div>
										<div class="cart-item totalmoney label-item format1">
											<div class="items-inner">
												<span class="cart-totalmoneyporduct"><?php echo $pr[0]['promotion_price']*$pr[1] ?></span>
											</div>
										</div>
										<div class="cart-item remove label-item format3">
											<div class="items-inner">
												<a class="cart-removeproduct" name="<?php echo $pr[0]['id'] ?>" href="#">
													<small>Xóa</small>
												</a>
											</div>
										</div>
									</div>
								</div>
								<!-- end product 1 -->
								<?php } ?>
							</div>
							<div class="list-button-cart">
								<div class="row-hidden"></div>
								<div class="row-hidden buttonright">
									<p class="row-totalmoney">
										<span class="cart-subtotal-title">Tổng:</span>
										<span class="cart-subtotal-money">990,000 ₫</span>
									</p>
									<a class="btn-continuebuy btn-outline" href="index.php" title="Tiếp tục mua sắm">Tiếp tục mua sắm</a>
									<a class="btn-pay btn-outline" href="" title="Thanh toán ngay">Thanh toán</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<?php 
    include("footer.php")
    ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script type="text/javascript" src="js/scroll.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script type="text/javascript" src="js/index.js"></script>
</body>
</html>