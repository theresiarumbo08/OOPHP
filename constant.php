<?php
//tidak bisa disimpan dalam sebuah class
define('NAMA','Theresia Rumbo');

echo NAMA;

echo "<br>";

//bisa dimasukkan ke dalam class.
const UMUR = 19;
echo UMUR;
echo "<br>";

class Coba{
    const NAMA = 'Theresia Rumbo';
}

echo Coba::NAMA;
echo "<br>";

echo __FILE__;
echo "<br>";


function coba(){
    return __FUNCTION__;
}

echo coba();
echo "<br>";

class Cobacoba{
    public $kelas = __CLASS__;
}

$obj = new Cobacoba;
echo $obj->kelas;



