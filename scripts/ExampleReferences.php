<?php

$numWidgets = 10;

class ExampleReferences
{
    public string $car = "BMW";

    public function exampleAssignReference() {
        $carReference = &$this->car;
        $carReference = "Lotus";
        echo $this->car; // Lotus
        echo $carReference; // Lotus
    }

    public function exampleDeleteReference() {
        $carReference = &$this->car;
        $carReference = "Lotus";
        unset($testReference);
        echo $this->car; // Lotus
    }

    function exampleTransferReference(&$car) {
        $car = "Lotus";
    }

    function &getNum(): int
    {
        global $numWidgets;
        return $numWidgets;
    }
}

$obj = new ExampleReferences();
$obj->exampleTransferReference($this->car);
echo $this->car . "</br>"; //Lotus

$numWidgetsRef = &$obj->getNum();
$numWidgetsRef--;
echo $numWidgets; //9
echo $numWidgetsRef; //9

