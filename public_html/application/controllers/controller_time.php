<?php
class Controller_Time extends Controller
{
	public $date_time;

	function __construct()
	{
		parent::__construct();
		$this->model = new Model_Time();
	}
	function action_date()
	{
		$this->data['date'] = $this->model->get_date();
		$this->data['time'] = $this->model->get_time();
		$this->view->generate('date_view.php', 'template_view.php', $this->data);
	}
}
 ?>