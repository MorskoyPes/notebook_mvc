<?php
class Controller_AddNote extends Controller
{

	function __construct()
	{
		$this->model = new Model_AddNote();
		$this->view = new View();
	}

	function action_index()
	{
		$data = $this->model->get_data();
		$this->view->generate('addnote_view.php', 'template_view.php', $data);
	}
}


 ?>