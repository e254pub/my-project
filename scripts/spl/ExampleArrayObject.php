<?php

class ExampleArrayObject
{
    public array $testArr = ["test1", "test2", "test3", "test4"];

    public function arrObj(): ArrayObject
    {
        return new ArrayObject($this->testArr); //Данный класс позволяет объектам работать как массивы.
    }

}

$obj = new ExampleArrayObject();
//Сравнение
echo ($obj->testArr == $obj->arrObj()) . "<br>";
//Получить количество общедоступных свойств ArrayObject
echo $obj->arrObj()->count() . "<br>";
//Добавляет значение в конец массива
echo $obj->arrObj()->append("test5") . "<br>";