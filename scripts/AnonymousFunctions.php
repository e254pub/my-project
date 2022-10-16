<?php
/**
 * Самая обычная анонимная функция
 * @param $name
 * @return void
 */
$car = function($name)
{
    echo "Это $name";
};

$car("Mazda");

/**
 * Замыкание - анонимка, но с use
 * @return void
 */
$carName = "Toyota";

$getCarName = function() use($carName)
{
    echo $carName;
};

$getCarName();

/**
 * Стрелочная - вместо use => и fn
 */
$model = "Prius";

$closure = fn($c) => $c . " " . $model;

$result = $closure("Toyota");