<?php
// mengaktifkan session pada php
session_start();
 
// menghubungkan php dengan koneksi database
include 'koneksi.php';
?>

<!doctype html>
<html lang="en">
  <head>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');

       .a {
           font-family: 'Poppins', sans-serif;
           padding: 10em 30em;           
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
<div class="a">
    <a href="index.php" class="btn btn-primary" style="margin-bottom: 1em;">Tentang Saya</a>
    <a href="login.php" class="btn btn-danger" style="margin-bottom: 1em;">Logout</a>
    <table class="table table-hover table-bordered">
<thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Semester</th>
      <th scope="col">IP</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
  <?php
				//query ke database SELECT tabel mahasiswa urut berdasarkan id yang paling besar
				$sql = mysqli_query($koneksi, "SELECT * FROM ip ORDER BY semester DESC") or die(mysqli_error($koneksi));
				//jika query diatas menghasilkan nilai > 0 maka menjalankan script di bawah if...
				if(mysqli_num_rows($sql) > 0){
					//membuat variabel $no untuk menyimpan nomor urut
					$no = 1;
					//melakukan perulangan while dengan dari dari query $sql
					while($data = mysqli_fetch_assoc($sql)){
						//menampilkan data perulangan
						echo '
						<tr>
							<td>'.$no.'</td>
							<td>'.$data['semester'].'</td>
							<td>'.$data['ip'].'</td>							
							<td>
                                <a href="input_ip.php" class="btn btn-primary btn-sm">Input IP</a>
								<a href="index.php?page=edit_siswa&NIS='.$data['id'].'" class="btn btn-secondary btn-sm">Edit</a>
								<a href="delete_siswa.php?NIS='.$data['semester'].'" class="btn btn-danger btn-sm" onclick="return confirm(\'Apakah Anda Yakin Ingin Menghapus Data Ini?\')">Delete</a>
							</td>
						</tr>
						';
						$no++;
					}
				//jika query menghasilkan nilai 0
				}else{
					echo '
					<tr>
						<td colspan="6">Tidak ada data.</td>
					</tr>
					';
				}
				?>
  </tbody>
</table>
</div>
  

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
  </body>
</html>