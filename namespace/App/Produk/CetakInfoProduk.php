<?php

class CetakInfoProduk{
    public $daftarProduk = array();

    //untuk menambahkan produk ke dalam array, kita menambahkan method
    public function tambahProduk(Produk $produk){
        $this->daftarProduk[] = $produk;

    }

    public function cetak(){
        $str = "DAFTAR PRODUK : <br>";

        foreach ($this->daftarProduk as $p){
            $str .= "- {$p->getInfoProduk()} <br>";
        }

        return $str;
    }

}