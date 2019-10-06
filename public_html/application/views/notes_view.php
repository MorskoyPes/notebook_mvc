<?php
	$input = $id['name'];
 ?>
<form action="mvc/notes/create" method="POST">
	<p>Введи что-то плс и программа посчитает кол-во букв</p>
	<input type="text" class="name" name="name">
	<input type="submit" name="get">
</form>
<?= $id ?>