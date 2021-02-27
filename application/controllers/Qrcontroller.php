<?php

class Qrcontroller extends CI_Controller
{
  
  function __construct()
  {
    parent::__construct();
    $this->load->model("QRModel"); 
  }

  public function index()
  {
    $this->load->view('webqrcode/header');
    $this->load->view('webqrcode/index');
    $this->load->view('webqrcode/footer');
  }

  public function testdb()
  {
    echo $this->QRModel->testsql();
  }

  public function insertlocation()
  {
    $Latitude = $_POST["Latitude"];
    $Longitude = $_POST["Longitude"];
    $Img = $_POST["Img"];
    $Textpf = $_POST["Textpf"];
    echo $this->QRModel->insertlocation($Latitude,$Longitude,$Img,$Textpf);
  }

  public function getlocation()
  {
    echo json_encode($this->QRModel->getlocation());
  }

  public function GetDatabyID()
  {
    echo json_encode($this->QRModel->GetDatabyID($_POST['id']));
  }
}
?>