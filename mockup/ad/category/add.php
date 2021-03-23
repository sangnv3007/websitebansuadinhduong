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
    <style>
        .btn-successpr{background: green;color: white;}
    </style>
    <div class="container">
        <div class="panel-heading">
            <h2 class="text-center">Thêm Danh Mục</h2>
        </div>
        <form action="proccess/proccess_add.php" method="POST">
            <div class="form-group">
                <label for="usr">Tên Danh Mục</label>
                <input type="text" class="form-control" id="usr" name="namepr" placeholder="Tên Danh Mục" required>
                <label for="usr">Mô tả</label>
                <input type="text" class="form-control" id="usr" name="descriptionpr" placeholder="Mô tả" required>
            </div>
            <button class="btn btn-successpr" type="submit">Thêm mới</button>

        </form>

    </div>
    <script src="../../js/alert.js"></script>
</body>