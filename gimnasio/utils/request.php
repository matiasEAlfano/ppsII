<?php
class Request
{
    private $data = array();
    
    public function __construct(){
        foreach($_REQUEST as $key => $value){
            $this->data[$key] = trim(strip_tags($value));
        }
    }
    
    public function __get($name){
        if (array_key_exists($name, $this->data)) {
            return $this->data[$name];
        }
        return null;
    }
}