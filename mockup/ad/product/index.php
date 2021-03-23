<?php
require("../../config/config.php");
session_start();

if(!empty($_GET['id'])){
  $id=$_GET['id'];
  
}
?>
<script>
  if(<?php ?>)
</script>

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
              <th>Tên Danh Mục </th>
               <th>Giá Công Ty </th>
               <th>Giá Khách Hàng </th>
               <th style="width:10%"> Ảnh Sản Phẩm </th>
               <th>Thương Hiệu </th>
               
               <th>Đối Tượng</th>
						  <th>Mô Tả  </th>
						
              
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
      $sql="select sanpham.id,sanpham.tensp, danhmuc.TenLoai, sanpham.giaCT, sanpham.giaKM,
      sanpham.anhSP,sanpham.thuonghieu,sanpham.tensp,sanpham.tensp,sanpham.doituongSD,sanpham.motasp
       from sanpham, danhmuc where sanpham.iddm = danhmuc.id limit  $firstindex , $limit ";
      
    $sqlcount="select count(id) as total from sanpham ";
    }else{
      $_SESSION['id']=$id;
      $sql="select sanpham.id,sanpham.tensp, danhmuc.TenLoai, sanpham.giaCT, sanpham.giaKM,
      sanpham.anhSP,sanpham.thuonghieu,sanpham.NSX,sanpham.HSD,sanpham.doituongSD,sanpham.motasp
       from sanpham, danhmuc where sanpham.iddm = danhmuc.id limit  $firstindex  ,$limit and  sanpham.idDM=$id";
     
      
       $sqlcount="select count(id) as total from sanpham where idDM=$id";
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
    <td>$data[2]</td>
    <td>$data[3]</td>
    <td>$data[4]</td>
    <td>$data[5]</td>
    <td>$data[6]</td>
    
    <td>$data[9]</td>
    <td>$data[10]</td>
    
    

    
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