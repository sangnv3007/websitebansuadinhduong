<?php 
    session_start();
    if(count($_SESSION['cart'])==1){
        session_destroy(); 
        echo '';
    }
    else{
        $cart=$_SESSION['cart'];
        $cart = array_values($cart);
        for($i=0;$i<count($cart);$i++)
        {
            if($cart[$i][0]==$_GET['id']){
                unset($cart[$i]);
            }
        }
        $_SESSION['cart']=$cart;
        include('lib_db.php');
        $product =array();
        foreach($cart as $car){
            $sql="select * from dtb_product where id=".$car[0];
            $product_t=select_one($sql);
            array_push($product,array($product_t,$car[1]));
        }
        foreach($product as $pr){
            echo '<div class="content-cart"><div class="list-product-cart"> <div class="cart-item-image  label-item format1">
                        <div class="items-inner">
                            <a href="" class="cart-imageproduct"><img class="img-responsive" src="'.
                            explode('||',$pr[0]['image_product'])[0].'" alt="Sữa Ensure Gold">
                            </a>
                        </div>
                    </div>
                    <div class="cart-item-text label-item format2">
                        <div class="items-inner">
                            <a href="" class="cart-nameproduct">
                                '.$pr[0]['name'].'
                            </a>
                        </div>
                    </div>
                    <div class="cart-item-price label-item format1">
                        <div class="items-inner">
                            <span class="cart-priceproduct">'.$pr[0]['promotion_price'].'</span>
                        </div>
                    </div>
                    <div class="cart-item-amount label-item format1">
                        <div class="items-inner">
                            <div class="cart-amountproduct">
                                <input class="numbericupDown-amount" type="number" min="1" value="'.$pr[1].'">
                            </div>
                        </div>
                    </div>
                    <div class="cart-item totalmoney label-item format1">
                        <div class="items-inner">
                            <span class="cart-totalmoneyporduct">'.$pr[0]['promotion_price']*$pr[1].'</span>
                        </div>
                    </div>
                    <div class="cart-item remove label-item format3">
                        <div class="items-inner">
                            <a class="cart-removeproduct" name="'.$pr[0]['id'].'" href="#">
                                <small>Xóa</small>
                            </a>
                        </div>
                    </div>
                </div>
            </div>';
        }


    }

 ?>