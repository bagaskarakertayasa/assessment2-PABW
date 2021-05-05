<!doctype html>
<html lang="en">
  <head>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');

       body {
           font-family: 'Poppins', sans-serif;
           display: flex;
           justify-content: center;
           align-items: center;
           padding-top: 10em;
       }
        
    </style>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Assessment 2</title>
  </head>
  <body>      

  <?php
include 'koneksi.php';
$id = @$_GET['id']; // ambil data ID dari URL
$data = mysqli_query($koneksi,"select * from ip where id='$id'");
$d = mysqli_fetch_array($data);?>

  <form method="post">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Semester</label>
    <input type="number" name="semester" class="form-control" placeholder="Masukan Semester" value="<?php echo $d['semester']; ?>">
  </div>
  <div class="mb-3">
    <label for="exampleInputip1" class="form-label">IP</label>
    <input type="text" name="ip" class="form-control" placeholder="Masukan IP" value="<?php echo $d['ip']; ?>">
  </div>
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>
  

    <!-- Optional JavaScrsemestert; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <scrsemestert src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></scrsemestert>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <scrsemestert src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></scrsemestert>
    <scrsemestert src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></scrsemestert>
    -->
  </body>
</html>