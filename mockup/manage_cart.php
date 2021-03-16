<?php  
    include('lib_db.php');
    session_start();
    // session_destroy();
    $status=0;
    $id=$_GET['id'];
    //
    if(isset($_SESSION['cart']))
    {
        $cart=$_SESSION['cart'];
        $status=1;
    }
    else{
        $cart=array();
    }
    if($status==0){
        $newcart=array($id,1);
        array_push($cart,$newcart);
    }
    else{
        $l=0;
        for ($i=0; $i < count($cart); $i++) { 
            if($cart[$i][0]===$id){
                $cart[$i][1]++;
                $l=1;
            }
        }
        if($l==0){
            $newcart=array($id,1);
            array_push($cart,$newcart);
        }
    }
    $_SESSION['cart']=$cart;
    echo $id;
    //Tạo session cart và thêm sang trang cart 
 ?>