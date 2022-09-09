<?php
//Создать временный файл в одной функции сохранить в него любую строку, а в другой - прочесть

class FileTemporary
{
    public $filename;

    public function __construct()
    {
        $this->filename = tmpfile();
    }

    public function set(string $val) {
        fwrite($this->filename, $val);
    }

    public function get() {
        fseek($this->filename, 0);
        echo fread($this->filename, 1024);
    }

}

$obj = new FileTemporary();
$obj->set("Тестовый текст");
$obj->get();