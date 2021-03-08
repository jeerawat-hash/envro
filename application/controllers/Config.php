<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Config extends CI_Controller {

	var $V;

	function __construct()
	{
		parent::__construct();
		$this->V = array('Class' => 'Config','ClassName' => 'จัดการข้อมูลระบบ');
	}

	public function index()
	{
		redirect(base_url());
	}

	public function User()
	{
		$FT = 'Config/User';
		$this->V['FuncID'] = $FT;
		$this->V['FuncName'] = 'ตารางแสดงผลผู้ใช้งาน';
		$this->V['Description'] = '';
		$this->load->view($FT, $this->V);
	}

	public function Car()
	{
		$FT = 'Config/Car';
		$this->V['FuncID'] = $FT;
		$this->V['FuncName'] = 'ตารางแสดงผลข้อมูลรถ';
		$this->V['Description'] = '';
		$this->load->view($FT, $this->V);
	}

	public function Trash()
	{
		$FT = 'Config/Trash';
		$this->V['FuncID'] = $FT;
		$this->V['FuncName'] = 'ตารางแสดงข้อมูลถังขยะ';
		$this->V['Description'] = '';
		$this->load->view($FT, $this->V);
	}
}
