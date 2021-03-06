<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manage extends CI_Controller {

	var $V;

	function __construct()
	{
		parent::__construct();
		$this->V = array('Class' => 'Manage','ClassName' => 'บริหารการจัดเก็บ');
	}

	public function index()
	{

	}

	public function Collect()
	{
		$FT = 'Manage/Collect';
		$this->V['FuncID'] = $FT;
		$this->V['FuncName'] = 'ตารางแสดงผลการจัดเก็บ';
		$this->V['Description'] = '';
		$this->load->view($FT, $this->V);
	}
}
