<?php
require_once('Account.php');
class Car
{
    public $id;
    public $license;
    public $driver;
    public $passengers;

    public function __construct($license, $driver)
    {
        $this->license = $license;
        $this->driver = $driver;
    }

    public function PrintDataCar()
    {
        echo "license: $this->license, 
    conductor: {$this->driver->name},
    document: {$this->driver->document},
    Passengers: {$this->passenger}";
    }

    public function getPassenger() {
        return $this->passenger;
    }

    public function setPassenger($passenger) {
        
        if ($passenger == 4) {
            $this->passenger = $passenger;
        }
        else {
            echo "Necesitas asignar 4 pasajeros   ";
        }
    
    }
}
