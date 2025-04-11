<?php

/**
 * Fungsi untuk menghitung nilai akhir
 * @param int $nilai_uts Nilai UTS
 * @param int $nilai_uas Nilai UAS
 * @param int $nilai_tugas Nilai Tugas
 * @return float Nilai akhir
 */

    function hitung_nilai($nilai_uts, $nilai_uas, $nilai_tugas) {
        define("NILAI_UTS", 0.25);
        define("NILAI_UAS", 0.3);
        define("NILAI_TUGAS", 0.45);
        $nilai_akhir = (NILAI_UTS * $nilai_uts) + (NILAI_UAS * $nilai_uas) + (NILAI_TUGAS * $nilai_tugas);
        return $nilai_akhir;
    }

/**
 * Fungsi untuk menentukan kelulusan
 * @param int $nilai Nilai akhir
 * @return string Kelulusan
 * */
    function kelulusan($nilai) {
        define("NILAI_LULUS", 60);
        if ($nilai >= NILAI_LULUS) {
            return "Lulus";
        } else {
            return "Tidak Lulus";
        }
    }
?>