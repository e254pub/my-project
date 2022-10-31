<?php

class Recursion
{
    public array $autoModels = [
        'auto1' => 'Bmw',
        'auto2' => 'Mazda',
        'auto3' => 'Hyndai',
        'auto4' => 'Toyota'
    ];
    public array $result = [];

    /**
     * Для рекурсивного применения на перестановку ключей со значениями
     * @param string $value
     * @param string $key
     * @return void
     */
    public function switchKeyValue(string $value, string $key): void
    {
        $this->result[$value] = isset($this->result[$value]) ? "{$this->result[$value]},{$key}" : $key;
    }

    /**
     * Факториал, от 1 до number
     * @param int $number
     * @return int
     */
    public function factorial(int $number): int
    {
        return ($number <= 1) ? 1 : ($number * $this->factorial($number - 1));
    }

    /**
     * Факториал по хвостовой рекурсии
     * @param int $number
     * @param int $result
     * @return int
     */
    public function factorialTail(int $number, int $result = 1): int
    {
        return ($number <= 1) ? $result : ($this->factorialTail($number - 1, $result * $number));
    }

    /**
     * Fatal error
     * @return mixed
     */
    public function badRecursion(): mixed
    {
        return $this->badRecursion();
    }
}

$recursion = new Recursion();
array_walk_recursive($recursion->autoModels, array(&$recursion, 'switchKeyValue'));
var_dump($recursion->result);
