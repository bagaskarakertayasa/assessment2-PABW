<?php
// mengaktifkan session pada php
session_start();
 
// menghubungkan php dengan koneksi database
include 'koneksi.php';

if(isset($_POST['submit'])){
    $username	= $_POST['username'];
    $password	= $_POST['password'];					

    $cek = mysqli_query($koneksi, "SELECT * FROM akun WHERE username='$username'") or die(mysqli_error($koneksi));

	if(mysqli_num_rows($cek) == 0){
		$sql = mysqli_query($koneksi, "INSERT INTO akun(username, password) VALUES('$username', '$password')") or die(mysqli_error($koneksi));

		if($sql){
			echo '<script>alert("Selamat, anda berhasil terdaftar"); document.location="login.php";</script>';
		}else{
			echo '<div class="alert alert-warning">Gagal daftar akun</div>';
		}
		}else{
			echo '<div class="alert alert-warning">Gagal, username anda sudah terdaftar.</div>';
			}
		}
		?>