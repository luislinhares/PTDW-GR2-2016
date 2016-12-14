$(document).ready(function(){
	$("#btnPlus").click(function(){
		if($(".col-md-8 p[class!='lead']").css("font-size")>"19px" ){
			document.getElementById("btnPlus").disabled = true;
			document.getElementById("btnMinus").disabled = false;
		}else{
			var fontSizeTitle = parseInt($(".col-md-8 p[class='lead']").css("font-size"));
			fontSizeTitle = fontSizeTitle + 1 + "px";
			$(".col-md-8 p[class='lead']").css({"font-size": fontSizeTitle});
			
			var fontSize = parseInt($(".col-md-8 p[class!='lead']").css("font-size"));
			fontSize = fontSize + 2 + "px";
			$(".col-md-8 p[class!='lead']").css({"font-size": fontSize});
		}
	});
	$("#btnMinus").click(function(){
		if($(".col-md-8 p[class!='lead']").css("font-size")<"15px" ){
			document.getElementById("btnMinus").disabled = true;
			document.getElementById("btnPlus").disabled = false;
		}else{
			var fontSizeTitle = parseInt($(".col-md-8 p[class='lead']").css("font-size"));
			fontSizeTitle = fontSizeTitle - 1 + "px";
			$(".col-md-8 p[class='lead']").css({"font-size": fontSizeTitle});
			
			var fontSize = parseInt($(".col-md-8 p[class!='lead']").css("font-size"));
			fontSize = fontSize - 2 + "px";
			$(".col-md-8 p[class!='lead']").css({"font-size": fontSize});
		}
	});
});