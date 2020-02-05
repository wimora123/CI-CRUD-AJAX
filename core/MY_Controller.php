<?php 

/**
 * 
 */
class MY_Controller extends CI_Controller
{
	
	function __construct()
	{
		parent:: __construct();
		
		$this->load->database();

		$this->load->helper(array('url','form','string','text', 'MY_Helper'));
		$this->load->library(array('session','form_validation','upload'));

		$this->load->model(array('characterModel'));
	}

	
}

 ?>