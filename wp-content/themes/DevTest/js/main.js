 $(document).ready(function(){
 //��������� �������� �������� ��� ������ ������
	$("#cat").change(function(){

		var value = $("#cat option:selected").text();
		//alert(value);
		//Ajax ������ POST �� ������ /wp-admin/admin-ajax.php ���� functions.php, ��� 'my_action'
		$.post( '/wp-admin/admin-ajax.php', {countryName: value, action: 'my_action'}, function (data) {
				//�������� ���������� ��������
			$(".content").html(data);
			},"text");
			//�������� URL ��� ������������ ��������
                //history.pushState(location.href, null, url);
	});
});