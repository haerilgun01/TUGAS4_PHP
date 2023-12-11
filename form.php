<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body style="background-color: white; color: #333;">

<div class="container">
  <form class="form-horizontal mx-auto" method="POST" action="checkbox.php" style="background-color: #C2D6E1; padding: 20px; border-radius: 10px; box-shadow: #BECDDB;">
    <fieldset>

      <!-- Form Name -->
      <legend class="text-center" style="color: #007bff;"> Registration</legend>

      <!-- Text input-->
      <div class="form-group">
        <h5>Nama</h5>
        <input id="nama" name="nama" type="text" placeholder="Masukkan Nama Lengkap" class="form-control input-md">
      </div>

      <!-- Text input-->
      <div class="form-group">
        <h5>Umur</h5>
        <input id="umur" name="umur" type="text" placeholder="Masukkan Umur" class="form-control input-md">
      </div>

      <!-- Multiple Radios -->
      <?php
      $gender = [
        1 => " Laki-Laki ", " Perempuan"
      ];
      ?>
      <h5>Gender</h5>
      <?php
      foreach ($gender as $key => $val) {
        echo '<input type="radio" name="gender" value="' . $val . '">' . $val;
      }
      ?>
      <!-- Multiple Dropdown -->
      <?php
      $pendidikan = [
        "Silakan Pilih Pendidikan Anda" => "",
        "SD" => "SD",
        "SMP" => "SMP",
        "SMA" => "SMA",
        "DI" => "DI",
        "DII" => "DII",
        "DIII" => "DIII",
        "S1" => "S1",
        "S2" => "S2",
        "S3" => "S3"
      ];
      ?>
      <h5>Pendidikan :</h5>
      <select name="pendidikan" class="form-select">
        <?php
        foreach ($pendidikan as $key => $val) {
          echo '<option value="' . $val . '">' . $key . '</option>';
        }
        ?>
      </select>

      <!-- Multiple Checkboxes -->
      <?php
      $hobbi = [
        "Baca Buku", "Travelling", "Olah Raga", "Nonton", "Naik Gunung", "Mancing"
      ];
      ?>
      <h5>Hobi : </h5>
      <?php
      foreach ($hobbi as $key => $val) {
        echo '<div class="form-check"><input class="form-check-input" type="checkbox" name="hobi[]" value="' . $val . '"><label class="form-check-label">' . $val . '</label></div>';
      }
      ?><br>

      <!-- Button -->
      <div>
        <button id="simpan" name="simpan" class="btn btn-primary">Simpan</button>
      </div>

    </fieldset>
  </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
