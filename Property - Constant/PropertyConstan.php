<?php

class produk{

//property
public string $kode;
public string $nama;
public int $harga;
public int $stok;

//constant
public const PAJAK = 0.11;
}

//Objek
$produk = new produk();
$produk-> kode = 'P0001';
$produk-> nama = 'Laptop';
$produk-> harga = '10000000';
$produk-> stok = 5;

//Hitung Pajak
$pajak = produk::PAJAK*100;
$Jumlahpajak = $produk->harga*produk::PAJAK;

//Total
$total = $produk->harga + $Jumlahpajak;

//Hasil
echo "Produk: " .$produk->nama;
echo "<br/>";

echo "Harga: " .$produk->harga;
echo "<br/>";

echo "Stok: " .$produk->stok;
echo "<br/>";

echo "Pajak: " .$pajak."%";
echo "<br/>";

echo "Total Harga Setelah Bayar Pajak : Rp." .$total;

