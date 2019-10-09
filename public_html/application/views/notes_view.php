	<a href="addnote">Добавить запись</a>
	<?php
	echo '<br>';

// Выбирает все id из таблицы comment, выводит их в массив и циклом выводит всю информацию по каждому id
	$show_comments = '';
	$comments = $data['id'];
	foreach ($comments as $comment){
	  $show_comments .=
		  "id: " .        $comment->id.'; ' .
		  "Имя: " .       $comment->name.'; ' .
		  "Сообщение: " . $comment->message.'; '.
		  "Время: " .			$comment->time.'; ' .
		  "Дата: " .			$comment->date.'; ' .
		   // создает ссылку при нажатии на которую в URL передается id
		  "<a href='delete?id=$comment->id'>удоли</a>"."<br>";
  }
   echo $show_comments;
 ?>

