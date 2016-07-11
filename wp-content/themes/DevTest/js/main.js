 $(document).ready(function(){
 //Изменение контента страницы при выборе страны
	$("#cat").change(function(){

		var value = $("#cat option:selected").text();
		//alert(value);
		//Ajax запрос POST на сервер /wp-admin/admin-ajax.php файл functions.php, хук 'my_action'
		$.post( '/wp-admin/admin-ajax.php', {countryName: value, action: 'my_action'}, function (data) {
				//Изменяет содержание элемента
			$(".content").html(data);
			},"text");
			//Изменяет URL без перезагрузки страницы
                //history.pushState(location.href, null, url);
	});
});