<?php

$numWidgets = 10;

class ExampleReferences
{
    public string $car = 'BMW';

    public function exampleAssignReference(): void
    {
        $carReference = &$this->car;
        $carReference = 'Lotus';
        echo $this->car; // Lotus
        echo $carReference; // Lotus
    }

    public function exampleDeleteReference(): void
    {
        $carReference = &$this->car;
        $carReference = 'Lotus';
        unset($testReference);
        echo $this->car; // Lotus
    }

    public function exampleTransferReference(&$car): void
    {
        $car = 'Lotus';
    }

    public function &getNum(): int
    {
        global $numWidgets;
        return $numWidgets;
    }
}

$obj = new ExampleReferences();
$obj->exampleTransferReference($obj->car);
var_dump($obj->car); //Lotus

$numWidgetsRef = &$obj->getNum();
$numWidgetsRef--;
var_dump($numWidgets); //9
var_dump($numWidgetsRef); //9
