<?php
//Для того, чтобы объект можно было перебирать в цикле foreach, PHP требует, чтобы он был экземпляром Traversable. Однако явно нельзя
class ExampleTraversable implements Iterator
{
    public int $pos = 0;

    public array $testArr = ["test1", "test2", "test3", "test4"];

    public function rewind() {;
        $this->position = 0;
    }

    public function current() {
        return $this->testArr[$this->position];
    }

    public function key() {
        return $this->position;
    }

    public function next() {
        ++$this->position;
    }

    // Данный метод возвращает логическое значение результата проверки
    // соответствия набору данных по текущему указателю
    public function valid() {
        return isset($this->testArr[$this->position]);
    }
}

$obj = new ExampleTraversable();
foreach ($obj as $key => $value) {
    echo $key . ": " . $value . "<br>";
}