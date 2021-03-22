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
                <label for="usr">Tên Sản Phẩm</label>
                <input type="text" class="form-control" id="usr" name="name">
            </div>



            <div class="form-group">
                <label for="usr">Giá Sản Phẩm Nhập</label>
                <input type="text" class="form-control" id="usr" name="pricenhap">
            </div>



            <div class="form-group">
                <label for="usr">Giá Sản Phẩm Bán</label>
                <input type="text" class="form-control" id="usr" name="priceban">
            </div>



            <div class="form-group">
                <label for="usr">Danh Mục</label>
                <select class="form-control" name="iddetail">
                    <?php 
 $sql="select * from dtb_detailproduct";
 $result=select_list($sql);
if($result !=null){
    foreach($result as $data){
        echo " <option value='$data[0]'> $data[5]</option>";
    }
}?>
                </select>
            </div>




            <div class="form-group">
                <label for="usr">Thể Loại</label>
                <select class="form-control" name="idtype">
                    <?php 
 $sql="select * from dtb_typeproduct";
 $result=select_list($sql);
if($result !=null){
    foreach($result as $data){
        echo " <option value='$data[0]'> $data[1]</option>";
    }
}?>
                </select>
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

            <div class="form-group">
                <label for="usr">Nội Dung </label>
                <textarea type="text" class="form-control" id="usr" name="content" cols="30" rows="5"></textarea>
            </div>


            <button class="btn btn-success" type="submit">Thêm </button>
        </form>

    </div>

</body>