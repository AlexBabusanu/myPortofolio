$(window).on("load", function(){
	$(".text").children("ul").each(function(){
		$(this).children("li").each(function(){
			var test = $(this).text();
			console.log(test == "HTML5")
			switch($(this).children("p").text()){
				case "HTML5":
				$($(this).children("img").attr("src", "../public/images/html5.png"));
				break;
				case "CSS3":
				$($(this).children("img").attr("src", "../public/images/css3.png"));
				break;
				case "jQuery":
				$($(this).children("img").attr("src", "../public/images/javascript.png"));
				break;
				case "PHP":
				$($(this).children("img").attr("src", "../public/images/php.png"));
				break;
			}
		})
	})
})