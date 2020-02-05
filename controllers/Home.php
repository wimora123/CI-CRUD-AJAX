<?php 

/**
 * 
 */
class Home extends MY_Controller
{
	function __construct()
	{
		parent:: __construct();
	}

	public function index()
	{
		$data['page']="pages/home";
		$this->load->view('Index', $data);
	}
}

 ?>