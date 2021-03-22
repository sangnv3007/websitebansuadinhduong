$('.btn-successpr').click(function () {
    // var id = parseInt($(this).attr('name'));//Lấy id sản phẩm vừa thêm
    $.ajax({
        // url: "manage_cart.php?id=" + id,//truyền tham số sang manager_cart lên
        type: 'GET',
        //Thực hiện thành công
        url: "../../ad/category/index.php",
        success: function (data) {
            // var index = parseInt($('#lblCartCount').html())
            // $('#lblCartCount').html(index + 1);
            alert("Bạn đã thêm sản phẩm thành công !!!")
        }
    });
});