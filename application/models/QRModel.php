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

     
    public function insertlocation($BinID,$Latitude,$Longitude,$Img,$Textpf)
    {

      $this->envdb = $this->load->database("envdb",true);

      $this->envdb->query("INSERT INTO `Env_Collection` (`ID`, `BinID`, `FName`, `Image`, `StampDate`, `Lat`, `Lot`, `Comment`)
       VALUES 
      (NULL , '".$BinID."', '".$Textpf."', '".$Img."', '".date("Y-m-d")."', '".$Latitude."', '".$Longitude."', 'BIT 1 ')");

      return 1;
 
    }

    public function getlocation()
    {
      $this->envdb = $this->load->database("envdb",true);
      return $this->envdb->query(" SELECT a.*,b.* FROM Env_Collection a 
                                  JOIN Bin b on a.BinID = b.ID
                                  where a.Lat != ''  ")->result();
    }

    public function GetDatabyID($id)
    {
      $this->envdb = $this->load->database("envdb",true);
      return $this->envdb->query("SELECT a.*,b.* FROM Env_Collection a 
                                  JOIN Bin b on a.BinID = b.ID
                                  where a.ID = ".$id)->result();
    }

    public function GetDataBinByID($id)
    {

      $this->envdb = $this->load->database("envdb",true);
      return $this->envdb->query("SELECT * FROM Bin WHERE id = ".$id)->result();

    }

     
    
} 
 	?>