<form action="create" method="POST">
	<p>Введи что-то плс и программа посчитает кол-во букв</p>
	<input type="text" class="name" name="name">
	<input type="submit" name="get">
</form>
<?= $data['message']."<br>";
print_r(mb_strlen($data['message']));
 ?>