$(window).on("load", function(){
	$(".technology").children("ul").each(function(){
		$(this).children("li").each(function(){
			var test = $(this).text();
			switch($(this).children("img").attr("title")){
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
		});
	});
	$(".proj").click(function(){
		$("html,body").animate({scrollTop:$(".anchor").offset().top - 50}, 1000, "easeInOutCubic");
	})
});