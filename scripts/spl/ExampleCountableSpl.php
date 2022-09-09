<?php

class ExampleCountableSpl implements \Countable
{
    private $num;

    public function __construct($num)
    {
        $this->num = $num;
    }

    public function count(): int
    {
        return $this->num;
    }
}

$ecs = new ExampleCountableSpl(50);
echo count($ecs);