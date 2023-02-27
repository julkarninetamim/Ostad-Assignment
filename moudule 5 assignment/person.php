<?php
class Person{
    public $name,$email;
    public function set_name($name){
        $this->name=$name;
    }
    public function set_email($email){
        $this->email=$email;
    }
    public function get_name(){
        return $this->name;
    }
    public function get_email(){
        return $this->email;
    }
}

