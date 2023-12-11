<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

<style>
  body {
    padding: 20px;
  }

  table {
    margin-top: 20px;
  }

  th, td {
    text-align: center;
  }

  td {
    vertical-align: middle !important;
  }
</style>

<table class="table table-dark table-striped-columns" border="1">
  <tr>
    <th>Nama Lengkap</th>
    <th>Umur</th>
    <th>Gender</th>
    <th>Pendidikan</th>
    <th>Hobi</th>
  </tr>
  <tr>
    <td><?php echo $_POST['nama']; ?></td>
    <td><?php echo $_POST['umur']; ?></td>
    <td><?php echo $_POST['gender']; ?></td>
    <td><?php echo $_POST['pendidikan']; ?></td>
    <td><?php
        $hobi = $_POST['hobi'];
        if (!empty($hobi)) {
          foreach ($hobi as $hbi) {
            echo $hbi . "<br/><br/>";
          }
        }
        ?>
    </td>
  </tr>
  <tr>
    <td colspan="5">
      <button class="btn btn-primary"><a href="form.php" style="text-decoration: none; color: white;">Back</a></button>
    </td>
  </tr>
</table>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>