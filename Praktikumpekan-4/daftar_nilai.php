<?php
require_once 'class_nilaimahasiswa.php';

$mhs1 = new nilaiMahawasiswa();
$mhs1->nama = "arip";
$mhs1->matkul = "Matkom";
$mhs1->nilai_uts = 80;
$mhs1->nilai_uas = 85;
$mhs1->nilai_tugas = 78;

$mhs2 = new nilaiMahawasiswa();
$mhs2->nama = "jali";
$mhs2->matkul = "Pemrograman Web";
$mhs2->nilai_uts = 70;
$mhs2->nilai_uas = 75;
$mhs2->nilai_tugas = 68;

$mhs3 = new nilaiMahawasiswa();
$mhs3->nama = "joko";
$mhs3->matkul = "UI UX";
$mhs3->nilai_uts = 60;
$mhs3->nilai_uas = 65;
$mhs3->nilai_tugas = 58;

$ar_mahasiswa = [$mhs1, $mhs2, $mhs3];

?>
<h2 style="text-align: center;">Daftar Nilai Mahasiswa</h2>
<table border="1" style="margin: auto;">
    <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Mata Kuliah</th>
                <th>Nilai Tugas</th>
                <th>Nilai UTS</th>
                <th>Nilai UAS</th>
                <th>Nilai Akhir</th>
                <th>Kelulusan</th>
            </tr>
    </thead>

    <tbody>
        <?php $no = 1; 
        foreach ($ar_mahasiswa as $obj){
        
        ?>

        <tr>
            <td><?= $no ?></td>
            <td><?= $obj->nama ?></td>
            <td><?= $obj->matkul ?></td>
            <td><?= $obj->nilai_uts ?></td>
            <td><?= $obj->nilai_uas ?></td>
            <td><?= $obj->nilai_tugas ?></td>
            <td><?= $obj->getNilaiAkhir() ?></td>
            <td><?= $obj->kelulusan() ?></td>
        </tr>

        <?php
        $no++;
        }
        ?>
    </tbody> 
</table>
