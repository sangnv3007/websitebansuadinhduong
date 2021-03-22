<?php
require_once("../../config/config.php");
session_start();



$id= $_GET['id'];
$sql="select * from dtb_product  where id ='$id'";
$result=select_one($sql);
$page=$_GET['page'];


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
                <h2 class="text-center">Sửa Danh Mục</h2>
</div>

    <form action="proccess/proccess_edit.php" method="POST">
    <div class="form-group">
  <label for="usr">Tên Sản Phẩm:</label>
  <input type="text" class="form-control" name="name" id="usr" value=' <?php 
  if($result != null){
      echo "$result[2]";
  }?>'>
    </div>



    <div class="form-group">
  <label for="usr">Giá Sản Phẩm Bán :</label>
  <input type="text" class="form-control" name="pricenhap" id="usr" value=' <?php 
  if($result != null){
      echo "$result[4]";
  }?>'>
    </div>

    <div class="form-group">
  <label for="usr">Giá Sản Phẩm Gốc :</label>
  <input type="text" class="form-control" name="priceban" id="usr" value=' <?php 
  if($result != null){
      echo "$result[3]";
  }?>'>
    </div>

    <div class="form-group">
  <label for="usr">Danh Mục</label>
  <select class="form-control" name="iddetail">
 <?php 
 $sql1="select * from dtb_detailproduct";
 $result1=select_list($sql1);
if($result1 !=null){
    foreach($result1 as $data1){
        if($result[7] == $data1[0]){

            echo " <option selected value='$data1[0]'> $data1[1]</option>";
        }
        else
        echo " <option  value='$data1[0]'> $data1[1]</option>";
    }
}?>
</select>
</div>


<div class="form-group">
  <label for="usr">Thể Loại</label>
  <select class="form-control" name="idtype">
 <?php 
 $sql1="select * from dtb_typeproduct";
 $result1=select_list($sql1);
if($result1 !=null){
    foreach($result1 as $data1){
        if($result[1] == $data1[0]){

            echo " <option selected value='$data1[0]'> $data1[1]</option>";
        }
        else
        echo " <option  value='$data1[0]'> $data1[1]</option>";
    }
}?>
</select>
</div>

<?php  $img = explode("||",$result[5])?> 


    <div class="form-group">
  <label for="usr">Link ảnh 1 </label>
  <input type="text" class="form-control" name="image1" id="usr" value=' <?php 
   if(isset($img[0]) ){
      echo "$img[0]";}
      else {echo " ";}?>'>
</div>


<div class="form-group">
  <label for="usr">Link ảnh 2 </label>
  <input type="text" class="form-control" name="image2" id="usr" value=' <?php 
   if(isset($img[1]) ){
    echo "$img[1]";
  }
  else {echo " ";}?>'>
</div>


<div class="form-group">
  <label for="usr">Link ảnh 3 </label>
  <input type="text" class="form-control" name="image3" id="usr" value=' <?php 
  if(isset($img[2]) ){
    echo "$img[2]";}
    else {echo " ";}?>'>
</div>


<input type="text" hidden ='true' class="form-control" name="page" id="usr" value=' <?php echo"$page"; ?>'>
<input type="text" hidden="true" class="form-control" name="id" id="usr" value=' <?php 
  if($result != null){
      echo "$result[0]";
  }?> '> 




  <div class="form-group">
  <label for="usr">Nội Dung</label>
  <textarea class="form-control" rows="5" id="comment" name="content" > <?php 
  if($result != null){
      echo "$result[6]";
  }?>  </textarea>
    </div>
<button class="btn btn-success" type="submit">Sửa Sản Phẩm</button>
</form>
</div>
</body>
