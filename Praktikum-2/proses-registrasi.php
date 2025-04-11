<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Registrasi</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nama = $_POST['namaLengkap'];
            $nim = $_POST["nim"];
            $jk = $_POST["jenisKelamin"];
            $prodi = $_POST["programStudi"];
            $domisili = $_POST["domisili"];
            $email = $_POST["emailAddress"];
            $skill = isset($_POST["skill"]) ? $_POST["skill"] : [];

            $totalSkorSkill = array_sum($skill);

            $predikat = '';
            if ($totalSkorSkill == 0 ) {
                $predikat = "Tidak Memadai";
            }   elseif ($totalSkorSkill > 0 && $totalSkorSkill <= 40) {
                $predikat = "Kurang";
            }   elseif ($totalSkorSkill > 40 && $totalSkorSkill <= 60) {
                $predikat = "Cukup";
            }   elseif ($totalSkorSkill > 60 && $totalSkorSkill <= 100) {
                $predikat = "Baik";
            }   else {
                $predikat = "Sangat Baik";
            }
        }
    ?>

    <div class="bg-white shadow-lg rounded-lg p-6">
        <h2 class="text-2xl font-bold mb-4 text-center">Hasil Registrasi</h2>

        <div class="space-y-3">
            <p><span class="font-semibold">NIM : </span><?php echo $nim; ?></p>
            <p><span class="font-semibold">Nama : </span><?php echo $nama; ?></p>
            <p><span class="font-semibold">Jenis Kelamin : </span><?php echo $jk; ?></p>
            <p><span class="font-semibold">Program Studi : </span> <?php echo $prodi; ?></p>
            <p><span class="font-semibold">Domisili : </span> <?php echo $domisili; ?></p>
            <p><span class="font-semibold">Skill : </span> <?php echo implode(", ", array_keys ($skill)); ?></p>
            <p><span class="font-semibold">Skor Skill : </span> <?php echo $totalSkorSkill; ?></p>
            <p><span class="font-semibold">Kategori Skill : </span> <?php echo $predikat; ?></p>
            <p><span class="font-semibold">Email : </span> <?php echo $email; ?></p>
        </div>

    </div> 

</body>
</html>