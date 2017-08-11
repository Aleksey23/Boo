function getSeasonImage(){
	var season = document.getElementById("season").value;//value сохраняет перем, мы его вытаскиваем
	var image = document.getElementById("image");//без value весь элемент
switch(season){//проверяем переменную
	case "winter" ://что после case от и проверяет
	image.src = "https://files7.adme.ru/files/news/part_110/1107760/4546760-2-1000-37f31bb108-1481287173.jpg";//копировали URL картинки
	break;
	case "spring" :
	image.src = "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSgdNYQwOjt3o8F7UkcCBwvoIXHeFU3OhIy9OF9S7HdvK7yKK28Vw";//копировали URL картинки
	break;
	case "summer" :
	image.src = "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTA7aUXsqVDOrEGolxJOAGXv5deNIgVHl02j7BysjeX3phrzlyt-g";//копировали URL картинки
	break;
	case "autumn" :
	image.src = "http://newpix.ru/wp-content/uploads/2012/09/beautiful_autumn9.jpg";//копировали URL картинки
	break;
	default: image.src = "http://i-prize.ru/static/img/0000/0004/0646/40646671.guhv8ukn4j.jpg"
}
}