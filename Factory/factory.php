<?php
//factory method pattern: is responsible for generating objects
//getInstance() method uses large if/else statement to determine whihc subclass to instantiate
class Car
{
    private $vehicleMake;
    private $vehicleModel;

    public function __construct($make, $model)
    {
        $this->vehicleMake = $make;
        $this->vehicleModel = $model;
    }

    public function getMakeAndModel()
    {
        return $this->vehicleMake . ' ' . $this->vehicleModel;
    }
}

class CarFactory
{
    public static function create($make, $model)
    {
        return new Car($make, $model);
    }
}

// have the factory create the car object
$veyron = CarFactory::create('BMW', 'X5');

print_r($X5->getMakeAndModel()); 
?>