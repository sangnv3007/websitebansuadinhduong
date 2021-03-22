<?php
require("../../lib_db.php");
$sql="select * from DANHMUC";
$result=select_list($sql); 
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/shtml; charset=utf-8" />
    <title>Quản lý sản phẩm</title>
    <link type="text/css" href="../../bootstrap-5.0.0-beta1-dist/css/bootstrap.min.css" rel="stylesheet" media="screen" />
</head>
<body>
  <style>
    #add_category{background: green;}
    #add_category a{color: white;text-decoration: none;}
    #des {text-align: center;}
  </style>
    <div class="container ">
        <div class="container pt-3">
            <ul class="nav nav-pills">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="pill" href="index.php">Quản lý danh mục</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="pill" href="../product/index.php">Quản lý sản phẩm </a>
                </li>
            </ul>
        </div>

        <div class="panel-heading">
            <h2 class="text-center">Quản lý Danh Mục</h2>
        </div>
        <div class="panel-body">

            <button class="btn btn-success" id="add_category"><a href="add.php">Thêm danh mục</a> </button>
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>ID Danh Mục </th>
                        <th>Tên Danh Mục</th>
                        <th id="des">Mô tả</th>
                    </tr>
                </thead>
                <tbody>
                    <?php   
                $index=1;                                            
                foreach($result as $danhmuc) {?>
                    <tr>
                        <td><?php echo $index ;?></td>
                        <td><?php echo $danhmuc['Id']; ?></td>
                        <td><?php echo $danhmuc['TenLoai']; ?></td>
                        <td><?php echo $danhmuc['MoTa']; ?></td>
                        <?php $index++;}?>
                    </tr>
                </tbody>
            </table>
            <!-- <button class="btn btn-dark"><a href="../../login/process_logout.php">đăng xuất</a> </button> -->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
            <!-- <script>
            swal({
                title: "Thêm thành công!",
                text: "Bạn vừa nhấn vào nút thêm!",
                icon: "success",
                button: "OK",
            });
            </script> -->
</body>
<script>
   if( <?php echo $_SESSION["update_danhmuc"];?> == 1){
    alert("sửa thành công  !")
  }
</script>
</html>