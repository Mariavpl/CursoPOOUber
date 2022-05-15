<?php
require_once("account.php");
class Car {
  protected $id;
  protected $license;
  protected $driver;
  protected $passegenger;

  public function __construct($license, $driver) {
    $this->license = $license;
    $this->driver = $driver;
  }

  public function PrintDataCar(){
    echo "Licencia: $this->license, Driver: $this->driver->name Passegenger: ".$this->passegenger;
 }

 public function getPassenger() {
    return $this->passenger;
 }
 
  public function setPassenger($passenger) {
        
    if ($passenger == 4) {
      $this->passenger = $passenger;
    }
   else {
      echo "Necesitas asignar 4 pasajeros";
    }

  }

}
?>