<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Example</title>
<link rel = "stylesheet" href = "styles.css">
<script src = "main.js"></script>
</head>
<body>


<input id = "season" placeholder = "Введите пору года" onkeydown = "if (event.keyCode== 13)getSeasonImage()"><br><!--при вводе будет отображать картинку при отпускании кнопки, +можем написать весь js прямо в html, 13 это код ввода -->
<img src = "" id = "image"><!--подключаем картинку-->


</body>
</html>