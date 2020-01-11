<?php

class Monitor
{
    protected $brand;
    protected $model;
    protected $color;

    public function __construct($brand, $model, $color)
    {
        $this->brand = $brand;
        $this->model = $model;
        $this->color = $color;
    }

    public function showMonitor()
    {
        return "Brand: $this->brand - Model: $this->model - Color: $this->color";
    }

    //Getters Methods
    public function getBrand()
    {
        return $this->brand;
    }

    public function getModel()
    {
        return $this->model;
    }

    public function getColor()
    {
        return $this->color;
    }

    //Setters Methods
    public function setColor($color)
    {
        $this->color = $color;
    }
}


/////////////////////////

$monitor = new Monitor('Acer', 'EB321HQU', 'Black');

echo "<p> <b> Getter </b> </p>";
echo "<p> {$monitor->showMonitor()} </p>";
echo "<hr>";

echo "<p> <b> Getters </b> </p>";
echo "<p> Brand: {$monitor->getBrand()} </p>";
echo "<p> Model: {$monitor->getModel()} </p>";
echo "<p> Color: {$monitor->getColor()} </p>";
echo "<hr>";

echo "<p> <b> Color setter and getter </b> </p>";
$monitor->setColor('White');
echo "New color is: {$monitor->getColor()}";
