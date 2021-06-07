<?php


class DBController
{
    //Database Connection Properties
    protected $host = 'localhost';
    protected $user = 'dang';
    protected $password = 'Dang1505!';
    protected $database = 'shopping';


    //connection property
    public $con = null;
    //call constructor
    public function __construct(){
        $this->con = new mysqli($this->host, $this->user, $this->password, $this->database);
       if($this->con->connect_error){
           echo"Fail".$this->con->connect_error;
       }
    }

    public function __destruct(){
        $this->closeConnection();
    }

    protected function closeConnection(){
        if($this->con != null){
            $this->con->close();
            $this->con = null;
        }
    }
}
