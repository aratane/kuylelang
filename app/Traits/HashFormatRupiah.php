<?php 

namespace App\Traits;

trait HashFormatRupiah {
    function formatRupiah($field, $prefix = null) {
        $prefix = $prefix ? $prefix : 'Rp. ';
        $nominal = $this->attributes[$field];
        return $prefix . number_format($nominal, 0, ',', '.');
    }
}

?>