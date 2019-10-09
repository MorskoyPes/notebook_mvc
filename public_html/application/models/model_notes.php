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
	public function get_id()
	{
		$id = R::getCol('SELECT id FROM comments');
		$comments = R::loadAll(self::TABLE_NAME, $id);
		return $comments;
	}
	public function delete_note()
	{
			$id_delete = R::load(self::TABLE_NAME, );
			$delete = R::trash($id_delete);
			return $delete;
	}

}
?>