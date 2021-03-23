<?php

require_once("../../config/config.php");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

</head>
<body>
<div class="container">
<div class="panel-heading"> 
                <h2 class="text-center">Thêm Sản Phẩm </h2>
</div>
<form action="proccess/proccess_add.php" method="POST">

<div class="form-group">
  <label for="usr">Danh Mục</label>
  <select class="form-control" name="iddm">
 <?php 
 $sql="select * from danhmuc ";
 $result=select_list($sql);
if($result !=null){
    foreach($result as $data){
        echo " <option value='$data[0]'> $data[1]</option>";
    }
}?>
</select>
</div>






<div class="form-group">
  <label for="usr">Tên Sản Phẩm</label>
  <input type="text" class="form-control" id="usr" name="tensp">
</div>



<div class="form-group">
  <label for="usr">Giá Sản Phẩm Công Ty </label>
  <input type="text" class="form-control" id="usr" name="giact">
</div>



<div class="form-group">
  <label for="usr">Giá Sản Phẩm Khách Hàng </label>
  <input type="text" class="form-control" id="usr" name="giakm">
</div>

<div class="form-group">
  <label for="usr">Thương Hiệu </label>
  <input type="text" class="form-control" id="usr" name="thuonghieu">
</div>










<div class="form-group">
  <label for="usr">Link Ảnh 1</label>
  <textarea type="text" class="form-control" id="usr" name="image1" cols="30" rows="1"></textarea>
</div>
<div class="form-group">
  <label for="usr">Link Ảnh 2</label>
  <textarea type="text" class="form-control" id="usr" name="image2" cols="30" rows="1"></textarea>
</div>
<div class="form-group">
  <label for="usr">Link Ảnh 3</label>
  <textarea type="text" class="form-control" id="usr" name="image3" cols="30" rows="1"></textarea>
</div>



<select class="form-control" name="doituong">

<option >từ 1 tháng đến 6 tháng</option>
<option >từ 6 tháng đến 12 tháng</option>
<option >từ 12 tháng đến 18 tháng</option>
<option >từ 18 tháng đến 24 tháng</option>
<option >từ 2 năm trở đi </option>

</select>
<div class="form-group">
  <label for="usr">Mô Tả Sản Phẩm</label>
  <textarea type="text" class="form-control" id="usr" name="mota" cols="30" rows="5"></textarea>
</div>


<button class="btn btn-success" type="submit"  >Thêm </button>
</form>
    
</div>

</body>