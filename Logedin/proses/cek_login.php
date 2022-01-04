<?php
session_start();
$_SESSION['sesi'] = NULL;

include "../../config/koneksi.php";
if (isset($_POST['submit'])) {
    $email = isset($_POST['email']) ? $_POST['email'] : "";
    $password = isset($_POST['password']) ? $_POST['password'] : "";
    $query = mysqli_query($db, "SELECT * FROM member WHERE email = '$email' AND password = '$password'");
    $sesi = mysqli_num_rows($query);

    if ($sesi == 1) {
        $data_pemilik = mysqli_fetch_array($query);
        $_SESSION['idmember'] = $data_pemilik['idmember'];
        $_SESSION['sesi'] = $data_pemilik['nama'];
        $_SESSION['foto'] = $data_pemilik['foto'];

        echo "<script>alert('Anda berhasil login');</script>";
        echo "<meta http-equiv='refresh' content='0; url=../../logedin.php?user=$sesi'>";
    } else {
        echo "<script>alert('Anda gagal login');
            document.location.href = '../../index.php'</script>";
    }
} else {
    include "index.php";
}
