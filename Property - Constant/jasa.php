<?php

namespace Pbo\marketplace;

require_once('./PropertyConstan.php');

use Pbo\Marketplace\produk;

class Jasa {
    use produk;

    public function payment($tipe) {

        return match($tipe){
            "virtual" => "Virtual Account",
            "qris" => "QRIS",
            "cod" => "CASH ON DELIVERY",
            default => "hanya bisa va dan qris"
        };
    }
}

