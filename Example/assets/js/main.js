function signUp(){

	var email = document.getElementById("email").value;//достанем чот ввел пользователь
	   if(email == "" || email == null){
		alert("Введите Email!");
		 return;//завершает выполнение функции
	} 
		var date = document.getElementById("date").value;//запоминает строковое значение даты
		if(date == "" || date == null){
			alert("Введите дату рождения");
			return;
		}
		
		var date1 = new Date(date);//переводит со строкового значения в числовое
		var dateNow = new Date();//текущий год
		if(dateNow.getFullYear() - date1.getFullYear() < 18){//для задания только года
			alert("Ты не совершеннолетний");
			return;
	}
		var city = document.getElementById("city");
		city = (city.options[city.selectedIndex].value);//вытаскиваем значение из select
		if(city == "0"){
			alert("Введите город");
			return;
	}
		var pass = document.getElementById("pass").value;
		if(pass == "" || pass== null){
			alert("Введите пароль");
			return;
		}

		var repit_pass = document.getElementById("repit_pass").value;
		if(repit_pass != pass){
			alert("Пароль должен совпадать");
			return;
		}

			$.ajax({//отправляем на сервер
				type:"POST",//тип передав файла
				url:"users.php",//адрес
				success:function(){ //функция в случае успеха кот произойдет
					location.href = "account.php";//меняет в адресной строке кот мы укажем
			
			},
				error:function(){
					alert("Произошла ошибка");
				},
					data:{
						"email":email,//в кавыч назв перем передаем значения
						"pass":pass,
						"city":city,
						"date":date//создали новую переменную date1
					}

			});
}
