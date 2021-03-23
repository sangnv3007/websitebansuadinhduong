

<?php 

session_start();
require("../../../config/config.php");
$page=$_POST["page"];
$id = $_POST["id"];
 if(!empty($_POST['tensp']) 
// and isset($_POST['giact'] ) 
//  and  isset($_POST['giakm'])  and  !empty($_POST['image1'])
//  and  !empty($_POST['thuonghieu']) and  !empty($_POST['doituong'])
//  and  !empty($_POST['mota'])
){  



    $ten = $_POST["tensp"];
    $giact=$_POST["giact"];
    $giakm=$_POST["giakm"];
    $mota=$_POST["mota"];
    $iddm=$_POST["iddm"];
    $doituong = $_POST['doituong'];
    $thuonghieu=$_POST['thuonghieu'];
    
    $image1=$_POST['image1'];
    $image2=$_POST['image2'];
    $image3=$_POST['image3'];
    $img=$image1. "||".$image2."||".$image3;

    
    $sql="update sanpham set iddm=$iddm,  tensp = '$ten',giact =$giact, 
    giakm =$giakm, anhsp='$img',motasp='$mota', thuonghieu='$thuonghieu ', doituongsd = '$doituong ' where id=$id ";
    
    $result=execute($sql);
    
    if($result ){
      
        header("Location: ../../../ad/product/index.php");       
    }
    else{
        echo " <div class='panel-heading'>
        <h2 class='text-center' style='color:red'>Nhập đủ thông tin</h2>
      </div>";
        //header("Location: ../../../ad/product/edit.php");     
    }




}













?>