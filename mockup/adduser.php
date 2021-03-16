<?php 
    include('lib_db.php');
    // ID Nhân viên 	Họ và Tên 	Địa chỉ 	SĐT 	Vị trí 	Email 	Password
    $id=$_POST['id'];
    $name=$_POST['name'];
    $address=$_POST['address'];
    $phone=$_POST['phone'];
    $location=$_POST['location'];
    $email=$_POST['email'];
    $password=md5($_POST['pass']);
    $array=array('id'=>$id,'full_name'=>$name,'address'=>$address,'phone'=>$phone,'position'=>$location,'email'=>$email,'password'=>$password);
    $data=data_to_sql_insert('dtb_employee',$array);
    exec_update($data);
    header("location: admin_user.php");
 ?>