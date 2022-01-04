<?php
include '../../config/koneksi.php';
$nama = $_POST['nama'];
$jk = $_POST['jk'];
$tempatlahir = $_POST['tempatlahir'];
$tanggallahir = $_POST['tanggallahir'];
$alamat = $_POST['alamat'];
$email = $_POST['email'];
$password = $_POST['password'];

$mt_rand = mt_rand(1000, 9999);

if (isset($_POST['daftar'])) {
	extract($_POST);
	$nama_file   = $_FILES['foto']['name'];
	if (!empty($nama_file)) {
		// Baca lokasi file sementar dan nama file dari form (fupload)
		$lokasi_file = $_FILES['foto']['tmp_name'];
		$tipe_file = pathinfo($nama_file, PATHINFO_EXTENSION);
		$file_foto = $nama . $mt_rand . "." . $tipe_file;

		// Tentukan folder untuk menyimpan file
		$folder = "../../images/profil/$file_foto";
		// Apabila file berhasil di upload
		move_uploaded_file($lokasi_file, "$folder");
	} else
		$file_foto = "";

	$sql =
		"INSERT INTO member
		(nama, foto, jeniskelamin, tempatlahir, tanggallahir, alamat, email, password) 
		VALUES('$nama','$file_foto','$jk','$tempatlahir','$tanggallahir','$alamat', '$email', '$password')";
	$query = mysqli_query($db, $sql) or die(mysqli_error($db));

	if ($query) {
		echo "<script>alert('Pendaftaran Berhasil');
        document.location.href = '../../index.php'</script>";
	} else {
		echo "<script>alert('Pendaftaran Gagal');
		document.location.href = '../../index.php'</script>";
	}
}
