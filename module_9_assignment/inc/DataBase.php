<?php 
class DataBase{
    public $host="localhost";
    public $user="root";
    public $pass="";
    public $dbname="ostad_blog";

    public $link;
    public $error;

    public function __construct(){
        $this->connectDB();
    }

    private function connectDB(){
        $this->link=new mysqli($this->host,$this->user,$this->pass,$this->dbname);
        if(!$this->link){
            $this->error="Connection fail".$this->link->connect_error;
            return false;
        }
    }

    public function select($query){
        $result=$this->link->query($query) or die($this->link->error.__LINE__);
        if($result->num_rows > 0){
            return $result;
        }else{
            return false;
        }
    }
}