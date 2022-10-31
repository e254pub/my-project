<?php

/**
 * @method string getCarName(string $carName)
 * @method static string getCarType(string $carType)
 */
class MagicFunctions
{
    public function __invoke(string $carName): void
    {
        echo 'It`s ' . $carName;
    }

    public function __call(string $name, array $arguments)
    {
        if ($name == 'getCarName') {
            echo $name . ' ' . implode(', ', $arguments);
        } else {
            echo 'Вызов недоступного или несуществующего метода ' . $name . ' ' . implode(', ', $arguments);
        }
    }

    public static function __callStatic(string $name, array $arguments)
    {
        if ($name == 'getCarType') {
            echo $name . ' ' . implode(', ', $arguments);
        } else {
            echo 'Вызов недоступного или несуществующего статического метода ' . $name . ' ' . implode(', ', $arguments);
        }
    }
}

$magicFunction = new MagicFunctions();
echo $magicFunction->getCarName('BMW');
echo "<br>";
echo $magicFunction::getCarType('Hatchback');
echo "<br>";
echo $magicFunction('Mazda');
