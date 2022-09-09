<?php
//Интерфейс обеспечивает доступ к объектам в виде массивов
class ExampleArrayAccess implements ArrayAccess
{
    private $data;

    public function offsetExists($key)
    {
        return isset($this->testData[$key]);
    }

    public function offsetSet($key, $value)
    {
        $this->data[$key] = $value;
    }

    public function offsetGet($key)
    {
        return $this->data[$key];
    }

    public function offsetUnset($key)
    {
        unset($this->data[$key]);
    }
}

$obj = new ExampleArrayAccess();

// offsetSet Присваивает значение заданному смещению
$obj['data'] = 'data';

// offsetExists Определяет, существует ли заданное смещение
if(isset($obj['data'])){
    echo 'ок';
}
// offsetGet Возвращает заданное смещение (ключ)
var_dump($obj['data']);

// offsetUnset Удаляет смещение
unset($obj['data']);
var_dump($obj['data']);
