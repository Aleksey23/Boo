function remove_user(id){ //$функция которая вытаскивает из  jquery
	$.ajax({
		url:"user_db.php",
		type:"POST",
		success: function(result){
			location.reload();
		},

		error: function(){
			alert("Произошла ошибка");
		},

		data:{"id":id, "action":"delete"}
	});
}