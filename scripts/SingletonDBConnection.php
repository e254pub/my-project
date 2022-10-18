<?php

class SingletonDBConnection
{
    private static ?SingletonDBConnection $_instance = null;

    private ?string $_port = null;
    private ?string $_host = null;

    private function __construct(){}
    private function __clone(){}
    private function __wakeup(){}

    static public function getInstance(): ?SingletonDBConnection
    {
        if (is_null(self::$_instance))
        {
            self::$_instance = new self();
        }
        return self::$_instance; //не создаём новый объект, а возвращаем существующий
    }

    public function setHost($host): void
    {
        $this->_host = $host;
    }

    public function getHost(): ?string
    {
        return $this->_host;
    }

    public function setPort($port): void
    {
        $this->_port = $port;
    }

    public function getPort(): ?string
    {
        return $this->_port;
    }
}

$dbConnection = SingletonDBConnection::getInstance();
$dbConnection->setHost('localhost');
$dbConnection->setPort('8080');
var_dump($dbConnection);
//Один и тот же объект, ибо в единственном экземпляре
$dbConnection1 = SingletonDBConnection::getInstance();
echo '<br />';
var_dump($dbConnection1);