<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class Add_Product extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->simple_login->cek_login();	
		$this->load->helper(array('url','form'));
		$this->load->model('m_account');
	}

	public function index(){
		$this->load->view('v_add_product');
	}
}


 ?>