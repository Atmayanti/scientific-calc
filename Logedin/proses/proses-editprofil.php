<?php
include '../../config/koneksi.php';
$nama = $_POST['nama'];
$jk = $_POST['jk'];
$tempatlahir = $_POST['tempatlahir'];
$tanggallahir = $_POST['tanggallahir'];
$alamat = $_POST['alamat'];
$email = $_POST['email'];
$password = $_POST['password'];

// jika foto tidak diedit
session_start();

$id_session = $_SESSION['idmember'];

$sqlf = mysqli_query($db, "SELECT * FROM member WHERE idmember = $id_session");
$data = mysqli_fetch_assoc($sqlf);


if (isset($_POST['edit'])) {
    extract($_POST);
    $nama_file   = $_FILES['foto']['name'];
    if (!empty($_FILES['foto']['tmp_name'])) {
        //hapus file lama
        $tipe_file_lama = pathinfo($data['foto'], PATHINFO_EXTENSION);
        // unlink("../../images/profil/" . $data['foto'] . $tipe_file_lama);
        // Baca lokasi file sementar dan nama file dari form (fupload)
        $lokasi_file = $_FILES['foto']['tmp_name'];
        $tipe_file = pathinfo($nama_file, PATHINFO_EXTENSION);
        $file_foto = $nama . $id_session . "." . $tipe_file;

        // Tentukan folder untuk menyimpan file
        $folder = "../../images/profil/$file_foto";
        // Apabila file berhasil di upload
        move_uploaded_file($lokasi_file, "$folder");
    } else {
        $file_foto = $data['foto'];
    }

    $sql = "UPDATE member SET nama = '$nama', foto='$file_foto', jeniskelamin='$jk', tempatlahir='$tempatlahir', tanggallahir='$tanggallahir', alamat='$alamat', email='$email', `password`='$password' WHERE idmember=$id_session";
    $query = mysqli_query($db, $sql);

    if ($query) {
        echo "<script>alert('Edit data Berhasil!');
        document.location.href = '../../logedin.php?p=profile'</script>";
    } else {
        echo "<script>alert('Edit data gagal!');
        document.location.href = '../../pages/editprofil.php'</script>";
    }
}
