<?php
require_once("Car.php");
class UberX extends Car{ 
    public $brand;
    public $model;
    
    public function __construct($license, $driver, $brand, $model) {
       parent::__construct($license, $driver);
        $this->brnad = $brand;
        $this->model = $model;
    }
}

?>