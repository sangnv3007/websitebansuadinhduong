<?php
session_start();
echo $_SESSION['update_danhmuc'];
require_once("../../config/config.php");
if(isset($_GET['id'])){

$id= $_GET['id'];
$sql="select * from danhmuc where id ='$id'";
$result=select_one($sql);
$_SESSION['update_danhmuc']=1;
}
else{
  $id=$_SESSION['iddm'];
  $sql="select * from danhmuc where id ='$id'";
$result=select_one($sql);

}


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
  <label for="usr">Tên Danh Mục:</label>
  <input type="text" class="form-control" name="name" id="usr" value=' <?php 
  if($result != null){
      echo "$result[1]";
  }
  
  ?>'>
  
  <div class="form-group">
  <label for="usr">Mô Tả</label>
  <textarea class="form-control" rows="6" id="comment" name="mota" > <?php 
  if($result != null){
      echo "$result[2]";
  }?>  </textarea>
    </div>
<input type="text" hidden="true" class="form-control" name="id" id="usr" value=' <?php 
  if($result != null){
      echo "$result[0]";
  }
  
  ?>'>
</div>
<button class="btn btn-success" type="submit">Sửa Danh Mục</button>
</form>
</div>
</body>

<script>
  
  if( <?php echo $_SESSION["update_danhmuc"];?> == 0){
    alert("kiểm tra thông tin nha !")
  }
 
</script>