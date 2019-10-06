<?php
class Controller_Notes extends Controller
{

 function action_create()
 {
 	$id = $this->model->create($_POST);
	$this->view->generate('notes_view.php', 'template_view.php', $this->notes);
 }
}

?>