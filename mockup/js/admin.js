$(document).ready(function(){
	// Activate tooltip
	$('[data-toggle="tooltip"]').tooltip();
	
	// Select/Deselect checkboxes
	var checkbox = $('table tbody input[type="checkbox"]');
	$("#selectAll").click(function(){
		if(this.checked){
			checkbox.each(function(){
				this.checked = true;                        
			});
		} else{
			checkbox.each(function(){
				this.checked = false;                        
			});
		} 
	});
	checkbox.click(function(){
		if(!this.checked){
			$("#selectAll").prop("checked", false);
		}
	});
});
$('body').on('click','.delete',function(){
	var id=parseInt($(this).attr('name'));
    $.ajax({
        url: "deleteuser.php?id="+id,
        type: "GET",
        success: function(data){
            $('.view').html(data)
            alert('xoá thành công');

        }
    });
})
$('.view').on('click','.edit',function(){
	$('.id_edit').val($(this).closest('td').prev().prev().prev().prev().prev().prev().html())
	$('.name_edit').val($(this).closest('td').prev().prev().prev().prev().prev().html())
	$('.address_edit').val($(this).closest('td').prev().prev().prev().prev().html())
	$('.phone_edit').val($(this).closest('td').prev().prev().prev().html())
	$('.position_edit').val($(this).closest('td').prev().prev().html())
	$('.email_edit').val($(this).closest('td').prev().html())

});

