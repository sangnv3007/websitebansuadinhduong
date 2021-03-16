<?php

require("../../../config/config.php");


if(!empty($_POST["name"]) and !empty($_POST["pricenhap"]) and !empty($_POST["priceban"])and !empty($_POST["content"]) 
and !empty($_POST["image1"])  and !empty($_POST["image2"]) and !empty($_POST["image3"])){
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
    $sql="INSERT INTO `dtb_product`( `id_type`, `name`, `unit_price`, `promotion_price`,
      `description_product`, `id_detailproduct`,`image_product`) 
    VALUES ('$idtype','$name','$priceban','$pricenhap','$content','$iddetail','$img')";
  
    $result=execute($sql);
    if($result){
        header("Location: ../../../ad/product/index.php"); 
    }
    else{
        echo 1111;   
        
    }

}

else{
    echo 123;
}
?>