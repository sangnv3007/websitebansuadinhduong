<?php
require("../../config/config.php");
session_start();

if(!empty($_GET['id'])){
  $id=$_GET['id'];
  
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body>
<div class="container-fluid" >
<div class="container pt-4">
<ul class="nav nav-pills">
  <li class="nav-item">
    <a class="nav-link" data-toggle="pill" href="../category/index.php">quản lí danh mục</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" data-toggle="pill" href="index.php">quản lí sản phẩm </a>
  </li>
  

</ul>
</div>
<div class="panel-heading">
                <h2 class="text-center">Thêm/Sửa/Xóa Sản Phẩm </h2>
</div>
<button class="btn btn-success"><a href="add.php">thêm sản phẩm</a> </button>
<table class="table table-bordered table-hover" >
<thead>
<tr>
							<th width="100px">STT</th>
							<th>Tên sản phẩm</th>
               <th>Giá Nhập</th>
               <th>Giá Bán</th>
						  <th width="50%">Nội Dung </th>
							<th>Danh Mục </th>
               <th>Thể Loại </th>
              <th>Link Ảnh</th>
							<th width="7%"></th>
							<th width="7%"></th>
              
						</tr>

</thead>
<tbody>
<?php 
$index=1;
$limit=10;
$page=1;
if(isset($_GET['page'])){
  $page=$_GET['page'];
}
$firstindex=($page -1) * $limit;


    
    if(empty($_GET['id'])){
      $_SESSION['id']=null;
      $sql="select dtb_product.id,dtb_product.name,dtb_product.unit_price,dtb_product.promotion_price,
      dtb_product.description_product,dtb_detailproduct.user_object,dtb_typeproduct.name_type,dtb_product.image_product from dtb_product,dtb_detailproduct  
      , dtb_typeproduct where dtb_product.id_detailproduct = dtb_detailproduct.id  and dtb_typeproduct.id = dtb_product.id_type  limit $firstindex  ,$limit";
    $sqlcount="select count(id) as total from dtb_product ";
    }else{
      $_SESSION['id']=$id;
      
      $sql="select dtb_product.id,dtb_product.name,dtb_product.unit_price,dtb_product.promotion_price,
      dtb_product.description_product,dtb_detailproduct.user_object,dtb_typeproduct.name_type,dtb_product.image_product from dtb_product,dtb_detailproduct  
      , dtb_typeproduct where dtb_product.id_detailproduct = dtb_detailproduct.id  and dtb_typeproduct.id = dtb_product.id_type  and id_detailproduct=$id limit $firstindex  ,$limit";

      
       $sqlcount="select count(id) as total from dtb_product where id_detailproduct=$id";
    }
    $result=select_list($sql);
  

$resultcount =select_one($sqlcount);
$countid= $resultcount[0];
      $countpage=ceil($countid/$limit);

foreach($result as $data){
   $firstindex++;
  echo " <tr data-id='$data[0]'>
    <td >$firstindex</td>
    <td>$data[1]</td>
    <td>$data[3]</td>
    <td>$data[2]</td>
    <td>$data[4]</td>
    <td>$data[5]</td>
    <td>$data[6]</td>
    <td>$data[7]</td>
    

    
    <td><a href='edit.php?id=$data[0]&page=$page'><button class='btn btn-warning'>Sửa</button></a></td>
    <td><button class='btn btn-danger' onclick='deleteproduct($data[0])'> Xóa</button></td>
    </tr>";
 
}

?>

</tbody>
</table>
<div class="panel-heading">

<ul class="pagination text-center">
<?php 
if($countpage>1){
if(isset($_GET['id'])){
for($i=1; $i<=$countpage;++$i){
if($i == $page){
  echo "<li class='page-item active'><a class='page-link' href='index.php?page=$i&id=$id'>$i</a></li>";
}
else{
  echo "<li class='page-item'><a class='page-link' href='index.php?page=$i&id=$id'>$i</a></li>";
}

}}
else{
  for($i=1; $i<=$countpage;++$i){
    if($i == $page){
      echo "<li class='page-item active'><a class='page-link' href='index.php?page=$i'>$i</a></li>";
    }
    else{
      echo "<li class='page-item'><a class='page-link' href='index.php?page=$i'>$i</a></li>";
    }
    
    }
}
}

?>
</ul>
<button class="btn btn-dark"><a href="../../login/process_logout.php">đăng xuất</a> </button>

</div></div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <script>

  function deleteproduct(id){
    var option=confirm("bạn có muốn xóa danh mục này ?")
    if(!option){
      return
    }
   
  $.post('ajax.php',{'id' : id,'action' : 'delete'},function(data) {  $(`[data-id=${id}]`).remove();
})
  }

</script>
</body>
</html>