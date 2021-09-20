<?php

// Jualan produk
// Komik
// Game

class Produk {
    public $judul = "judul",
            $penulis = "penulis",
            $penerbit = "penerbit",
            $harga = 0;

public function getLable(){
    return "$this->penulis,$this->penerbit";
}
}

// $produk1 = new Produk();
// $produk1->judul = "Naruto";
// var_dump($produk1);

// $produk2 = new Produk();
// $produk2->judul = "kabaneri";
// $produk2->tambahProperty = "baru";
// var_dump($produk2);

$produk3 = new Produk();
$produk3->judul = "Naruto";
$produk3->penulis ="Makasi Kishimoto";
$produk3->penerbit = "Shonen Jump";
$produk3->harga = 400000;


echo "Komik : $produk3->penulis, $produk3->penerbit";
echo "<br>";
echo $produk3->getLable();
