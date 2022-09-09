<?php

class ExampleIterator
{
    public array $testArr = ["test1", "test2", "test3", "test4"];
    public array $testMultiArr =
        [
            ["Car1", "test1"],
            ["Car2", "test2"],
            ["Car3", "test3"]
        ];

    public function arrIterator() {
        //Этот итератор позволяет сбрасывать и модифицировать значения и ключи в процессе итерации по массивам и объектам.
        $iterator = new ArrayIterator($this->testArr);

        foreach ($iterator as $key => $value) {
            echo $key . ":  " . $value . "<br>";
        }
    }

    public function arrRecursiveIterator() {
        $iterator = new RecursiveArrayIterator($this->testMultiArr); // - отличие будет рекурсивно ходить по массиву, чтобы найти все значения.
        //RecursiveIteratorIterator реализует обход древа
        foreach(new RecursiveIteratorIterator($iterator) as $key => $value) {
            echo $key . ": " . $value . "<br>";
        }
    }
}