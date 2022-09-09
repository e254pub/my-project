<?php

class InternalPointer{
    //С использованием end, key, prev, current
    public function exampleOne() {
        $testArray = ["Bmw", "Mazda", "Hyndai", "Toyota"];
        for (end($testArray); ($i = key($testArray)) !== null; prev($testArray) ) {
            echo($i . " : " . current($testArray) . "</br>");
        }
    }
    //Без использования указателей
    public function exampleTwo() {
        $testArray = ["Bmw", "Mazda", "Hyndai", "Toyota"];
        for ($i = count($testArray) - 1; $i >= 0; $i--) {
            echo($i . " : " . $testArray[$i] . "</br>");
        }
    }
}

$pointer = new InternalPointer();
echo 'С использованием end, key, prev, current </br>';
$pointer->exampleOne();

echo '</br> Без использования указателей </br>';
$pointer->exampleTwo();
