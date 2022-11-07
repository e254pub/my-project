<?php

/**
 * @method string getCarName(string $carName)
 * @method static string getCarType(string $carType)
 */
class MagicFunctions
{
    private int $carId;
    private array $carData;

    public function __construct(int $carId)
    {
        $this->carId = $carId;
        echo $this->carId;
    }

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

    public function __toString(): string
    {
        return 'Если класс приводим к строке';
    }

    public function __destruct()
    {
        echo 'Сработал деструктор';
    }

    public function __get(string $key): mixed
    {
        return $this->carData[$key] ?? null;
    }

    public function __set(string $key, mixed $value): void
    {
        $this->carData[$key] = $value;
    }

    public function __isset(string $key): bool
    {
        return empty($this->carData[$key]);
    }

    public function __unset(string $key)
    {
        unset($this->carData[$key]);
    }

    public function __sleep()
    {
        $this->carData['cars'] = [
            'car1' => 'Mazda',
            'car2' => 'BMW'
        ];
    }

    public function __wakeup()
    {
        var_dump($this->carData);
    }
}

$magicFunction = new MagicFunctions(10);
echo $magicFunction->getCarName('BMW');
echo "<br>";
echo $magicFunction::getCarType('Hatchback');
echo "<br>";
echo $magicFunction('Mazda');
