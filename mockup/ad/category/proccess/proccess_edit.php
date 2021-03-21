<?php
session_start();
require("../../../config/config.php");

if(!empty($_POST['name'] ) and !empty($_POST['mota'] ) ){
    $name = $_POST['name'];
    $id= $_POST['id'];
    $mota=$_POST['mota'];
 
    $sql="update danhmuc set tenloai = '$name', mota='$mota' where id='$id'";
    echo $sql;
    $result=execute($sql);
  
    
    if($result == true  ){
        $_SESSION['update_danhmuc']=1;
        $_SESSION['abc']=1;
        header("Location: ../../../ad/category/index.php");

    }
    else{
        $_SESSION['update_danhmuc']=0;
        header("Location: ../../../ad/category/edit.php");
    }

}
else{
    $_SESSION['update_danhmuc']=0;
    $_SESSION['iddm']=$_POST['id'];
    header("Location: ../../../ad/category/edit.php");

}

    

?>
