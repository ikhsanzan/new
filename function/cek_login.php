<?php
// mengaktifkan session pada php
session_start();
require '../core/core.php';
$conn;
// echo mysqli_error($conn);
// die();
// menangkap data yang dikirim dari form login
$username = mysqli_real_escape_string($conn, $_POST['username']);
$password = mysqli_real_escape_string($conn, $_POST['password']);
$password = password_hash($password, PASSWORD_DEFAULT);
// $level    = $_GET['level'];

// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($conn, "select * from users where username='$username'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);
// cek apakah username dan password di temukan pada database
if ($cek > 0) {
	$data = mysqli_fetch_assoc($login);
	//VERIFY
	if (password_verify($_POST['password'], $data['password'])) {
		// cek jika user login sebagai admin
		if ($data['level'] == "admin") {
			// buat session login dan username
			$_SESSION['username'] = $data['username'];
			$_SESSION['level'] = "admin";
			$_SESSION['alamat'] = $data['alamat'];
			// alihkan ke halaman dashboard admin
			header("location: ../admin/index.php");
			// echo "Wellcome  $username,";
			// cek jika user login sebagai pegawai
		} else if ($data['level'] == "user") {
			// buat session login dan username
			// $_SESSION["login"] = true;
			$_SESSION['username'] = $data['username'];
			$_SESSION['alamat'] = $data['alamat'];
			$_SESSION['email'] = $data['email'];
			$_SESSION['no_hp'] = $data['no_hp'];
			$_SESSION['id'] = $data['id'];

			$_SESSION['level'] = $data['level'];


			$_SESSION['level'] = "user";
			// alihkan ke halaman dashboard pegawai
			header("location:../user/user.php");

			// cek jika user login sebagai pengurus
		} else {
			


			echo "
		<script language='javascript'>alert('Gagal Login Dari Akun');window.history.back();</script>
		
		";
		}
	} else {
		

		echo "
	<script language='javascript'>alert('Gagal Login Dari Verifikasi Password Tidak Sesuai');window.history.back();</script>
	
	";
	}
} else {
	echo mysqli_error($conn);
	// echo "tes";

	// die();

	echo "
	<script>
	alert('Gagal Login');window.history.back();
	

	</script>
	
    
	";
}

?>

<!-- // <script>
	// swal('Hello world!');
	// window.history.back();
	<script language='javascript'>alert('ts');window.history.back();</script>
	
	// </script> -->