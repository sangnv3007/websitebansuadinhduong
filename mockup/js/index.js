$('.add_cart').click(function () {
    var id = parseInt($(this).attr('name'));//Lấy id sản phẩm vừa thêm
    $.ajax({
        url: "manage_cart.php?id=" + id,//truyền tham số sang manager_cart lên
        type: "GET",
        //Thực hiện thành công
        success: function (data) {
            var index = parseInt($('#lblCartCount').html())
            $('#lblCartCount').html(index + 1);
            alert("Bạn đã thêm sản phẩm thành công.")
        }
    });
});
$('.cart_container').on('click', '.cart-removeproduct', function () {
    var id = parseInt($(this).attr('name'));
    $.ajax({
        url: "cart_remove.php?id=" + id,
        type: "GET",
        success: function (data) {
            $('.cart_container').html(data)
            alert('Xóa sản phẩm thành công.');
            total = 0;
            $('.content-cart').each(function () {
                price = $(this).find('.numbericupDown-amount').val() * parseInt($(this).find('.cart-priceproduct').text())
                $(this).find('.cart-totalmoneyporduct').html(price);
                total += price;
                total1 = 0
                $('.numbericupDown-amount').each(function () {
                    total1 += parseInt($(this).val());
                });
                $('#lblCartCount').html(total1)
            });
            $('.cart-subtotal-money').html(total);
        }
    });
});
function capnhattien() {
    $total = 0;
    $('.content-cart').each(function () {
        $(this).find('.cart-totalmoneyporduct').html($('.numbericupDown-amount').val() * parseInt($('.cart-priceproduct')));
        // $(this).find('.cart-totalmoneyporduct').html($newtotalitem)
    });
}
$(document).ready(function () {
    total = 0;
    $('.content-cart').each(function () {
        price = $(this).find('.numbericupDown-amount').val() * parseInt($(this).find('.cart-priceproduct').text())
        $(this).find('.cart-totalmoneyporduct').html(price);
        total += price;
    });
    $('.cart-subtotal-money').html(total);
});
$(":input").bind('keyup mouseup', function () {
    total = 0;
    $('.content-cart').each(function () {
        price = $(this).find('.numbericupDown-amount').val() * parseInt($(this).find('.cart-priceproduct').text())
        $(this).find('.cart-totalmoneyporduct').html(price);
        total += price;
    });
    $('.cart-subtotal-money').html(total);
    total = 0
    $('.numbericupDown-amount').each(function () {
        total += parseInt($(this).val());
    });
    $('#lblCartCount').html(total)
    // var id=parseInt($(this).attr('name'));
    // if($(this).val()==''){
    //     alert($(this).val());
    // }
    // $.ajax({
    //     url: "cart_change_total?id="+id,
    //     type: "GET",
    //     success: function(data){
    //         $('.cart_container').html(data);
    //         alert('xoá thành công');
    //     }
    // });          
});
