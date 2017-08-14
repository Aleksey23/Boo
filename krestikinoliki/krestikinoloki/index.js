function makeStep(buttonId){//описываем функцию должна принимать один аргумент
	var button = document.getElementById(buttonId);// вытащили в кнопку buttonid меняется на какую кнопку нажим пользователь
	if(isEmptyCell(button)==false){//роверяем есть ли в этом элем чтонибудь
		alert("Место занято");
		return ;//взврат завершает функцию и все
	}

	else {//можно не писать else
		button.innerHTML = "X";//поменять внутри текст
		if(isEndGame() == true){//проверяем конец ли игры
			return;
		}
		else {
			var a11 = document.getElementById("a11");
			var a12 = document.getElementById("a12");
			var a13 = document.getElementById("a13");
			var a21 = document.getElementById("a21");
			var a22 = document.getElementById("a22");
			var a23 = document.getElementById("a23");
			var a31 = document.getElementById("a31");
			var a32 = document.getElementById("a32");
			var a33 = document.getElementById("a33");
			
				if(a11.innerHTML=="" ){
					a11.innerHTML="О";//В Свойство записали О

				}
			    else if(a12.innerHTML=="" ){
					a12.innerHTML="О";//В Свойство записали О
					
				}
				else if(a13.innerHTML=="" ){
					a13.innerHTML="О";//В Свойство записали О
					
				}
				else if(a21.innerHTML=="" ){
					a21.innerHTML="О";//В Свойство записали О
					
				}
				else if(a22.innerHTML=="" ){
					a22.innerHTML="О";//В Свойство записали О
					
				}
				else if(a23.innerHTML=="" ){
					a23.innerHTML="О";//В Свойство записали О
					
				}
				else if(a31.innerHTML=="" ){
					a31.innerHTML="О";//В Свойство записали О
					
				}
				else if(a32.innerHTML=="" ){
					a32.innerHTML="О";//В Свойство записали О
					
				}
				else if(a33.innerHTML=="" ){
					a33.innerHTML="О";//В Свойство записали О
					
				}

			isEndGame();
			}

	} 
}



function isEmptyCell(cell){//проверить есть ли там чтонибудь
	if(cell.innerHTML=="X"||cell.innerHTML=="0") {//если там уже есть х или о
		return false;
	}
	else {
		return true;
	}
}


function isEndGame(){//обавляем проверку последний ли ход и победа ли без передачи элементов

	var a11 = document.getElementById("a11").innerHTML;
	var a12 = document.getElementById("a12").innerHTML;//inner записали только html
	var a13 = document.getElementById("a13").innerHTML;
	var a21 = document.getElementById("a21").innerHTML;
	var a22 = document.getElementById("a22").innerHTML;//inner записали только html
	var a23 = document.getElementById("a23").innerHTML;
	var a31 = document.getElementById("a31").innerHTML;
	var a32 = document.getElementById("a32").innerHTML;//inner записали только html
	var a33 = document.getElementById("a33").innerHTML;
	
if(a11 == "X" && a12 == "X" && a13 == "X"){
	alert("You WIN!!!");
		return true;//игра завершена возвращает значение и комп не ходит
}
if(a21 == "X" && a22 == "X" && a23 == "X"){
	alert("You WIN!!!");
		return true;//игра завершена возвращает значение и комп не ходит
}
if(a31 == "X" && a32 == "X" && a33 == "X"){
	alert("You WIN!!!");
		return true;//игра завершена возвращает значение и комп не ходит
}
if(a11 == "X" && a21 == "X" && a31 == "X"){
	alert("You WIN!!!");
		return true;//игра завершена возвращает значение и комп не ходит
}
if(a12 == "X" && a22 == "X" && a32 == "X"){
	alert("You WIN!!!");
		return true;//игра завершена возвращает значение и комп не ходит
}
if(a13 == "X" && a23 == "X" && a33 == "X"){
	alert("You WIN!!!");
		return true;//игра завершена возвращает значение и комп не ходит
}
if(a11 == "X" && a22 == "X" && a33 == "X"){
	alert("You WIN!!!");
		return true;//игра завершена возвращает значение и комп не ходит
}
if(a13 == "X" && a22 == "X" && a31 == "X"){
	alert("You WIN!!!");
		return true;//игра завершена возвращает значение и комп не ходит
}




if(a11 == "O" && a12 == "O" && a13 == ""){
	alert("You Lose!!!");
		return true;//игра завершена возвращает значение и комп не ходит
}
if(a21 == "O" && a22 == "O" && a23 == "O"){
	alert("You Lose!!!");
		return true;//игра завершена возвращает значение и комп не ходит
}
if(a31 == "O" && a32 == "O" && a33 == "O"){
	alert("You Lose!!!");
		return true;//игра завершена возвращает значение и комп не ходит
}
if(a11 == "O" && a21 == "O" && a31 == "O"){
	alert("You Lose!!!");
		return true;//игра завершена возвращает значение и комп не ходит
}
if(a12 == "O" && a22 == "O" && a32 == "O"){
	alert("You Lose!!!");
		return true;//игра завершена возвращает значение и комп не ходит
}
if(a13 == "O" && a23 == "O" && a33 == "O"){
	alert("You Lose!!!");
		return true;//игра завершена возвращает значение и комп не ходит
}
if(a11 == "O" && a22 == "O" && a33 == "O"){
	alert("You Lose!!!");
		return true;//игра завершена возвращает значение и комп не ходит
}
if(a13 == "O" && a22 == "O" && a31 == "O"){
	alert("You Lose!!!");
		return true;//игра завершена возвращает значение и комп не ходит
}
}

