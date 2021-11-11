<?
 $a = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.";
 $link = 'https://Ссылка на страницу/';
 //Уберае все html элементы
 $a = strip_tags($a);
 //Обрезаем его на определённое количество символов
 $a = substr($a, 0, 180);
 //Убедимся, что текст не заканчивается восклицательным знаком, запятой, точкой или тире
 $a = rtrim($a, "!,.-");
 //находим последний пробел, устраняем его:
 $a = substr($a, 0, strrpos($a, ' '));
// добавляем ссылку и троеточие
 $a = $a."<a href = '".$link."'>...</a>";

?>
<!DOCTYPE html>
<html>
<head>
	<title>Тест задание 1</title>
</head>
<body>
	<p><?
	echo $a;
	?></p>
</body>
</html>