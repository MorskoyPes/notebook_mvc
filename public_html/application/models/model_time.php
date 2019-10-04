<?php

class Model_Time extends Model
{
		function get_date()
	{
		return $date = date('Y-m-d');

	}
		function get_time()
	{
		return $time = date('H:i:s');
	}
}

 ?>