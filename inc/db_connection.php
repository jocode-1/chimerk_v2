<?php


 class database{


//    private $host = "localhost";
//     private $db_name = "donchime_chimerk";
//     private $username = "donchime_don_chmeck";
//     private $password = "don_chmeck../";
//     public $conn;
    
  private $host = "localhost";
    private $db_name = "chimerk_v2";
    private $username = "root";
    private $password = "";
    public $conn;

 

    // get the database connection
    public function getConnection(){
  
        $this->conn = null;
  
        try{
            $this->conn = new mysqli($this->host,$this->username, $this->password, $this->db_name);
           // $this->conn->exec("set names utf8");
		//	echo 'Success';
        }catch(Exception $exception){
            echo "Connection error: " . $exception->getMessage();
        }
  
        return $this->conn;
    }
	
	
}




?>
