<?php

class InternalPointer
{
    private array $autoModels = [
        ['auto1' => 'Bmw'],
        ['auto2' => 'Mazda'],
        ['auto3' => 'Hyndai'],
        ['auto4' => 'Toyota'],
    ];

    /**
     * С использованием end, key, prev, current
     * @return array
     */
    public function arrayReverseIterator(): array
    {
        $newArray = [];
        for (end($this->autoModels); (key($this->autoModels)) !== null; prev($this->autoModels)) {
            $newArray[] = current($this->autoModels);
        }
        return $newArray;
    }

    /**
     * Без использования указателей
     * @return array
     */
    public function arrayReverseOffset(): array
    {
        $countModels = count($this->autoModels) - 1;
        $newArray = [];
        for ($i = $countModels; $i >= 0; $i--) {
            $newArray[] = $this->autoModels[$i];
        }
        return $newArray;
    }
}

$pointer = new InternalPointer();
echo 'С использованием end, key, prev, current ';
print_r($pointer->arrayReverseIterator());

echo 'Без использования указателей ';
print_r($pointer->arrayReverseOffset());
