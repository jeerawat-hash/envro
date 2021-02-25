<?php 
 
  class QRModel extends CI_Model
{	

    public function testsql()
    {

      $this->envdb = $this->load->database("envdb",true);

        if ($this->envdb) {
          return 1;
        }else{
          return 0;
        }
 

    }

     
    public function insertlocation($Latitude,$Longitude,$Img,$Textpf)
    {

      $this->envdb = $this->load->database("envdb",true);

      $this->envdb->query("INSERT INTO `Env_Collection` (`ID`, `Name`, `Image`, `StampDate`, `Lat`, `Lot`, `Comment`)
       VALUES 
      (NULL, '".$Textpf."', '".$Img."', '".date("Y-m-d")."', '".$Latitude."', '".$Longitude."', 'BIT 1 ')");

      return 1;
 
    }

 
    
} 
 	?>