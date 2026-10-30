<?php
require('./PropertyConstan.php');


use Pbo\Marketplace\Produk;

//Objek
$produk = new produk('P0001','Laptop',10000000,5);


//Hasil
echo "Produk: " .$produk->nama;
echo "<br/>";

echo "Harga: " .$produk->harga;
echo "<br/>";

echo "Stok: " .$produk->stok;
echo "<br/>";

echo "Pajak: " .$produk->pajak()."%";
echo "<br/>";

echo "Total Harga Setelah Bayar Pajak : Rp." .$produk->total();

