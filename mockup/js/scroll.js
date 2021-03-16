//dung id de lay doi tuog thao tac
var obj=document.querySelectorAll("#location span")
//lay nd ben trong obj
var changecontent =obj.innerHTML
//alert(changecontent)
$(".main-menu-search").find("h4").hover(function(){
	$(".main-menu-search").find("h4").next().css({"display":"block"});

},function(){
	$(".main-menu-search").find("h4").next().css({"display":"none"});
});
$(".main-menu-search").find("h4").next().hover(function(){
	$(".main-menu-search").find("h4").next().css({"display":"block"});
},function(){
	$(".main-menu-search").find("h4").next().css({"display":"none"});
});
document.addEventListener("DOMContentLoaded",function(){
	var t1=document.querySelectorAll("#hide-scroll1")
	var t1=t1[0]
	var t2=document.querySelectorAll("#hide-scroll2")
	var t2=t2[0]
	var t3=document.querySelectorAll("#hide-scroll3")
	var t3=t3[0]
	var t4=document.querySelectorAll("#sliderbar-menu")
	var t4=t4[0]
	var obj=document.querySelector(".start-menu")
	var status="duoi100"
	window.addEventListener("scroll",function(){
		var y=pageYOffset
		if(y>150)
		{
			if(status=="duoi100")
			{
				status="tren100"
				obj.setAttribute('style','padding-left:0;padding-top:13px;')			
				t1.classList.add('hide-menu')
				t2.classList.add('hide-menu')
				t3.classList.add('hide-menu')
				t4.classList.add('active-menu')
			}
		}
		else{
			if(status=="tren100")
			{
				status="duoi100"
				t1.classList.remove('hide-menu')
				t2.classList.remove('hide-menu')
				t3.classList.remove('hide-menu')
				t4.classList.remove('active-menu')
			}
		}
		

	})
})
