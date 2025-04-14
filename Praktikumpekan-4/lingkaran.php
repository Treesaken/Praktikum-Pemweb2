<?php

class lingkaran {
    public $jarijari;  // Property
    public const PHI = 3.14; // Constant

    public function __construct($jarijari) {
        $this->jarijari = $jarijari;
    }

    public function getLuas(){
        $luas = self::PHI * $this->jarijari * $this->jarijari;
        return $luas;
    }

    public function getKeliling(){
        $keliling = 2 * self::PHI * $this->jarijari;
        return $keliling;
    }

    public function cetak(){
        echo "Lingkaran dengan jari-jari" . $this->$jarijari;
        echo "Memiliki luas" . $this->getLuas();
        echo "Memiliki keliling" . $this->getKeliling();
    }
}

?>