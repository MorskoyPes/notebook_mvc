<?php
class Model_Notes extends Model
{
	public const TABLE_NAME = 'comments';

	public function create_notes($post_data)
	{

		$notes = R::dispense(self::TABLE_NAME);

		$notes->name = $post_data['name'];
		$notes->message = $post_data['message'];
		$notes->date = date("l d F Y");
		$notes->time = date("h:i:s");
		R::store($notes);
	}

}
?>