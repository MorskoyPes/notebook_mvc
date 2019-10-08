<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Главная</title>
</head>
<body>
	<p>Success</p>
	<form action="show" method="POST">
		<p>Введите имя</p>
		<input class="name" type="text" name="name"> </br>
		<p>Введите сообщение</p></br>
		<textarea class="message" rows="10" cols="40" wrap="hard" name="message"></textarea>
		<input type="submit" name="comment">
	</form>
	<?= $data."<br>";
	var_dump($data);
	$ids = R::getCol('SELECT id FROM comments');
print_r ($ids);
echo "<br><br>";


$comments = R::loadAll('comments', $ids);
foreach ($comments as $comment){
  echo "id: ".$comment->id.'; ';
 	echo "Имя: ".$comment->name.'; ';
  echo "Сообщение: ".$comment->message.'; ';
  echo "Время: ".$comment->time.'; ';
  echo "Дата: ".$comment->date_calendar.'; ';
  echo "<br>";
  // создает ссылку при нажатии на которую в URL передается id
  echo "<a href='deletenote.php?id=$comment->id'>удоли</a>";
  echo "<br>";
}
 ?>

</body>
</html>

