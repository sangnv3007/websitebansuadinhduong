<?php
session_start();
require("../../../config/config.php");

if(!empty($_POST['name']) and !empty($_POST['pricenhap'] ) 
and  !empty($_POST['priceban'])  and  !empty($_POST['image1'])
and  !empty($_POST['content'])){   
    $page=$_POST["page"];
    $id = $_POST["id"];
    $name = $_POST["name"];
    $pricenhap=$_POST["pricenhap"];
    $priceban=$_POST["priceban"];
    $content=$_POST["content"];
    $idtype=$_POST["idtype"];
    $iddetail=$_POST["iddetail"];
    
    $image1=$_POST['image1'];
    $image2=$_POST['image2'];
    $image3=$_POST['image3'];
    $img=$image1. "||".$image2."||".$image3;
    $sql="update dtb_product set id_type=$idtype,  name = '$name',unit_price =$priceban, 
    promotion_price =$pricenhap, image_product='$img',description_product='$content', id_detailproduct=$iddetail  where id=$id ";
    $page=$_POST['page'];
    $result=execute($sql);
    
    

   
    if($result ){
       
            header("Location: ../../../ad/product/index.php");
       
    }
    else{
        echo $sql;
    }

}
?>