<?php

$nilai1 = ["id" => 1, "nim" => "12408", "uas" => 87, "uts" => 95, "tugas" => 100];
$nilai2 = ["id" => 2, "nim" => "12508", "uas" => 82, "uts" => 90, "tugas" => 80];
$nilai3 = ["id" => 3, "nim" => "12608", "uas" => 78, "uts" => 83, "tugas" => 80];
$nilai4 = ["id" => 4, "nim" => "12708", "uas" => 80, "uts" => 78, "tugas" => 95];

$kumpulan_nilai = [$nilai1, $nilai2, $nilai3, $nilai4];
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">nim</th>
      <th scope="col">uts</th>
      <th scope="col">uas</th>
      <th scope="col">tugas</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($kumpulan_nilai as $nilai): ?>
        <tr>
            <td><?php echo $nilai["id"]; ?></td>
            <td><?php echo $nilai["nim"]; ?></td>
            <td><?php echo $nilai["uts"]; ?></td>
            <td><?php echo $nilai["uas"]; ?></td>
            <td><?php echo $nilai["tugas"]; ?></td>
        </tr>

    <?php endforeach; ?>

    
    
  </tbody>
</table>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
  </body>
</html>