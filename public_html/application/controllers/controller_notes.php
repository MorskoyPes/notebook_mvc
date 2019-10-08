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
 	$this->data['message'] = $_POST['name'];
 	$this->view->generate('notes_view.php', 'template_view.php', $this->data);
 }
 function action_notes()
 {
 	$this->data['id'] = $this->model->create_notes($_POST);
	$this->view->generate('addnote_view.php', 'template_view.php', $this->data);
 }
}

?>