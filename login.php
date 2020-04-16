<?php
 
// menghubungkan php dengan koneksi database
include 'lib/library.php';
 
// menangkap data yang dikirim dari form login
if ($_SERVER['REQUEST_METHOD'] == "POST") {
$username = $_POST['username'];
$password = $_POST['password'];
 
 
// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($mysqli,"select * from tb_login where username='$username' and password='$password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);
 
// cek apakah username dan password di temukan pada database
if($cek > 0){
 
	$data = mysqli_fetch_assoc($login);
 
	// cek jika user login sebagai admin
	if($data['status']=="admin"){
 
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['status'] = "admin";
		// alihkan ke halaman dashboard admin
		header("location:index.php");
 
	// cek jika user login sebagai pegawai
	}else if($data['status']=="petugas"){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['status'] = "petugas";
		// alihkan ke halaman dashboard pegawai
		header("location:petugas.php");
 
	// cek jika user login sebagai siswa
	}else if($data['status']=="siswa"){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['status'] = "siswa";
		// alihkan ke halaman dashboard siswa
		header("location:siswa.php");
 
	}else{
 
		// alihkan ke halaman login kembali
		header("location:login.php?pesan=gagal");
	}	
}
}

	include 'views/v_bismillah.php';