function changeColor(){ 
var color = document.getElementById("clr");
color.style.color = color.value;
color.style.background = color.value;
var link = document.getElementById("link");

link.href = "https://www.google.com/search?q="+encodeURIComponent(color.value)+"&tbm=isch";
}
