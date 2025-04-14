<?php
/**
 * Class nilaiMahasiswa
 */

class nilaiMahawasiswa {
    /**
     * property
     * @var string $nama
     * @var string $matkul
     * @var int $nilai_uts
     * @var int $nilai_uas
     * @var int $nilai_tugas
     */
    public $nim;
    public $nama;
    public $thn_angkatan;
    public $prodi;
    
    // public const PRESENTASE_UTS = 0.25;
    // public const PRESENTASE_UAS = 0.3;
    // public const PRESENTASE_TUGAS = 0.45;
    // public const KKM = 60;

    function __construct($nim, $nama, $thn_angkatan, $prodi, $ipk) {
        $this->nim = $nim;
        $this->nama = $nama;
        $this->thn_angkatan = $thn_angkatan;
        $this->prodi = $prodi;
        $this->ipk = $ipk;
    }

    function predikat_ipk() {
        if ($this->ipk < 2.0 ) {
            return "Cukup";
    }   elseif ($this->ipk >= 2.0 && $his->ipk <3.0) {
            return "Baik";
    }   elseif ($this->ipk >= 3.0 && $this->ipk < 3.5) {
            return "Sangat Memuaskan";
    }   elseif ($this->ipk >= 3.5 && $this->ipk < 3.75) {
            return "Memuaskan";
    }   else {
            return "Cumlaude";
        }
    }



    // public function getNilaiAkhir() {
    //     $nilai_akhir = (self::PRESENTASE_UTS * $this->nilai_uts) + 
    //     (self::PRESENTASE_UAS * $this->nilai_uas) + 
    //     (self::PRESENTASE_TUGAS * $this->nilai_tugas);
    //     return $nilai_akhir;
    // }

    // public function kelulusan() {
    //     if ($this->getNilaiAkhir() >= self::KKM) {
    //         return "Lulus";
    //     } else {
    //         return "Tidak Lulus";
    //     }
    // }
}