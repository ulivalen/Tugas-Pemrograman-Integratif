<?php
include "koneksi.php";

if (isset($_POST['kirim'])) {
	$nama_lengkap		= $_POST['nama_lengkap'];
	$email				= $_POST['email'];
	$tempat_lahir		= $_POST['tempat_lahir'];
	$tanggal_lahir		= $_POST['tanggal_lahir'];
	$jk					= $_POST['jk'];
	$no_telepon			= $_POST['no_telepon'];
	$alamat				= $_POST['alamat'];
	$pilih_organisasi	= $_POST['pilih_organisasi'];

	$simpan = "INSERT INTO pendaftaran(nama_lengkap,email,tempat_lahir,tanggal_lahir,jk,no_telepon,alamat,pilih_organisasi) VALUES('$nama_lengkap','$email','$tempat_lahir','$tanggal_lahir','$jk','$no_telepon','$alamat','$pilih_organisasi')";

	$result = mysqli_query($conn,$simpan);

	if ($result) {
		echo "<script>alert('Data Telah Berhasil Di Simpan');window.location='index.php'</script>";
	}
}
?>
