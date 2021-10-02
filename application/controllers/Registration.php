<?php
class Registration extends Admin_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Model_registration');
		$this->not_logged_in();
	}

	public function index()
	{

	}


}
