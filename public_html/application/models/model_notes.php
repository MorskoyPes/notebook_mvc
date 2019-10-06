<?php
class Model_Notes extends Model
{
	private const table_name = "notes";

	function create()
	{
		$notes = R::dispense(self::table_name);

		$notes->name    = $post_data['name'];

		return R::store($notes);
	}
}

 ?>