<?php
    include("lib_db.php");
    // ID Nhân viên 	Họ và Tên 	Địa chỉ 	SĐT 	Vị trí 	Email
    $id=$_POST['id'];
    $name=$_POST['name'];
    $address=$_POST['position'];
    $phone=$_POST['phone'];
    $position=$_POST['location'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $array=array('id'=>$id,'full_name'=>$name,'address'=>$address,'phone'=>$phone,'position'=>$position,'email'=>$email,'password'=>$password);
    $cond='id="'.$id.'"';
    $data=data_to_sql_update('dtb_employee',$array,$cond);
    exec_update($data);
    header("location: admin_user.php");
?>