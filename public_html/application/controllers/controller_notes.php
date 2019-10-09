<?php
class Controller_Notes extends Controller
{
	function __construct()
	{
		parent::__construct();
		$this->model = new Model_Notes;
	}
 function action_create()
 {
 	$this->data['wordcount'] = $_POST['name'];
 	$this->view->generate('word_count_view.php', 'template_view.php', $this->data);
 }
 function action_show()
 {
 	$this->data       = $this->model->create_notes($_POST);
 	$this->data['id'] = $this->model->get_id();
	$this->view->generate('notes_view.php', 'template_view.php', $this->data);
 }
 function action_addnote()
 {
 	$this->view->generate('addnote_view.php', 'template_view.php', $this->data);
 }
 function action_delete()
 {
 	$this->data['delete'] = $this->model->delete_note($_GET);
 	$this->view->generate('delete_view.php', 'template_view.php', $this->data);
 }

}

?>