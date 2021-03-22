<?php

require("../../../lib_db.php");
if(!empty($_POST["namepr"]) and !empty($_POST["descriptionpr"]) and !empty($_POST["id"])){
    $id = $_POST["id"];
    $name = $_POST["namepr"];
    $description=$_POST["descriptionpr"];
    $array=array('id'=>$id,'TenLoai'=>$name,'MoTa'=>$description);
    $data=data_to_sql_insert('danhmuc',$array);
    exec_update($data);
    header("Location: ../../../ad/category/index.php");
}
else{
    echo 1;
}
?>