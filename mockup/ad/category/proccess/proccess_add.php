<?php

require("../../../lib_db.php");
if(!empty($_POST["namepr"]) and !empty($_POST["descriptionpr"])){
    // $id = $_POST["id"];
    $name = $_POST["namepr"];
    $description=$_POST["descriptionpr"];
    $array=array('TenLoai'=>$name,'MoTa'=>$description);
    $data=data_to_sql_insert('danhmuc',$array);
    exec_update($data);
    header("Location: ../../../ad/category/index.php");
}
else{
    echo 1;
}
?>