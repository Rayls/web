// ajaxbyCat.js

$(function(){
	$("#catGet").change(function(){
		$.post("scripts/listProductsByCat.php", {category: $(#catGet).value();},
		function(data, status){
			$("#products").html(data);
			}
		});
	});
});
