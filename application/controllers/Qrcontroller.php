<?php 
/**
 * 
 */
class Qrcontroller extends CI_Controller
{
  
  function __construct()
  {
        parent::__construct();
        $this->load->model("QRModel"); 
       
     
  }
    

      public function index(){
                     
                    $this->load->view('webqrcode/header' ); 
                    $this->load->view('webqrcode/index' ); 
                    $this->load->view('webqrcode/footer' ); 
     }
     


     

}
 

 

?>




