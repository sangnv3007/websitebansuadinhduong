<?php

require("../../../config/config.php");


if(!empty($_POST["tensp"]) and !empty($_POST["giact"]) and !empty($_POST["giakm"])and !empty($_POST["mota"]) 
and !empty($_POST["image1"]) and !empty($_POST["thuonghieu"]) 
and !empty($_POST["iddm"] and !is_int($_POST['giact']) and !is_int($_POST['giakm'])  )


){
    $tensp = $_POST["tensp"];
    $giact=$_POST["giact"];
    $giakm=$_POST["giakm"];
    $mota=$_POST["mota"];
    $iddm=$_POST["iddm"];
    $doituong=$_POST["doituong"];
    $thuonghieu=$_POST['thuonghieu'];

    
    $image1=$_POST['image1'];
    $image2=$_POST['image2'];
    $image3=$_POST['image3'];
    $img=$image1. "||".$image2."||".$image3;
    $sql="INSERT INTO `sanpham`( `IdDM`, `TenSP`, `GiaCT`, `GiaKM`, `AnhSP`, `ThuongHieu`, `DoiTuongSD`, `MoTaSP`) 
    VALUES ($iddm, '$tensp',$giact,$giakm,'$img','$thuonghieu','$doituong','$mota')";
    $result=execute($sql);
    if($result){
        header("Location: ../../../ad/product/index.php"); 
    }
    else{
        echo " <div class='panel-heading'>
        <h2 class='text-center' style='color:red'>Nhập đủ thông tin và kiểm tra</h2>
      </div>";
        
    }

}

else{
    echo " <div class='panel-heading'>
    <h2 class='text-center' style='color:red'>Nhập đủ thông tin và kiểm tra</h2>
  </div>";
}
?>