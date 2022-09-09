<?php

class ExampleDateTime
{
    /**
     * @return DateTimeImmutable
     */
    public function ExampleCreateFromMutable(): DateTimeImmutable
    {
        $date = new DateTime('2022-09-01 10:00:00');
        //Возвращает новый объект DateTimeImmutable, содержащий заданный объект DateTime (т.е порождает новый объект)
        return date_create_immutable()::createFromMutable($date)->add(new DateInterval('PT2H'));
        //return DateTimeImmutable::createFromMutable($date)->add(new DateInterval('PT2H'));
    }

    public function testDateTimeImmutable()
    {
        $format = "Y-m-d";
        $dateString = "2022-09-01";

        $date = DateTimeImmutable::createFromFormat($format,$dateString);

        var_dump($date);

        echo $date->format("Y/m/d");
    }

    //DateTime
    public function exampleDateTimeFormat() {
        $date = DateTime::createFromFormat('Y-m-d H:i:s', '2022-09-01 10:00:00');
        echo $date->format(DateTimeInterface::ATOM);
    }

    //strtotime, date
    public function exampleStrToTime() {
        echo 'Пример работы strtotime';
        echo strtotime("+1 week 2 days 4 hours 2 seconds"), "<br>";
        echo 'Пример работы date';
        echo date('l jS \of F Y h:i:s A');
    }

}