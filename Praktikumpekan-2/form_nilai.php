<!DOCTYPE html>
<?php
  require_once("fungsiku.php");
?>

< lang="en">
<head>
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<h2>Form Nilai Siswa</h2>

<?php 
    $data_matkul = [
        'WEB1' => 'Pemrograman Web 1',
        'WEB2' => 'Pemrograman Web 2',
        'BASDAT' => 'Basis Data',
        'UI/UX' => 'UI/UX',
        'JARKOM' => 'Jaringan Komputer',
    ]
?>

<!-- <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="GET">
  <div class="form-group row">
    <label for="namalengkap" class="col-4 col-form-label">Nama Lengkap</label> 
    <div class="col-8">
      <input id="namalengkap" name="namalengkap" type="text" required="required" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="matkul" class="col-4 col-form-label">Mata Kuliah</label> 
    <div class="col-8">
      <select id="matkul" name="matkul" required="required" class="custom-select">
        <?php
            foreach ($data_matkul as $key => $value) {
                echo "<option value='$key'>$value</option>";
            }
        ?>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="uts" class="col-4 col-form-label">Nilai UTS</label> 
    <div class="col-8">
      <input id="uts" name="uts" type="text" class="form-control" required="required">
    </div>
  </div>
  <div class="form-group row">
    <label for="uas" class="col-4 col-form-label">Nilai UAS</label> 
    <div class="col-8">
      <input id="uas" name="uas" type="text" class="form-control" required="required">
    </div>
  </div>
  <div class="form-group row">
    <label for="tugas" class="col-4 col-form-label">Nilai Tugas/Praktikum</label> 
    <div class="col-8">
      <input id="tugas" name="tugas" type="text" class="form-control" required="required">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form> -->

<div class="container px-5 my-5">
    <form id="contactForm" method="POST">
        <div class="mb-3">
            <label class="form-label" for="namaLengkap">Nama Lengkap</label>
            <input class="form-control" name="namaLengkap" type="text" placeholder="Nama Lengkap" data-sb-validations="required" />
            <div class="invalid-feedback" data-sb-feedback="namaLengkap:required">Nama Lengkap is required.</div>
        </div>
        <div class="mb-3">
            <label class="form-label" for="mataKuliah">Mata Kuliah</label>
            <select class="form-select" name="mataKuliah" aria-label="Mata Kuliah">
                <option value="Pemrograman Web 1">Pemrograman Web 1</option>
                <option value="Pemrograman Web 2">Pemrograman Web 2</option>
                <option value="Basis Data">Basis Data</option>
            </select>
        </div>
        <div class="mb-3">
            <label class="form-label" for="nilaiTugas">Nilai Tugas</label>
            <input class="form-control" name="nilaiTugas" type="text" placeholder="Nilai Tugas" data-sb-validations="required" />
            <div class="invalid-feedback" data-sb-feedback="nilaiTugas:required">Nilai Tugas is required.</div>
        </div>
        <div class="mb-3">
            <label class="form-label" for="nilaiUts">Nilai UTS</label>
            <input class="form-control" name="nilaiUts" type="text" placeholder="Nilai UTS" data-sb-validations="required" />
            <div class="invalid-feedback" data-sb-feedback="nilaiUts:required">Nilai UTS is required.</div>
        </div>
        <div class="mb-3">
            <label class="form-label" for="nilaiUas">Nilai UAS</label>
            <input class="form-control" name="nilaiUas" type="text" placeholder="Nilai UAS" data-sb-validations="required" />
            <div class="invalid-feedback" data-sb-feedback="nilaiUas:required">Nilai UAS is required.</div>
        </div>
        <div class="d-none" id="submitSuccessMessage">
            <div class="text-center mb-3">
                <div class="fw-bolder">Form submission successful!</div>
                <p>To activate this form, sign up at</p>
                <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
            </div>
        </div>
        <div class="d-none" id="submitErrorMessage">
            <div class="text-center text-danger mb-3">Error sending message!</div>
        </div>
        <div class="d-grid">
            <input type="submit" class="btn btn-primary" value="Submit" name="submit">
        </div>
    </form>
</div>


<!-- <?php
    if (isset($_GET['submit'])) {
        $nama = $_GET['namalengkap'];
        $matkul = $_GET['matkul'];
        $uts = $_GET['uts'];
        $uas = $_GET['uas'];
        $tugas = $_GET['tugas'];

        $nilai_akhir = (0.25 * $uts) + (0.3 * $uas) + (0.45 * $tugas);

    }

    if (isset($nama)) {
        $nilai_akhir = hitung_nilai($uts, $uas, $tugas);
        $status = kelulusan($nilai_akhir);
    }
?>
        <p>Nilai Akhir : <?= $nilai_akhir ?></p> -->


<div class="cotainer px-5 my-5">
    <div class="table-responsive">
        <table class="table table-bordered">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Mata Kuliah</th>
                <th>Nilai Tugas</th>
                <th>Nilai UTS</th>
                <th>Nilai UAS</th>
            </tr>
            <?php
            if (isset($_POST['submit'])) {
                echo "<tr>";
                echo "<td>1</td>";
                echo "<td>" . $_POST['namaLengkap'] . "</td>";
                echo "<td>" . $_POST['mataKuliah'] . "</td>";
                echo "<td>" . $_POST['nilaiTugas'] . "</td>";
                echo "<td>" . $_POST['nilaiUts'] . "</td>";
                echo "<td>" . $_POST['nilaiUas'] . "</td>";
                echo "</tr>";

                
            }
            ?>
        </table>

        <?php
        if (isset($_POST['submit'])) {
            $nilai_akhir = hitung_nilai($_POST['nilaiUts'], $_POST['nilaiUas'], $_POST['nilaiTugas']);
            $status = kelulusan($nilai_akhir);
            echo "<p>Nilai Akhir : " . $nilai_akhir . "</p>";
            echo "<p>Status : " . $status . "</p>";
        ?>
    </div>
</div>

</body>
</html>
<?php
        }   
?>