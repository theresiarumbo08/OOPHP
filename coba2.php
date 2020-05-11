<?php
 abstract class Buah {
    private $warna;

    abstract public function makan();
       

    public function setWarna($warna){
        $this->warna = $warna;
    }

}

class Apel extends Buah{
    public function makan(){
        //kunyah
        //sampai bagian tengah 
    }
}

class Jeruk extends Buah{
    public function makan(){
        //makan
        //dikupas

    }
}

interface Buah{
    public function makan();
    public function setWarna($warna);
}

interface Benda{
    public function setUkuran($ukuran);
}

//implementasi dari interface Buah dan Benda
class Apel implements Buah, Benda{
    protected $warna;
    public function makan(){
        //kunyah
        //sampai bagian tengah
    }
    public function setWarna($warna){
        $this->warna = $warna;
    }
}

class Jeruk implements Buah{
    protected $warna;
    public function makan(){
        //kupas
        //kunyah
    }
    public function setWarna($warna){
        $this->warna = $warna;
    }
}

