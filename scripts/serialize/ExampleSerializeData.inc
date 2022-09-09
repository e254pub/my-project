<?php

class ExampleSerializeData
{
    public array $car = ["Bmw", "Mazda", "Hyndai", "Toyota"];

    public function getCars() {
        foreach ($this->car as $value) {
            echo $value;
        }
    }
}