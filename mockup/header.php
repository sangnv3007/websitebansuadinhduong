<?php
	// session_start();
	include("lib_db.php");
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
								<a href="index.php" title="Trang chủ">Trang chủ</a>
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
	</div>