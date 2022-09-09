<?php

include("ExampleSerializeData.inc");

class ExampleSerialize
{
    public function carSerialize() {
        $esd = new ExampleSerializeData;
        $s = serialize($esd);
        file_put_contents('cars', $s);
    }

    public function carUnserialize() {
        $esd = file_get_contents('cars');
        $u = unserialize($esd);
        $u->getCars();
    }
}