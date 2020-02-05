<?php 

/**
 * 
 */
class About extends MY_Controller
{
	function __construct()
	{
		parent:: __construct();
	}

	public function index()
	{
		$data['page']="pages/About";
		$this->load->view('Index', $data);
	}
}

 ?>