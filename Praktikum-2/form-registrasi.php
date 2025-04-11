<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Registrasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

<h2 class="text-center">Form Registrasi Mahasiswa</h2>
<div class="container px-5 my-5">
    <form id="contactForm" method="POST" action="proses-registrasi.php">
        <div class="mb-3">
            <label class="form-label" for="nim">NIM</label>
            <input class="form-control" id="nim" type="text" name="nim" placeholder="NIM" data-sb-validations="required" />
            <div class="invalid-feedback" data-sb-feedback="nim:required">NIM is required.</div>
        </div>
        <div class="mb-3">
            <label class="form-label" for="namaLengkap">Nama Lengkap</label>
            <input class="form-control" id="namaLengkap" name="namaLengkap" type="text" placeholder="Nama  Lengkap" data-sb-validations="required" />
            <div class="invalid-feedback" data-sb-feedback="namaLengkap:required">Nama Lengkap is required.</div>
        </div>
        <div class="mb-3">
            <label class="form-label d-block">Jenis Kelamin</label>
            <div class="form-check form-check-inline">
                <input class="form-check-input" id="lakiLaki" value="L" type="radio" name="jenisKelamin" data-sb-validations="" />
                <label class="form-check-label" for="lakiLaki">Laki-laki</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" id="perempuan" value="P" type="radio" name="jenisKelamin" data-sb-validations="" />
                <label class="form-check-label" for="perempuan">Perempuan</label>
            </div>
        </div>

        <?php
            $_prodi = ["TI" => "Teknik Informatika", "SI" => "Sistem Informasi", "BD" => "Bisnis Digital"];
        ?>

        <div class="mb-3">
            <label class="form-label" for="programStudi">Program Studi</label>
            <select class="form-select" id="programStudi" name="programStudi" aria-label="Program Studi">
                <option value="">Pilih Program Studi</option>
                <?php
                    foreach ($_prodi as $key => $value) {
                        echo "<option value='$key'>$value</option>";
                    }
                ?>
            </select>
        </div>
        <?php
            $_skill = ["HTML" => 10, "CSS" => 10, "JavaScript" => 20, "RWD Bootstrap" => 20, "PHP" => 30, "Python" => 30, "Java" => 50];
        ?>

        <div class="mb-3">
            <label class="form-label d-block">Skills Web &amp; Programming</label>
            <?php
                foreach ($_skill as $key => $value) {
                        echo "<div class='form-check form-check-inline'>";
                        echo "<input class='form-check-input' id='$key' type='checkbox' name='skill[$key]' value='$value'>";
                        echo "<label class='form-check-label' for='$key'>$key</label>";
                        echo "</div>";
                }
            ?>
        </div>
        <div class="mb-3">
            <label class="form-label" for="domisili">Domisili</label>
            <input class="form-control" id="domisili" name="domisili" type="text" placeholder="Domisili" data-sb-validations="required" />
            <div class="invalid-feedback" data-sb-feedback="domisili:required">Domisili is required.</div>
        </div>
        <div class="mb-3">
            <label class="form-label" for="emailAddress">Email Address</label>
            <input class="form-control" id="emailAddress" name="emailAddre  ss " type="email" placeholder="Email Address" data-sb-validations="required,email" />
            <div class="invalid-feedback" data-sb-feedback="emailAddress:required">Email Address is required.</div>
            <div class="invalid-feedback" data-sb-feedback="emailAddress:email">Email Address Email is not valid.</div>
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
            <button class="btn btn-primary btn-lg" id="submitButton" type="submit">Submit</button>
        </div>
    </form>
</div>
<script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>
</html>